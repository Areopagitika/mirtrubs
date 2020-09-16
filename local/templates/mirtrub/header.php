<?
  if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
  IncludeTemplateLangFile(__FILE__);
  use Bitrix\Main\Page\Asset;
  \CJSCore::Init();

  $GLOBALS["arSite"] = \Bitrix\Main\SiteTable::getById(SITE_ID)->fetch();
  $GLOBALS["arCity"] = \Local\City::getItem();

  $obCache = new CPHPCache();
  $obCache->CleanDir();
?>

<!DOCTYPE html>
<html lang="ru-RU" prefix="og: http://ogp.me/ns#">
<head>
  <?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle()?> - <?=$arSite["NAME"]; ?></title>
  <meta charset="<?=LANG_CHARSET; ?>">
  <?$APPLICATION->ShowMeta("description")?>
  <?$APPLICATION->ShowMeta("keywords")?>

  <meta property="og:title" content="<?$APPLICATION->ShowTitle()?>" />
  <meta property="og:site_name" content="<?=$arSite["NAME"]; ?>" />
  <meta property="og:description" content="" />
  <meta property="og:image" content="<?=SITE_TEMPLATE_PATH; ?>/images/logo-mirtrubplast.png"/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="<?=$APPLICATION->GetCurPage(); ?>" />

  <meta name="format-detection" content="telephone=yes">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
  <meta name='yandex-verification' content='5e17e4e73e432873' />
  <meta name="google-site-verification" content="VnSzzidoCO8YIE_MLbVAy1jgAp_vfek8BGZIFuhMos4" />
  <meta name="google-translate-customization" content="756ec22b15e04431-6ad9c3784c179b3c-gdadf0afd6b7ef28e-a"/>
    
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
  
  <?
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-3.3.1.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/less.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/popper.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/bootstrap.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.mmenu.min.all.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.adaptive-modal.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/owl.carousel.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/lazysizes.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.fancybox.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/libs/jquery-validation-master/jquery.validate.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/ajax.forms.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/libs/fotorama/fotorama.js");

    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/bootstrap.min.css"); 
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/style.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/dopfonts.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/libs/font-awesome-4.7.0/css/font-awesome.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/jquery.mmenu.all.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/animate.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/owl.carousel.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/jquery.fancybox.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/libs/fotorama/fotorama.css");
  ?>

<script src="https://www.google.com/recaptcha/api.js?render=6Le2DcoZAAAAAAVSAe0RKtZTAx2PJ9Iq_k2oJhIC"></script>
  
  <!-- Google Tag Manager -->
  <script defer>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-W8KFLNC');</script>
  <!-- End Google Tag Manager -->

  <noindex>
    <script defer src="https://lpt-crm.online/code/new/41083"></script>
  </noindex>
  <script src="//code.jivosite.com/widget/q5Xw7Rrgnd" defer></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="preload">
