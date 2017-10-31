<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="personal_card__menu personal_menu">
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
    ?>
	<?if($arItem["SELECTED"]):?>
    <li class="personal_menu__item"><a href="<?=$arItem["LINK"]?>" class="personal_menu__link selected"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
    <li class="personal_menu__item"><a href="<?=$arItem["LINK"]?>" class="personal_menu__link"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
<?endforeach?>
</ul>
<?endif?>