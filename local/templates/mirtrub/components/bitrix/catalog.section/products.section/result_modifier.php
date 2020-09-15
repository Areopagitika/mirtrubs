<?php

$arCity = \Local\City::getItem();

$rsSection = CIBlockSection::GetList([], ["IBLOCK_ID" => $arResult["IBLOCK_ID"], "ID" => $arResult["ID"]], true, ["ID", "NAME", "DESCRIPTION", "IBLOCK_SECTION_ID", "UF_*"]);
while($rsResult = $rsSection->GetNext()) $arResult["SECTION_DATA"] = $rsResult;
$arrFields = ["DESCRIPTION", "UF_LONGTITLE", "UF_DESCRIPTION"];
foreach($arResult["SECTION_DATA"] as $key => $value) {
    if(in_array($key, $arrFields)) $arResult["SECTION_DATA"][$key] = str_replace(["#WHERE#", "#REGION#"], [$arCity["UF_WHERE"], $arCity["UF_REGION"]], $value); 
}

$arResult["ELEMENTS_COUNT"] = CIBlockSection::GetSectionElementsCount($arParams['SECTION_ID'], ["CNT_ACTIVE" => "Y"]);

$rsSections = CIBlockSection::GetList([], ["IBLOCK_ID" => $arResult["IBLOCK_ID"]], true, ["UF_*"]);
while($rcsResult = $rsSections->GetNext()) {
    if(is_null($rcsResult["IBLOCK_SECTION_ID"])) continue;
    if($rcsResult["IBLOCK_SECTION_ID"] == $arResult["SECTION_DATA"]["IBLOCK_SECTION_ID"] || $rcsResult["IBLOCK_SECTION_ID"] == $arResult["SECTION_DATA"]["ID"]) {
        $rcsResult["UF_LONGTITLE"] = preg_replace("/ #WHERE#/", "", $rcsResult["UF_LONGTITLE"]);
        $arResult["SECTIONS_DATA"][] = $rcsResult;
    }
}