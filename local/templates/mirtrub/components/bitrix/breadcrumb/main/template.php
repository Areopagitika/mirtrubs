<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";
    
$strReturn = '';

$strReturn .= '<div id="navigation"><ul itemscope itemtype="http://schema.org/BreadcrumbList" id="breadcrumbs">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0? '<i class="fa fa-angle-right"></i>' : '');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
        $strReturn .= '
            <li>
                <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a title="'.$title.'" itemprop="item" href="'.$arResult[$index]["LINK"].'">
                        <span itemprop="name">'.$title.'</span>
                        <meta itemprop="position" content="'.($index + 1).'">
                    </a>
                </span>
            </li>';
	}
	else
	{
        $strReturn .= '
            <li>
                <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a title="'.$title.'" itemprop="item" href="'.$arResult[$index]["LINK"].'">
                        <span itemprop="name">'.$title.'</span>
                        <meta itemprop="position" content="'.($index + 1).'">
                    </a>
                </span>
            </li>';
	}
}

$strReturn .= '</ul></div>';

return $strReturn;