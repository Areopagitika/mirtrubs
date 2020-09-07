<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found"); 

?>

<div itemscope itemtype="https://schema.org/Article">
	<h1 itemprop="name headline">404</h1>
    <div itemprop="articleBody">
		<div style='width: 100%; margin: -30px auto 0; overflow: hidden; padding-top: 25px;'>
			<div style='float: left; width: 100px; margin-right: 50px; font-size: 75px;margin-top: 45px;'>404</div>
			<div style='float: left; width: 350px; padding-top: 30px; font-size: 14px;'>
				<h2>Страница не найдена</h2>
				<p style='margin: 8px 0 0;'>Страница, на которую вы зашли, вероятно, была удалена с сайта, либо ее здесь никогда не было.</p>
				<p style='margin: 8px 0 0;'>Возможно, вы ошиблись при наборе адреса или перешли по неверной ссылке.</p>
				<h3 style='margin: 15px 0 0;'>Что делать?</h3>
				<ul style='margin: 5px 0 0 15px;'>
					<li>проверьте правильность написания адреса,</li>
					<li>перейдите на <a href='[[++site_url]]'>главную страницу</a> сайта,</li>
					<li>или <a href='javascript:history.go(-1);'>вернитесь на предыдущую страницу</a>.</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>