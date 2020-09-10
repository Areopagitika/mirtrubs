<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "завод по производству полиэтиленовых труб, трубные заводы полиэтиленовых труб, завод производство пэ труб");
$APPLICATION->SetPageProperty("title", "Завод по производству и изготовлению полиэтиленовых (ПЭТ) труб #WHERE#");
$APPLICATION->SetPageProperty("description", "Завод изготовитель полиэтиленовых (ПЭ) труб. Поставка полиэтиленовых труб #WHERE#. Завод полиэтиленовых труб официальный сайт");
$APPLICATION->SetTitle("Главная");
?>

<section>
	<div class="container">
		<div class="row">
			<div class="col">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="lazyload" data-src="<?=SITE_TEMPLATE_PATH; ?>/slider/fitingi-segmentnie.png" loading="lazy" alt="">
							<div class="slider-title">
								Новый цех сварных фитингов
							</div>
							<div class="slider-text">
								<div>Открыт новых цех по производству сварных фитингов.</div>
								<div>Принимаем заявки!</div>
							</div>
							<a class="btn-slider" href="#product" data-toggle="modal" data-target=".order" onclick="yaCounter25615220.reachGoal('open-form'); return true;">Оставить заявку</a>
						</div>
						
						<div class="carousel-item">
							<img class="lazyload" data-src="<?=SITE_TEMPLATE_PATH; ?>/slider/pe-truba-710.png" loading="lazy" alt="">
							<div class="slider-title">
								Производство ПЭ трубы 710 диаметра
							</div>
							<div class="slider-text">
								<div>Мы запустили в производство полиэтиленовую трубу 710 диаметра.</div>
								<div>Принимаем заявки!</div>
							</div>
							<a class="btn-slider" href="#product" data-toggle="modal" data-target=".order" onclick="yaCounter25615220.reachGoal('open-form'); return true;">Оставить заявку</a>
						</div>
						
						<div class="carousel-item">
							
							<picture>
							<source srcset="<?=SITE_TEMPLATE_PATH; ?>/slider/map-russia-sm.png" media="(max-width: 768px)">
								<source srcset="<?=SITE_TEMPLATE_PATH; ?>/slider/map-russia-1.png">
								<img class="lazyload" data-src="<?=SITE_TEMPLATE_PATH; ?>/slider/map-russia-1.png" loading="lazy" alt="">
							</picture>
							<!--
							<img class="lazyload" data-src="assets/uploads/slider/map-russia.png" loading="lazy" alt="">
							-->
							<div class="slider-title">
								Отгрузка с заводов:
							</div>
							<div class="slider-text">
								<div><span></span> Казань</div>
								<div><span></span> Большой сундырь (Чебоксары)</div>
								<div><span></span> Балашов (Саратовская область)</div>
							</div>
							<a class="btn-slider" href="/zavodyi/">Подробнее</a>
						</div>
						
						<div class="carousel-item">
							<picture>
							<source srcset="<?=SITE_TEMPLATE_PATH; ?>/slider/polietilenovie-trubi-sm.png" media="(max-width: 768px)">
								<source srcset="<?=SITE_TEMPLATE_PATH; ?>/slider/polietilenovie-trubi.png">
								<img class="lazyload" data-src="<?=SITE_TEMPLATE_PATH; ?>/slider/polietilenovie-trubi.png" loading="lazy" alt="">
							</picture>
							<!--
							<img class="lazyload" data-src="assets/uploads/slider/polietilenovie-trubi.png" loading="lazy" alt="">
							-->
							<div class="slider-title">
								Полиэтиленовые трубы
							</div>
							<div class="slider-text">
								<div><span></span> Трубы для воды</div>
								<div><span></span> Трубы для газа</div>
								<div><span></span> Трубы для канализации</div>
							</div>
							<a class="btn-slider" href="/polietilenovie-trubi/">Открыть</a>
						</div>
						
						<div class="carousel-item">
							<img class="lazyload" data-src="<?=SITE_TEMPLATE_PATH; ?>/slider/polietilenovie-trubi-dlya-vodi.png" loading="lazy" alt="">
							<div class="slider-title">
								ПНД трубы для воды
							</div>
							<div class="slider-text">
								<div><span></span> Диаметр: Ø D20 - D1200</div>
								<div><span></span> SDR: 7,4 - 33</div>
								<div><span></span> ГОСТ: 18599-2003</div>
							</div>
							<a class="btn-slider" href="/polietilenovie-trubi/trubi-dlya-vodosnabjeniya/">Выбрать трубы</a>
						</div>
						
						<div class="carousel-item">
							<picture>
							<source srcset="<?=SITE_TEMPLATE_PATH; ?>/slider/polietilenovie-trubi-dlya-gaza-sm.png" media="(max-width: 768px)">
								<source srcset="<?=SITE_TEMPLATE_PATH; ?>/slider/polietilenovie-trubi-dlya-gaza-1.png">
								<img class="lazyload" data-src="<?=SITE_TEMPLATE_PATH; ?>/slider/polietilenovie-trubi-dlya-gaza-1.png" loading="lazy" alt="">
							</picture>
							<!--
							<img class="lazyload" data-src="assets/uploads/slider/polietilenovie-trubi-dlya-gaza.png" loading="lazy" alt="">
							-->
							<div class="slider-title">
								ПНД трубы для газа
							</div>
							<div class="slider-text">
								<div><span></span> Диаметр: Ø D32 - D560</div>
								<div><span></span> SDR: 7,4 - 17,5</div>
								<div><span></span> ГОСТ: Р50838-2009</div>
							</div>
							<a class="btn-slider" href="/polietilenovie-trubi/trubi-dlya-gazoprovodov/">Выбрать трубы</a>
						</div>
						
						<div class="carousel-item">
							<picture>
							<source srcset="<?=SITE_TEMPLATE_PATH; ?>/slider/polietilenovie-trubi-tehnicheskie-sm.png" media="(max-width: 768px)">
								<source srcset="<?=SITE_TEMPLATE_PATH; ?>/slider/polietilenovie-trubi-tehnicheskie-sm.png">
								<img class="lazyload" data-src="assets/uploads/slider/polietilenovie-trubi-tehnicheskie-1.png" loading="lazy" alt="">
							</picture>
							<!--
							<img class="lazyload" data-src="assets/uploads/slider/polietilenovie-trubi-tehnicheskie.png" loading="lazy" alt="">
							-->
							<div class="slider-title">
								ПНД трубы для канализации
							</div>
							<div class="slider-text">
								<div><span></span> Диаметр: Ø D32 - D160</div>
								<div><span></span> ГОСТ: 22689.0-89</div>
							</div>
							<a class="btn-slider" href="/polietilenovie-trubi/trubyi-dlya-kanalizaczii/">Выбрать трубы</a>
						</div>
						
						<div class="carousel-item">
							<img class="lazyload" data-src="<?=SITE_TEMPLATE_PATH; ?>/slider/mirtekt.png" loading="lazy" alt="">
							<div class="slider-title">
								Трубы в защитной оболочке (МИРТЕКТ)
							</div>
							<div class="slider-text">
								<div><span></span> Трубы для воды</div>
								<div><span></span> Трубы для газа</div>
							</div>
							<a class="btn-slider" href="/trubyi-mirtekt/">Выбрать трубы</a>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-6 col-md-6 col-lg-3 text-center">
				<a href="/polietilenovie-trubi/" class="catblock ">
					<img class="lazyload" data-src="<?=SITE_TEMPLATE_PATH; ?>/images/products_vod.jpg" loading="lazy" alt="">
					<div class="catzag">Полиэтиленовые<br/>трубы</div>
				</a>
			</div>
			<div class="col-6 col-md-6 col-lg-3 text-center">
				<a href="/trubyi-mirtekt/" class="catblock">
					<img class="lazyload" data-src="<?=SITE_TEMPLATE_PATH; ?>/images/products_vod_z.jpg" loading="lazy" alt="">
					<div class="catzag">Трубы<br/>с защитой</div>
				</a>
			</div>
			<div class="col-6 col-md-6 col-lg-3 text-center">
				<a href="/fitingi/" class="catblock ">
					<img class="lazyload" data-src="<?=SITE_TEMPLATE_PATH; ?>/images/products_fit.jpg" loading="lazy" alt="">
					<div class="catzag">Фитинги<br/>для труб</div>
				</a>
			</div>
			<div class="col-6 col-md-6 col-lg-3 text-center">
				<a href="/svarochnoe-oborudovanie/" class="catblock ">
					<img class="lazyload" data-src="<?=SITE_TEMPLATE_PATH; ?>/images/products_obor.jpg" loading="lazy" alt="">
					<div class="catzag">Сварочное<br/>оборудование</div>
				</a>
			</div>
			<div class="col-6 col-md-6 col-lg-3 text-center">
				<a href="/svarochnoe-oborudovanie/" class="catblock ">
					<img class="lazyload" data-src="<?=SITE_TEMPLATE_PATH; ?>/images/products_flanc.jpg" loading="lazy" alt="">
					<div class="catzag">Офланцованные<br/>изделия</div>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="video -d-none -d-md-block">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-4">
				<h3>ТОП продаж</h3>
				<a href="/trubyi-mirtekt/trubyi-v-zashhitnoj-obolochke-dlya-gaza/pe-100-sdr-11-d-400/" class="toplink p-2 mb-1 pl-4">Труба ПНД ПЭ 100 SDR 17 D 160 <i class="fa fa-long-arrow-right"></i></a>
				<a href="/trubyi-mirtekt/trubyi-v-zashhitnoj-obolochke-dlya-gaza/pe-100-sdr-17-d-63/" class="toplink p-2 mb-1 pl-4">Труба ПНД ПЭ 100 SDR 17 D 63 <i class="fa fa-long-arrow-right"></i></a>
				<a href="/trubyi-mirtekt/trubyi-v-zashhitnoj-obolochke-dlya-gaza/pe-100-sdr-17-d-225/" class="toplink p-2 mb-1 pl-4">Труба ПНД ПЭ 100 SDR 17 D 225 <i class="fa fa-long-arrow-right"></i></a>
				<a href="/trubyi-mirtekt/trubyi-v-zashhitnoj-obolochke-dlya-gaza/pe-100-sdr-17-d-315/" class="toplink p-2 mb-1 pl-4">Труба ПНД ПЭ 100 SDR 17 D 315 <i class="fa fa-long-arrow-right"></i></a>
			</div>
			<div class="col-sm-12 col-md-4">
				<h3>&nbsp;</h3>
				<a href="/trubyi-mirtekt/trubyi-v-zashhitnoj-obolochke-dlya-gaza/pe-100-sdr-11-d-90/" class="toplink p-2 mb-1 pl-4">Труба ПНД ПЭ 100 SDR 11 D 90 <i class="fa fa-long-arrow-right"></i></a>
				<a href="/trubyi-mirtekt/trubyi-v-zashhitnoj-obolochke-dlya-gaza/pe-100-sdr-11-d-63/" class="toplink p-2 mb-1 pl-4">Труба ПНД ПЭ 100 SDR 11 D 63 <i class="fa fa-long-arrow-right"></i></a>
				<a href="/trubyi-mirtekt/trubyi-v-zashhitnoj-obolochke-dlya-gaza/pe-100-sdr-11-d-160/" class="toplink p-2 mb-1 pl-4">Труба ПНД ПЭ 100 SDR 11 D 160 <i class="fa fa-long-arrow-right"></i></a>
				<a href="/trubyi-mirtekt/trubyi-v-zashhitnoj-obolochke-dlya-gaza/pe-100-sdr-13,6-d-160/" class="toplink p-2 mb-1 pl-4">Труба ПНД ПЭ 100 SDR 13.6 D 160 <i class="fa fa-long-arrow-right"></i></a>
			</div>
			<div class="col-md-4">
				<h3 class="text-center d-none d-md-block">Знаки качества</h3>
				<div class="znaki">
					<img class="lazyload" data-src="<?=SITE_TEMPLATE_PATH; ?>/images/logo-nzk.png" loading="lazy" alt=""/>
					<img class="lazyload" data-src="<?=SITE_TEMPLATE_PATH; ?>/images/tovar-goda.png" loading="lazy" alt=""/>
				</div>
			</div>
		</div>
				
		<div class="row">
			<div class="col-md-4">
				<div class="category-trub">
					<a class="water" href="/polietilenovie-trubi/trubi-dlya-vodosnabjeniya/">Трубы для воды</a>
					<div class="truba">От Ø32 до Ø90 <a href="#product" data-toggle="modal" data-target=".order" onclick="yaCounter25615220.reachGoal('open-form'); return true;">Заказать трубу</a></div>
					<div class="truba">От Ø110 до Ø140 <a href="#product" data-toggle="modal" data-target=".order" onclick="yaCounter25615220.reachGoal('open-form'); return true;">Заказать трубу</a></div>
					<div class="truba">От Ø160 до Ø280 <a href="#product" data-toggle="modal" data-target=".order" onclick="yaCounter25615220.reachGoal('open-form'); return true;">Заказать трубу</a></div>
					<div class="truba">От Ø315 до Ø450 <a href="#product" data-toggle="modal" data-target=".order" onclick="yaCounter25615220.reachGoal('open-form'); return true;">Заказать трубу</a></div>
					<div class="truba">От Ø500 до Ø1200 <a href="#product" data-toggle="modal" data-target=".order" onclick="yaCounter25615220.reachGoal('open-form'); return true;">Заказать трубу</a></div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="category-trub">
					<a class="gas" href="/polietilenovie-trubi/trubi-dlya-gazoprovodov/">Трубы для газа</a>
					<div class="truba">От Ø32 до Ø90 <a href="#product" data-toggle="modal" data-target=".order" onclick="yaCounter25615220.reachGoal('open-form'); return true;">Заказать трубу</a></div>
					<div class="truba">От Ø110 до Ø140 <a href="#product" data-toggle="modal" data-target=".order" onclick="yaCounter25615220.reachGoal('open-form'); return true;">Заказать трубу</a></div>
					<div class="truba">От Ø160 до Ø280 <a href="#product" data-toggle="modal" data-target=".order" onclick="yaCounter25615220.reachGoal('open-form'); return true;">Заказать трубу</a></div>
					<div class="truba">От Ø315 до Ø450 <a href="#product" data-toggle="modal" data-target=".order" onclick="yaCounter25615220.reachGoal('open-form'); return true;">Заказать трубу</a></div>
					<div class="truba">От Ø500 до Ø630 <a href="#product" data-toggle="modal" data-target=".order" onclick="yaCounter25615220.reachGoal('open-form'); return true;">Заказать трубу</a></div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="category-trub">
					<a class="drain" href="/polietilenovie-trubi/trubyi-dlya-kanalizaczii/">Трубы для канализации</a>
					<div class="truba">Труба Ø50 (L-3) <a href="#product" data-toggle="modal" data-target=".order" onclick="yaCounter25615220.reachGoal('open-form'); return true;">Заказать трубу</a></div>
					<div class="truba">Труба Ø110 (L-0,25) <a href="#product" data-toggle="modal" data-target=".order" onclick="yaCounter25615220.reachGoal('open-form'); return true;">Заказать трубу</a></div>
					<div class="truba">Труба Ø110 (L-3) <a href="#product" data-toggle="modal" data-target=".order" onclick="yaCounter25615220.reachGoal('open-form'); return true;">Заказать трубу</a></div>
					<div class="truba">Труба Ø160 (L-2) <a href="#product" data-toggle="modal" data-target=".order" onclick="yaCounter25615220.reachGoal('open-form'); return true;">Заказать трубу</a></div>
					<div class="truba">Труба Ø160 (L-1) <a href="#product" data-toggle="modal" data-target=".order" onclick="yaCounter25615220.reachGoal('open-form'); return true;">Заказать трубу</a></div>
				</div>
			</div>
		</div>			
	</div>
