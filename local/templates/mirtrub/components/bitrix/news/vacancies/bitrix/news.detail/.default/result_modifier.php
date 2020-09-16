<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $arCity;

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


if(!empty($arResult["DISPLAY_PROPERTIES"]["TITLE"]["VALUE"])) {
    $arResult["DISPLAY_PROPERTIES"]["TITLE"]["VALUE"] = str_replace("#WHERE#", $arCity["UF_WHERE"], $arResult["DISPLAY_PROPERTIES"]["TITLE"]["VALUE"]);
}

if(!empty($arResult["DISPLAY_PROPERTIES"]["DESCRIPTION"]["VALUE"])) {
    $arResult["DISPLAY_PROPERTIES"]["DESCRIPTION"]["VALUE"] = str_replace("#WHERE#", $arCity["UF_WHERE"], $arResult["DISPLAY_PROPERTIES"]["DESCRIPTION"]["VALUE"]);
}

if(!empty($arItem["DISPLAY_PROPERTIES"]["KEYWORDS"]["VALUE"])) {
    $arResult["DISPLAY_PROPERTIES"]["KEYWORDS"]["VALUE"] = str_replace("#WHERE#", $arCity["UF_WHERE"], $arResult["DISPLAY_PROPERTIES"]["KEYWORDS"]["VALUE"]);
}