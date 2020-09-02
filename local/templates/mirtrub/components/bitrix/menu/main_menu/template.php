<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="sticky-top">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="menu" id="menu">
                <? logger($arResult); ?>
                    <?if (!empty($arResult)):?>
                        <ul>
                            <li>
                                <a href="#" data-toggle="modal" data-target=".order">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span style="font-size:10px;opacity: 0.5;">Быстрый заказ</span>
                                </a> 
                            </li>
                            <?
                            $previousLevel = 0;
                            foreach($arResult as $arItem):
                            ?>
                            <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
                            <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
                            <?endif?>

                                <?if ($arItem["IS_PARENT"]):?>
                                        <li class="first">
                                            <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                                            <ul>
                                <?else:?>

                                    <?if ($arItem["PERMISSION"] > "D"):?>
                                            <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                                    <?endif?>

                                <?endif?>

                                <?$previousLevel = $arItem["DEPTH_LEVEL"];?>

                            <?endforeach?>

                            <?if ($previousLevel > 1)://close last item tags?>
                                <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
                            <?endif?>

                            <ul class="d-sm-block d-md-none">
                                <li class="first"><a href="o-kompanii/">О компании</a>
                                    <ul class="">
                                        <li class="first"><a href="o-kompanii/istoriya-kompanii">История компании</a></li>
                                        <li><a href="o-kompanii/proizvodstvo">Производство</a></li>
                                        <li><a href="o-kompanii/nashi-lica">Наш коллектив</a></li>
                                        <li><a href="o-kompanii/foto/">Фотогалерея</a></li>
                                        <li><a href="o-kompanii/diplomi-blagodarnosti">Дипломы и благодарности</a></li>
                                        <li><a href="o-kompanii/sertifikaty/">Документация</a>
                                            <ul class="">
                                                <li class="first"><a href="o-kompanii/sertifikaty/gostyi">ГОСТы</a></li>
                                                <li class="last"><a href="o-kompanii/sertifikaty/katalogi-trub">Каталоги труб</a></li>
                                            </ul>
                                        </li>
                                        <li class="last"><a href="o-kompanii/otzivi/">Отзывы</a></li>
                                    </ul>
                                </li>
                                <li><a href="delivery">Доставка</a></li>
                                <li><a href="news/">Новости</a></li>
                                <li><a href="vakansii">Вакансии</a></li>
                                <li class="last"><a href="kontakti/">Контакты</a>
                                    <ul class="">
                                        <li class="first"><a href="kontakti/filialyi/">Филиалы</a></li>
                                        <li class="last"><a href="kontakti/dileryi/">Дилеры</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <li class="m-search">
                                <a href="#" style="cursor:pointer;pointer-events: auto;"><span style="font-size:10px;opacity: 0.5;">Поиск</span> <i class="fa fa-search"></i></a>
                                <div class="form">
                                            
                                </div>
                            </li>
                        </ul>
                    <?endif?>
                </nav>
            </div>
        </div>
    </div>
</div>