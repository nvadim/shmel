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

$strReturn .= '<div class="breadcrumbs__wrap box"><div class="breadcrumbs__list" itemscope itemtype="http://schema.org/BreadcrumbList">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	$nextRef = ($index < $itemSize-2 && $arResult[$index+1]["LINK"] <> ""? ' itemref="bx_breadcrumb_'.($index+1).'"' : '');
	$child = ($index > 0? ' itemprop="child"' : '');
	$arrow = ($index > 0? '<i class="fa fa-angle-right"></i>' : '');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
		    <span class="breadcrumbs__element" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a class="breadcrumbs__link" itemprop="item" href="'.$arResult[$index]["LINK"].'"><span class="breadcrumbs__text" itemprop="name">'.$title.'</span></a>
                <meta itemprop="position" content="'.($index + 1).'"/>
            </span>';
	}
	else
	{
		$strReturn .= '
            <span class="breadcrumbs__element" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <span class="breadcrumbs__text" itemprop="name">'.$title.'</span>
                <meta itemprop="position" content="'.($index + 1).'"/>
            </span>';
	}
}

$strReturn .= '
        </div>
    </div>';

return $strReturn;