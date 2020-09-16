<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Контакты");
$APPLICATION->SetPageProperty("description", "Контактные данные: адрес, телефон, дилеры и филиалы компании МирТрубПласт " . $arCity["UF_WHERE"]);
$APPLICATION->SetTitle("Контакты");
?>

<div itemscope itemtype="https://schema.org/Article">
    <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
        <meta itemprop="name" content='<?=$arSite["NAME"]; ?>'>
        <meta itemprop="telephone" content="8 800 555 28 29">
        <meta itemprop="address" content="420087, Россия, Республика Татарстан, Казань, Родины, 10">
        <link itemprop="url" href="<?=$APPLICATION->GetCurPage(); ?>" />
    </div>
    <h1 itemprop="name headline">Контакты</h1>
    <div itemprop="articleBody">
        <div itemscope="" itemtype="https://schema.org/Organization">
            <h3>Центральный офис Группы заводов — <span itemprop="name">ООО «МИРТРУБПЛАСТ»</span></h3>
            <p>&nbsp;</p> 
            <table border="0" cellpadding="5" cellspacing="1" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <tbody>
                    <tr>
                        <td><strong>Адрес центрального офиса:</strong></td>
                        <td>420087, <span itemprop="addressRegion">Россия, Республика Татарстан</span>, <span itemprop="addressLocality">Казань</span>, <span itemprop="streetAddress">Родины, 10</span></td>
                    </tr>
                    <tr>
                        <td><strong>Адрес филиала:</strong></td>
                        <? if($arCity["UF_WHERE"] == 'в Казани'): ?>
                        <td>109052, <span itemprop="addressRegion">Россия</span>, <span itemprop="addressLocality">Москва</span>, <span itemprop="streetAddress">Нижегородская, 29</span></td>
                        <? else: ?>
                            <td><?=$arCity["UF_ADDRESS"]; ?></td>
                        <? endif; ?>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><strong>Телефон для регионов:</strong></td>
                        <td itemprop="telephone"><a href="tel:88005552829" onclick="ym(25615220, 'reachGoal', 'phone-88005552829'); return true;">8 800 555 28 29</a></td>
                    </tr>
                    <tr>
                        <td><strong>Телефон центрального офиса:</strong></td>
                        <td itemprop="telephone"><a href="tel:+7 (843) 228-50-50" onclick="ym(25615220, 'reachGoal', 'phone-78432285050'); return true;">+7 (843) 228-50-50</a></td>
                    </tr>
                    <tr>
                        <td><strong>Телефон центрального офиса:</strong></td>
                        <td itemprop="telephone"><a href="tel:+7 (843) 255-31-55" onclick="ym(25615220, 'reachGoal', 'phone-78432553155'); return true;">+7 (843) 255-31-55</a></td>
                    </tr>
                    <tr>
                        <td><strong>Телефон офиса в Москве:</strong></td>
                    <td itemprop="telephone"><a href="tel:+7 (495) 975-72-51" onclick="ym(25615220, 'reachGoal', 'phone-74959757251'); return true;">+7 (495) 975-72-51</a></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><strong>График работы:</strong></td>
                        <td>Понедельник - Пятница: <b>(08:00 - 17:00)</b><br />
                        Перерыв: <b>(12:00 - 13:00)</b><br />
                        <br />
                        Суббота: <b>(08:00 - 13:00)</b><br />
                        Воскресенье: <b>(Выходной)</b></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><strong>E-mail:</strong></td>
                        <td><a href="mailto:sale@mirtrub.ru?subject=%D0%97%D0%B0%D1%8F%D0%B2%D0%BA%D0%B0%20%D0%BD%D0%B0%20%D1%82%D1%80%D1%83%D0%B1%D1%8B%20%D0%B8%20%D1%84%D0%B8%D1%82%D0%B8%D0%BD%D0%B3%D0%B8" onclick="ym(25615220, 'reachGoal', 'email-sale'); return true;" title="E-mail - Отдел продаж" target="_blank" ><span itemprop="email">sale@mirtrub.ru</span></a> (для заявок на трубы и фитинги)</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><a href="mailto:rezume@mirtrub.ru?subject=%D0%A0%D0%B5%D0%B7%D1%8E%D0%BC%D0%B5" target="_blank">rezume@mirtrub.ru</a> (для резюме)</td>
                    </tr>
                    <tr>
                        <td><strong>Карта партнера:</strong></td>
                        <td><a href="assets/uploads/karta-partnera.pdf" target="_blank">Карта партнера.pdf</a></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><strong>Генеральный директор:</strong></td>
                        <td>Хуппиев Рамзиль Муллаханович</td>
                    </tr>
                    <tr>
                        <td><strong>Главный бухгалтер:</strong></td>
                        <td>Муллахметова Диляра Равилевна</td>
                    </tr>
                </tbody>
            </table>
            <p>&nbsp;</p>
            <h3>Самовывоз труб производится с наших заводов в городах: Казань, Балашов, Сундырь.</h3>
        </div>
        <p>&nbsp;</p>
        <div class="row">
            <div class="col">
                <div class="subdomain">
                    <img src="<?=SITE_TEMPLATE_PATH; ?>/images/subdomens/vse.png" alt="">
                    <div>Полиэтиленовые трубы во Всеволожске</div>
                </div>
            </div>
            <div class="col">
                <div class="subdomain">
                    <img src="<?=SITE_TEMPLATE_PATH; ?>/images/subdomens/vbg.jpg" alt="">
                    <div>Полиэтиленовые трубы в Выборге</div>
                </div>
            </div>
            <div class="col">
                <div class="subdomain">
                    <img src="<?=SITE_TEMPLATE_PATH; ?>/images/subdomens/gat.png" alt="">
                    <div>Полиэтиленовые трубы в Гатчине</div>
                </div>
            </div>
            <div class="col">
                <div class="subdomain">
                    <img src="<?=SITE_TEMPLATE_PATH; ?>/images/subdomens/myt.png" alt="">
                    <div>Полиэтиленовые трубы в Мытищах</div>
                </div>
            </div>
            <div class="col">
                <div class="subdomain">
                    <img src="<?=SITE_TEMPLATE_PATH; ?>/images/subdomens/khi.jpg" alt="">
                    <div>Полиэтиленовые трубы в Химках</div>
                </div>
            </div>
            <div class="col">
                <div class="subdomain">
                    <img src="<?=SITE_TEMPLATE_PATH; ?>/images/subdomens/kor.png" alt="">
                    <div>Завод полиэтиленовых труб в Королёве</div>
                </div>
            </div>
            <div class="col">
                <div class="subdomain">
                    <img src="<?=SITE_TEMPLATE_PATH; ?>/images/subdomens/pod.png" alt="">
                    <div>Полиэтиленовые трубы в Подольске</div>
                </div>
            </div>
            <div class="col">
                <div class="subdomain">
                    <img src="<?=SITE_TEMPLATE_PATH; ?>/images/subdomens/bal.jpg" alt="">
                    <div>Полиэтиленовые трубы в Балашихе</div>
                </div>
            </div>
        </div>
        <p>&nbsp;</p>
        <h3>Схема проезда центрального офиса:</h3>
        <iframe frameborder="0" height="400" src="https://yandex.ru/map-widget/v1/?z=12&amp;ol=biz&amp;oid=1354494035" width="100%"></iframe>
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