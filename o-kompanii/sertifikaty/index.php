<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Миртрубпласт, мир, Сертификаты соответствия на полиэтиленовые трубы, разрешения на газ, полиэтиленовые трубы, пластиковые трубы, трубы оптом, купить трубы. трубы пнд.");
$APPLICATION->SetPageProperty("description", "Сертификаты качества и разрешения на продаваемую продукцию. Полиэтиленовые трубы, пластиковые трубы, газовые трубы, канализационные трубы, трубы для водоснабжения.");
$APPLICATION->SetTitle("Сертификаты");
?>

<div itemscope itemtype="https://schema.org/Article">
    <div itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
        <meta itemprop="name" content="<?=$arSite["NAME"]; ?>">
        <meta itemprop="telephone" content="8 800 555 28 29">
        <meta itemprop="address" content="420087, Россия, Республика Татарстан, Казань, Родины, 10">
        <link itemprop="url" href="" />
	</div>
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.detail", 
        "photogallery", 
        array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_ELEMENT_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "Y",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "BROWSER_TITLE" => "-",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "3600",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "Y",
            "ELEMENT_CODE" => "sertifikatyi-i-razresheniya",
            "ELEMENT_ID" => "",
            "FIELD_CODE" => array(
                0 => "ID",
                1 => "",
            ),
            "FILE_404" => "",
            "GROUP_PERMISSIONS" => array(
                0 => "1",
            ),
            "IBLOCK_ID" => getIblockID("photogallery", "photogallery"),
            "IBLOCK_TYPE" => "photogallery",
            "IBLOCK_URL" => "",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "MESSAGE_404" => "",
            "META_DESCRIPTION" => "-",
            "META_KEYWORDS" => "-",
            "PAGER_BASE_LINK" => "",
            "PAGER_BASE_LINK_ENABLE" => "Y",
            "PAGER_PARAMS_NAME" => "arrPager",
            "PAGER_SHOW_ALL" => "Y",
            "PAGER_TEMPLATE" => "",
            "PAGER_TITLE" => "Страница",
            "PROPERTY_CODE" => array(
                0 => "",
                1 => "DESCRIPTION",
                2 => "IMAGES",
                3 => "",
            ),
            "SET_BROWSER_TITLE" => "Y",
            "SET_CANONICAL_URL" => "Y",
            "SET_LAST_MODIFIED" => "Y",
            "SET_META_DESCRIPTION" => "Y",
            "SET_META_KEYWORDS" => "Y",
            "SET_STATUS_404" => "Y",
            "SET_TITLE" => "Y",
            "SHARE_HANDLERS" => array(
                0 => "delicious",
            ),
            "SHARE_HIDE" => "N",
            "SHARE_SHORTEN_URL_KEY" => "",
            "SHARE_SHORTEN_URL_LOGIN" => "",
            "SHARE_TEMPLATE" => "",
            "SHOW_404" => "Y",
            "STRICT_SECTION_CHECK" => "Y",
            "USE_PERMISSIONS" => "N",
            "USE_SHARE" => "Y",
            "COMPONENT_TEMPLATE" => "photogallery"
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