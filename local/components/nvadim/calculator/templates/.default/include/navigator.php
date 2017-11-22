<div class="navigator">
    <button class="navigator__printing" type="button">Печать</button>
    <p class="navigator__title sidebar__title">Навигатор</p>
    <div class="navigator__list">
        <div class="navigator__item">
            <span class="navigator__icon"><i class="navigator__i"></i></span>
            <a href="<?= $arResult['page_route']?>" class="navigator__link">Маршрут</a>
        </div>
        <div class="navigator__item">
            <span class="navigator__icon"><i class="navigator__i"></i></span>
            <a href="<?= $arResult['page_depart']?>" class="navigator__link">Пункт отправления <span class="navigator__price">4000 ₽</span></a>
        </div>
        <div class="navigator__item">
            <span class="navigator__icon"><i class="navigator__i"></i></span>
            <a href="<?= $arResult['page_intermediate']?>" class="navigator__link">Промежуточный адрес <span class="navigator__price">2000 ₽</span></a>
        </div>
        <div class="navigator__item">
            <span class="navigator__icon"><i class="navigator__i"></i></span>
            <a href="<?= $arResult['page_dest']?>" class="navigator__link">Пункт назначения <span class="navigator__price">1985 ₽</span></a>
        </div>
        <div class="navigator__item">
            <span class="navigator__icon"><i class="navigator__i"></i></span>
            <a href="./move_step3_1.html" class="navigator__link">Транспорт <span class="navigator__price">16000 ₽</span></a>
        </div>
        <div class="navigator__item">
            <span class="navigator__icon"><i class="navigator__i"></i></span>
            <a href="./move_step3_2.html" class="navigator__link">Грузчики <span class="navigator__price">16000 ₽</span></a>
        </div>
        <div class="navigator__item">
            <span class="navigator__icon"><i class="navigator__i"></i></span>
            <a href="./move_step3_3.html" class="navigator__link">Упаковка <span class="navigator__price">5750 ₽</span></a>
        </div>
        <div class="navigator__item">
            <span class="navigator__icon"><i class="navigator__i"></i></span>
            <a href="./move_step3_4.html" class="navigator__link">Такелажные работы <span class="navigator__price">5750 ₽</span></a>
        </div>
    </div>
    <p class="navigator__total_default">Рекомендованая цена: <span class="navigator__total_price">39 985 ₽</span></p>
    <p class="navigator__total">Итого: <span class="navigator__total_price">39 985 ₽</span></p>
    <div class="navigator__buttons">
        <button class="navigator__btn btn" type="button" onClick='location.href="./move_step4_1.html"'>Оформить заказ</button>
    </div>
</div>