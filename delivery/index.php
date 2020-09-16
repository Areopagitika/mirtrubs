<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Доставка");
$APPLICATION->SetPageProperty("keywords", "Информация о доставка товара компании МирТрубПласт " . $arCity["UF_WHERE"]);
$APPLICATION->SetTitle("Доставка");
?>

<div itemscope itemtype="https://schema.org/Article">
    <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
        <meta itemprop="name" content="<?=$arSite["NAME"]; ?>">
        <meta itemprop="telephone" content="8 800 555 28 29">
        <meta itemprop="address" content="420087, Россия, Республика Татарстан, Казань, Родины, 10">
        <link itemprop="url" href="<?=$APPLICATION->GetCurPage(); ?>" />
    </div>
    <h1 itemprop="name headline">Доставка</h1>
    <div itemprop="articleBody">
        <h2>Отгрузка</h2>
        <p>Отгрузка осуществляется с заводов производителей компании Миртрубпласт:</p>
        <ul>
            <li><a href="/kontakti">Казань (Республика Татарстан)</a></li>
            <li><a href="[[~800]]">Большой Сундырь (Чувашия)</a></li>
            <li><a href="[[~799]]">Балашов (Саратовская область)</a></li>
        </ul>
        <h2>Оперативная доставка труб от Миртрубласт</h2>
        <p>Компания Миртрубпласт готова организовать оперативную поставку продукции в любой регион Российской Федерации, предварительно подобрав оптимально комфортный и быстрый способ.</p>
        <h2>Как и с чем работаем?</h2>
        <p><strong>В зависимости от поставляемой клиенту продукции, логистический центр компании Миртрубпласт подбирает оптимально подходящий вариант. Так, доставка труб возможна несколькими способами.</strong></p>
        <ul>
            <li>Газель. Подходит для перевозки труб от 3 до 6 метров.</li>
            <li>Пятитонник. Оптимальный вариант для транспортировки труб до 6 метров.</li>
            <li>Еврофура. Для доставки более габаритных труб – 12-13 метров.</li>
        </ul>
        <p>Также возможна поставка продукции ж/д контейнерами. Такой способ подходит для перевозки продукции не более 11,9 метров в длину.</p>
        <h2>Сколько стоит?</h2>
        <p>Итоговая стоимость зависит от нескольких факторов. В частности, от количества транспортируемой продукции, ее длины, веса, расстояния и, конечно же, способа доставки.</p>
        <p><strong>Все тарифы на доставку обсуждаются и утверждаются с каждым клиентом в индивидуальном порядке. Чтобы узнать больше актуальной информации, свяжитесь с нами по номеру, указанному на официальном сайте компании Миртрубпласт. Мы всегда готовы помочь.</strong></p>
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