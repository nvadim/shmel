<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Переезды");

// выпадающий список выгрузки/загрузки
ShmelTools\Options::getInstance()->setProperty('selectList', [
    'load' => 'Загрузка',
    'upload' => 'Выгрузка',
    'both_load' => 'Загрузка/Выгрузка',
]);
?>
<div class="main__content">
    <?
    $APPLICATION->IncludeComponent(
        "nvadim:calculator.pages",
        "",
        array(
            "SEF_FOLDER" => "/move/",
            "SEF_MODE" => "Y",
            "CACHE_TIME" => "86400",
            "CACHE_TYPE" => "A",
            "SEF_URL_TEMPLATES" => array(
                "page" => "#page#/",
                "intermediate" => "intrm-#intermediate_num#/",
            ),
            'SESSION_FORM_CODE' => 'MOVE_FORM',
            'SECTION' => 'move',
            'PAGES' => array(
                'route',
                'depart',
                'dest',
                'transport',
                'transport-edit',
                'loaders',
                'loaders-edit',
                'packaging',
                'packaging-edit',
                'rigging',
                'confirm',
                'success',
            ),
            'REQUIRED' => array(
                'route' => [
                    'MOVE_TYPE' => 'Выберите тип переезда',
                    'DATE' => 'Укажите дату переезда',
                    'TIME' => 'Укажите время переезда',
                    'FROM' => 'Укажите Пункт отправления',
                    'TO' => 'Укажите Пункт назначения'
                ],
                'depart' => [
                    'NUM_OF_ROOMS' => 'Укажите «Кол-во комнат»',
                    'CLASS' => 'Выберите «Класс помещения»',
                    'FILLING' => 'Выберите «Загруженность помещения»'
                ],
                'intermediate' => [
                    'NUM_OF_ROOMS' => 'Укажите «Кол-во комнат»',
                    'CLASS' => 'Выберите «Класс помещения»',
                    'FILLING' => 'Выберите «Загруженность помещения»'
                ],
                'dest' => [
                    'NUM_OF_ROOMS' => 'Укажите «Кол-во комнат»',
                    'CLASS' => 'Выберите «Класс помещения»',
                    'FILLING' => 'Выберите «Загруженность помещения»'
                ],
                'transport' => [
                    'POINT_CHECK' => 'Выберите маршрут для транспорта'
                ],
                'transport-edit' => [
                    'POINT_CHECK' => 'Выберите маршрут для транспорта'
                ],
                'loaders' => [
                    'POINT_CHECK' => 'Выберите маршрут для грузчиков'
                ],
                'packaging' => [
                    'POINT_CHECK' => 'Выберите маршрут для упаковки'
                ],
            )
        ),
        false
    );
    ?>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>