<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Отзывы наших клиентов");
$APPLICATION->SetPageProperty("keywords", "Миртрубпласт, мир, Отзывы о заводе трубпласт, трубпласт отзывы, отзывы о заводе по производству полиэтиленовых труб, отзыв, производство полиэтиленовых труб, качество, поставки, доставка, отгрузки, цены, сотрудничество.");
$APPLICATION->SetPageProperty("description", "Отзывы о заводе ООО \"МИРТРУБПЛАСТ\". Отзыв о поставке. Сотрудничество и добропорядочные партнерские отношения. Компетентный профессиональный персонал.");
$APPLICATION->SetTitle("Отзывы");
?>

<div itemscope itemtype="https://schema.org/Article">
    <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
        <meta itemprop="name" content="<?=$arSite["NAME"]; ?>">
        <meta itemprop="telephone" content="8 800 555 28 29">
        <meta itemprop="address" content="420087, Россия, Республика Татарстан, Казань, Родины, 10">
        <link itemprop="url" href="" />
    </div>
    <h1 itemprop="name headline">Отзывы наших клиентов</h1>
    <h4 itemprop="description">Отзывы о заводе ООО "МИРТРУБПЛАСТ". Отзыв о поставке. Сотрудничество и добропорядочные партнерские отношения. Компетентный профессиональный персонал.</h4>
    <div itemprop="articleBody">
        <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"reviews", 
	array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => getIblockID("content", "reviews"),
		"NEWS_COUNT" => "2",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "DESCRIPTION",
			2 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "photogallery",
		"PAGER_DESC_NUMBERING" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_BASE_LINK_ENABLE" => "Y",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"PAGER_BASE_LINK" => "",
		"PAGER_PARAMS_NAME" => "arrPager",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "reviews",
		"STRICT_SECTION_CHECK" => "N",
		"FILE_404" => ""
	),
	false
);?>
        <p><em>Наименования организаций скрыты в соответствии с маркетинговой стратегией Группы заводов полиэтиленовых труб МИРТРУБПЛАСТ.</em></p>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>