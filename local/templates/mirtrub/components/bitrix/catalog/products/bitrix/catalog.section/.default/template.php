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
        
<? if(!empty($arResult["SECTION_DATA"]["ELEMENT_CNT"])): ?>
    <h3>Всего результатов: <span id="mse2_total"><?=$arResult["SECTION_DATA"]["ELEMENT_CNT"]; ?></span></h3>
<? endif; ?>

<div id="mse2_selected_wrapper">
    <div id="mse2_selected" style="display: none;"></div>
</div>

<div class="table table-product">
    <div class="thead">
        <div class="tr">
            <div class="td">Марка SDR Диаметр</div>
            <div class="td">Толщина</div>
            <div class="td">Вес</div>
            <div class="td">Давление</div>
            <div class="td">Заказать</div>
        </div>
    </div>
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
                            <?=$arResult["PROPERTIES"]["WEIGHT"]["VALUE"]; ?>
                        <? endif; ?>
                    </div>
                    <div class="td">
                        <? if(!empty($arItem["PROPERTIES"]["PRESS"]["VALUE"])): ?>
                            <?=$arItem["PROPERTIES"]["PRESS"]["VALUE"]; ?>
                        <? endif; ?>
                    </div>
                    <div class="td">
                        
                        <a href="#product" data-toggle="modal" data-target=".order" onclick="yaCounter25615220.reachGoal('open-form'); return true;">По запросу</a>
                        
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

    <button class="btn btn-default btn_more">Загрузить еще</button>
</div>          

<ul class="nav menu-trubi">
    <li>
        <a href="polietilenovie-trubi/trubi-dlya-vodosnabjeniya/" title="Полиэтиленовые трубы для воды">
            <img src="/assets/uploads/trubi/polietilenovie-trubi-dlya-vodi.jpg" alt="Полиэтиленовые трубы для водопровода">
            <span>Трубы для воды</span>
            <div class="menu-param">Диаметр: Ø D20 - D1200</div>
            <div class="menu-param">SDR: 7,4 - 33</div>
            <div class="menu-param">ГОСТ: 18599-2003</div>
        </a>
    </li>
    <li>
        <a href="polietilenovie-trubi/trubi-dlya-gazoprovodov/" title="Полиэтиленовые трубы для газа">
            <img src="/assets/uploads/trubi/polietilenovie-trubi-dlya-gaza.jpg" alt="Полиэтиленовые трубы для газопровода">
            <span>Трубы для газа</span>
            <div class="menu-param">Диаметр: Ø D32 - D560</div>
            <div class="menu-param">SDR: 7,4 - 17,5</div>
            <div class="menu-param">ГОСТ: Р50838-2009</div>
        </a>
    </li>
    <li>
        <a href="polietilenovie-trubi/trubyi-dlya-kanalizaczii/" title="Полиэтиленовые трубы для канализации">
            <img src="/assets/uploads/trubi/polietilenovie-trubi-tehnicheskie.jpg" alt="Полиэтиленовые трубы технические">
            <span>Трубы для канализации</span>
            <div class="menu-param">Диаметр: Ø D30 - D160</div>
            <div class="menu-param">ГОСТ: 22689.0-89</div>
        </a>
    </li>
</ul>

<? if(!empty($arResult["SECTION_DATA"]["DESCRIPTION"])): ?>
    <?=$arResult["SECTION_DATA"]["DESCRIPTION"]?>
<? endif; ?>