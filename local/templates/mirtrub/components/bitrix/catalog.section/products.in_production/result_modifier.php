<?php

$rsSections = CIBlockSection::GetList([], ["IBLOCK_ID" => $arParams["IBLOCK_ID"]], false, ["ID", "CODE"]);
$arSctnResult = [];
while($rsSection = $rsSections->GetNext()) $arSctnResult[] = $rsSection;

foreach($arResult['ITEMS'] as $key => $element) {
    foreach($arSctnResult as $section) {
        if(in_array($element["IBLOCK_SECTION_ID"], $section)) {
            if($section["CODE"] == "trubi-dlya-vodosnabjeniya" || $section["CODE"] == "trubyi-v-zashhitnoj-obolochke-dlya-vodyi") {
                $arResult['ITEMS'][$key]["PRODUCT_TYPE"] = "Вода";
            } elseif($section["CODE"] == "trubi-dlya-gazoprovodov" || $section["CODE"] == "trubyi-v-zashhitnoj-obolochke-dlya-gaza") {
                $arResult['ITEMS'][$key]["PRODUCT_TYPE"] = "Газ";
            }
        }
    }
}