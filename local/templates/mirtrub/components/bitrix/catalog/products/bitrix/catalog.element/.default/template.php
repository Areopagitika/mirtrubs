<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);

?>

<? logger($arResult); ?>

<div itemscope itemtype="https://schema.org/Product">
    <h1 itemprop="name">
		<? if($arResult["PROPERTIES"]["IN_PRODUCTION"]["VALUE"]): ?>
		<span class="online-product" rel="tooltip" data-placement="right" data-original-title="Сейчас в производстве"></span>
		<? endif; ?>
		<? if(!empty($arResult["PROPERTIES"]["LONGTITLE"]["VALUE"])): ?>
			<?=$arResult["PROPERTIES"]["LONGTITLE"]["VALUE"]; ?>
		<? else: ?>
			<?=$arResult["NAME"]; ?>
		<? endif; ?>
		 <?=$arCity["UF_WHERE"]; ?>
	</h1>
    
    <meta itemprop="sku" content="<?=$arResult["ID"]; ?>">
    
    <div id="msProduct" class="row">
        <div class="col-md-4">
			<div id="msGallery">
				<? if($arResult["PROPERTIES"]["IMAGES"]["VALUE"]): ?>
					<div class="fotorama" data-nav="thumbs" data-thumbheight="45" data-allowfullscreen="true" data-swipe="true" data-autoplay="5000">
						<? foreach($arResult["PROPERTIES"]["IMAGES"]["VALUE"] as $value): ?>
							<a itemprop="image" href="<?=CFile::GetPath($value); ?>" target="_blank">
								<img src="<?=CFile::GetPath($value); ?>" alt="" title="">
							</a>
						<? endforeach; ?>
					</div>
				<? else: ?>
					<img src="" srcset="" alt="" title="" width="100%"/>
				<? endif; ?>
			</div>
        </div>
        <div class="col-md-8">
            <form class="form-horizontal ms2_form mssaleprice_form" method="post">
                <input type="hidden" name="id" value="[[*id]]"/>
                <div class="row">
                    <div class="col-md-6">
                        <table class="product-table">
                            <? if($arResult["PROPERTIES"]["IN_PRODUCTION"]["VALUE"]): ?>
								<tr>
									<td colspan="2"><i class="fa fa-cog"></i> <span class="online-product" rel="tooltip" data-placement="right" data-original-title="Сейчас в производстве"></span> <span>Сейчас в производстве</span></td>
								</tr>
							<? endif; ?>
                            <div itemprop="additionalProperty" itemscope itemtype="http://schema.org/PropertyValue">
								<? if(!empty($arResult["PROPERTIES"]["WEIGHT"]["VALUE"])): ?>
									<tr itemprop="value" itemscope itemtype="http://schema.org/PropertyValue">
										<td itemprop="name"><?=$arResult["PROPERTIES"]["WEIGHT"]["NAME"]; ?>:</td>
										<td itemprop="value"><?=$arResult["PROPERTIES"]["WEIGHT"]["VALUE"]; ?> кг</td>
									</tr>
								<? endif; ?>
								
								<?if(!empty($arResult["PROPERTIES"]["DIAMETER"]["VALUE"])): ?>
									<tr itemprop="value" itemscope itemtype="http://schema.org/PropertyValue">
										<td itemprop="name"><?=$arResult["PROPERTIES"]["DIAMETER"]["NAME"]; ?>:</td>
										<td itemprop="value"><?=$arResult["PROPERTIES"]["DIAMETER"]["VALUE"]; ?></td>
									</tr>
								<? endif; ?>

								<?if(!empty($arResult["PROPERTIES"]["THICKNESS"]["VALUE"])): ?>
									<tr itemprop="value" itemscope itemtype="http://schema.org/PropertyValue">
										<td itemprop="name"><?=$arResult["PROPERTIES"]["THICKNESS"]["NAME"]; ?>:</td>
										<td itemprop="value"><?=$arResult["PROPERTIES"]["THICKNESS"]["VALUE"]; ?></td>
									</tr>
								<? endif; ?>

								<?if(!empty($arResult["PROPERTIES"]["LENGTH"]["VALUE"])): ?>
									<tr itemprop="value" itemscope itemtype="http://schema.org/PropertyValue">
										<td itemprop="name"><?=$arResult["PROPERTIES"]["LENGTH"]["NAME"]; ?>:</td>
										<td itemprop="value"><?=$arResult["PROPERTIES"]["LENGTH"]["VALUE"]; ?></td>
									</tr>
								<? endif; ?>

								<?if(!empty($arResult["PROPERTIES"]["PRESS"]["VALUE"])): ?>
									<tr itemprop="value" itemscope itemtype="http://schema.org/PropertyValue">
										<td itemprop="name"><?=$arResult["PROPERTIES"]["PRESS"]["NAME"]; ?>:</td>
										<td itemprop="value"><?=$arResult["PROPERTIES"]["PRESS"]["VALUE"]; ?></td>
									</tr>
								<? endif; ?>

								<?if(!empty($arResult["PROPERTIES"]["MARKA"]["VALUE"])): ?>
									<tr itemprop="value" itemscope itemtype="http://schema.org/PropertyValue">
										<td itemprop="name"><?=$arResult["PROPERTIES"]["MARKA"]["NAME"]; ?>:</td>
										<td itemprop="value"><?=$arResult["PROPERTIES"]["MARKA"]["VALUE"]; ?></td>
									</tr>
								<? endif; ?>

								<?if(!empty($arResult["PROPERTIES"]["SDR"]["VALUE"])): ?>
									<tr itemprop="value" itemscope itemtype="http://schema.org/PropertyValue">
										<td itemprop="name"><?=$arResult["PROPERTIES"]["SDR"]["NAME"]; ?>:</td>
										<td itemprop="value"><?=$arResult["PROPERTIES"]["SDR"]["VALUE"]; ?></td>
									</tr>
								<? endif; ?>
							</div>

                            <tr>
                                <td>Бренд:</td>
                                <td itemprop="brand"><?=$arSite["NAME"];?></td>
                            </tr>
							
							<?if(strpos($arResult["SECTION"]["SECTION_PAGE_URL"], "/trubyi-mirtekt/")): ?>
								<tr>
									<td>Вид:</td>
									<td>Труба в защитной оболочке</td>
								</tr>
							<? endif; ?>
                            
                        </table>
                        
                        <p>
                            Уважаемый гость, мы ценим что Вы проявили упорство и дошли до страницы с описанием товара. Поэтому готовы сделать Вам подарок в виде скидки. Чтобы узнать условия, позвоните нам на горячую линию <a href="tel:+78005552829">8 800 555 28 29</a> или напишите в чат слева.
                        </p>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="product-action" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                            
                            <? /* if(!empty($arResult["PROPERTIES"]["PRICE"]["VALUE"])): ?>
                                <div class="form-group">
                                    <div class="col-md-12 form-control-static">
                                        <div class="product-price" data-wow-delay="1s">
                                            <? if($arResult["PROPERTIES"]["PRICE_OLD"]["VALUE"]): ?>
                                            	<span class="old_price"><small><span class="mssaleprice-old-cost-<?=$arResult["ID"]; ?>"><?=$arResult["PROPERTIES"]["PRICE_OLD"]["VALUE"]; ?></span> руб.</small></span>
											<? endif; ?>
                                            <span class="mssaleprice-cost-<?=$arResult["ID"]; ?>"><?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]; ?></span> руб.
                                            <meta itemprop="price" content="<?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]; ?>">
                                            <meta itemprop="priceCurrency" content="RUB">
                                            <link itemprop="availability" href="https://schema.org/InStock">
                                            <meta itemprop="priceValidUntil" content="<?=date("Y-m-d"); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <a class="btn-tovar" href="#product" data-toggle="modal" data-target=".order" onclick="yaCounter25615220.reachGoal('open-form'); return true;">По запросу</a>
                                    </div>
                                </div>
							<? else: ?>
								<a class="btn-tovar" href="#product" data-toggle="modal" data-target=".order" onclick="yaCounter25615220.reachGoal('open-form'); return true;">По запросу</a>
							<? endif;*/ ?>

                            <a class="btn-tovar mt-3" href="#product" data-toggle="modal" data-target=".order" data-product='<? echo $arResult["PROPERTIES"]["LONGTITLE"]["VALUE"] ?: $arResult["NAME"] ?>' onclick="yaCounter25615220.reachGoal('open-form'); return true;">Запросить цену</a>

                            <div class="product-truck">
                                <icon class="icon-truck"></icon>
                                <span>Сэкономьте на услугах транспортных компаний. Закажите трубу с доставкой нашим транспортом.</span>
                            </div>
                        </div>
                        <br/>
                        <div class="product-action" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                            
                            <a class="btn-tovar mt-3" href="#product" data-toggle="modal" data-target=".order" data-product='<? echo $arResult["PROPERTIES"]["LONGTITLE"]["VALUE"] ?: $arResult["NAME"] ?>' onclick="yaCounter25615220.reachGoal('open-form'); return true;">Забронировать цену</a>

                            <div class="product-truck">
                                <icon class="icon-truck" style="background:none;"></icon>
                                <span>На текущей неделе мы продаем ПНД трубы и фитинги, произведенные по старым ценам сырья. Со следующей недели возможно подорожание!</span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
   
    
	<style>
		.product-action-preim {
			background-color: #eef3f9;
			border-radius: 4px;
			-moz-border-radius: 4px;
			-webkit-border-radius: 4px;
			padding: 1px 20px;
		}

		h3 {
			font-size: 120%;
		}

		.row-preim {
			display: -ms-flexbox;
			display: flex;
			-ms-flex-wrap: wrap;
			flex-wrap: wrap;
			margin-right: -15px;
			margin-left: -15px;
			justify-content: space-around;
		}
	</style>

	<div class="bl_1" style="display: flex; margin-top: 50px;">		
		<div class="col-md-6">
			<div itemprop="description">        
				<h2>ТРУБА ДЛЯ ВОДОСНАБЖЕНИЯ <?=$arResult["NAME"]; ?></h2>
				<?=$arResult["DETAIL_TEXT"]; ?>
			</div>
		</div>	

		<div class="col-md-6" style="padding-right: 0;">
			<div class="product-action" itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" style="padding: 1px 20px;">
				<h3 style="padding: 0px 0px 0px 20px; font-size: 110%;">Почему более 65% наших клиентов становятся постоянными?</h3>
				<div class="row">
					<div class="col-6 col-sm-6 col-md-4  text-center vigoda">
						<i class="fa fa-lock" aria-hidden="true"></i><br>
						<span>Строго закрепляем объекты</span>
					</div>
					<div class="col-6 col-sm-6 col-md-4  text-center vigoda">
						<i class="fa fa-calendar-o" aria-hidden="true"></i><br>
						<span>Жестко прописываем сроки поставок в договоре</span>
					</div>
					<div class="col-6 col-sm-6 col-md-4  text-center vigoda">
						<i class="fa fa-gift" aria-hidden="true"></i><br>
						<span>Глубокие скидки на крупный опт и предзаказ</span>
					</div>
				</div>
				<div class="row justify-content-md-center">
					<div class="col-6 col-sm-6 col-md-4  text-center vigoda">
						<i class="fa fa-truck" aria-hidden="true"></i><br>
						<span>Свой автопарк</span>
					</div>
					<div class="col-6 col-sm-6 col-md-4  text-center vigoda">
						<i class="fa fa-train" aria-hidden="true"></i><br>
						<span>Есть доставка ж/д</span>
					</div>
					<div class="col-6 col-sm-6 col-md-4  text-center vigoda">
						<i class="fa fa-clock-o" aria-hidden="true"></i><br>
						<span>Круглосуточный прием заявок и отгрузки</span>
					</div>
				</div>	
			</div>               
		</div>
	</div>
</div>
    
<h3 class="looked-title mt-4">Похожие товары</h3>
<div class="row">
	<!-- modRelated -->
</div>

<!-- looked -->

<a href="[[~[[*parent]]]]" id="backbutton">⬅</a>