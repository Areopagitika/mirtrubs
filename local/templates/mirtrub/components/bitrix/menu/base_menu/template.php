<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <ul>
        <?
        $previousLevel = 0;
        foreach($arResult as $arItem):
        ?>
        <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
        <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
        <?endif?>

            <?if ($arItem["IS_PARENT"]):?>
                <li class="first">
                    <a href="<?=$arItem["LINK"]?>" title="<? echo $arItem["PARAMS"]["TITLE"] ?: $arItem["TEXT"] ?>"><?=$arItem["TEXT"]; ?></a>
                    <ul>
            <?else:?>

                <?if ($arItem["PERMISSION"] > "D"):?>
                        <li><a href="<?=$arItem["LINK"]?>" title="<? echo $arItem["PARAMS"]["TITLE"] ?: $arItem["TEXT"] ?>"><?=$arItem["TEXT"]; ?></a></li>
                <?endif?>

            <?endif?>

            <?$previousLevel = $arItem["DEPTH_LEVEL"];?>

        <?endforeach?>

        <?if ($previousLevel > 1)://close last item tags?>
            <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
        <?endif?>
    </ul>
<? endif; ?>