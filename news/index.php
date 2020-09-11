<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Новости компании МирТрубПласт #WHERE#");
$APPLICATION->SetPageProperty("title", "Новости");
$APPLICATION->SetTitle("Новости");
?>

<div itemscope="" itemtype="https://schema.org/Article">
	<div itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
    	<meta itemprop="name" content="ООО «МИРТРУБПЛАСТ»">
    	<meta itemprop="telephone" content="8 800 555 28 29">
    	<meta itemprop="address" content="420087, Россия, Республика Татарстан, Казань, Родины, 10">
    	<link itemprop="url" href="https://mirtrub.ru/news/">
	</div>	
	<?$APPLICATION->IncludeComponent(
		"bitrix:news", 
		"news_inner", 
		array(
			"IBLOCK_TYPE" => "news",
			"IBLOCK_ID" => getIblockID("news", "news"),
			"NEWS_COUNT" => "15",
			"USE_SEARCH" => "N",
			"USE_RSS" => "Y",
			"NUM_NEWS" => "20",
			"NUM_DAYS" => "30",
			"YANDEX" => "N",
			"USE_RATING" => "N",
			"USE_CATEGORIES" => "N",
			"USE_FILTER" => "N",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_ORDER1" => "DESC",
			"SORT_BY2" => "SORT",
			"SORT_ORDER2" => "ASC",
			"CHECK_DATES" => "Y",
			"SEF_MODE" => "Y",
			"SEF_FOLDER" => "/news/",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_SHADOW" => "N",
			"AJAX_OPTION_JUMP" => "Y",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "Y",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "36000000",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"DISPLAY_PANEL" => "N",
			"SET_TITLE" => "Y",
			"SET_STATUS_404" => "Y",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
			"ADD_SECTIONS_CHAIN" => "Y",
			"USE_PERMISSIONS" => "N",
			"PREVIEW_TRUNCATE_LEN" => "",
			"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y H:i",
			"LIST_FIELD_CODE" => array(
				0 => "",
				1 => "",
			),
			"LIST_PROPERTY_CODE" => array(
				0 => "LONGTITLE",
				1 => "",
			),
			"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
			"DISPLAY_NAME" => "Y",
			"META_KEYWORDS" => "-",
			"META_DESCRIPTION" => "-",
			"BROWSER_TITLE" => "-",
			"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y H:i",
			"DETAIL_FIELD_CODE" => array(
				0 => "",
				1 => "",
			),
			"DETAIL_PROPERTY_CODE" => array(
				0 => "TITLE",
				1 => "KEYWORDS",
				2 => "DESCRIPTION",
				3 => "LONGTITLE",
				4 => "",
			),
			"DETAIL_DISPLAY_TOP_PAGER" => "N",
			"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
			"DETAIL_PAGER_TITLE" => "Страница",
			"DETAIL_PAGER_TEMPLATE" => "arrows",
			"DETAIL_PAGER_SHOW_ALL" => "N",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"PAGER_TITLE" => "Новости",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => "news",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
			"PAGER_SHOW_ALL" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"COMPONENT_TEMPLATE" => "news_inner",
			"USE_REVIEW" => "N",
			"SET_LAST_MODIFIED" => "N",
			"ADD_ELEMENT_CHAIN" => "N",
			"STRICT_SECTION_CHECK" => "N",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"USE_SHARE" => "N",
			"DETAIL_SET_CANONICAL_URL" => "N",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"SHOW_404" => "Y",
			"MESSAGE_404" => "",
			"TEMPLATE_THEME" => "blue",
			"MEDIA_PROPERTY" => "",
			"SLIDER_PROPERTY" => "",
			"FILE_404" => "/404.php",
			"SEF_URL_TEMPLATES" => array(
				"news" => "",
				"section" => "",
				"detail" => "#ELEMENT_CODE#/",
				"rss" => "rss/",
				"rss_section" => "#SECTION_ID#/rss/",
			)
		),
		false
	);?>
	<?$APPLICATION->IncludeComponent("bitrix:menu","neighbours",Array(
            "ROOT_MENU_TYPE" => "neighbours", 
            "MAX_LEVEL" => "1", 
            "CHILD_MENU_TYPE" => "top", 
            "USE_EXT" => "Y",
            "DELAY" => "N",
            "ALLOW_MULTI_SELECT" => "Y",
            "MENU_CACHE_TYPE" => "N", 
            "MENU_CACHE_TIME" => "3600", 
            "MENU_CACHE_USE_GROUPS" => "Y", 
            "MENU_CACHE_GET_VARS" => "" 
        )
    );?>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>