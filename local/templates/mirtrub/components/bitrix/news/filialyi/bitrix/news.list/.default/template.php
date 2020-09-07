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

<h1 itemprop="name headline">Филиалы компании ООО «МИРТРУБПЛАСТ»</h1>
<h4 itemprop="description">Список филиалов компании ООО «МИРТРУБПЛАСТ»</h4>
<div itemprop="articleBody">
	<ul class="">
		<? foreach($arResult["ITEMS"] as $arItem): ?>
        <li class="first">
            <a href="<?=$arItem["DETAIL_PAGE_URL"]; ?>"><?=$arItem["NAME"]; ?></a>
		</li>
		<? endforeach; ?>
    </ul>
</div>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>