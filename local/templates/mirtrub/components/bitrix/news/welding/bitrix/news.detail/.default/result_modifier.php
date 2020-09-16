<?php

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
} else {
    $APPLICATION->SetPageProperty("title", $arResult["NAME"]);
}

if(!empty($arResult["PROPERTIES"]["DESCRIPTION"]["VALUE"])) {
    $APPLICATION->SetPageProperty("title", $arResult["PROPERTIES"]["DESCRIPTION"]["VALUE"]);
}

if(!empty($arResult["PROPERTIES"]["KEYWORDS"]["VALUE"])) {
    $APPLICATION->SetPageProperty("title", $arResult["PROPERTIES"]["KEYWORDS"]["VALUE"]);
}