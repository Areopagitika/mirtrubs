<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>


<ul class="pagination justify-content-center">

    <?if($arResult["bDescPageNumbering"] === true):?>

        <?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
            <?if($arResult["bSavePage"]):?>
                <li class="page-item">
                    <a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">&laquo;</a>
                </li>
            <?else:?>
                <?if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"]+1) ):?>
                    <li class="page-item">
                        <a class="page-link" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">&laquo;</a>
                    </li>
                <?else:?>
                    <li class="page-item">
                        <a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">&laquo;</a>
                    </li>
                <?endif?>
            <?endif?>
        <?else:?>
            
        <?endif?>

        <?while($arResult["nStartPage"] >= $arResult["nEndPage"]):?>
            <?$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;?>

            <?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#" aria-disabled="true"><?=$NavRecordGroupPrint?> <span class="sr-only">(current)</span></a>
                </li>
            <?elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):?>
                <li class="page-item">
                    <a class="page-link" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$NavRecordGroupPrint?></a>
                </li>
            <?else:?>
                <li class="page-item">
                    <a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$NavRecordGroupPrint?></a>
                </li>
            <?endif?>
            <?$arResult["nStartPage"]--?>
        <?endwhile?>

        <?if ($arResult["NavPageNomer"] > 1):?>
            <li class="page-item">
                <a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">&raquo;</a>
            </li>
        <?else:?>
            
        <?endif?>

    <?else:?>

        <?if ($arResult["NavPageNomer"] > 1):?>

            <?if($arResult["bSavePage"]):?>
                <li class="page-item">
                    <a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">&laquo;</a>
                </li>
            <?else:?>
                <?if ($arResult["NavPageNomer"] > 2):?>
                    <li class="page-item">
                        <a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">&laquo;</a>
                    </li>
                <?else:?>
                    <li class="page-item">
                        <a class="page-link" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">&laquo;</a>
                    </li>
                <?endif?>
            <?endif?>

        <?else:?>
            
        <?endif?>

        <?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>

            <?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#"><?=$arResult["nStartPage"]?> <span class="sr-only">(current)</span></a>
                </li>
            <?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
                <li class="page-item">
                    <a class="page-link" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$arResult["nStartPage"]?></a>
                </li>
            <?else:?>
                <li class="page-item">
                    <a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a>
                </li>
            <?endif?>
            <?$arResult["nStartPage"]++?>
        <?endwhile?>

        <?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
            <li class="page-item">
                <a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">&raquo;</a>
            </li>
        <?else:?>
            
        <?endif?>

    <?endif?>

</ul>