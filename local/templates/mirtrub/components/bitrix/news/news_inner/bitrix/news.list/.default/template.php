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
	<?=$arResult["NAV_STRING"]?>
<?endif;?>

<h1 itemprop="name headline"><?=$arResult["NAME"]; ?></h1>
<div itemprop="articleBody">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <div class="news-page">
            <div class="name">
                <? if(!empty($arItem["PROPERTIES"]["LONGTITLE"]["VALUE"])): ?>
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]; ?>" alt="<?=$arItem["PROPERTIES"]["LONGTITLE"]["VALUE"]; ?>"><?=$arItem["PROPERTIES"]["LONGTITLE"]["VALUE"]; ?></a>
                <? else: ?>
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]; ?>" alt="<?=$arItem["NAME"]; ?>"><?=$arItem["NAME"]; ?></a>
                <? endif; ?>
            </div>
            <? if(!empty($arItem["PREVIEW_TEXT"])): ?>
                <p><?=$arItem["PREVIEW_TEXT"]; ?></p>
            <? endif; ?>
            <a class="news-btn" href="<?=$arItem["DETAIL_PAGE_URL"]; ?>">Подробнее</a>
            <div class="date"><span class="fa fa-calendar"></span> <?=$arItem["DISPLAY_ACTIVE_FROM"]; ?></div>
        </div>
    <? endforeach; ?>
</div>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>