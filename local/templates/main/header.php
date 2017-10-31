<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
require_once $_SERVER['DOCUMENT_ROOT'].'/local/include/header.php';
?>
<main class="main main-index">
    <div class="main__navigation navigation">
        <div class="navigation__wrap box">
            <nav class="navigation__list">
                <a href="/move/" class="navigation__link">Переезд</a>
                <a href="/transport/" class="navigation__link">Транспортные услуги</a>
                <a href="/loader/" class="navigation__link">Грузчики</a>
                <a href="#" class="navigation__link">Упаковочный материал</a>
            </nav>
        </div>
    </div>
    <div class="slider_index">
        <div class="slider_index__slider">
            <div class="slider_index__item slide_index">
                <div class="slide_index__wrap box">
                    <img src="<?=FRONEND_BUILD_PATH?>img/shadow@2x.png" alt="" class="slide_index__shadow">
                    <img src="<?=FRONEND_BUILD_PATH?>img/man.png" alt="" class="slide_index__man">
                    <div class="slide_index__content">
                        <p class="slide_index__title">Лучшие перевозки!<br> C заботой и вовремя!</p>
                        <p class="slide_index__text">Только в момент перезда осознаешь, что доверить такое ответственное дело можно исключительно профессионалам.</p>
                    </div>
                </div>
            </div>
            <div class="slider_index__item slide_index">
                <div class="slide_index__wrap box">
                    <img src="<?=FRONEND_BUILD_PATH?>img/shadow@2x.png" alt="" class="slide_index__shadow">
                    <img src="<?=FRONEND_BUILD_PATH?>img/man.png" alt="" class="slide_index__man">
                    <div class="slide_index__content">
                        <p class="slide_index__title">Лучшие перевозки!<br> C заботой и вовремя!</p>
                        <p class="slide_index__text">Только в момент перезда осознаешь, что доверить такое ответственное дело можно исключительно профессионалам.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider_index__dots"></div>
    </div>
    <div class="services_index">
        <div class="services_index__one">
            <div class="services_index__wrap">
                <div class="services_index__item">
                    <div class="services_index__content">
                        <p class="services_index__name">Переезды</p>
                        <div class="services_index__text">
                            <ul>
                                <li>Квартирные</li>
                                <li>Офисные</li>
                                <li>Дачные</li>
                            </ul>
                        </div>
                        <div class="services_index__more">
                            <a href="#" class="services_index__button btn btn-white">Рассчитать</a>
                        </div>
                    </div>
                    <div class="services_index__pic">
                        <img src="<?=FRONEND_BUILD_PATH?>img/deliver.svg" class="services_index__img services_index__img-desktop services_index__img-deliver">
                        <img src="<?=FRONEND_BUILD_PATH?>img/deliver2.svg" class="services_index__img services_index__img-mobile services_index__img-deliver">
                    </div>
                </div>
                <div class="services_index__item">
                    <div class="services_index__content">
                        <p class="services_index__name">Транспортные  услуги</p>
                        <div class="services_index__text">
                            <p>Более 50 единиц техники работают для вас</p>
                        </div>
                        <div class="services_index__more">
                            <a href="#" class="services_index__button btn btn-white">Подробнее</a>
                        </div>
                    </div>
                    <div class="services_index__pic">
                        <img src="<?=FRONEND_BUILD_PATH?>img/transport.svg" class="services_index__img services_index__img-desktop services_index__img-transport">
                        <img src="<?=FRONEND_BUILD_PATH?>img/transport2.svg" class="services_index__img services_index__img-mobile services_index__img-transport">
                    </div>
                </div>
            </div>
        </div>
        <div class="services_index__one">
            <div class="services_index__wrap">
                <div class="services_index__item">
                    <div class="services_index__content">
                        <p class="services_index__name">Грузчики</p>
                        <div class="services_index__text">
                            <ul>
                                <li>Погрузо-разгрузочные работы</li>
                                <li>Сборка-разборка мебели</li>
                                <li>Такелажные работы</li>
                            </ul>
                        </div>
                        <div class="services_index__more">
                            <a href="#" class="services_index__button btn btn-white">Заказать</a>
                        </div>
                    </div>
                    <div class="services_index__pic">
                        <img src="<?=FRONEND_BUILD_PATH?>img/deliveryboy.svg" class="services_index__img services_index__img-desktop services_index__img-deliveryboy">
                        <img src="<?=FRONEND_BUILD_PATH?>img/deliveryboy2.svg" class="services_index__img services_index__img-mobile services_index__img-deliveryboy">
                    </div>
                </div>
                <div class="services_index__item">
                    <div class="services_index__content">
                        <p class="services_index__name">Упаковочный  материал</p>
                        <div class="services_index__text">
                            <p>Более 100 видов упаковочного материала сопутствующих товаров</p>
                        </div>
                        <div class="services_index__more">
                            <a href="#" class="services_index__button btn btn-white">Купить</a>
                        </div>
                    </div>
                    <div class="services_index__pic">
                        <img src="<?=FRONEND_BUILD_PATH?>img/package.svg" class="services_index__img services_index__img-desktop services_index__img-package">
                        <img src="<?=FRONEND_BUILD_PATH?>img/package2.svg" class="services_index__img services_index__img-mobile services_index__img-package">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="additionally_index gray">
        <div class="additionally_index__wrap box">
            <p class="additionally_index__title title title-orange">Дополнительно</p>
            <div class="additionally_index__list">
                <a href="#" class="additionally_index__item additionally_index__item-wallet">
                    <span class="additionally_index__name">Оплата</span>
                    <span class="additionally_index__text">Вы можете выбрать любой удобный вам способ оплаты</span>
                </a>
                <a href="#" class="additionally_index__item additionally_index__item-documents">
                    <span class="additionally_index__name">Документы</span>
                    <span class="additionally_index__text">Предоставление любых документов НДС</span>
                </a>
                <a href="#" class="additionally_index__item additionally_index__item-offer">
                    <span class="additionally_index__name">Акции и скидки</span>
                    <span class="additionally_index__text">Ваши друзья и знакомые скажут вам спасибо за скидку</span>
                </a>
                <a href="#" class="additionally_index__item additionally_index__item-calculate">
                    <span class="additionally_index__name">Калькулятор</span>
                    <span class="additionally_index__text">Рассчитайте свой переезд самостоятельно</span>
                </a>
            </div>
        </div>
    </div>
    <div class="guarantees">
        <div class="guarantees__wrap box">
            <p class="guarantees__title title title-green">Гарантии</p>
            <div class="guarantees__text_box guarantees_text">
                <div class="guarantees_text__pic">
                    <img src="<?=FRONEND_BUILD_PATH?>img/shield.png" srcset="<?=FRONEND_BUILD_PATH?>img/shield@2x.png 2x, <?=FRONEND_BUILD_PATH?>img/shield@3x.png 3x" class="guarantees_text__img">
                </div>
                <div class="guarantees_text__content">
                    <p class="guarantees_text__title">Надежно и безопасно</p>
                    <div class="guarantees_text__text">Переезд всегда представляется очень хлопотным делом. Многие люди считают, что организовать перевозку всех вещей самостоятельно будет более дешево, чем доверить эту задачу специальной службе.</div>
                </div>
            </div>
            <div class="guarantees__list">
                <div class="guarantees__item guarantees_item">
                    <div class="guarantees_item__pic">
                        <img src="<?=FRONEND_BUILD_PATH?>img/control.svg" class="guarantees_item__img guarantees_item-control">
                    </div>
                    <div class="guarantees_item__name">Строгий контроль<br> сотрудников</div>
                </div>
                <div class="guarantees__item guarantees_item">
                    <div class="guarantees_item__pic">
                        <img src="<?=FRONEND_BUILD_PATH?>img/cargo-ins.svg" class="guarantees_item__img guarantees_item-cargo_ins">
                    </div>
                    <div class="guarantees_item__name">Страхование<br> грузов</div>
                </div>
                <div class="guarantees__item guarantees_item">
                    <div class="guarantees_item__pic">
                        <img src="<?=FRONEND_BUILD_PATH?>img/gps.svg" class="guarantees_item__img guarantees_item-gps">
                    </div>
                    <div class="guarantees_item__name">Отслеживание маршрутов<br>передвижения</div>
                </div>
                <div class="guarantees__item guarantees_item">
                    <div class="guarantees_item__pic">
                        <img src="<?=FRONEND_BUILD_PATH?>img/service.svg" class="guarantees_item__img guarantees_item-service">
                    </div>
                    <div class="guarantees_item__name">Отличный сервис<br>и служба поддержки</div>
                </div>
            </div>
        </div>
    </div>
    <div class="reviews_index gray">
        <div class="reviews_index__wrap box">
            <p class="reviews_index__title title">Отзывы клиентов</p>
            <div class="reviews_index__slider_wrap">
                <div class="reviews_index__slider">
                    <div class="reviews_index__item reviews_item">
                        <div class="reviews_item__wrap">
                            <div class="reviews_item__info">
                                <div class="reviews_item__pic">
                                    <img src="<?=FRONEND_BUILD_PATH?>img/avatar.png" srcset="<?=FRONEND_BUILD_PATH?>img/avatar@2x.png 2x, <?=FRONEND_BUILD_PATH?>img/avatar@3x.png 3x" alt="" class="reviews_item__img">
                                </div>
                                <p class="reviews_item__name">Быстров Арсений</p>
                                <p class="reviews_item__job">28 лет, программист</p>
                            </div>
                            <div class="reviews_item__content">
                                <div class="reviews_item__head">
                                    <p class="reviews_item__title">Все супер!</p>
                                    <div class="reviews_item__stars rating">
                                        <div class="rating__list">
                                        <span class="rating__item">
                                            <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                                <path class="rating__path" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                            </svg>
                                        </span>
                                            <span class="rating__item">
                                            <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                                <path class="rating__path" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                            </svg>
                                        </span>
                                            <span class="rating__item">
                                            <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                                <path class="rating__path rating__path-active" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                            </svg>
                                        </span>
                                            <span class="rating__item">
                                            <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                                <path class="rating__path rating__path-active" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                            </svg>
                                        </span>
                                            <span class="rating__item">
                                            <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                                <path class="rating__path rating__path-active" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                            </svg>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="reviews_item__body">
                                    Переезд обычно очень хлопотное дело, но нам повезло нас, перевозили ребята из Шмеля переезда! Все отлично, приехали четко по времени, все упаковали и аккуратно загрузили в машину. Спасибо ребята! Буду вас рекомендовать!!!!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews_index__item reviews_item">
                        <div class="reviews_item__wrap">
                            <div class="reviews_item__info">
                                <div class="reviews_item__pic">
                                    <img src="<?=FRONEND_BUILD_PATH?>img/avatar.png" srcset="<?=FRONEND_BUILD_PATH?>img/avatar@2x.png 2x, <?=FRONEND_BUILD_PATH?>img/avatar@3x.png 3x" alt="" class="reviews_item__img">
                                </div>
                                <p class="reviews_item__name">Быстров Арсений</p>
                                <p class="reviews_item__job">28 лет, программист</p>
                            </div>
                            <div class="reviews_item__content">
                                <div class="reviews_item__head">
                                    <p class="reviews_item__title">Все супер!</p>
                                    <div class="reviews_item__stars rating">
                                        <div class="rating__list">
                                        <span class="rating__item">
                                            <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                                <path class="rating__path" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                            </svg>
                                        </span>
                                            <span class="rating__item">
                                            <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                                <path class="rating__path" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                            </svg>
                                        </span>
                                            <span class="rating__item">
                                            <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                                <path class="rating__path rating__path-active" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                            </svg>
                                        </span>
                                            <span class="rating__item">
                                            <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                                <path class="rating__path rating__path-active" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                            </svg>
                                        </span>
                                            <span class="rating__item">
                                            <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                                <path class="rating__path rating__path-active" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                            </svg>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="reviews_item__body">
                                    Переезд обычно очень хлопотное дело, но нам повезло нас, перевозили ребята из Шмеля переезда! Все отлично, приехали четко по времени, все упаковали и аккуратно загрузили в машину. Спасибо ребята! Буду вас рекомендовать!!!!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reviews_index__navigation">
                    <div class="reviews_index__more_box">
                        <a href="#" class="reviews_index__more_link btn btn-white">Все отзывы</a>
                    </div>
                    <button class="reviews_index__arrow reviews_index__arrow-next reviews_arrow">
                        <span class="reviews_arrow__text">Следующий отзыв</span>
                        <span class="reviews_arrow__ico"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>