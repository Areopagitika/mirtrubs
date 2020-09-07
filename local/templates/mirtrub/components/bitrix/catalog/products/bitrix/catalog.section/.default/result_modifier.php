<?php

$arCity = \Local\City::getItem();

$rsSection = CIBlockSection::GetList([], ["IBLOCK_ID" => $arResult["IBLOCK_ID"], "ID" => $arResult["ID"]], true, ["NAME", "DESCRIPTION", "UF_*"]);
while($rsResult = $rsSection->GetNext()) $arResult["SECTION_DATA"] = $rsResult;
$arrFields = ["DESCRIPTION", "UF_LONGTITLE", "UF_DESCRIPTION"];
foreach($arResult["SECTION_DATA"] as $key => $value) {
    if(in_array($key, $arrFields)) $arResult["SECTION_DATA"][$key] = str_replace(["#WHERE#", "#REGION#"], [$arCity["UF_WHERE"], $arCity["UF_REGION"]], $value); 
}