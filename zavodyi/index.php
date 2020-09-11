<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заводы");
?>

<div itemscope="" itemtype="https://schema.org/Article">
    <div itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
        <meta itemprop="name" content="<?=$arSite["NAME"]; ?>">
        <meta itemprop="telephone" content="8 800 555 28 29">
        <meta itemprop="address" content="420087, Россия, Республика Татарстан, Казань, Родины, 10">
        <link itemprop="url" href="">
    </div>
    <h1 itemprop="name headline">Заводы МИРТРУБПЛАСТ</h1>
    <h4 itemprop="description">Чем отличаются заводы МИРТРУБПЛАСТ? Сколько их?</h4>
    <div itemprop="articleBody">
        <p>Заводы отличаются производительностью труб, видами производимых труб и диаметрами.<br>
    Всего заводов 3 и отгрузка всех изделий осуществляется только с этих точек.</p>
        <p>&nbsp;</p>
        <h2>Завод Миртрубпласт —&nbsp;Казань</h2>
        <p><strong>Характеристики производимых трубы:</strong></p>
        <ul>
            <li>Диаметр производим труб: Ø 20 —&nbsp;315 мм</li>
            <li>Максимальная производительность: 5 400 тонн/год</li>
        </ul>
        <p><strong>Что тут производят:</strong></p>
        <ul>
            <li>Полиэтиленовые трубы для воды</li>
            <li>Полиэтиленовые трубы для газа</li>
            <li>Полиэтиленовые трубы для канализации (технические)</li>
            <li>Фитинги электросварные</li>
            <li>Фитинги литые</li>
            <li>Фитинги сегментные</li>
            <li>Фитинги компрессионные</li>
        </ul>
        <p><br>
        <strong>Адрес:</strong> 420087,&nbsp;Россия, Республика Татарстан,&nbsp;Казань,&nbsp;Родины, 10</p>
        <p>&nbsp;</p>
        <h2>Завод Миртрубпласт —&nbsp;Большой сундырь</h2>
        <p><strong>Характеристики производимых трубы:</strong></p>
        <ul>
            <li>Диаметр производим труб: Ø 20 —&nbsp;1 200 мм</li>
            <li>Максимальная производительность: 25&nbsp;000 тонн/год</li>
        </ul>
        <p><strong>Что тут производят:</strong></p>
        <ul>
            <li>Полиэтиленовые трубы для воды</li>
            <li>Полиэтиленовые трубы для газа</li>
            <li>Полиэтиленовые трубы для канализации (технические)</li>
            <li>Трубы в защитной оболочке для воды (МИРТЕКТ)</li>
            <li>Трубы в защитной оболочке для газа (МИРТЕКТ)</li>
            <li>Фитинги электросварные</li>
            <li>Фитинги литые</li>
            <li>Фитинги сегментные</li>
            <li>Фитинги компрессионные</li>
        </ul>
        <p><br>
        <strong>Адрес:</strong>&nbsp;429544,&nbsp;Чувашская Республика, Моргаушский район,&nbsp;село Большой Сундырь, ул.&nbsp;Советская, 23</p>
        <p>&nbsp;</p>
        <h2>Завод Миртрубпласт —&nbsp;Балашов</h2>
        <p><strong>Характеристики производимых трубы:</strong></p>
        <ul>
            <li>Диаметр производим труб: Ø 20 —&nbsp;500 мм</li>
            <li>Максимальная производительность: 4 320 тонн/год</li>
        </ul>
        <p><strong>Что тут производят:</strong></p>
        <ul>
            <li>Полиэтиленовые трубы для воды</li>
            <li>Полиэтиленовые трубы для газа</li>
            <li>Полиэтиленовые трубы для канализации (технические)</li>
            <li>Фитинги электросварные</li>
            <li>Фитинги литые</li>
            <li>Фитинги сегментные</li>
            <li>Фитинги компрессионные</li>
        </ul>
        <p><br>
        <strong>Адрес:</strong>&nbsp;412325,&nbsp;Саратовская область,&nbsp;Балашовский район, с. Репное, ул.&nbsp;Шоссейная, 6а</p>
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