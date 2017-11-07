<?
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();
?>
<?if($USER->IsAuthorized()):?>

<p><?echo GetMessage("MAIN_REGISTER_AUTH")?></p>

<?else:?>
    <?
    $bxajaxid = CAjax::GetComponentID('soobwa:main.register', '.default');

    if (count($arResult["ERRORS"]) > 0):
        foreach ($arResult["ERRORS"] as $key => $error)
            if (intval($key) == 0 && $key !== 0)
                $arResult["ERRORS"][$key] = str_replace("#FIELD_NAME#", "&quot;".GetMessage("REGISTER_FIELD_".$key)."&quot;", $error);

        ShowError(implode("<br />", $arResult["ERRORS"]));
        ?>
    <?endif?>
    <form method="post" action="<?=POST_FORM_ACTION_URI?>" name="regform" enctype="multipart/form-data">
    <?if($arResult["BACKURL"] <> ''):?>
        <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
    <?endif;?>
        <input type="hidden" name="bxajaxid" value="<?=$bxajaxid?>" />
<?
$tmpSF = ['EMAIL'];
if (in_array('NAME', $arResult["SHOW_FIELDS"]))
    $tmpSF[] = 'NAME';
if (in_array('PERSONAL_PHONE', $arResult["SHOW_FIELDS"]))
    $tmpSF[] = 'PERSONAL_PHONE';
$tmpSF[] = 'PASSWORD';
$tmpSF[] = 'CONFIRM_PASSWORD';
$arResult["SHOW_FIELDS"] = $tmpSF;
?>
    <?foreach ($arResult["SHOW_FIELDS"] as $FIELD):?>
        <?if($FIELD == "AUTO_TIME_ZONE" && $arResult["TIME_ZONE_ENABLED"] == true):?>
        <?else:?>
            <?
            switch ($FIELD) {
                case 'EMAIL':
                    ?>
                    <div class="form__one">
                        <label for="id1" class="form__label">E-mail</label>
                        <div class="form__element_box">
                            <input type="email" id="id1" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" class="form__element form__element-input" required>
                            <!--
                            form__element-error
                            <span class="form__element_notice">Такой e-mail уже есть в системе</span>
                            -->
                        </div>
                    </div>
                    <?
                    break;
                case 'NAME':
                    ?>
                    <div class="form__one">
                        <label for="id2" class="form__label">Имя</label>
                        <div class="form__element_box">
                            <input type="text" id="id2" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" class="form__element form__element-input" required>
                        </div>
                    </div>
                    <?
                    break;
                case 'PERSONAL_PHONE':
                    ?>
                    <div class="form__one">
                        <label for="id3" class="form__label">Телефон</label>
                        <div class="form__element_box">
                            <input type="tel" id="id3" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" class="form__element form__element-input">
                        </div>
                    </div>
                    <?
                    break;
                case 'PASSWORD':
                    ?>
                    <div class="form__registration_pass">
                        <div class="form__one">
                            <label for="id4" class="form__label">Пароль</label>
                            <div class="form__element_box">
                                <div class="form__pass_box">
                                    <input type="password" id="id4" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" class="form__element form__element-input form__element-password" required>
                                    <button class="form__password_visible form__password_visible-hidden" type="button">Показать пароль</button>
                                </div>
                            </div>
                        </div>
                    <?
                    break;
                case 'CONFIRM_PASSWORD':
                    ?>
                        <div class="form__one">
                            <label for="id5" class="form__label">Повтор пароля</label>
                            <div class="form__element_box">
                                <div class="form__pass_box">
                                    <input type="password" id="id5" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" class="form__element form__element-input form__element-password" required>
                                    <button class="form__password_visible form__password_visible-hidden" type="button">Показать пароль</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?
                    break;
                default:
                    break;
            }
            ?>
        <?endif?>
    <?endforeach?>

        <div class="form__one">
            <div class="form__recaptcha">
                <script type="text/javascript">
                    var script = document.createElement('script');
                    script.src = 'https://www.google.com/recaptcha/api.js';
                    document.getElementsByTagName('head')[0].appendChild(script);
                </script>
                <div class="g-recaptcha" data-sitekey="<?=RE_SITE_KEY?>"></div>
            </div>
        </div>
        <div class="form__one form__one-text">
            <?require_once $_SERVER['DOCUMENT_ROOT'].'/local/include/registration_terms.php';?>
        </div>
        <div class="form__one">
            <button class="btn btn-width btn-form" type="submit" name="register_submit_button" value="<?=GetMessage("AUTH_REGISTER")?>"><?=GetMessage("AUTH_REGISTER")?></button>
        </div>
    </form>
<?endif?>