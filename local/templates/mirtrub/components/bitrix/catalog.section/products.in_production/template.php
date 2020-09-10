<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<? logger($arResult['ITEMS']) ?>
<table>
    <? foreach ($arResult['ITEMS'] as $key => $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strElementEdit);
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strElementDelete, $arElementDeleteParams);
        ?>

        <tr>
            <td><i class="fa fa-cog"></i> <span>Линия <?=++$key; ?></span></td>
            <td><?=$arItem["PRODUCT_TYPE"]; ?></td>
            <td><?=$arItem["PROPERTIES"]["DIAMETER"]["VALUE"]; ?></td>
            <td><?=$arItem["PROPERTIES"]["MARKA"]["VALUE"]; ?></td>
            <td><?=$arItem["PROPERTIES"]["SDR"]["VALUE"]; ?></td>
            <td></td>
        </tr>
    <? endforeach; ?>
</table>   