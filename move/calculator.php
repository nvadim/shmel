<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Переезд");
?>
<div class="main__content">
    <div class="page_steps">
        <div class="box">
            <?$APPLICATION->IncludeComponent(
                "nvadim:calculator",
                "",
                Array(
                    'POINT_ENTRY' => '/move/calculator.php',
                    'STEP' => $_REQUEST['STEP'],
                    'CACHE_TIME' => 86400,
                    'CACHE_TYPE' => 'A'
                )
            );?>
        </div>
    </div>
</div>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");