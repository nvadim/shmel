<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Грузчики");
?>
<div class="main__content">
    <?
    $APPLICATION->IncludeComponent(
        "nvadim:calculator.pages",
        "loaders",
        array(
            "SEF_FOLDER" => "/loaders/",
            "SEF_MODE" => "Y",
            "CACHE_TIME" => "86400",
            "CACHE_TYPE" => "A",
            "SEF_URL_TEMPLATES" => array(
                "page" => "#page#/",
                "intermediate" => "intrm-#intermediate_num#/",
            ),
            'FORM_CODE' => 'LOADERS',
            'SECTION' => 'loaders',
            "PAGES" => array(
                'route',
                'addresses',
                'work', //rigging
                'loaders',
                'packaging',
                'transport',
                'confirm',
            ),
            'REQUIRED' => array(
                'route' => [
                    'MOVE_TYPE' => 'Выберите тип переезда',
                    'DATE' => 'Укажите дату переезда',
                    'TIME' => 'Укажите время переезда',
                    'FROM' => 'Укажите Пункт отправления',
                    'TO' => 'Укажите Пункт назначения'
                ],
            )
        ),
        false
    );
    ?>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>