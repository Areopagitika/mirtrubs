<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

global $arCity;

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

if(!empty($arResult["PROPERTIES"]["LONGTITLE"]["VALUE"])) $arResult["PROPERTIES"]["LONGTITLE"]["VALUE"] = str_replace("#WHERE#", $arCity["UF_WHERE"], $arResult["PROPERTIES"]["LONGTITLE"]["VALUE"]); 

$rsElements = CIBlockElement::GetList(["RAND" => "true"], ["!ID" => $arResult["ID"], "SECTION_ID" => $arResult["IBLOCK_SECTION_ID"]], false, ["nTopCount" => 6], ["NAME", "DETAIL_PAGE_URL", "PREVIEW_PICTURE", "PROPERTY_WEIGHT"]);

while($arElements = $rsElements->GetNext()) $arResult["PRODUCTS_SIMILAR"][] = $arElements;

$end = false;
$db_res = CIBlockElement::GetList(["SORT"=>"ASC"], ['IBLOCK_ID' => $arParams['IBLOCK_ID'], 'ACTIVE' => 'Y'], false, ['nElementID' => $arResult['ID'],
 'nPageSize' => 1]);
while ($res = $db_res->GetNext()) {
    if ($res['ID'] == $arResult['ID']) {
        $end = true;
    } elseif ($end) {
        $arResult['NAV']['NEXT'] = $res;
    } else {
        $arResult['NAV']['PREV'] = $res;
    }
}