</section>

<section class="_advantages">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Почему выгодно покупать в <?=$arSite["NAME"]; ?></h3>
			</div>	
			<div class="col-6 col-sm-6 col-md-3 col-lg-2 text-center vigoda">
				<i class="fa fa-certificate" aria-hidden="true"></i><br/>
				<span>Сертификация качества</span>
			</div>
			<div class="col-6 col-sm-6 col-md-3 col-lg-2 text-center vigoda">
				<i class="fa fa-handshake-o" aria-hidden="true"></i><br/>
				<span>Цены завода производителя</span>
			</div>
			<div class="col-6 col-sm-6 col-md-3 col-lg-2 text-center vigoda">
				<i class="fa fa-truck" aria-hidden="true"></i><br/>
				<span>Поставки точно в срок, без задержек</span>
			</div>
			<div class="col-6 col-sm-6 col-md-3 col-lg-2 text-center vigoda">
				<i class="fa fa-industry" aria-hidden="true"></i><br/>
				<span>Заводская гарантия качества на всю продукцию</span>
			</div>
			<div class="col-6 col-sm-6 col-md-3 col-lg-2 text-center vigoda">
				<i class="fa fa-bolt" aria-hidden="true"></i><br/>
				<span>Быстрая реакция. От заявки до расчёта не более – 2 часов</span>
			</div>
			<div class="col-6 col-sm-6 col-md-3 col-lg-2 text-center vigoda">
				<i class="fa fa-bullhorn" aria-hidden="true"></i><br/>
				<span>Широкий ассортимент труб по диаметру от 20 до 1200 и SDR</span>
			</div>
			<div class="col-6 col-sm-6 col-md-3 col-lg-2 text-center vigoda">
				<i class="fa fa-comments" aria-hidden="true"></i><br/>
				<span>Максимально гибкие условия работы для постоянных клиентов</span>
			</div>
			<div class="col-6 col-sm-6 col-md-3 col-lg-2 text-center vigoda">
				<i class="fa fa-sitemap" aria-hidden="true"></i><br/>
				<span>Отлаженная и простая технология работы с клиентами и партнёрами</span>
			</div>
			<div class="col-6 col-sm-6 col-md-3 col-lg-2 text-center vigoda">
				<i class="fa fa-users" aria-hidden="true"></i><br/>
				<span>Наши менеджеры берут на себя все заботы по оформлению документов</span>
			</div>
			<div class="col-6 col-sm-6 col-md-3 col-lg-2 text-center vigoda">
				<i class="fa fa-thumbs-o-up" aria-hidden="true"></i><br/>
				<span>Высокотехнологичное оборудование и контроль на всех стадиях производства</span>
			</div>
			<div class="col-6 col-sm-6 col-md-3 col-lg-2 text-center vigoda">
				<i class="fa fa-rocket" aria-hidden="true"></i><br/>
				<span>Собственные склады в Казани, Чебоксарах (д. Б. Сундырь), Саратовская обл. г. Балашов</span>
			</div>
			<div class="col-6 col-sm-6 col-md-3 col-lg-2 text-center vigoda">
				<i class="fa fa-check-square" aria-hidden="true"></i><br/>
				<span>Максимально удобно сделать заявку и связаться с нами по всем доступным каналам связи</span>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container contentblock">
		<div class="row">
			<div class="col-md-12">
				<h1>Завод полиэтиленовых труб «Миртрубпласт»&nbsp;</h1>
				<p>Завод по производству полиэтиленовых труб «Миртрубпласт» предлагает современные решения для прокладки различных трубопроводов промышленного и бытового назначения. Поставляем только качественную продукцию, выполненную по всем стандартам с соблюдением всех тонкостей технологического процесса.</p>
				<h2>Передовой завод по изготовлению полиэтиленовых труб</h2>
				<p><img alt="" class="lazyload" data-src="<?=SITE_TEMPLATE_PATH; ?>/images/truba-1.jpg" height="225" loading="lazy" src="null" style="float:right" width="300" />Производство ПЭ трубы – ответственный и сложный с технологической точки зрения процесс. Однако у нас есть все необходимое, чтобы организовать его слаженно и эффективно.</p>
				<p>В частности, производство ПЭ труб в рамках «Миртрубпласт» основывается на исключительно высококлассном сырье, поставляемом только проверенными дилерами. Вся готовая продукция компании имеет сертификаты и соответствует всем стандартам качества.</p>
				<p>Стоит отметить, что производство полиэтиленовых труб только в Казани – это около 25% от общего российского рынка. В среднем мы выпускаем до 57 тыс. тонн разноплановой продукции в год. И благодаря такому колоссальному опыту, мы готовы предложить лучшее решение для ваших целей.</p>
				<h2>Полиэтиленовые трубы <?=$arCity["UF_WHERE"]; ?> от «Миртрубпласт»</h2>
				<p>Если вы давно ищете современные трубные заводы по производству полиэтиленовых труб, компания «Миртрубпласт» готова выполнить любой заказ в строго оговоренные сроки и организовать оперативную доставку продукции в пункт назначения.</p>
				<p>Мы, как завод-изготовитель полиэтиленовых труб, тщательно следим за каждым производственным шагом и строго контролируем соблюдение технологического процесса. Как результат – 100% качество готовых трубопроводов разного диаметра, толщины и длины.</p>
				<h2>Качественные ПЭ трубы <?=$arCity["UF_WHERE"]; ?> или почему с нами удобно</h2>
				<p>Как и другие заводы-производители ПЭ труб, мы работаем с клиентами по всей России и готовы оперативно доставить готовую продукцию в любой регион без исключения. Но не только поэтому к нам обращаются и с нами остаются.</p>
				<p><strong>Завод ПЭ труб «Миртрубпласт» выбирают по нескольким причинам.</strong></p>
				<ul>
					<li>Ни одна заявка, поступающая на трубный завод ПЭ труб не остается без внимания. Менеджер всегда моментально реагирует и подсчитывает предварительный бюджет заказа в индивидуальном порядке.</li>
					<li>Действующий завод, в частности производство ПЭ труб, строго контролируется специалистами. На выходе получается исключительно качественная продукция.</li>
					<li>В работе задействуем исключительно современное оборудование и инновационные технологии.</li>
					<li>Производим и реализуем сами – без дилеров. У нас можно купить полиэтиленовые трубы оптом без наценок по заводским ценам.</li>
					<li>Вся выпускаемая продукция идет с гарантией качества. На выходе мы также оформляем все необходимые документы.</li>
				</ul>
				<p>Наконец, завод полиэтиленовых труб предоставляет комфортную многоканальную связь через официальный сайт, по электронной почте и бесплатному номеру телефона. В любое время вы можете связаться с менеджером и проконсультироваться по любому вопросу.</p>
				<h2>Поставка полиэтиленовых труб по всей России</h2>
				<p>Чтобы оформить заказ на поставку уже готовых труб нужной вам маркировки, свяжитесь с менеджером компании по бесплатному номеру телефона или оставьте электронную заявку в предложенной форме на сайте. Мы также готовы выполнить индивидуальный заказ.</p>
				<p><strong>Поставка возможна как по региону, так и всей России. Звоните и узнайте больше о сотрудничестве с «Миртрубпласт».</strong></p>
			</div>
		</div>
	</div>
