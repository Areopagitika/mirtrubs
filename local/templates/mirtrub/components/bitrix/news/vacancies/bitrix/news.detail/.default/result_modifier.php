<?php

// Фильтр
$filter = array(
    'IBLOCK_ID' => $arParams['IBLOCK_ID'],
    'ACTIVE' => 'Y'
);

// Сортировка
$order = array(
    "SORT"=>"ASC"
);

// Выборка текущего и соседних товаров
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

logger($arResult);