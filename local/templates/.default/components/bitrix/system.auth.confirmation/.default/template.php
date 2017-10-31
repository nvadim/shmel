<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$bxajaxid = CAjax::GetComponentID('bitrix:system.auth.confirmation', '.default');?>

<?//here you can place your own messages
switch($arResult["MESSAGE_CODE"])
{
    case "E01":
        ?><? //When user not found
        break;
    case "E02":
        ?><? //User was successfully authorized after confirmation
        break;
    case "E03":
        ?><? //User already confirm his registration
        break;
    case "E04":
        ?><? //Missed confirmation code
        break;
    case "E05":
        ?><? //Confirmation code provided does not match stored one
        break;
    case "E06":
        ?><? //Confirmation was successfull
        break;
    case "E07":
        ?><? //Some error occured during confirmation
        break;
}
?>
<?if($arResult["SHOW_FORM"]):?>
    <div class="modal__form form">
        <form name="system_forgot_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["FORM_ACTION"]?>" onsubmit="return jsAjaxUtil.InsertFormDataToNode(this, 'comp_<?=$bxajaxid?>', false);">
            <input type="hidden" name="<?echo $arParams["USER_ID"]?>" value="<?echo $arResult["USER_ID"]?>" />
            <input type="hidden" name="bxajaxid" value="<?=$bxajaxid?>" />
            <div class="form__one">
                <label for="id1" class="form__label"><?echo GetMessage("CT_BSAC_LOGIN")?></label>
                <div class="form__element_box">
                    <?//type=email?>
                    <input type="text" id="id1" name="<?echo $arParams["LOGIN"]?>" maxlength="50" value="<?echo $arResult["LOGIN"]?>" class="form__element form__element-input" required>
                </div>
            </div>
            <div class="form__one">
                <label for="id2" class="form__label"><?echo GetMessage("CT_BSAC_CONFIRM_CODE")?></label>
                <div class="form__element_box">
                    <input type="text" id="id2" name="<?echo $arParams["CONFIRM_CODE"]?>" maxlength="50" value="<?echo $arResult["CONFIRM_CODE"]?>" class="form__element <?=($arResult["MESSAGE_TEXT"] ? 'form__element-error ' : '')?>form__element-input" required>
                    <span class="form__element_notice"><?echo $arResult["MESSAGE_TEXT"]?></span>
                </div>
            </div>
            <div class="form__one">
                <button class="btn btn-width btn-form" name="Login" type="submit" value="<?echo GetMessage("CT_BSAC_CONFIRM")?>"><?echo GetMessage("CT_BSAC_CONFIRM")?></button>
            </div>
        </form>
    </div>
<?elseif(!$USER->IsAuthorized()):?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:system.auth.form",
        "",
        Array(
            "REGISTER_URL" => "/login/",
            "FORGOT_PASSWORD_URL" => "/login/auth.php",
            "PROFILE_URL" => "/personal/",
            "SHOW_ERRORS" => "Y",
            "AJAX_MODE" => "N",  // Включить режим AJAX
            "AJAX_OPTION_ADDITIONAL" => "",  // Дополнительный идентификатор
            "AJAX_OPTION_HISTORY" => "N",  // Включить эмуляцию навигации браузера
            "AJAX_OPTION_JUMP" => "N",  // Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "N",  // Включить подгрузку стилей
            "MESSAGE_TEXT" => $arResult["MESSAGE_TEXT"],
        ),
        false
    );?>
<?endif?>