<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

global $arCity;

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

if(!empty($arResult["DETAIL_TEXT"])) $arResult["DETAIL_TEXT"] = str_replace("#WHERE#", $arCity["UF_WHERE"], $arResult["DETAIL_TEXT"]);

$arResult["PROPERTIES"]["LONGTITLE"]["VALUE"] = str_replace(["#NAME#"], $arResult["NAME"], $arResult["PROPERTIES"]["LONGTITLE"]["VALUE"]);

$rsElements = CIBlockElement::GetList(["RAND" => "true"], ["!ID" => $arResult["ID"], "SECTION_ID" => $arResult["IBLOCK_SECTION_ID"]], false, ["nTopCount" => 6], ["NAME", "DETAIL_PAGE_URL", "PREVIEW_PICTURE", "PROPERTY_WEIGHT"]);

while($arElements = $rsElements->GetNext()) $arResult["PRODUCTS_SIMILAR"][] = $arElements;

$end = false;
$db_res = CIBlockElement::GetList(["SORT"=>"ASC"], ['IBLOCK_ID' => $arParams['IBLOCK_ID'], 'ACTIVE' => 'Y'], false, ['nElementID' => $arResult['ID'], 'nPageSize' => 1]);
while ($res = $db_res->GetNext()) {
    if ($res['ID'] == $arResult['ID']) {
        $end = true;
    } elseif ($end) {
        $arResult['NAV']['NEXT'] = $res;
    } else {
        $arResult['NAV']['PREV'] = $res;
    }
}

if(!empty($arResult["PROPERTIES"]["TITLE"]["VALUE"])) {
    $APPLICATION->SetPageProperty("title", $arResult["PROPERTIES"]["TITLE"]["VALUE"]);
} elseif(!empty($arResult["PROPERTIES"]["LONGTITLE"]["VALUE"])) {
    $APPLICATION->SetPageProperty("title", $arResult["PROPERTIES"]["LONGTITLE"]["VALUE"]);
} else {
    $APPLICATION->SetPageProperty("title", $arResult["NAME"]);
}

if(!empty($arResult["PROPERTIES"]["DESCRIPTION"]["VALUE"])) {
    $APPLICATION->SetPageProperty("title", $arResult["PROPERTIES"]["DESCRIPTION"]["VALUE"]);
}

if(!empty($arResult["PROPERTIES"]["KEYWORDS"]["VALUE"])) {
    $APPLICATION->SetPageProperty("title", $arResult["PROPERTIES"]["KEYWORDS"]["VALUE"]);
}