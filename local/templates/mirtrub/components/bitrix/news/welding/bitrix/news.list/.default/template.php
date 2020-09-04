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
?>

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<h1>Сварочное оборудование</h1>
<h5 class="desc">Сварочный аппарат для сварки полиэтиленовых труб недорого. Сварочное оборудование для полиэтиленовых труб <?=$arCity["UF_WHERE"]; ?>. Купить сварочный аппарат для ПНД труб с доставкой!</h5>
<div class="contentblock">
	<div class="row">
		<? foreach($arResult["ITEMS"] as $arItem): ?>
			<div class="col-md-12">
				<div class="block-item">
					<div class="row">
						<?if($arItem["PREVIEW_PICTURE"]["SRC"]): ?>
							<div class="col-md-3">
								<div class="item-img">
									<a href="<?=$arItem["DETAIL_PAGE_URL"]; ?>" title="<? empty($arItem["PROPERTIES"]["LONGTITLE"]["VALUE"]) ? $arItem["PROPERTIES"]["LONGTITLE"]["VALUE"] : $arItem["NAME"]; ?>">
										<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]; ?>" alt="<? empty($arItem["PROPERTIES"]["LONGTITLE"]["VALUE"]) ? $arItem["PROPERTIES"]["LONGTITLE"]["VALUE"] : $arItem["NAME"]; ?>"/>
									</a>
								</div>
							</div>
						<? endif; ?>
						<div class="col-md-9">
							<div class="item-action">
								<div class="item-title"><a href="<?=$arItem["DETAIL_PAGE_URL"]; ?>" title="<? empty($arItem["PROPERTIES"]["LONGTITLE"]["VALUE"]) ? $arItem["PROPERTIES"]["LONGTITLE"]["VALUE"] : $arItem["NAME"]; ?>"><? if(!empty($arItem["PROPERTIES"]["LONGTITLE"]["VALUE"])): echo $arItem["PROPERTIES"]["LONGTITLE"]["VALUE"]; else: echo $arItem["NAME"]; endif; ?></a></div>
								<div class="item-desc"><?=$arItem["PREVIEW_TEXT"]; ?></div>
								<a class="item-btn-order" href="#product" title="Оставить заявку" data-toggle="modal" data-target=".order" onclick="yaCounter25615220.reachGoal('open-form'); return true;">Оставить заявку</a>
								<a class="item-btn-more" href="<?=$arItem["DETAIL_PAGE_URL"]; ?>" title="<? empty($arItem["PROPERTIES"]["LONGTITLE"]["VALUE"]) ? $arItem["PROPERTIES"]["LONGTITLE"]["VALUE"] : $arItem["NAME"]; ?>">Подробнее</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<? endforeach; ?>
   
	</div>
</div>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>