<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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

$arCloudParams = array(
	"SEARCH" => $arResult["REQUEST"]["~QUERY"],
	"TAGS" => $arResult["REQUEST"]["~TAGS"],
	"CHECK_DATES" => $arParams["CHECK_DATES"],
	"arrFILTER" => $arParams["arrFILTER"],
	"SORT" => $arParams["TAGS_SORT"],
	"PAGE_ELEMENTS" => $arParams["TAGS_PAGE_ELEMENTS"],
	"PERIOD" => $arParams["TAGS_PERIOD"],
	"URL_SEARCH" => $arParams["TAGS_URL_SEARCH"],
	"TAGS_INHERIT" => $arParams["TAGS_INHERIT"],
	"FONT_MAX" => $arParams["FONT_MAX"],
	"FONT_MIN" => $arParams["FONT_MIN"],
	"COLOR_NEW" => $arParams["COLOR_NEW"],
	"COLOR_OLD" => $arParams["COLOR_OLD"],
	"PERIOD_NEW_TAGS" => $arParams["PERIOD_NEW_TAGS"],
	"SHOW_CHAIN" => $arParams["SHOW_CHAIN"],
	"COLOR_TYPE" => $arParams["COLOR_TYPE"],
	"WIDTH" => $arParams["WIDTH"],
	"CACHE_TIME" => $arParams["CACHE_TIME"],
	"CACHE_TYPE" => $arParams["CACHE_TYPE"],
	"RESTART" => $arParams["RESTART"],
);

if(is_array($arCloudParams["arrFILTER"]))
{
	foreach($arCloudParams["arrFILTER"] as $strFILTER)
	{
		if($strFILTER=="main")
		{
			$arCloudParams["arrFILTER_main"] = $arParams["arrFILTER_main"];
		}
		elseif($strFILTER=="forum" && IsModuleInstalled("forum"))
		{
			$arCloudParams["arrFILTER_forum"] = $arParams["arrFILTER_forum"];
		}
		elseif(strpos($strFILTER,"iblock_")===0)
		{
			if (isset($arParams["arrFILTER_".$strFILTER]) && is_array($arParams["arrFILTER_".$strFILTER]))
			{
				foreach($arParams["arrFILTER_".$strFILTER] as $strIBlock)
					$arCloudParams["arrFILTER_".$strFILTER] = $arParams["arrFILTER_".$strFILTER];
			}
		}
		elseif($strFILTER=="blog")
		{
			$arCloudParams["arrFILTER_blog"] = $arParams["arrFILTER_blog"];
		}
		elseif($strFILTER=="socialnetwork")
		{
			$arCloudParams["arrFILTER_socialnetwork"] = $arParams["arrFILTER_socialnetwork"];
		}
	}
}

$APPLICATION->IncludeComponent("bitrix:search.tags.cloud", ".default", $arCloudParams, $component);

?>

<form action="" method="get" class="msearch2" id="mse2_form">
	<input type="hidden" name="tags" value="<?echo $arResult["REQUEST"]["TAGS"]?>" />
    <?if($arParams["USE_SUGGEST"] === "Y"):
        if(strlen($arResult["REQUEST"]["~QUERY"]) && is_object($arResult["NAV_RESULT"]))
        {
            $arResult["FILTER_MD5"] = $arResult["NAV_RESULT"]->GetFilterMD5();
            $obSearchSuggest = new CSearchSuggest($arResult["FILTER_MD5"], $arResult["REQUEST"]["~QUERY"]);
            $obSearchSuggest->SetResultCount($arResult["NAV_RESULT"]->NavRecordCount);
        }
        ?>
        <?$APPLICATION->IncludeComponent(
            "bitrix:search.suggest.input",
            "",
            array(
                "NAME" => "q",
                "VALUE" => $arResult["REQUEST"]["~QUERY"],
                "INPUT_SIZE" => 40,
                "DROPDOWN_SIZE" => 10,
                "FILTER_MD5" => $arResult["FILTER_MD5"],
            ),
            $component, array("HIDE_ICONS" => "Y")
        );?>
    <?else:?>
        <input type="text" name="q" class="form-control" value="<?=$arResult["REQUEST"]["QUERY"]?>" size="40" />
    <?endif;?>

    <button type="submit" class="btn-yellow">Найти</button>
    <span class="close-x">×</span>
    <input type="hidden" name="how" value="<?echo $arResult["REQUEST"]["HOW"]=="d"? "d": "r"?>" />
</form>

<? if(!empty($arResult["SEARCH"])): ?>
	<? if($arParams["DISPLAY_TOP_PAGER"] != "N"): ?>
        <?=$arResult["NAV_STRING"] ?>
    <? endif; ?>
	<div class="row pt-3">
		<?foreach($arResult["SEARCH"] as $arItem):?>
			<? logger($arItem) ?>
			<div class="col-6 col-sm-4 col-md-3 col-lg-2">
				<div class="product-item text-center">
					<form method="post" class="ms2_form">
						<div class="row">
							<div class="col-md-12">
								<div class="img pb-2" style="height:125px;">
									<a href="<?=$arItem["URL"]; ?>" title="<?=$arItem["ITEM"]["NAME"]; ?>">
										<? if($arItem["ITEM"]["PREVIEW_PICTUPE"]): ?>
											<img src="<?=$arItem["ITEM"]["PREVIEW_PICTUPE"]; ?>" alt="<?=$arItem["TITLE"]; ?>" title="<?=$arItem["TITLE"]; ?>" class="m-0">
										<? endif; ?>
									</a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="title" style="height:65px;">
									<a href="<?=$arItem["URL"]; ?>" title="<?=$arItem["TITLE"]; ?>"><?=$arItem["TITLE"]; ?></a>
								</div>
								<div class="weight pb-2">
									<? if($arItem["ITEM"]["PROPERTY_WEIGHT_VALUE"]): ?>
										Вес: <span><?=$arItem["ITEM"]["PROPERTY_WEIGHT_VALUE"]; ?></span> кг.
									<? else: ?>
										Вес: <span>0</span> кг.
									<? endif; ?>
								</div>
							</div>
							<div class="col-md-12">
								<a class="btn-tovar" href="#product" data-toggle="modal" data-target=".order" onclick="yaCounter25615220.reachGoal('open-form'); return true;">По запросу</a>
							</div>
						</div>
					</form>
				</div>
			</div>
        <?endforeach;?>
    </div>
	<?if($arParams["DISPLAY_BOTTOM_PAGER"] != "N") echo $arResult["NAV_STRING"]?>
	
<?else:?>
	<?ShowNote(GetMessage("SEARCH_NOTHING_TO_FOUND"));?>
<?endif;?>