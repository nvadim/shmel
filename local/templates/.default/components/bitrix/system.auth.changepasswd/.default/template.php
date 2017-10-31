<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$bxajaxid = CAjax::GetComponentID('bitrix:system.auth.changepasswd', '.default');
/* @var CMain $APPLICATION */
$APPLICATION->SetTitle(GetMessage("AUTH_CHANGE_PASSWORD"));
$APPLICATION->SetPageProperty('ADDITIONAL_TITLE', GetMessage("AUTH_CHANGE_PASSWORD"));
?>
<div class="modal__form form">
    <form method="post" name="bform" target="_top" action="<?=$arResult["AUTH_FORM"]?>" onsubmit="return jsAjaxUtil.InsertFormDataToNode(this, 'comp_<?=$bxajaxid?>', true);">
        <?/*if (strlen($arResult["BACKURL"]) > 0): ?>
            <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
        <? endif */?>
        <input type="hidden" name="bxajaxid" id="bxajaxid_<?=$bxajaxid?>_8BACKi" value="<?=$bxajaxid?>">
        <input type="hidden" name="AUTH_FORM" value="Y">
        <input type="hidden" name="TYPE" value="CHANGE_PWD">
        <?if($arParams["~AUTH_RESULT"]):?>
        <div class="form__one form__one-text">
            <?ShowMessage($arParams["~AUTH_RESULT"]);?>
        </div>
        <?endif;?>
        <div class="form__one">
            <label for="id1" class="form__label"><?=GetMessage("AUTH_LOGIN")?></label>
            <div class="form__element_box">
                <?//type=email?>
                <input type="text" id="id1" name="USER_LOGIN" maxlength="50" value="<?=$arResult["LAST_LOGIN"]?>" class="form__element <?=($arResult['ERROR_MESSAGE']['ERROR_TYPE'] == 'LOGIN' && !empty($arResult['POST']) ? 'form__element-error ' : '')?>form__element-input" required>
            </div>
        </div>
        <div class="form__one">
            <label for="id2" class="form__label"><?=GetMessage("AUTH_CHECKWORD")?></label>
            <div class="form__element_box">
                <?//type=email?>
                <input type="text" id="id2" name="USER_CHECKWORD" maxlength="50" value="<?=$arResult["USER_CHECKWORD"]?>" class="form__element <?=($arResult['ERROR_MESSAGE']['ERROR_TYPE'] == 'LOGIN' && !empty($arResult['POST']) ? 'form__element-error ' : '')?>form__element-input" required>
            </div>
        </div>
        <div class="form__registration_pass">
            <div class="form__one">
                <label for="id4" class="form__label"><?=GetMessage("AUTH_NEW_PASSWORD_REQ")?></label>
                <div class="form__element_box">
                    <div class="form__pass_box">
                        <input type="password" id="id4" name="USER_PASSWORD" value="<?=$arResult["USER_PASSWORD"]?>" class="form__element form__element-input form__element-password" required>
                        <button class="form__password_visible form__password_visible-hidden" type="button">Показать пароль</button>
                    </div>
                </div>
            </div>
            <div class="form__one">
                <label for="id5" class="form__label"><?=GetMessage("AUTH_NEW_PASSWORD_CONFIRM")?></label>
                <div class="form__element_box">
                    <div class="form__pass_box">
                        <input type="password" id="id5" name="USER_CONFIRM_PASSWORD" value="<?=$arResult["USER_CONFIRM_PASSWORD"]?>" class="form__element form__element-input form__element-password" required>
                        <button class="form__password_visible form__password_visible-hidden" type="button">Показать пароль</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="form__one">
            <button class="btn btn-width btn-form" type="submit" name="change_pwd" value="<?=GetMessage("AUTH_CHANGE")?>"><?=GetMessage("AUTH_CHANGE")?></button>
        </div>
    </form>
</div>