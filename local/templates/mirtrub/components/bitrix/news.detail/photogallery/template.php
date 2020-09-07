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
<h1 itemprop="name headline"><?=$arResult["NAME"]; ?></h1>
<? if(!empty($arResult["PREVIEW_TEXT"])): ?>
<h4 itemprop="description"><?=$arResult["PREVIEW_TEXT"]; ?></h4>
<? endif; ?>
<ul class="galleries">
	<? if(!empty($arResult["DISPLAY_PROPERTIES"]["IMAGES"]["~VALUE"])): ?>
		<? foreach($arResult["DISPLAY_PROPERTIES"]["IMAGES"]["~VALUE"] as $value): ?>
			<li class="gal-item">
				<a data-fancybox="images" href="<?=CFile::GetPath($value); ?>">
					<img src="<?=CFile::GetPath($value); ?>" alt="" />
				</a>
			</li>
		<? endforeach; ?>
	<? endif; ?>
	<? logger($arResult); ?>
</ul>