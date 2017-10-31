<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>
<div class="boxPaging clearfix">
<ul>

<?if($arResult["bDescPageNumbering"] === true):?>


	<?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<?if($arResult["bSavePage"]):?>

			
			<li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">&lt;&lt;</a></li>
			
		<?else:?>
			
			<?if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"]+1) ):?>
				<li><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">&lt;&lt;</a></li>
				
			<?else:?>
				<li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">&lt;&lt;</a></li>
				
			<?endif?>
		<?endif?>
	<?else:?>
		<li class="disabled"><a>&lt;&lt;</a></li>
	<?endif?>

	<?while($arResult["nStartPage"] >= $arResult["nEndPage"]):?>
		<?$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
			<li class="active"><span><?=$NavRecordGroupPrint?></span></li>
		<?elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):?>
			<li><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$NavRecordGroupPrint?></a></li>
		<?else:?>
			<li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$NavRecordGroupPrint?></a></li>
		<?endif?>

		<?$arResult["nStartPage"]--?>
	<?endwhile?>

	

	<?if ($arResult["NavPageNomer"] > 1):?>
		<li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">&gt;&gt;</a></li>

	<?else:?>
		<li class="disabled"><a>&gt;&gt;</a></li>
	<?endif?>

<?else:?>


	<?if ($arResult["NavPageNomer"] > 1):?>

		<?if($arResult["bSavePage"]):?>
			
			<li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">&lt;&lt;</a></li>
			
		<?else:?>	
			<?if ($arResult["NavPageNomer"] > 2):?>
				<li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">&lt;&lt;</a></li>
			<?else:?>
				<li><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">&lt;&lt;</a></li>
			<?endif?>
			
		<?endif?>

	<?else:?>
		<li class="disabled"><a>&lt;&lt;</a></li>
	<?endif?>

	<?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
			<li class="active"><span><?=$arResult["nStartPage"]?></span></li>
		<?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
			<li><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$arResult["nStartPage"]?></a></li>
		<?else:?>
			<li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a></li>
		<?endif?>
		<?$arResult["nStartPage"]++?>
	<?endwhile?>
	

	<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">&gt;&gt;</a></li>
	<?else:?>
		<li  class="disabled"><a>&gt;&gt;</a></li>
	<?endif?>

<?endif?>

</ul>
</div>
<?if(isset($_REQUEST["PAGEN_1"])){?>
<script>
	BX.ready(function(){
		$("html,body").animate({scrollTop:0},"slow")
	});
</script>
<?}?>
