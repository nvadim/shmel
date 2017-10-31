<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

$socRelations = [
    'Facebook' => 'fb',
    'VKontakte' => 'vk',
    'Twitter' => 'tw',
];

if($arParams["POPUP"]):
	//only one float div per page
	if(defined("BX_SOCSERV_POPUP"))
		return;

    define("BX_SOCSERV_POPUP", true);
    ?>
<div style="display:none">
    <div id="bx_auth_float" class="bx-auth-float">
<?endif?>

<?if(($arParams["~CURRENT_SERVICE"] <> '') && $arParams["~FOR_SPLIT"] != 'Y'):?>
    <script type="text/javascript">
        BX.ready(function(){BxShowAuthService('<?=CUtil::JSEscape($arParams["~CURRENT_SERVICE"])?>', '<?=$arParams["~SUFFIX"]?>')});
    </script>
<?endif?>

<?
if($arParams["~FOR_SPLIT"] == 'Y'):?>
    <?foreach($arParams["~AUTH_SERVICES"] as $service):?>
        <?
        if(($arParams["~FOR_SPLIT"] == 'Y') && (is_array($service["FORM_HTML"])))
            $onClickEvent = $service["FORM_HTML"]["ON_CLICK"];
        else
            $onClickEvent = "onclick=\"BxShowAuthService('".$service['ID']."', '".$arParams['SUFFIX']."')\"";
        ?>
        <a title="<?=htmlspecialcharsbx($service["NAME"])?>" href="javascript:void(0)" <?=$onClickEvent?> id="bx_auth_href_<?=$arParams["SUFFIX"]?><?=$service["ID"]?>"><i class="bx-ss-icon <?=htmlspecialcharsbx($service["ICON"])?>"></i></a>
    <?endforeach?>
<?endif;?>

<?foreach($arParams["~AUTH_SERVICES"] as $service):?>
    <?if(($arParams["~FOR_SPLIT"] != 'Y') || (!is_array($service["FORM_HTML"]))):?>
        <a href="javascript:void(0)" id="bx_auth_serv_<?=$arParams["SUFFIX"]?><?=$service["ID"]?>" class="social__link social__link-<?=$socRelations[$service["ID"]]?>" onclick="<?=$service["ONCLICK"]?>"><?=$service["NAME"]?></a>
    <?endif;?>
<?endforeach?>
		
<?foreach($arParams["~POST"] as $key => $value):?>
    <?if(!preg_match("|OPENID_IDENTITY|", $key)):?>
		<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
    <?endif;?>
<?endforeach?>
		<input type="hidden" name="auth_service_id" value="" />

<?if($arParams["POPUP"]):?>
    </div>
</div>
<?endif?>