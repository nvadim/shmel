<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("История заказов");
?>

<div class="personal_box__order_history personal_order_history">
    <div class="personal_order_history__list">
        <div class="personal_order_history__one order_item">
            <div class="order_item__head">
                <p class="order_item__title">Заказ №: <span class="order_item__bold">23982130</span></p>
                <p class="order_item__date">от 12.04.2017</p>
            </div>
            <div class="order_item__info">
                <p class="order_item__price">Сумма заказа: <span class="order_item__bold">39 985 ₽</span></p>
                <p class="order_item__state_title">Статус: <span class="order_item__state_value order_item__state_value-orange">Ожидание</span></p>
            </div>
            <div class="order_item__links">
                <a href="detail.php" class="order_item__details btn btn-white">Смотреть детали</a>
            </div>
        </div>
        <div class="personal_order_history__one order_item">
            <div class="order_item__head">
                <p class="order_item__title">Заказ №: <span class="order_item__bold">23982130</span></p>
                <p class="order_item__date">от 12.04.2017</p>
            </div>
            <div class="order_item__info">
                <p class="order_item__price">Сумма заказа: <span class="order_item__bold">39 985 ₽</span></p>
                <p class="order_item__state_title">Статус: <span class="order_item__state_value order_item__state_value-green">Выполнен</span></p>
            </div>
            <div class="order_item__links">
                <a href="detail.php" class="order_item__details btn btn-white">Смотреть детали</a>
                <a href="#" class="order_item__repeat btn">Повторить заказ</a>
            </div>
        </div>
        <div class="personal_order_history__one order_item order_item-canceled">
            <div class="order_item__head">
                <p class="order_item__title">Заказ №: <span class="order_item__bold">23982130</span></p>
                <p class="order_item__date">от 12.04.2017</p>
            </div>
            <div class="order_item__info">
                <p class="order_item__price">Сумма заказа: <span class="order_item__bold">39 985 ₽</span></p>
                <p class="order_item__state_title">Статус: <span class="order_item__state_value order_item__state_value-gray">Отменен</span></p>
            </div>
            <div class="order_item__links">
                <a href="detail.php" class="order_item__details btn btn-white">Смотреть детали</a>
                <a href="#" class="order_item__repeat btn">Повторить заказ</a>
            </div>
        </div>
    </div>
    <div class="personal_order_history__more_box">
        <button class="personal_order_history__more btn btn-white">Загрузить еще</button>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>