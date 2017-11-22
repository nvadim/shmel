<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="main__content">
    <div class="move_page">
        <?$APPLICATION->IncludeComponent(
            "nvadim:empty",
            "",
            Array(
                'CACHE_TIME' => 86400,
                'CACHE_TYPE' => 'A'
            ), $component
        );?>

        <div class="move_page__content">
            <?
            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "shares",
                array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "IBLOCK_TYPE" => "info",
                    "IBLOCK_ID" => "2",
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "PROPERTY_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "Y",
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "STRICT_SECTION_CHECK" => "N",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "PAGER_TEMPLATE" => ".default",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "PAGER_TITLE" => "Новости",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "SET_STATUS_404" => "N",
                    "SHOW_404" => "N",
                    "MESSAGE_404" => ""
                ),
                $component
            );
            ?>

            <?
            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "solutions",
                array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "IBLOCK_TYPE" => "info",
                    "IBLOCK_ID" => "2",
                    "NEWS_COUNT" => "1",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "PROPERTY_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "Y",
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "STRICT_SECTION_CHECK" => "N",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "PAGER_TEMPLATE" => ".default",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "PAGER_TITLE" => "Новости",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "SET_STATUS_404" => "N",
                    "SHOW_404" => "N",
                    "MESSAGE_404" => ""
                ),
                $component
            );
            ?>

        </div>
    </div>
</div>

<?
$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    ".default",
    Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => "/inc_areas/guarantees.php",
        "EDIT_TEMPLATE" => ""
    )
);
?>

<div class="reviews_index gray">
    <div class="reviews_index__wrap box">
        <p class="reviews_index__title title">Отзывы клиентов</p>
        <div class="reviews_index__slider_wrap">
            <div class="reviews_index__slider">
                <div class="reviews_index__item reviews_item">
                    <div class="reviews_item__wrap">
                        <div class="reviews_item__info">
                            <div class="reviews_item__pic">
                                <img src="img/avatar.png" srcset="img/avatar@2x.png 2x, img/avatar@3x.png 3x" alt="" class="reviews_item__img">
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
                                <img src="img/avatar.png" srcset="img/avatar@2x.png 2x, img/avatar@3x.png 3x" alt="" class="reviews_item__img">
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
