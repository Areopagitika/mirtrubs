<?php

if(!empty($arResult["SEARCH"])) {
    foreach($arResult["SEARCH"] as $key => $value) {
        $rsElement = CIBlockElement::GetList([], ["IBLOCK_ID" => $value["PARAM2"], "ID" => $value["ITEM_ID"]], false, ["bShowAll" => true], ["NAME", "DETAIL_PAGE_URL", "PREVIEW_PICTURE", "PROPERTY_WEIGHT"]);
        $arElement = $rsElement->Fetch();
        $arResult["SEARCH"][$key]["ITEM"] = $arElement;
    }
}