<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
/* @var CMain $APPLICATION */
$APPLICATION->SetTitle("Мои данные");
/* @var CUser $USER */
$current_user_phone = CUser::GetList($by, $order, ['ID' => $USER->GetID()], ['FIELDS' => ['PERSONAL_PHONE']])->Fetch()['PERSONAL_PHONE'];
?>

<div class="personal_box__info">
    <div class="personal_box__info_box personal_info">
        <div class="personal_info__one">
            <p class="personal_info__desc">Логин:</p>
            <p class="personal_info__text"><?=$USER->GetLogin()?></p>
        </div>
        <div class="personal_info__one">
            <p class="personal_info__desc">ФИО:</p>
            <p class="personal_info__text"><?=$USER->GetFullName()?></p>
        </div>
        <div class="personal_info__one">
            <p class="personal_info__desc">E-mail:</p>
            <p class="personal_info__text"><?=$USER->GetEmail()?></p>
        </div>
        <div class="personal_info__one">
            <p class="personal_info__desc">Контактный телефон:</p>
            <p class="personal_info__text"><?=$current_user_phone?></p>
        </div>
        <div class="personal_info__one">
            <button type="button" onclick="window.location.href='/personal/profile/';" class="btn">Редактировать данные</button>
        </div>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>