</head>
<body>
  <?$APPLICATION->ShowPanel()?>
  <div class="header-login" <?if($USER->IsAdmin()):?>style="position: relative;"<?endif?>>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-6 col-sm-6 col-md-9 col-lg-7 ">
            <?$APPLICATION->IncludeComponent(
              "bitrix:menu", 
              "top_menu", 
              array(
                "ROOT_MENU_TYPE" => "top",
                "MAX_LEVEL" => "2",
                "CHILD_MENU_TYPE" => "subtop",
                "USE_EXT" => "Y",
                "DELAY" => "N",
                "ALLOW_MULTI_SELECT" => "Y",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => array(
                ),
                "COMPONENT_TEMPLATE" => "top_menu"
              ),
              false
            );?>
            </div>
            <div class="col-sm-3 col-md-2 d-none d-sm-block d-md-none d-lg-block">
              <div class="social">
                <a href="mailto:<?=$arSite["EMAIL"]; ?>?subject=%D0%97%D0%B0%D1%8F%D0%B2%D0%BA%D0%B0%20%D0%BD%D0%B0%20%D1%82%D1%80%D1%83%D0%B1%D1%8B%20%D0%B8%20%D1%84%D0%B8%D1%82%D0%B8%D0%BD%D0%B3%D0%B8" onclick="ym(25615220, 'reachGoal', 'email-sale'); return true;" title="E-mail - Отдел продаж" target="_blank" ><?=$arSite["EMAIL"]; ?></a>
              </div>
            </div>    
            <div class="col-6 col-sm-3 col-md-3 col-lg-3">
              <div class="text-right">
                <a id="cfcity-select" href="#city" data-toggle="modal" data-target=".city"><i class="fa fa-map-marker"></i> Вы <u><?=$arCity["UF_WHERE"] ?></u>?</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
	<div id="page">
		<!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W8KFLNC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="mmenu-header">
      <a class="mmenu" href="#menu"><i class="fa fa-bars"></i></a>
    </div>
		<header>
    <div class="container">
    
    <div class="row d-none d-lg-flex">
      <div class="col-3 col-md-2">
        <a class="logo-img" href="/" title="">
        <img class="lazyload" data-src="<?=SITE_TEMPLATE_PATH; ?>/images/logo-mirtrubplast.png" loading="lazy" alt=""/></a>
      </div>
      <div class="col-9 col-md-3">
        <div class="phone"><a href="tel:88005552829" onclick="ym(25615220, 'reachGoal', 'phone-88005552829'); return true;">8 800 555 28 29</a></div>
        <div class="phone-desc">Звонок по России бесплатный</div>
      </div>
      <div class="col-md-3">
        <a class="btn-yellow mb-2 wow shake" href="#online-order" data-toggle="modal" data-target=".online-order" data-wow-delay="2s" onclick="yaCounter25615220.reachGoal('open-form'); return true;"><i class="fa fa-check-circle-o"></i>&nbsp; Оставить заявку</a>
        <a class="btn-tovar" href="#today" data-toggle="modal" data-target=".today"><i class="fa fa-cog"></i>&nbsp;Сегодня в производстве</a>
      </div>
      <div class="col-3 col-md-1">
        <img class="lazyload" data-src="<?=SITE_TEMPLATE_PATH; ?>/images/24-7.png" loading="lazy" rel="tooltip" data-placement="bottom" data-original-title="Мы работаем 24/7 (Круглосуточно и без выходных)" alt="Мы работаем 24/7 (Круглосуточно и без выходных)" title="Мы работаем 24/7 (Круглосуточно и без выходных)" style="width: 65px;">
      </div>
      <div class="col-6 col-md-3 text-right">  
        <span style="border-bottom: dotted 2px;font-size: 12px;">
          ПОЛУЧИТЬ ЦЕНУ В WATSAPP <i class="fa fa-whatsapp" aria-hidden="true"></i>
        </span>
        <br/>
        <span class="m-search" style="border-bottom: dotted 2px; cursor:pointer;font-size: 12px;">
          БЫСТРЫЙ ПОИСК ТРУБЫ <i class="fa fa-search"></i>
        </span>
      </div>
    </div>
    <div class="row d-md-flex d-lg-none">
      <div class="col-4">
        <a class="logo-img" href="/" title=""><img class="lazyload" data-src="<?=SITE_TEMPLATE_PATH; ?>/images/logo-mirtrubplast.png" loading="lazy" alt=""/></a>
      </div>
      <div class="col-8 text-right">
        <div class="phone text-right"><a href="tel:88005552829" onclick="ym(25615220, 'reachGoal', 'phone-88005552829'); return true;">8 800 555 28 29</a></div>
        <div class="phone-desc text-right">Звонок по России бесплатный</div>
      </div>
      <div class="col-6 col-sm-6 mt-1">
        <a class="btn-yellow mb-2 wow shake" href="#online-order" data-toggle="modal" data-target=".online-order" data-wow-delay="2s" onclick="yaCounter25615220.reachGoal('open-form'); return true;"><i class="fa fa-check-circle-o"></i>&nbsp; Оставить заявку</a>
      </div>
      <div class="col-6 col-sm-6 mt-1">
        <a class="btn-tovar" href="#today" data-toggle="modal" data-target=".today"><i class="fa fa-cog"></i>&nbsp;в производстве</a>
      </div>
      <div class="col-6 col-sm-6 mt-1 text-center">
        <span style="border-bottom: dotted 2px;font-size: 11px;">
          НАПИСАТЬ НАМ В WATSAPP <i class="fa fa-whatsapp" aria-hidden="true"></i>
        </span>
      </div>
      <div class="col-6 col-sm-6 mt-1 text-center">
        <span class="m-search" style="border-bottom: dotted 2px; cursor:pointer;font-size: 11px;">
          БЫСТРЫЙ ПОИСК ТРУБЫ <i class="fa fa-search"></i>
        </span>
      </div>
    </div>    
  </div>
</header>
<?$APPLICATION->IncludeComponent("bitrix:menu","main_menu",Array(
    "ROOT_MENU_TYPE" => "main", 
    "MAX_LEVEL" => "2", 
    "CHILD_MENU_TYPE" => "submain", 
    "USE_EXT" => "Y",
    "DELAY" => "N",
    "ALLOW_MULTI_SELECT" => "Y",
    "MENU_CACHE_TYPE" => "N", 
    "MENU_CACHE_TIME" => "3600", 
    "MENU_CACHE_USE_GROUPS" => "Y", 
    "MENU_CACHE_GET_VARS" => "" 
  )
);?>
<? $arrTemltateDefault = ['/', '/o-kompanii/nashi-lica/', '/search/', '/polietilenovie-trubi/', '/trubyi-mirtekt/', '/fitingi/']?>
<? if($APPLICATION->GetCurDir() != '/'): ?>
  <? if(in_array($APPLICATION->GetCurDir(), $arrTemltateDefault) || preg_match('#\/polietilenovie-trubi\/*#', $APPLICATION->GetCurDir()) || preg_match('#\/trubyi-mirtekt\/*#', $APPLICATION->GetCurDir()) || preg_match('#\/fitingi/fitingi-elektrosvarnyie\/*#', $APPLICATION->GetCurDir())): ?>
    <section>
      <div class="container contentblock">
        <div class="row">
          <div class="col-md-12">
          <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "main", Array(
              "START_FROM" => "0", 
              "PATH" => "", 
              "SITE_ID" => "s1" 
            )
          );?>
  <? else: ?>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-9">
          <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "main", Array(
              "START_FROM" => "0", 
              "PATH" => "", 
              "SITE_ID" => "s1" 
            )
          );?>
  <? endif; ?>
<? endif; ?>