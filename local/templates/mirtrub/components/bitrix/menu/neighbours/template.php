<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<? logger($arResult); ?>

<? if (!empty($arResult) && count($arResult) > 2): ?>

    <?  
        $prev = 0;
        $next = 0;
        foreach($arResult as $key => $value) {
            if($value["SELECTED"]) {
                if($key == 0) {
                    $prev = count($arResult) - 1;
                    $next = $key + 1;
                } elseif($key == count($arResult) - 1) {
                    $prev = $key - 1;
                    $next = 0;
                } else {
                    $prev = $key - 1;
                    $next = $key + 1;
                }
            }
        }
    ?>

    <div class="neighbors d-flex justify-content-between">
        <? if($arResult[$prev]): ?>
            <span class="link-prev">
                <a href="<?=$arResult[$prev]["LINK"]; ?>"><i class="fa fa-long-arrow-left"></i> <?=$arResult[$prev]["TEXT"]; ?></a>
            </span>
        <? endif; ?>
        <? if($arResult[$next]): ?>
            <span class="link-next">
                <a href="<?=$arResult[$next]["LINK"]; ?>"><?=$arResult[$next]["TEXT"]; ?> <i class="fa fa-long-arrow-right"></i></a>
            </span>
        <? endif; ?>
    </div>

<? endif; ?>