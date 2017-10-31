<?
/**
 * @global CMain $APPLICATION
 * @param array $arParams
 * @param array $arResult
 */
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
?>

<form method="post" name="form1" action="<?=$arResult["FORM_TARGET"]?>" enctype="multipart/form-data">
    <?=$arResult["BX_SESSION_CHECK"]?>
    <input type="hidden" name="lang" value="<?=LANG?>" />
    <input type="hidden" name="ID" value=<?=$arResult["ID"]?> />
    
    <div class="personal_box__info">
        <div class="personal_box__info_box personal_edit">
            <div class="personal_edit__info">
                <p class="personal_edit__title">Изменение данных</p>
                <div class="personal_edit__avatar_box">
                    <div class="personal_edit__avatar_pic">
                        <?
                        if (strlen($arResult["arUser"]["PERSONAL_PHOTO"])>0)
                        {
                            ?>
                            <?=$arResult["arUser"]["PERSONAL_PHOTO_HTML"]?>
                            <?
                        }
                        ?>
                    </div>
                    <button type="button" class="personal_edit__avatar_button btn btn-white btn-width" onclick="this.nextElementSibling.click();">Добавить фото</button>
                    <input name="PERSONAL_PHOTO" type="file" style="visibility: hidden; position: absolute;">
                </div>
                <div class="personal_edit__info_box form">
                    <div class="form__one">
                        <label for="id_l1" class="form__label form__label-left">Фамилия</label>
                        <div class="form__element_box">
                            <input type="text" name="LAST_NAME" id="id_l1" value="<?=$arResult["arUser"]["LAST_NAME"]?>" class="form__element form__element-input<?=(strpos($arResult["strProfileError"], 'фамилия') !== false ? ' form__element-error' : '')?>">
                            <?if (strpos($arResult["strProfileError"], 'фамилия') !== false):?>
                                <span class="form__element_notice"><?=$arResult["strProfileError"]?></span>
                            <?endif;?>
                        </div>
                    </div>
                    <div class="form__one">
                        <label for="id_l2" class="form__label form__label-left">Имя</label>
                        <div class="form__element_box">
                            <input type="text" name="NAME" id="id_l2" value="<?=$arResult["arUser"]["NAME"]?>" class="form__element form__element-input<?=(strpos($arResult["strProfileError"], 'имя') !== false ? ' form__element-error' : '')?>">
                            <?if (strpos($arResult["strProfileError"], 'имя') !== false):?>
                                <span class="form__element_notice"><?=$arResult["strProfileError"]?></span>
                            <?endif;?>
                        </div>
                    </div>
                    <div class="form__one">
                        <label for="id_l3" class="form__label form__label-left">Отчество</label>
                        <div class="form__element_box">
                            <input type="text" name="SECOND_NAME" id="id_l3" value="<?=$arResult["arUser"]["SECOND_NAME"]?>" class="form__element form__element-input">
                        </div>
                    </div>
                    <div class="form__one">
                        <label for="id_l4" class="form__label form__label-left">E-mail</label>
                        <div class="form__element_box">
                            <input type="text" name="EMAIL" id="id_l4" value="<? echo $arResult["arUser"]["EMAIL"]?>" class="form__element form__element-input<?=(strpos($arResult["strProfileError"], 'E-Mail') !== false ? ' form__element-error' : '')?>">
                            <input type="hidden" name="LOGIN" value="<? echo $arResult["arUser"]["LOGIN"]?>">
                            <?if (strpos($arResult["strProfileError"], 'E-Mail') !== false):?>
                                <span class="form__element_notice"><?=$arResult["strProfileError"]?></span>
                            <?endif;?>
                        </div>
                    </div>
                    <div class="form__one">
                        <label for="id_l5" class="form__label form__label-left">Контактный телефон</label>
                        <div class="form__element_box">
                            <input type="tel" id="id_l5" name="PERSONAL_PHONE" value="<? echo $arResult["arUser"]["PERSONAL_PHONE"]?>" class="form__element form__element-input">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?if($arResult["arUser"]["EXTERNAL_AUTH_ID"] == ''):?>
        <div class="personal_box__info_box personal_box__info_box-border_top personal_edit__password">
            <p class="personal_edit__title">Смена пароля</p>
            <div class="personal_edit__password_box form">
                <div class="form__one form__one-left form__one-big">
                    <label for="id1" class="form__label form__label-left">Текущий пароль</label>
                    <div class="form__element_box">
                        <div class="form__pass_box">
                            <input type="password" id="id1" name="OLD_PASSWORD" value="" class="form__element form__element-input form__element-password<?=(strpos(strtolower($arResult["strProfileError"]), 'старый') !== false ? ' form__element-error' : '')?>">
                            <button class="form__password_visible form__password_visible-hidden" type="button">Показать пароль</button>
                        </div>
                        <?if (strpos(strtolower($arResult["strProfileError"]), 'старый') !== false):?>
                            <span class="form__element_notice">Старый пароль введен неверно</span>
                        <?endif;?>
                    </div>
                </div>
                <div class="form__one form__one-left form__one-big">
                    <label for="id2" class="form__label form__label-left">Новый пароль</label>
                    <div class="form__element_box">
                        <div class="form__pass_box">
                            <input type="password" id="id2" name="NEW_PASSWORD" value="" class="form__element form__element-input form__element-password<?=(strpos($arResult["strProfileError"], 'пароля') !== false ? ' form__element-error' : '')?>">
                            <button class="form__password_visible form__password_visible-hidden" type="button">Показать пароль</button>
                        </div>
                    </div>
                </div>
                <div class="form__one form__one-left form__one-big">
                    <label for="id3" class="form__label form__label-left">Повторите пароль</label>
                    <div class="form__element_box">
                        <div class="form__pass_box">
                            <input type="password" id="id3" name="NEW_PASSWORD_CONFIRM" value="" class="form__element form__element-input form__element-password<?=(strpos($arResult["strProfileError"], 'пароля') !== false ? ' form__element-error' : '')?>">
                            <button class="form__password_visible form__password_visible-hidden" type="button">Показать пароль</button>
                        </div>
                        <?if (strpos($arResult["strProfileError"], 'пароля') !== false):?>
                            <span class="form__element_notice">Неверное подтверждение пароля.</span>
                        <?endif;?>
                    </div>
                </div>
            </div>
        </div>
    <?endif;?>
    </div>
    
    <div class="personal_box__save">
        <button type="submit" name="save" value="<?=(($arResult["ID"]>0) ? GetMessage("MAIN_SAVE") : GetMessage("MAIN_ADD"))?>" class="personal_box__save_btn btn btn-width"><?=(($arResult["ID"]>0) ? GetMessage("MAIN_SAVE") : GetMessage("MAIN_ADD"))?></button>
    </div>

</form>

<?if($arResult["SOCSERV_ENABLED"] && false):?>
<div class="personal_box__save" hidden>
    <?$APPLICATION->IncludeComponent("bitrix:socserv.auth.split", ".default", array(
        "SHOW_PROFILES" => "Y",
        "ALLOW_DELETE" => "Y"
    ),
        false
    );?>
</div>
<?endif;?>