<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Переезды");
?>

<div class="main__content">
    <div class="page_steps">
        <div class="box">
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
                    )
                ),
                false
            );
            ?>
        </div>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>