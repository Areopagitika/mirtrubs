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
    <h1>Каталог полиэтиленовых труб&nbsp;в Казани с характеристиками</h1>
    <h5 class="desc">Если вас интересует закупка полиэтиленовых труб для создания трубопроводов промышленного и общественного назначения, компании «Миртрубпласт» есть что предложить. Более 15 лет активной работы на российском рынке. Диаметры полиэтиленовых труб: от 20 до 1200 мм.</h5>
</div>
        
<h3>Всего результатов: <span id="mse2_total"><?=count($arResult["ITEMS"]); ?></span></h3>

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

                <?logger($arItem); ?>

                <form method="post" class="tr ms2_form">
                    <div class="td"><a href="<?=$arItem["DETAIL_PAGE_URL"]; ?>" title="<? if($arItem["PROPERTIES"]["LONGTITLE"]["VALUE"]) echo $arItem["PROPERTIES"]["LONGTITLE"]["VALUE"]; ?>"><?=$arItem["NAME"] ?></a></div>
                    <div class="td">
                        <? if(empty($arItem["PROPERTIES"]["THICKNESS"]["VALUE"])): ?>
                            <?=$arItem["PROPERTIES"]["THICKNESS"]["VALUE"]; ?>
                        <? endif; ?>
                    </div>
                    <div class="td">
                        <? if(empty($arItem["PROPERTIES"]["WEIGHT"]["VALUE"])): ?>
                            <?=$arResult["PROPERTIES"]["WEIGHT"]["VALUE"]; ?>
                        <? endif; ?>
                    </div>
                    <div class="td">
                        <? if(empty($arItem["PROPERTIES"]["PRESS"]["VALUE"])): ?>
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

<h1>Полиэтиленовые трубы</h1>
<p>Не знаете, где купить полиэтиленовые трубы, чтобы и сэкономить, и получить на 100% качественную продукцию? Обратите внимание на каталог компании «Миртрубпласт». Здесь представлены разноплановые изделия для прокладки современных водопроводов, газопроводов, а также канализационных систем разных диаметров и SDR. Кроме того, все наши полиэтиленовые трубы можно купить оптом и с доставкой.</p>
<h2>Стоимость полиэтиленовых труб от «Миртрубпласт»</h2>
<p>В каталоге «Миртрубпласт» представлены современные полиэтиленовые трубы, цена которых абсолютно приемлема, даже если речь идет об оборудовании крупных предприятий сложными коммуникационными системами. Доступная стоимость оправдана отсутствием в нашей работе посредников и сторонних дистрибьюторов: со своими клиентами мы сотрудничаем напрямую.</p>
<p><strong>У нас можно купить полиэтиленовые трубы 3-х основных типов:</strong></p>
<ul>
	<li>Для водоснабжения и транспортировки жидких и газообразных (не горючих) веществ;</li>
	<li>Для горючих газов бытового и промышленного назначения;</li>
	<li>Для канализации и технических жидкостей.</li>
</ul>
<p>Подробный прайс на полиэтиленовые трубы производства «Миртрубпласт» можно посмотреть выше. Отметим, что некоторые изделия мы изготавливаем по запросу клиента: цена в этом случае обсуждается в индивидуальном порядке. Поэтому купть трубы ПЭ в нашей компании не только выгодно, но и удобно.&nbsp;</p>
<p>Если вам нужна полиэтиленовая (ПЭ) труба для водоснабжения или газопровода, но вы путаетесь в маркировках и других параметрах, менеджер компании готов подобрать лучшее решение для ваших индивидуальных целей.</p>
<h2>Продажа полиэтиленовых труб в Казани с доставкой по России</h2>
<p>Каталог полиэтиленовых труб от «Миртрубпласт» – это широкий выбор самых разных решений с показателем SDR от 7,4 до 33. Отметим, что все они исключительно высокого качества, демонстрируют отличную прочность, устойчивость к разного рода негативным факторам и, как следствие, служат долго и беспроблемно. Кроме того, м предлагаем полиэтиленовые трубы по доступной стоимости.</p>
<p>Вне зависимости от того, какая перед вами ПЭ труба, цена на нее всегда будет выгодной, так как мы реализуем исключительно свою продукцию. Без посредников и дилеров.</p>
<p>Так, если вам нужна ПЭ труба, купить ее можно непосредственно на сайте. Если речь идет об изделии нестандартного размера, в таком случае изготовление будет под заказ: для этого свяжитесь с менеджером по телефону.</p>
<p><strong>Остались вопросы? Звоните нам и получите больше актуальной информации. Звоните! Заказывайте!</strong></p>