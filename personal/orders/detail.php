<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заказ №: 32658412");
$APPLICATION->SetPageProperty('ADDITIONAL_TITLE', 'Заказ №: 32658412<span class="personal_box__state">Статус: <span class="personal_box__state_value personal_box__state_value-green">Выполнен</span></span>');
?>

<div class="personal_box__order_detail personal_order_detail">
    <div class="personal_order_detail__list">
        <div class="personal_order_detail__item order_goods">
            <div class="order_goods__pic">
                <img src="<?=FRONEND_BUILD_PATH?>img/boxes.jpg" srcset="<?=FRONEND_BUILD_PATH?>img/boxes@2x.jpg 2x, <?=FRONEND_BUILD_PATH?>img/boxes@3x.jpg 3x" class="order_goods__img">
            </div>
            <div class="order_goods__name">Короб универсальный</div>
            <div class="order_goods__price_one">
                <p class="order_goods__title order_goods__title-small">Цена за штуку:</p>
                <p class="order_goods__text order_goods__text-small">70 ₽</p>
            </div>
            <div class="order_goods__quantity">
                <p class="order_goods__title order_goods__title-small">Кол-во:</p>
                <p class="order_goods__text order_goods__text-small">10</p>
            </div>
            <div class="order_goods__total">
                <p class="order_goods__title order_goods__title-big">Итого:</p>
                <p class="order_goods__text order_goods__text-big">700 ₽</p>
            </div>
        </div>
        <div class="personal_order_detail__item order_goods">
            <div class="order_goods__pic">
                <img src="<?=FRONEND_BUILD_PATH?>img/boxes.jpg" srcset="<?=FRONEND_BUILD_PATH?>img/boxes@2x.jpg 2x, <?=FRONEND_BUILD_PATH?>img/boxes@3x.jpg 3x" class="order_goods__img">
            </div>
            <div class="order_goods__name">Короб универсальный</div>
            <div class="order_goods__price_one">
                <p class="order_goods__title order_goods__title-small">Цена за штуку:</p>
                <p class="order_goods__text order_goods__text-small">70 ₽</p>
            </div>
            <div class="order_goods__quantity">
                <p class="order_goods__title order_goods__title-small">Кол-во:</p>
                <p class="order_goods__text order_goods__text-small">10</p>
            </div>
            <div class="order_goods__total">
                <p class="order_goods__title order_goods__title-big">Итого:</p>
                <p class="order_goods__text order_goods__text-big">700 ₽</p>
            </div>
        </div>
        <div class="personal_order_detail__item order_goods">
            <div class="order_goods__pic">
                <img src="<?=FRONEND_BUILD_PATH?>img/boxes.jpg" srcset="<?=FRONEND_BUILD_PATH?>img/boxes@2x.jpg 2x, <?=FRONEND_BUILD_PATH?>img/boxes@3x.jpg 3x" class="order_goods__img">
            </div>
            <div class="order_goods__name">Короб универсальный</div>
            <div class="order_goods__price_one">
                <p class="order_goods__title order_goods__title-small">Цена за штуку:</p>
                <p class="order_goods__text order_goods__text-small">70 ₽</p>
            </div>
            <div class="order_goods__quantity">
                <p class="order_goods__title order_goods__title-small">Кол-во:</p>
                <p class="order_goods__text order_goods__text-small">10</p>
            </div>
            <div class="order_goods__total">
                <p class="order_goods__title order_goods__title-big">Итого:</p>
                <p class="order_goods__text order_goods__text-big">700 ₽</p>
            </div>
        </div>
        <div class="personal_order_detail__item order_goods">
            <div class="order_goods__pic">
                <img src="<?=FRONEND_BUILD_PATH?>img/boxes.jpg" srcset="<?=FRONEND_BUILD_PATH?>img/boxes@2x.jpg 2x, <?=FRONEND_BUILD_PATH?>img/boxes@3x.jpg 3x" class="order_goods__img">
            </div>
            <div class="order_goods__name">Короб универсальный</div>
            <div class="order_goods__price_one">
                <p class="order_goods__title order_goods__title-small">Цена за штуку:</p>
                <p class="order_goods__text order_goods__text-small">70 ₽</p>
            </div>
            <div class="order_goods__quantity">
                <p class="order_goods__title order_goods__title-small">Кол-во:</p>
                <p class="order_goods__text order_goods__text-small">10</p>
            </div>
            <div class="order_goods__total">
                <p class="order_goods__title order_goods__title-big">Итого:</p>
                <p class="order_goods__text order_goods__text-big">700 ₽</p>
            </div>
        </div>
        <div class="personal_order_detail__total_list personal_total">
            <p class="personal_total__text">Итого, общая стоимость заказа:</p>
            <p class="personal_total__price">2 800 ₽</p>
        </div>
    </div>
    <div class="personal_order_detail__repeat">
        <button class="personal_order_detail__btn btn">Повторить заказ</button>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>