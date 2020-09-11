<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Каталоги полиэтиленовых труб и фитингов");
$APPLICATION->SetPageProperty("keywords", "Миртрубпласт, мир, Каталоги труб, каталог полиэтиленовых труб, каталог пластиковых труб, трубы для водопровода, трубы для газопровода, канализационные трубы, трубы пнд.");
$APPLICATION->SetPageProperty("description", "Полный каталог всех видов предлагаемых труб, а так же фитинги. Полиэтиленовые трубы, пластиковые трубы, трубы для водоснабжения, газовые трубы, канализационные трубы.");
$APPLICATION->SetTitle("Каталоги труб");
?>

<div itemscope itemtype="https://schema.org/Article">
    <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
        <meta itemprop="name" content="<?=$arSite["NAME"]; ?>">
        <meta itemprop="telephone" content="8 800 555 28 29">
        <meta itemprop="address" content="420087, Россия, Республика Татарстан, Казань, Родины, 10">
        <link itemprop="url" href="" />
    </div>
    <h1 itemprop="name headline">Каталоги полиэтиленовых труб и фитингов</h1>
    <h4 itemprop="description">Полный каталог всех видов предлагаемых труб, а так же фитинги. Полиэтиленовые трубы, пластиковые трубы, трубы для водоснабжения, газовые трубы, канализационные трубы.</h4>
    <div itemprop="articleBody">
        <table cellpadding="3" cellspacing="1" width="100%">
            <tbody>
                <tr>
                    <td align="center" width="50%">
                    <p><a href="<?=SITE_TEMPLATE_PATH; ?>/images/catalogi/ru_frialen_catalog_2012.pdf" target="_blank"><img alt="FRIALEN : Безопасные фитинги" height="168" src="<?=SITE_TEMPLATE_PATH; ?>/images/catalogi/frialen.jpg" style="margin: 0px;" title="FRIALEN : Безопасные фитинги" width="120" /></a></p>

                    <p><a href="<?=SITE_TEMPLATE_PATH; ?>/images/catalogi/ru_frialen_catalog_2012.pdf" target="_blank"><i class="fa fa-file-pdf-o">&nbsp;</i>FRIALEN : Безопасные фитинги <small>(7.01 МБ)</small></a></p>
                    </td>
                    <td align="center" width="50%">
                    <p><a href="<?=SITE_TEMPLATE_PATH; ?>/images/catalogi/Baenninger_Catalog_Rus.pdf" target="_blank"><img alt="Фитинги из полиэтилена РЕ 100" height="168" src="<?=SITE_TEMPLATE_PATH; ?>/images/catalogi/fitingi.jpg" style="margin: 0px;" title="Фитинги из полиэтилена РЕ 100" width="120" /></a></p>

                    <p><a href="<?=SITE_TEMPLATE_PATH; ?>/images/catalogi/Baenninger_Catalog_Rus.pdf" target="_blank"><i class="fa fa-file-pdf-o">&nbsp;</i>Фитинги из полиэтилена РЕ 100 <small>(1.38 МБ)</small></a></p>
                    </td>
                </tr>
                <tr>
                    <td align="center" width="50%">
                    <p><a href="<?=SITE_TEMPLATE_PATH; ?>/images/catalogi/price-mirtrubplast.pdf" target="_blank"><img alt="Прайс" height="168" src="<?=SITE_TEMPLATE_PATH; ?>/images/catalogi/price-mirtrubplast.jpg" style="margin: 0px;" title="Прайс" width="120" /></a></p>

                    <p><a href="<?=SITE_TEMPLATE_PATH; ?>/images/catalogi/price-mirtrubplast.pdf" target="_blank"><i class="fa fa-file-pdf-o">&nbsp;</i>Прайс <small>(1.00 МБ)</small></a></p>
                    </td>
                    <td align="center" width="50%">
                    <p><a href="<?=SITE_TEMPLATE_PATH; ?>/images/catalogi/katalog.pdf" target="_blank"><img alt="Каталог продукции" height="168" src="<?=SITE_TEMPLATE_PATH; ?>/images/catalogi/katalog.jpg" style="margin: 0px;" title="Каталог продукции" width="120" /></a></p>

                    <p><a href="<?=SITE_TEMPLATE_PATH; ?>/images/catalogi/katalog.pdf" target="_blank"><i class="fa fa-file-pdf-o">&nbsp;</i>Каталог продукции <small>(6.8 МБ)</small></a></p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
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