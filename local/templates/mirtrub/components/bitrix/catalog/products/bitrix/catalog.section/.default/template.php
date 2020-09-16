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

<? $arSection["ELEMENTS_COUNT"] = CIBlockSection::GetSectionElementsCount($arParams['SECTION_ID'], ["CNT_ACTIVE" => "Y"]); ?>


<div class="d-none d-sm-none d-md-block">
    <? if(!empty($arResult["SECTION_DATA"]["UF_LONGTITLE"])): ?>
        <h1><?=$arResult["SECTION_DATA"]["UF_LONGTITLE"]; ?></h1>
    <? else: ?>
        <h1><?=$arResult["SECTION_DATA"]["NAME"]; ?></h1>
    <? endif; ?>
    <? if(!empty($arResult["SECTION_DATA"]["UF_DESCRIPTION"])): ?>
        <h5 class="desc"><?=$arResult["SECTION_DATA"]["UF_DESCRIPTION"]; ?></h5>
    <? endif; ?>
</div>
        
<? if(!empty($arResult["ELEMENTS_COUNT"])): ?>
    <h3>Всего результатов: <span id="mse2_total"><?=$arResult["ELEMENTS_COUNT"]; ?></span></h3>
<? endif; ?>

<div id="mse2_selected_wrapper">
    <div id="mse2_selected" style="display: none;"></div>
</div>

<div class="table table-product" id="mse2_mfilter">
    <div class="thead">
        <div class="tr">
            <div class="td">Марка SDR Диаметр</div>
            <div class="td">Толщина</div>
            <div class="td">Вес</div>
            <div class="td">Давление</div>
            <div class="td">Заказать</div>
        </div>
    </div>
    <?logger($arResult['ITEMS']); ?>
    <div id="mse2_results" class="tbody">
        <? if (!empty($arResult['ITEMS'])): ?>
            <? foreach ($arResult['ITEMS'] as $key => $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strElementEdit);
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strElementDelete, $arElementDeleteParams);
                ?>

                <form method="post" class="tr ms2_form">
                    <div class="td"><a href="<?=$arItem["DETAIL_PAGE_URL"]; ?>" title="<? if($arItem["PROPERTIES"]["LONGTITLE"]["VALUE"]) echo $arItem["PROPERTIES"]["LONGTITLE"]["VALUE"]; ?>"><?=$arItem["NAME"] ?></a></div>
                    <div class="td">
                        <? if(!empty($arItem["PROPERTIES"]["THICKNESS"]["VALUE"])): ?>
                            <?=$arItem["PROPERTIES"]["THICKNESS"]["VALUE"]; ?>
                        <? endif; ?>
                    </div>
                    <div class="td">
                        <? if(!empty($arItem["PROPERTIES"]["WEIGHT"]["VALUE"])): ?>
                            <?=$arItem["PROPERTIES"]["WEIGHT"]["VALUE"]; ?>
                        <? endif; ?>
                    </div>
                    <div class="td">
                        <? if(!empty($arItem["PROPERTIES"]["PRESS"]["VALUE"])): ?>
                            <?=$arItem["PROPERTIES"]["PRESS"]["VALUE"]; ?>
                        <? endif; ?>
                    </div>
                    <div class="td">
                        
                        <a href="#product" data-toggle="modal" data-target=".order" data-product="<?echo $arItem["PROPERTIES"]["LONGTITLE"]["VALUE"] ?: $arItem["NAME"] ?>" onclick="yaCounter25615220.reachGoal('open-form'); return true;">По запросу</a>
                        
                        <input type="hidden" name="id" value="290">
                        <input type="hidden" name="count" value="1">
                        <input type="hidden" name="options" value="[]">
                    </div>
                </form>
            <? endforeach; ?>
        <? endif; ?>
    </div>
    <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
        <? echo $arResult["NAV_STRING"]; ?>
    <? endif; ?>
</div>

<ul class="nav menu-trubi">
    <? foreach($arResult["SECTIONS_DATA"] as $value): ?>
    <li>
        <a href="<?=$value["SECTION_PAGE_URL"]; ?>" title="">
            <? if(!empty($value["PICTURE"])): ?>
                <img src="<?=CFile::GetPath($value["PICTURE"]); ?>" alt="<?=$value["UF_LONGTITLE"]; ?>">
            <? endif; ?>
            <span><?=$value["NAME"]; ?></span>
            <? if(!empty($value["UF_DIAMETER"])): ?>
                <div class="menu-param">Диаметр: <?=$value["UF_DIAMETER"]; ?></div>
            <? endif; ?>
            <? if(!empty($value["UF_SDR"])): ?>
                <div class="menu-param">SDR: <?=$value["UF_SDR"]; ?></div>
            <? endif; ?>
            <? if(!empty($value["UF_GOST"])): ?>
                <div class="menu-param">ГОСТ: <?=$value["UF_GOST"]; ?></div>
            <? endif; ?>
        </a>
    </li>
    <? endforeach; ?>
</ul>

<? if(!empty($arResult["SECTION_DATA"]["DESCRIPTION"])): ?>
    <?=$arResult["SECTION_DATA"]["DESCRIPTION"]?>
<? endif; ?>