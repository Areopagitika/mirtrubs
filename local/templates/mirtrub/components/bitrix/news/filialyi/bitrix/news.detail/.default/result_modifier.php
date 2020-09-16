<?php

global $arSite;

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

if($arResult["DISPLAY_PROPERTIES"]["TITLE"]["VALUE"]) {
    $arResult["DISPLAY_PROPERTIES"]["TITLE"]["VALUE"] = str_replace("#SITE_NAME#", $arSite["NAME"], $arResult["DISPLAY_PROPERTIES"]["TITLE"]["VALUE"]);
    $APPLICATION->SetPageProperty("title", $arResult["DISPLAY_PROPERTIES"]["TITLE"]["VALUE"]);
}

if($arResult["DISPLAY_PROPERTIES"]["DESCRIPTION"]["VALUE"]) {
    $arResult["DISPLAY_PROPERTIES"]["DESCRIPTION"]["VALUE"] = str_replace("#SITE_NAME#", $arSite["NAME"], $arResult["DISPLAY_PROPERTIES"]["DESCRIPTION"]["VALUE"]);
    $APPLICATION->SetPageProperty("description", $arResult["DISPLAY_PROPERTIES"]["DESCRIPTION"]["VALUE"]);
}

if($arResult["DISPLAY_PROPERTIES"]["KEYWORDS"]["VALUE"]) {
    $arResult["DISPLAY_PROPERTIES"]["KEYWORDS"]["VALUE"] = str_replace("#SITE_NAME#", $arSite["NAME"], $arResult["DISPLAY_PROPERTIES"]["KEYWORDS"]["VALUE"]);
    $APPLICATION->SetPageProperty("keywords", $arResult["DISPLAY_PROPERTIES"]["KEYWORDS"]["VALUE"]);
}