<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$bxajaxid = CAjax::GetComponentID('bitrix:system.auth.forgotpasswd', '.default');
?>
<div class="modal__form form">
    <? ShowMessage($arParams["~AUTH_RESULT"]); ?>

    <form method="post" target="_top" action="/login/auth.php?forgot_password=yes<?//=$arResult["AUTH_URL"]?>" onsubmit="return jsAjaxUtil.InsertFormDataToNode(this, 'comp_<?=$bxajaxid?>', true);">
        <?/* if (strlen($arResult["BACKURL"]) > 0): ?>
            <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
return jsAjaxUtil.InsertFormDataToNode(this, 'comp_<?=$bxajaxid?>', true); return false;
        <?endif;*/?>
        <input type="hidden" name="bxajaxid" id="bxajaxid_<?=$bxajaxid?>_8BACKi" value="<?=$bxajaxid?>">
        <input type="hidden" name="AUTH_FORM" value="Y">
        <input type="hidden" name="TYPE" value="SEND_PWD">
        <input type="hidden" name="AJAX_CALL" value="Y">
        <div class="form__one form__one-text">
            Укажите почтовый адрес, который Вы использовали при регистрации аккаунта.
        </div>
        <div class="form__one">
            <div class="form__element_box">
                <input type="text" id="id1" name="USER_LOGIN" value="<?=$arResult["LAST_LOGIN"]?>" class="form__element form__element-input">
                <?/*?><input type="text" name="USER_EMAIL" maxlength="255" /><?*/?>
            </div>
        </div>
        <div class="form__one form__one-text">
            Контрольная строка для смены пароля, а также Ваши регистрационные данные будут высланы Вам по e-mail.
        </div>
        <div class="form__one">
            <button class="btn btn-width btn-form" type="submit" name="send_account_info" value="<?=GetMessage("AUTH_SEND")?>">Восстановить</button>
        </div>
    </form>

</div>