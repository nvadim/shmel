<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if($arResult["FORM_TYPE"] == "login"):?>
    <button class="h_lk__button_auth btn" data-modal="#auth" data-url="/login/auth.php">Войти</button>
<?else:?>
    <a href="/?logout=yes" class="h_lk__button_auth btn">Выйти</a>
<?endif?>