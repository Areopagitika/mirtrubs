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

<div itemscope="" itemtype="https://schema.org/Article">
    <div itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
    <meta itemprop="name" content="ООО «МИРТРУБПЛАСТ»">
    <meta itemprop="telephone" content="8 800 555 28 29">
    <meta itemprop="address" content="420087, Россия, Республика Татарстан, Казань, Родины, 10">
    <link itemprop="url" href="<?=$arResult["DETAIL_PAGE_URL"]; ?>">
</div>				        

<? if(!empty($arResult["DISPLAY_PROPERTIES"]["LONGTITLE"]["VALUE"])): ?>
    <h1 itemprop="name headline"><?=$arResult["DISPLAY_PROPERTIES"]["LONGTITLE"]["VALUE"]; ?></h1>
<? else: ?>
    <h1 itemprop="name headline"><?=$arResult["NAME"]; ?></h1>
<? endif; ?>
<h4 itemprop="description"></h4>
<?if(!empty($arResult["DETAIL_TEXT"])): ?>
    <div itemprop="articleBody">
        <?=$arResult["DETAIL_TEXT"]; ?> 
    </div>
<? endif; ?>
<div class="neighbors d-flex justify-content-between">
    <?if(!is_null($arResult["NAV"]["PREV"])): ?>
        <span class="link-prev">
            <a href="<?=$arResult["NAV"]["PREV"]["DETAIL_PAGE_URL"]; ?>">
                <i class="fa fa-long-arrow-left"></i> <?=$arResult["NAV"]["PREV"]["NAME"]; ?></a>
        </span>
    <? endif; ?>
    <?if(!is_null($arResult["NAV"]["NEXT"])): ?>
        <span class="link-next">
            <a href="<?=$arResult["NAV"]["NEXT"]["DETAIL_PAGE_URL"]; ?>"><?=$arResult["NAV"]["NEXT"]["NAME"]; ?> <i class="fa fa-long-arrow-right"></i></a>
        </span>
    <? endif; ?>
    </div>
</div>