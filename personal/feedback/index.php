<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оставить отзыв");
?>

<?/*$APPLICATION->IncludeComponent(
	"bitrix:iblock.element.add.form", 
	"add_review",
	array(
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_DETAIL_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_NAME" => "Заголовок",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "Текст отзыва",
		"CUSTOM_TITLE_TAGS" => "",
		"DEFAULT_INPUT_SIZE" => "30",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
		"ELEMENT_ASSOC" => "CREATED_BY",
		"GROUPS" => array(
			0 => "3",
			1 => "4",
		),
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "info",
		"LEVEL_LAST" => "Y",
		"LIST_URL" => "",
		"MAX_FILE_SIZE" => "0",
		"MAX_LEVELS" => "100000",
		"MAX_USER_ENTRIES" => "100000",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
		"PROPERTY_CODES" => array(
			0 => "1",
			1 => "2",
			2 => "3",
			3 => "5",
			4 => "6",
			5 => "NAME",
			6 => "PREVIEW_TEXT",
		),
		"PROPERTY_CODES_REQUIRED" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
		),
		"RESIZE_IMAGES" => "N",
		"SEF_MODE" => "N",
		"STATUS" => "ANY",
		"STATUS_NEW" => "N",
		"USER_MESSAGE_ADD" => "",
		"USER_MESSAGE_EDIT" => "",
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);*/?>

<div class="personal_box__info">
    <form action="">
        <div class="personal_box__info_box personal_edit">
            <div class="personal_edit__info">
                <p class="personal_edit__title">Оцените пожалуйста качество работы нашей Компании</p>
                <div class="personal_edit__rating_list">
                    <div class="personal_edit__rating personal_rating">
                        <div class="personal_rating__title">Скорость</div>
                        <div class="personal_rating__rating">
                            <div class="rating">
                                <div class="rating__list rating__list-button">
                                    <button class="rating__item" type="button">
                                        <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                            <path class="rating__path" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                        </svg>
                                    </button>
                                    <button class="rating__item" type="button">
                                        <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                            <path class="rating__path" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                        </svg>
                                    </button>
                                    <button class="rating__item" type="button">
                                        <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                            <path class="rating__path" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                        </svg>
                                    </button>
                                    <button class="rating__item" type="button">
                                        <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                            <path class="rating__path" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                        </svg>
                                    </button>
                                    <button class="rating__item" type="button">
                                        <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                            <path class="rating__path rating__path-active" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="personal_edit__rating personal_rating">
                        <div class="personal_rating__title">Качество обслуживания</div>
                        <div class="personal_rating__rating">
                            <div class="rating">
                                <div class="rating__list rating__list-button">
                                    <button class="rating__item" type="button">
                                        <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                            <path class="rating__path" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                        </svg>
                                    </button>
                                    <button class="rating__item" type="button">
                                        <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                            <path class="rating__path" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                        </svg>
                                    </button>
                                    <button class="rating__item" type="button">
                                        <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                            <path class="rating__path" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                        </svg>
                                    </button>
                                    <button class="rating__item" type="button">
                                        <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                            <path class="rating__path" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                        </svg>
                                    </button>
                                    <button class="rating__item" type="button">
                                        <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                            <path class="rating__path rating__path-active" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="personal_edit__rating personal_rating">
                        <div class="personal_rating__title">Соответствие вашим ожиданиям</div>
                        <div class="personal_rating__rating">
                            <div class="rating">
                                <div class="rating__list rating__list-button">
                                    <button class="rating__item" type="button">
                                        <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                            <path class="rating__path" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                        </svg>
                                    </button>
                                    <button class="rating__item" type="button">
                                        <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                            <path class="rating__path" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                        </svg>
                                    </button>
                                    <button class="rating__item" type="button">
                                        <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                            <path class="rating__path" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                        </svg>
                                    </button>
                                    <button class="rating__item" type="button">
                                        <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                            <path class="rating__path" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                        </svg>
                                    </button>
                                    <button class="rating__item" type="button">
                                        <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                            <path class="rating__path rating__path-active" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="personal_box__info_box personal_box__info_box-border_top personal_edit">
            <div class="personal_edit__info">
                <p class="personal_edit__title">Вы хотели бы воспользоваться в будущем нашими услугами?</p>
                <div class="personal_edit__use_more personal_use_more">
                    <div class="personal_use_more__one">
                        <input type="radio" name="use_more" value="true" id="use_more__true" class="personal_use_more__radio">
                        <label for="use_more__true" class="personal_use_more__label">Да, конечно</label>
                    </div>
                    <div class="personal_use_more__one">
                        <input type="radio" name="use_more" value="false" id="use_more__false" class="personal_use_more__radio">
                        <label for="use_more__false" class="personal_use_more__label">Нет</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="personal_box__info_box personal_box__info_box-border_top personal_edit">
            <div class="personal_edit__info">
                <p class="personal_edit__title">Текст отзыва</p>
                <div class="personal_edit__width form">
                    <div class="form__one form__one-left form__one-bigger">
                        <textarea name="" class="form__element form__element-textarea"></textarea>
                    </div>
                    <div class="form__one form__one-left form__one-bigger form__one-justify">
                        <div class="form">
                            <div class="form__check check">
                                <input type="checkbox" name="check_avatar" value="check_avatar" id="check_avatar" class="check__checkbox" checked>
                                <label for="check_avatar" class="check__label">Опубликовать фотографию профиля</label>
                            </div>
                        </div>
                        <button class="btn">Отправить</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>