<?php


$rsSection = CIBlockSection::GetList([], ["IBLOCK_ID" => $arResult["IBLOCK_ID"], "ID" => $arResult["ID"]], true, ["NAME", "DESCRIPTION", "UF_*"]);
while($rsResult = $rsSection->GetNext()) $arResult["SECTION_DATA"] = $rsResult;
logger($arResult["SECTION_DATA"]);