</section>

<section class="partner mt-4 mb-4">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Партнеры <?=$arSite["NAME"]; ?></h3>                
			</div>
			<div class="col-6 col-sm-6 col-md-3 col-lg-3 mt-2">
				<img class="lazyload part_img" data-src="<?=SITE_TEMPLATE_PATH; ?>/images/partner/logo_kli_7.png" loading="lazy" alt="Унистрой - партнер {$_modx->config.site_name}"/>
			</div>
			<div class="col-6 col-sm-6 col-md-3 col-lg-3 mt-2">
				<img class="lazyload part_img" data-src="<?=SITE_TEMPLATE_PATH; ?>/images/partner/logo_kli_1.png" loading="lazy" alt="Мираторг - партнер {$_modx->config.site_name}"/>
			</div>
			<div class="col-6 col-sm-6 col-md-3 col-lg-3 mt-2">
				<img class="lazyload part_img" data-src="<?=SITE_TEMPLATE_PATH; ?>/images/partner/logo_kli_4.png" loading="lazy" alt="Мурманский водоканал - партнер {$_modx->config.site_name}"/>
			</div>
			<div class="col-6 col-sm-6 col-md-3 col-lg-3 mt-2">
				<img class="lazyload part_img" data-src="<?=SITE_TEMPLATE_PATH; ?>/images/partner/logo_kli_5.png" loading="lazy" alt="Учалинский ГОК - партнер {$_modx->config.site_name}"/>
			</div>
			<div class="col-6 col-sm-6 col-md-3 col-lg-3 mt-2" style="padding: 0px 70px;">
				<img class="lazyload" data-src="<?=SITE_TEMPLATE_PATH; ?>/images/partner/logo_kli_6.png" loading="lazy" alt="Московское метро - партнер {$_modx->config.site_name}"/>
			</div>
			<div class="col-6 col-sm-6 col-md-3 col-lg-3 mt-2">
				<img class="lazyload part_img" data-src="<?=SITE_TEMPLATE_PATH; ?>/images/partner/logo_kli_3.png" loading="lazy" alt="УралКалий - партнер {$_modx->config.site_name}"/>
			</div>
			<div class="col-6 col-sm-6 col-md-3 col-lg-3 mt-2">
				<img class="lazyload part_img" data-src="<?=SITE_TEMPLATE_PATH; ?>/images/partner/logo_kli_2.png" loading="lazy" alt="Завод имени Свердлова - партнер {$_modx->config.site_name}"/>
			</div>
			<div class="col-6 col-sm-6 col-md-3 col-lg-3 mt-2">
				<img class="lazyload part_img" data-src="<?=SITE_TEMPLATE_PATH; ?>/images/partner/logo_kli_8.png" loading="lazy" alt="ООО Алойл - партнер {$_modx->config.site_name}"/>
			</div>
		</div>
	</div>
