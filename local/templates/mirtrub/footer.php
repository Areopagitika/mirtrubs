<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<? if($APPLICATION->GetCurDir() != '/'): ?>
  <? if(in_array($APPLICATION->GetCurDir(), $arrTemltateDefault) || preg_match('#\/polietilenovie-trubi\/*#', $APPLICATION->GetCurDir()) || preg_match('#\/trubyi-mirtekt\/*#', $APPLICATION->GetCurDir()) || preg_match('#\/fitingi/fitingi-elektrosvarnyie\/*#', $APPLICATION->GetCurDir())): ?>
          </div>
        </div>
      </div>
    </section>
  <? else: ?>
          </div>
          <div class="col-md-3">
            <div class="fast-order">
              <form action="" method="post" id="quick-order">
                <div class="title">Быстрая заявка</div>
                <div class="input">
                  <input id="fullname" type="text" name="name" value="" placeholder="*Имя" />
                </div>
                <div class="input">
                  <input type="text" name="phone" value="" placeholder="*Телефон" />
                </div>
                <input id="token" type="hidden" name="token">
                <button type="submit" onclick="yaCounter25615220.reachGoal('online-zayavka'); return true;"><i class="fa fa-paper-plane-o"></i>&nbsp; Сделать заказ</button>
                          
              </form>
            </div>
            <div class="left-menu">
              <?$APPLICATION->IncludeComponent("bitrix:menu","base_menu",Array(
                  "ROOT_MENU_TYPE" => "right", 
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
            <div class="garant">
              <div class="title">Наши гарантии</div>
              <div class="text">
                <img src="<?=SITE_TEMPLATE_PATH; ?>/images/garantiya-kachestva.png" alt="Гарантия качества - ТрубПласт">
                <p><b>Почему более 65% наших клиентов становятся постоянными?</b></p>
                <ul>
                  <li><i class="fa fa-check"></i> Строго закрепляем объекты.</li>
                  <li><i class="fa fa-check"></i> Жестко прописываем сроки поставок в договоре.</li>
                  <li><i class="fa fa-check"></i> Отгружаем по п/п.</li>
                  <li><i class="fa fa-check"></i> Глубокие скидки на крупный опт и предзаказ.</li>
                  <li><i class="fa fa-check"></i> Свой автопарк.</li>
                  <li><i class="fa fa-check"></i> Есть доставка ж/д.</li>
                  <li><i class="fa fa-check"></i> Круглосуточный прием заявок и отгрузки.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <? endif;?>
<? endif; ?>

<footer itemscope itemtype="http://schema.org/Organization">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h4><a href="[[~5]]" title="Полиэтиленовые трубы">Трубы</a></h4>
          <?$APPLICATION->IncludeComponent("bitrix:menu","base_menu",Array(
              "ROOT_MENU_TYPE" => "tubing", 
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
      <div class="col-md-3">
        <h4><a href="[[~27]]" title="Фитинги для труб">Фитинги</a></h4>
        <?$APPLICATION->IncludeComponent("bitrix:menu","base_menu",Array(
            "ROOT_MENU_TYPE" => "fitings", 
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
      <div class="col-md-3">
        <h4><a href="[[~3]]" title="О компании ТрубПласт">О компании</a></h4>
        <?$APPLICATION->IncludeComponent("bitrix:menu","base_menu",Array(
            "ROOT_MENU_TYPE" => "company", 
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
      <div class="col-md-3">
        <div class="phones">
          <h4 itemprop="telephone"><a href="tel:88005552829" onclick="ym(25615220, 'reachGoal', 'phone-88005552829'); return true;">8 800 555 28 29</a></h4>
          <p itemprop="telephone" class="text-center d-block d-sm-block d-md-none"><a href="tel:+7 (843) 228-50-50" onclick="ym(25615220, 'reachGoal', 'phone-78432285050'); return true;">+7 (843) 228-50-50</a></p>
          <p itemprop="telephone" class="text-center d-block d-sm-block d-md-none"><a href="tel:+7 (843) 255-31-55" onclick="ym(25615220, 'reachGoal', 'phone-78432553155'); return true;">+7 (843) 255-31-55</a></p>
          <p itemprop="telephone" class="text-right d-none d-sm-none d-md-block"><a href="tel:+7 (843) 228-50-50" onclick="ym(25615220, 'reachGoal', 'phone-78432285050'); return true;">+7 (843) 228-50-50</a></p>
          <p itemprop="telephone" class="text-right d-none d-sm-none d-md-block"><a href="tel:+7 (843) 255-31-55" onclick="ym(25615220, 'reachGoal', 'phone-78432553155'); return true;">+7 (843) 255-31-55</a></p>
          <a href="mailto:sale@mirtrub.ru?subject=%D0%97%D0%B0%D1%8F%D0%B2%D0%BA%D0%B0%20%D0%BD%D0%B0%20%D1%82%D1%80%D1%83%D0%B1%D1%8B%20%D0%B8%20%D1%84%D0%B8%D1%82%D0%B8%D0%BD%D0%B3%D0%B8" onclick="ym(25615220, 'reachGoal', 'email-sale'); return true;" title="E-mail - Отдел продаж" target="_blank" ><span itemprop="email"><?=$arSite["EMAIL"]; ?></span></a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <br/>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="app">
          <a href="https://instagram.com/mirtrub/" title="Инстаграм - [[++site_name]]" target="_blank"><i class="fa fa-instagram"></i></a>
          <a href="https://www.youtube.com/channel/UC9V0X6gD6rIQzdQzTMxZLMA" title="Youtube - [[++site_name]]" target="_blank"><i class="fa fa-youtube"></i></a>
          <a href="https://vk.com/mir_trub_plast" title="ВКонтакте - [[++site_name]]" target="_blank"><i class="fa fa-vk"></i></a>
        </div>
      </div>
      <div class="col-md-3">
          <ul>
            <li><span itemprop="name"><?=$arSite["NAME"]; ?></span> © 2002-<?=date('Y'); ?></li>
            <li>Все права защищены.</li>
            <li><a href="https://mirtrub.ru/privacy" title="Политика персональных данных" target="_blank">Политика персональных данных</a></li>
          </ul>
      </div>
      <div class="col-md-3">
        <div class="address" style="cursor:pointer; font-size: 14px; color: #444; text-align: left; padding: 0px 0;" data-toggle="modal" data-target="#mapmodal" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><i class="fa fa-map-marker"></i> Адрес: <?=$arCity['UF_ADDRESS']; ?></div>
      </div>
      <div class="col-md-3">
        <div class="phones">
          <ul>
            <li>ИНН 2112390338 </li>
            <li>КПП 211201001</li>
            <li>ОГРН 1072136000661</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Modal mapmodal-->
<div class="modal fade" id="mapmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title w-100" id="exampleModalLongTitle">Адрес</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer text-center">
        <i class="fa fa-map-marker"></i>
      </div>
    </div>
  </div>
</div>

<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="preload">

<div class="modal fade city" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content text-left">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div class="modal-title">Выбрать город</div>
        <ul class="cfcity">
          <? foreach(\Local\City::getList() as $value): ?>
            <? 
              if($value["UF_KEY"] == $arCity["UF_KEY"]) {
                $selected = 'selected';
              } else {
                $selected = false;
              }
              if($value["UF_KEY"] !== 'kzn') {
                $url = $value["UF_KEY"] . '.' . $_SERVER["SERVER_NAME"];
              } else {
                $url = $_SERVER["SERVER_NAME"];
              }
            ?>

            <li>
              <a id="<?=$value["UF_KEY"]; ?>" href="http://<?=$url; ?>/" <? if($selected): ?>selected="selected"<? endif; ?> title="<?=$value["UF_KEY"]?>"><?=$value["UF_NAME"]; ?></a>
            </li>
          <? endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="modal fade today" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content text-left">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="modal-title">Сегодня в производстве - <?=date("d.m.Y"); ?></div>
                <div class="proizvodstvo">
                  <?
                    global $arrFavoriteFilter;
                    $arrFavoriteModalFilter = array("PROPERTY_IN_PRODUCTION" => 1)
                  ?>
                  <?$APPLICATION->IncludeComponent(
                    "bitrix:catalog.section",
                    "products.in_production",
                    Array(
                      "ACTION_VARIABLE" => "action",
                      "ADD_PICT_PROP" => "MORE_PHOTO",
                      "ADD_PROPERTIES_TO_BASKET" => "Y",
                      "ADD_SECTIONS_CHAIN" => "N",
                      "ADD_TO_BASKET_ACTION" => "ADD",
                      "AJAX_MODE" => "N",
                      "AJAX_OPTION_ADDITIONAL" => "",
                      "AJAX_OPTION_HISTORY" => "N",
                      "AJAX_OPTION_JUMP" => "N",
                      "AJAX_OPTION_STYLE" => "Y",
                      "BACKGROUND_IMAGE" => "UF_BACKGROUND_IMAGE",
                      "BASKET_URL" => "/personal/basket.php",
                      "BRAND_PROPERTY" => "BRAND_REF",
                      "BROWSER_TITLE" => "-",
                      "CACHE_FILTER" => "N",
                      "CACHE_GROUPS" => "Y",
                      "CACHE_TIME" => "36000000",
                      "CACHE_TYPE" => "A",
                      "COMPATIBLE_MODE" => "Y",
                      "CONVERT_CURRENCY" => "Y",
                      "CURRENCY_ID" => "RUB",
                      "CUSTOM_FILTER" => "",
                      "DATA_LAYER_NAME" => "dataLayer",
                      "DETAIL_URL" => "",
                      "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                      "DISCOUNT_PERCENT_POSITION" => "bottom-right",
                      "DISPLAY_BOTTOM_PAGER" => "Y",
                      "DISPLAY_TOP_PAGER" => "N",
                      "ELEMENT_SORT_FIELD" => "sort",
                      "ELEMENT_SORT_FIELD2" => "id",
                      "ELEMENT_SORT_ORDER" => "asc",
                      "ELEMENT_SORT_ORDER2" => "desc",
                      "ENLARGE_PRODUCT" => "PROP",
                      "ENLARGE_PROP" => "NEWPRODUCT",
                      "FILTER_NAME" => "arrFavoriteModalFilter",
                      "HIDE_NOT_AVAILABLE" => "N",
                      "HIDE_NOT_AVAILABLE_OFFERS" => "N",
                      "IBLOCK_ID" => getIblockID("products", "tubing"),
                      "IBLOCK_TYPE" => "products",
                      "INCLUDE_SUBSECTIONS" => "Y",
                      "LABEL_PROP" => array("NEWPRODUCT"),
                      "LABEL_PROP_MOBILE" => array(),
                      "LABEL_PROP_POSITION" => "top-left",
                      "LAZY_LOAD" => "Y",
                      "LINE_ELEMENT_COUNT" => "3",
                      "LOAD_ON_SCROLL" => "N",
                      "MESSAGE_404" => "",
                      "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                      "MESS_BTN_BUY" => "Купить",
                      "MESS_BTN_DETAIL" => "Подробнее",
                      "MESS_BTN_LAZY_LOAD" => "Показать ещё",
                      "MESS_BTN_SUBSCRIBE" => "Подписаться",
                      "MESS_NOT_AVAILABLE" => "Нет в наличии",
                      "META_DESCRIPTION" => "-",
                      "META_KEYWORDS" => "-",
                      "OFFERS_CART_PROPERTIES" => array("ARTNUMBER","COLOR_REF","SIZES_SHOES","SIZES_CLOTHES"),
                      "OFFERS_FIELD_CODE" => array("",""),
                      "OFFERS_LIMIT" => "5",
                      "OFFERS_PROPERTY_CODE" => array("COLOR_REF","SIZES_SHOES","SIZES_CLOTHES",""),
                      "OFFERS_SORT_FIELD" => "sort",
                      "OFFERS_SORT_FIELD2" => "id",
                      "OFFERS_SORT_ORDER" => "asc",
                      "OFFERS_SORT_ORDER2" => "desc",
                      "OFFER_ADD_PICT_PROP" => "MORE_PHOTO",
                      "OFFER_TREE_PROPS" => array("COLOR_REF","SIZES_SHOES","SIZES_CLOTHES"),
                      "PAGER_BASE_LINK_ENABLE" => "N",
                      "PAGER_DESC_NUMBERING" => "N",
                      "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                      "PAGER_SHOW_ALL" => "N",
                      "PAGER_SHOW_ALWAYS" => "N",
                      "PAGER_TEMPLATE" => ".default",
                      "PAGER_TITLE" => "Товары",
                      "PAGE_ELEMENT_COUNT" => "6",
                      "PARTIAL_PRODUCT_PROPERTIES" => "N",
                      "PRICE_CODE" => array("BASE"),
                      "PRICE_VAT_INCLUDE" => "Y",
                      "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons,compare",
                      "PRODUCT_DISPLAY_MODE" => "Y",
                      "PRODUCT_ID_VARIABLE" => "id",
                      "PRODUCT_PROPERTIES" => array("NEWPRODUCT","MATERIAL"),
                      "PRODUCT_PROPS_VARIABLE" => "prop",
                      "PRODUCT_QUANTITY_VARIABLE" => "",
                      "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':true}]",
                      "PRODUCT_SUBSCRIPTION" => "Y",
                      "PROPERTY_CODE" => array("DIAMETER", "MARKA", "SDR"),
                      "PROPERTY_CODE_MOBILE" => array(),
                      "RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
                      "RCM_TYPE" => "personal",
                      "SECTION_CODE" => "",
                      "SECTION_ID" => "",
                      "SECTION_ID_VARIABLE" => "SECTION_ID",
                      "SECTION_URL" => "/#SECTION_CODE_PATH#/",
                      "SECTION_USER_FIELDS" => array("",""),
                      "SEF_MODE" => "Y",
                      "SET_BROWSER_TITLE" => "Y",
                      "SET_LAST_MODIFIED" => "N",
                      "SET_META_DESCRIPTION" => "Y",
                      "SET_META_KEYWORDS" => "Y",
                      "SET_STATUS_404" => "N",
                      "SET_TITLE" => "Y",
                      "SHOW_404" => "N",
                      "SHOW_ALL_WO_SECTION" => "N",
                      "SHOW_CLOSE_POPUP" => "N",
                      "SHOW_DISCOUNT_PERCENT" => "Y",
                      "SHOW_FROM_SECTION" => "N",
                      "SHOW_MAX_QUANTITY" => "N",
                      "SHOW_OLD_PRICE" => "N",
                      "SHOW_PRICE_COUNT" => "1",
                      "SHOW_SLIDER" => "Y",
                      "SLIDER_INTERVAL" => "3000",
                      "SLIDER_PROGRESS" => "N",
                      "TEMPLATE_THEME" => "blue",
                      "USE_ENHANCED_ECOMMERCE" => "Y",
                      "USE_MAIN_ELEMENT_SECTION" => "N",
                      "USE_PRICE_COUNT" => "N",
                      "USE_PRODUCT_QUANTITY" => "N"
                    )
                  );?>
                </div>
                <div class="text-center">
                    <a class="btn-yellow mt-3 mb-2 wow shake" href="#online-order" data-toggle="modal" data-target=".online-order" data-wow-delay="2s" onclick="yaCounter25615220.reachGoal('open-form'); return true;"><i class="fa fa-check-circle-o"></i>&nbsp; Оставить заявку</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade order" id="quickOrder" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content text-left">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div class="order-product">Оставить заявку</div>
          <form action="" method="post" class="ajax_form" id="order">
            <div class="name">
              <input type="text" name="product" placeholder="Товар*: Труба для воды пэ-100 sdr-17 d63" value="" />
            </div>
            <div class="name">
              <input id="fullname" type="text" name="name" placeholder="Имя*:" value=""/>
            </div>
            <div class="email">
              <input type="text" name="phone" placeholder="Телефон*:" value=""/>
            </div>
            <div class="message">
              <textarea name="message" placeholder="Ваше сообщение:"></textarea>
            </div>
            <input id="token" type="hidden" name="token">
            <div class="btns">
              <button type="submit" onclick="yaCounter25615220.reachGoal('online-zayavka'); return true;">Оставить заявку</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade online-order" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <form action="" method="post" class="form-home" id="submit-request-form">
          <div class="form-title"><span></span> Онлайн заявка</div>
          <div class="form-desc">
            Оставьте свои данные сейчас<br>
            и мы обязательно с Вами свяжемся
          </div>
          <div class="form-name">
            <i class="fa fa-user"></i>
            <input id="fullname" type="text" name="name" value="" placeholder="Введите Имя" required>
          </div>
          <div class="form-phone">
            <i class="fa fa-phone"></i>
            <input type="text" name="phone" value="" placeholder="Введите Телефон" required>
          </div>
          <input id="token" type="hidden" name="token">
          <button type="submit" onclick="yaCounter25615220.reachGoal('online-zayavka'); return true;">Оставить заявку</button>    
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalSuccessMessage" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h5 class="modal-title">Сообщение успешно отправлено!</h5>
      </div>
    </div>
  </div>
</div>


<script>
  grecaptcha.ready(function() {
    grecaptcha.execute('6Le2DcoZAAAAAAVSAe0RKtZTAx2PJ9Iq_k2oJhIC', {action: 'submit'}).then(function(token) {
      var recaptchaResponse = document.getElementById('token');
      recaptchaResponse.value = token;
    });
  });
</script>
<script>
(async () => {
    if ('loading' in HTMLImageElement.prototype) {
        const images = document.querySelectorAll("img.lazyload");
        images.forEach(img => {
            img.src = img.dataset.src;
        });
    } else {
        // Динамически импортируем библиотеку LazySizes
        const lazySizesLib = await import('/manager/templates/ozzypro/js/lazysizes.min.js');
        // Инициализируем LazySizes (читаем data-src & class=lazyload)
        lazySizes.init(); // lazySizes применяется при обработке изображений, находящихся на странице.
    }
})();
</script>

<script defer>
    $('.m-search').click(function(){
        
        $('.m-search').addClass('open');
    });
    $('.close-x').click(function(e) { e.stopPropagation();
    $('.m-search.open').removeClass('open') })
</script>

<script defer>
    $(function () {
        $("[rel='tooltip']").tooltip();
    });
    
    function goPage(url) {
        window.location.href=url;
    }
</script>

<script defer>
    $(document).ready(function() {
    $('.minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.plus').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });
});
</script>

<script defer>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:6,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },            
            960:{
                items:4
            },
            1200:{
                items:6
            }
        },
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true
    });
</script>

<script defer>
    "use strict";
    $(function() {
        $(".youtube").each(function() {
            // Based on the YouTube ID, we can easily find the thumbnail image
            $(this).css('background-image', 'url(//i.ytimg.com/vi/' + this.id + '/sddefault.jpg)');
    
            // Overlay the Play icon to make it look like a video player
            $(this).append($('<div/>', { 'class': 'play' }));
    
            $(document).delegate('#'+this.id, 'click', function() {
                // Create an iFrame with autoplay set to true
                var iframe_url = "https://www.youtube.com/embed/" + this.id + "?autoplay=1&autohide=1&rel=0&amp;showinfo=0";
                if ($(this).data('params')) iframe_url+='&'+$(this).data('params');
    
                // The height and width of the iFrame should be the same as parent
                var iframe = $('<iframe/>', { 'frameborder': '0', 'src': iframe_url, 'width': $(this).width(), 'height': $(this).height() })
    
                // Replace the YouTube thumbnail with YouTube HTML5 Player
                $(this).replaceWith(iframe);
            });
        });
     });
</script>

<link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@17.10.0/dist/css/suggestions.min.css" type="text/css" rel="preload stylesheet" />
<script defer src="https://cdn.jsdelivr.net/npm/suggestions-jquery@17.10.0/dist/js/jquery.suggestions.min.js"></script>

<!-- Yandex.Metrika counter -->
<script defer >
   (function(m,e,t,r,i,k,a){ m[i]=m[i]||function(){ (m[i].a=m[i].a||[]).push(arguments) };
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a) })
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(25615220, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        trackHash:true
   });
</script>
<!-- /Yandex.Metrika counter -->

<!-- Google Analitics -->
<script defer>
  (function(i,s,o,g,r,a,m){ i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51971051-1', 'mirtrub.ru');
  ga('send', 'pageview');

</script>
<!-- /Google Analitics -->
</body>
</html>