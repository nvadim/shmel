<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Переезды");
?>

    <div class="main__content">
        <div class="move_page">
            <div class="move_page__head">
                <div class="move_page__wrap box">
                    <div class="move_page__title move_title">
                        <div class="move_title__text_box">
                            <p class="move_title__title title title-left title-left_orange">Переезды</p>
                            <p class="move_title__text">Чтобы приступить к рассчету, выберите интересующую вас услугу:</p>
                        </div>
                        <div class="move_title__pic">
                            <img src="<?= FRONEND_BUILD_PATH?>img/deliver_page.svg" class="move_title__img move_title__img-move">
                        </div>
                    </div>
                </div>
                <div class="move_page__nav_wrap">
                    <div class="move_page__nav_box move_nav">
                        <div class="move_nav__wrap box">
                            <a href="/move/calculator.php?move_type=apartment" class="move_nav__item">
                                <span class="move_nav__pic">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="262" height="111" viewBox="0 0 262 111" class="move_pic">
                                        <g fill="#FFF" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path class="move_pic__green" d="M86.11 109.982h32.175V60.681H86.11z"/>
                                            <path class="move_pic__green" d="M173.295 38.884H111.54c-7.452 0-13.493 6.042-13.493 13.493v8.304M173.295 70.022h-55.01M173.295 93.894h-55.01M173.295 101.679h-55.01M228.305 109.982h32.176V60.681h-32.176z"/>
                                            <path class="move_pic__green" d="M173.295 38.884h61.757c7.452 0 13.493 6.042 13.493 13.493v8.304M173.295 70.022h55.01M173.295 93.894h55.01M173.295 101.679h55.01"/>
                                            <path class="move_pic__gray" d="M1 101.68h62.275v-41H1zM63.276 81.18H1M40.442 91.69H23.834M40.442 70.671H23.834M8.785 109.982v-8.303M55.491 109.982v-8.303"/>
                                            <path class="move_pic__orange" d="M44.419 60.68a16.013 16.013 0 0 0 3.807-10.378c0-8.885-7.203-16.088-16.088-16.088-8.885 0-16.088 7.203-16.088 16.088 0 3.957 1.435 7.576 3.806 10.379h24.563zM63.276 34.214H1L8.785 7.227H55.49zM32.138 7.227V1"/>
                                            <path class="move_pic__green" d="M173.295 38.884v62.795"/>
                                        </g>
                                    </svg>
                                </span>
                                <span class="move_nav__name">Квартирный переезд</span>
                            </a>
                            <a href="/move/calculator.php?move_type=office" class="move_nav__item">
                                <span class="move_nav__pic">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="199" height="128" viewBox="0 0 199 128" class="move_pic">
                                        <g fill="#FFF" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path class="move_pic__gray" d="M27.951 101.567a3.962 3.962 0 1 1-7.924 0 3.962 3.962 0 0 1 7.924 0z"/>
                                            <path class="move_pic__orange" d="M35.026 73.267v21.508a6.792 6.792 0 0 1-6.792 6.792H23.99"/>
                                            <path class="move_pic__gray" d="M1.066 56.286h109.522v-6.792H1.066zM6.726 126.507h4.811v-70.22h-4.81zM100.117 126.507h4.811v-70.22h-4.81zM11.396 73.267h88.58M45.356 64.777h20.66M85.401 126.507H64.176l-2.83-28.902H88.23zM61.964 105.53h25.648"/>
                                            <path class="move_pic__orange" d="M11.537 41.57h63.251V1.668h-63.25zM11.537 34.212h63.251"/>
                                            <path class="move_pic__green" d="M136.342 76.663a6.792 6.792 0 0 1-6.793-6.792v-8.349h5.236"/>
                                            <path class="move_pic__orange" d="M99.976 37.608h.99a3.962 3.962 0 1 1 0 7.924h-.99"/>
                                            <path class="move_pic__green" d="M190.678 76.663a6.792 6.792 0 0 0 6.792-6.792v-8.349h-5.235"/>
                                            <path class="move_pic__orange" d="M51.724 49.495H34.602L36.3 41.57h13.726zM88.231 49.495h11.745V34.213H88.23zM93.254 28.623a3.701 3.701 0 0 0 0-5.236 3.701 3.701 0 0 1 0-5.235"/>
                                            <path class="move_pic__green" d="M169.075 87.464a5.566 5.566 0 1 1-11.13 0"/>
                                            <path class="move_pic__orange" d="M97.335 26.288a3.701 3.701 0 0 0 0-5.235 3.702 3.702 0 0 1 0-5.236"/>
                                            <path class="move_pic__green" d="M185.301 82.04H141.72a5.377 5.377 0 1 1 0-10.754H185.3a5.377 5.377 0 1 1 0 10.754zM148.7 87.718h29.62V82.04H148.7zM147.945 120.104a7.075 7.075 0 0 1 7.075-7.075H172a7.075 7.075 0 0 1 7.075 7.075M183.745 71.286h-40.47V31.24c0-9.378 7.603-16.98 16.98-16.98h6.51c9.377 0 16.98 7.602 16.98 16.98v40.045zM163.51 93.03v27.074"/>
                                            <path class="move_pic__green" d="M166.34 122.934a2.83 2.83 0 1 1-5.66 0 2.83 2.83 0 0 1 5.66 0zM150.775 122.934a2.83 2.83 0 1 1-5.66 0 2.83 2.83 0 0 1 5.66 0zM181.905 122.934a2.83 2.83 0 1 1-5.66 0 2.83 2.83 0 0 1 5.66 0zM151.624 33.08h23.772M151.624 46.452h23.772M151.624 59.824h23.772"/>
                                            <path class="move_pic__orange" d="M68.704 37.608h2.264"/>
                                        </g>
                                    </svg>
                                </span>
                                <span class="move_nav__name">Офисный переезд</span>
                            </a>
                            <a href="/move/calculator.php?move_type=village" class="move_nav__item">
                                <span class="move_nav__pic">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="244" height="131" viewBox="0 0 244 131" class="move_pic">
                                        <g fill="#FFF" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path class="move_pic__green" d="M26.649 112.33c-.381-2.614-3.523-4.349-5.958-3.757-3.97.965-4.259 4.924-4.403 6.973.174-.97-6.51-5.888-9.298.424-.496 1.124-.059 4.646 1.39 6.183"/>
                                            <path class="move_pic__green" d="M31.606 116.566c0-3.845-1.891-4.405-3.618-4.407-1.338-.001-2.682.428-3.737 1.906-.93 1.303-1.129 4.624-1.129 4.624s-2.192-4.982-6.861-3.146c-2.567 1.009-4.382 3.812-3.837 6.525-2.009-.889-4.585-.207-5.895 1.563-1.31 1.77-1.217 3.77.21 5.443"/>
                                            <path class="move_pic__gray" d="M31.606 129.074h119.579V68.679H31.606zM180.868 36.304v42.738"/>
                                            <path class="move_pic__gray" d="M91.396 22.58l69.475 46.1H21.92z"/>
                                            <path class="move_pic__gray" d="M97.784 26.819l38.665-25.656 52.96 35.142h-77.326z"/>
                                            <path class="move_pic__orange" d="M97.784 45.63c0 3.543-2.86 6.413-6.388 6.413-3.529 0-6.389-2.87-6.389-6.414 0-3.543 2.86-6.414 6.39-6.414 3.527 0 6.387 2.87 6.387 6.414zM55.095 61.532h72.601M113.028 27.582h47.842M41.571 129.074h16.371V99.055h-16.37zM57.942 115.494h-5.694M73.957 114.065h39.071V82.259h-39.07zM84.201 82.26v31.806M102.784 82.26v31.806M125.917 97.447h15.125V82.26h-15.125zM145.357 53.082h28.394v-9.63h-28.394zM36.945 92.41h25.624"/>
                                            <path class="move_pic__gray" d="M151.185 87.977h64.06v-8.934h-64.06zM205.28 123.714V87.977M151.185 123.714h91.107"/>
                                            <path class="move_pic__green" d="M205.28 108.961c0-3.116 3.862-4.967 6.181-5.163 2.318-.196 4.704.943 6.012 2.873 1.818-1.026 4.23-.878 5.908.366s2.528 3.515 2.085 5.562c3.179-1.196 6.956-.63 9.648 1.45 2.691 2.08 3.235 5.912.595 9.664M223.237 106.372c3.048-2.365 7.59-2.562 10.83-.472 1.107.713 2.106 1.75 2.331 3.049.28 1.615-.68 3.159-1.597 4.516M215.206 103.525c.003-1.285.898-2.418 1.96-3.139 2.24-1.52 5.397-1.527 7.645-.017 1.097.738 2.031 2.017 1.724 3.306"/>
                                            <path class="move_pic__orange" d="M160.87 123.714h34.724V99.243H160.87zM165.065 111.698H191.4M165.065 117.638H191.4M165.065 105.76H191.4"/>
                                            <path class="move_pic__gray" d="M180.868 64.39h27.437M186.563 64.39v13.76M192.257 64.39v13.76M197.951 64.39v13.76M203.645 64.39v13.76M31.606 129.074H1"/>
                                        </g>
                                    </svg>
                                </span>
                                <span class="move_nav__name">Дачный переезд</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

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
                    false
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
                    false
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

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>