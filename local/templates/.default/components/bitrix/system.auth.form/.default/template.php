<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if($arResult["FORM_TYPE"] == "login"):
    $bxajaxid = CAjax::GetComponentID('bitrix:system.auth.form', '.default');
    ?>

<div class="modal__form form">
    <form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>" onsubmit="return jsAjaxUtil.InsertFormDataToNode(this, 'comp_<?=$bxajaxid?>', false);">
        <?if($arResult["BACKURL"] <> ''):?>
            <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
        <?endif?>
        <?foreach ($arResult["POST"] as $key => $value):?>
            <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
        <?endforeach?>
        <input type="hidden" name="AUTH_FORM" value="Y" />
        <input type="hidden" name="TYPE" value="AUTH" />
        <input type="hidden" name="bxajaxid" value="<?=$bxajaxid?>" />
        
        <?if ($arParams['MESSAGE_TEXT']):?>
        <div class="form__one form__one-text">
            <?=$arParams['MESSAGE_TEXT']?>
        </div>
        <?endif;?>
        
        <div class="form__one">
            <label for="id1" class="form__label">E-mail</label>
            <div class="form__element_box">
                <?//type=email?>
                <input type="text" id="id1" name="USER_LOGIN" maxlength="50" value="<?=$arResult["USER_LOGIN"]?>" class="form__element <?=($arResult['ERROR_MESSAGE']['ERROR_TYPE'] == 'LOGIN' && !empty($arResult['POST']) ? 'form__element-error ' : '')?>form__element-input" required>
            </div>
        </div>
        <div class="form__one">
            <label for="id2" class="form__label">Пароль</label>
            <div class="form__element_box">
                <div class="form__pass_box">
                    <input type="password" id="id2" name="USER_PASSWORD" maxlength="50" class="form__element  <?=($arResult['ERROR_MESSAGE']['ERROR_TYPE'] == 'LOGIN' && !empty($arResult['POST']) ? 'form__element-error ' : '')?>form__element-input form__element-password" required>
                    <button class="form__password_visible form__password_visible-hidden" type="button">Показать пароль</button>
                </div>
            </div>
            <p class="form__help_text">
                <a href="javascript:void(0);" data-modal="#recovery" data-url="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>">Забыли пароль?</a>
            </p>
        </div>
        <div class="form__one">
            <button class="btn btn-width btn-form" name="Login" type="submit" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>">Войти</button>
        </div>
        <?if (!$arParams['MESSAGE_TEXT']):?>
        <div class="form__one">
            <button class="btn btn-width btn-white btn-form" data-modal="#registration" data-url="/login/registration.php" type="button">Зарегистрироваться</button>
        </div>
        <?endif;?>
    </form>
</div>
<?if (!$arParams['MESSAGE_TEXT']):?>
    <div class="form__social social">
        <p class="social__title"><?require_once $_SERVER['DOCUMENT_ROOT'].'/local/include/soc_service_title.php';?></p>
        <div class="social__wrap">
            <?if($arResult["AUTH_SERVICES"]):?>
                <!--noindex-->
                <?
                $APPLICATION->IncludeComponent("bitrix:socserv.auth.form", "split",
                    array(
                        "AUTH_SERVICES"=>$arResult["AUTH_SERVICES"],
                        "AUTH_URL"=>$arResult["AUTH_URL"],
                        "POST"=>$arResult["POST"],
                        "POPUP"=>"N",
                        "SUFFIX"=>"form",
                    ),
                    $component,
                    array("HIDE_ICONS"=>"Y")
                );
                ?>
                <!--/noindex-->
            <?endif?>
        </div>
    </div>
<?endif;?>
<?else:?>
    <?LocalRedirect('/personal/');?>
<?endif?>