</section>
	    
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="youtube" id="6HLGdm6-MVg" style="width:100%; height:300px;"></div>
				<div class="news">
					<div class="news-title"><a href="[[~6]]">Новости</a></div>
					<?$APPLICATION->IncludeComponent(
						"bitrix:news.list", 
						"news_main", 
						array(
							"DISPLAY_DATE" => "Y",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"AJAX_MODE" => "N",
							"IBLOCK_TYPE" => "news",
							"IBLOCK_ID" => getIblockID("news", "news"),
							"NEWS_COUNT" => "5",
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
								0 => "DESCRIPTION",
								1 => "",
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
							"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
							"ADD_SECTIONS_CHAIN" => "Y",
							"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
							"PARENT_SECTION" => "",
							"PARENT_SECTION_CODE" => "",
							"INCLUDE_SUBSECTIONS" => "Y",
							"CACHE_TYPE" => "A",
							"CACHE_TIME" => "3600",
							"CACHE_FILTER" => "Y",
							"CACHE_GROUPS" => "Y",
							"DISPLAY_TOP_PAGER" => "N",
							"DISPLAY_BOTTOM_PAGER" => "N",
							"PAGER_TITLE" => "Новости",
							"PAGER_SHOW_ALWAYS" => "Y",
							"PAGER_TEMPLATE" => "",
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
							"COMPONENT_TEMPLATE" => "news_main",
							"STRICT_SECTION_CHECK" => "N",
							"FILE_404" => ""
						),
						false
					);?>                 
				</div>
			</div>
			<div class="col-md-6">
				<div class="proizvodstvo">
					<div class="title">Сегодня в производстве - <?=date("d.m.Y"); ?></div>
					<?
						global $arrFavoriteFilter;
						$arrFavoriteFilter = array("PROPERTY_IN_PRODUCTION" => 1)
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
							"FILTER_NAME" => "arrFavoriteFilter",
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
							"SECTION_URL" => "",
							"SECTION_USER_FIELDS" => array("",""),
							"SEF_MODE" => "N",
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
					<div class="text-center">
						<a class="btn-yellow mb-2 wow shake" href="#online-order" data-toggle="modal" data-target=".online-order" data-wow-delay="2s" onclick="yaCounter25615220.reachGoal('open-form'); return true;"><i class="fa fa-check-circle-o"></i>&nbsp; Оставить заявку</a>
					</div>
				</div>
			</div>		
		</div>
	</div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>