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

<div class="contentblock">
	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"",
		Array(
			"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
			"IBLOCK_ID" => $arParams["IBLOCK_ID"],
			"NEWS_COUNT" => $arParams["NEWS_COUNT"],
			"SORT_BY1" => $arParams["SORT_BY1"],
			"SORT_ORDER1" => $arParams["SORT_ORDER1"],
			"SORT_BY2" => $arParams["SORT_BY2"],
			"SORT_ORDER2" => $arParams["SORT_ORDER2"],
			"FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
			"PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
			"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
			"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
			"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
			"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
			"SET_TITLE" => $arParams["SET_TITLE"],
			"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
			"MESSAGE_404" => $arParams["MESSAGE_404"],
			"SET_STATUS_404" => $arParams["SET_STATUS_404"],
			"SHOW_404" => $arParams["SHOW_404"],
			"FILE_404" => $arParams["FILE_404"],
			"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
			"CACHE_TYPE" => $arParams["CACHE_TYPE"],
			"CACHE_TIME" => $arParams["CACHE_TIME"],
			"CACHE_FILTER" => $arParams["CACHE_FILTER"],
			"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
			"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
			"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
			"PAGER_TITLE" => $arParams["PAGER_TITLE"],
			"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
			"PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
			"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
			"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
			"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
			"PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
			"PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
			"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
			"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
			"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
			"PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
			"ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
			"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
			"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
			"FILTER_NAME" => $arParams["FILTER_NAME"],
			"HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
			"CHECK_DATES" => $arParams["CHECK_DATES"],
		),
		$component
	);?>

	<h1>Сварочные аппараты для полиэтиленовых труб <?=$arCity["UF_WHERE"]; ?></h1>
    <p>Компания «Миртрубпласт» <?=$arCity["UF_REGION"]; ?> специализируется не только на изготовлении непосредственно ПЭ материалов для прокладки трубопроводов, но и предоставляет клиентам возможность приобрести профессиональное сварочное оборудование для ПЭ (полиэтиленовых) труб.</p>
    <p>Отметим, что в рамках бесплатной консультации с менеджером вы сможете получить всю важную информацию о процессе и подобрать оптимально подходящий сварочный аппарат для сварки ПЭ (полиэтиленовых) труб.</p>
    <h2>Какой лучше купить сварочный аппарат для ПЭ (полиэтиленовых) труб <?=$arCity["UF_WHERE"]; ?>?</h2>
    <p>Безусловно, если вы предпочли полиэтиленовый трубопровод, вам понадобится соответствующий сварочный аппарат. Подобрать его довольно просто, если вы точно определились с методом самой работы.</p>
    <p><strong>Всего существует 2 основных способа неразъемного соединения ПЭ трубопровода.</strong></p>
    <ul>
        <li>Электромуфтовый. Здесь сварочный станок для полиэтиленовых труб обойдется несколько дороже, так как сам процесс подразумевает использование фитингов со встроенными электронагревательными элементами. Как правило, применяется для сварки в ограниченных пространствах.</li>
        <li>Встык. Сварочный аппарат для стыковой сварки ПЭ (полиэтиленовых) труб более доступный и при этом позволяет создавать действительно герметичные соединения, которые по надежности не отличаются от цельного трубопровода.</li>
    </ul>
    <p>Подбирая сварочный аппарат для ПЭТ трубы важно также ориентироваться на характеристики элементов трубопровода. В частности, на диаметр. Также не последним критерием остается степень амортизации работы.</p>
    <h2>Сварочный аппарат для ПЭ (полиэтиленовых) труб: цена <?=$arCity["UF_WHERE"]; ?></h2>
    <p>Если вам нужно качественное оборудование для соединения элементов трубопровода, компании «Миртрубпласт» <?=$arCity["UF_WHERE"]; ?> есть что предложить. В каталоге есть инструменты для электромуфтовой и стыковой сварки изделий разных диаметров и толщины, такие как ROBU W160, ROBU W630, ROBU W1600 и др.</p>
    <p>Чтобы подобрать наверняка подходящий инструмент, проконсультируйтесь со специалистом компании.</p>
    <p><strong>Мы также готовы ответить на любые дополнительные вопросы относительно изготавливаемой нами продукции. Звоните по номеру, указанному на сайте или оставьте электронную заявку в форме обратной связи. Звоните! Заказывайте</strong></p>
</div>
