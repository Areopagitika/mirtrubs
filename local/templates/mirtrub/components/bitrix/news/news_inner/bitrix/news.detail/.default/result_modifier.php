<?php

$filter = array(
    'IBLOCK_ID' => $arParams['IBLOCK_ID'],
    'ACTIVE' => 'Y'
);

$order = array(
    "SORT"=>"ASC"
);

$nav = array(
    'nElementID' => $arResult['ID'],
    'nPageSize' => 1
);

$end = false;

$db_res = CIBlockElement::GetList($order, $filter, false, $nav);
while ($res = $db_res->GetNext()) {
    if ($res['ID'] == $arResult['ID']) {
        $end = true;
    } elseif ($end) {
        $arResult['NAV']['NEXT'] = $res;
    } else {
        $arResult['NAV']['PREV'] = $res;
    }
}