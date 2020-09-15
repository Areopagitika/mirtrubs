<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="sticky-top">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="menu" id="menu">
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

                            <?$APPLICATION->IncludeComponent("bitrix:menu","mb_menu",Array(
                                    "ROOT_MENU_TYPE" => "top", 
                                    "MAX_LEVEL" => "2", 
                                    "CHILD_MENU_TYPE" => "subtop", 
                                    "USE_EXT" => "Y",
                                    "DELAY" => "N",
                                    "ALLOW_MULTI_SELECT" => "Y",
                                    "MENU_CACHE_TYPE" => "N", 
                                    "MENU_CACHE_TIME" => "3600", 
                                    "MENU_CACHE_USE_GROUPS" => "Y", 
                                    "MENU_CACHE_GET_VARS" => "" 
                                )
                            );?>

                            <li class="m-search">
                                <a href="#" style="cursor:pointer;pointer-events: auto;"><span style="font-size:10px;opacity: 0.5;">Поиск</span> <i class="fa fa-search"></i></a>
                                <div class="form">
                                    <?$APPLICATION->IncludeComponent("bitrix:search.form","main",Array(
                                            "USE_SUGGEST" => "N",
                                            "PAGE" => "#SITE_DIR#search/index.php"
                                        )
                                    );?> 
                                </div>
                            </li>
                        </ul>
                    <?endif?>
                </nav>
            </div>
        </div>
    </div>
</div>