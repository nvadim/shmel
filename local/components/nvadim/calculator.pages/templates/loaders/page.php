<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="page_steps">
    <div class="box">
        <div class="page_steps__wrap">
            <div class="page_steps__content">
                <?= ShowTitleOrHeader()?>

                <?
                $formTemplate = $arResult['CALC_PAGE'];
                $APPLICATION->IncludeComponent(
                    "nvadim:calculator.form",
                    $formTemplate,
                    Array(
                        'CACHE_TIME' => 86400,
                        'CACHE_TYPE' => 'A',
                        'VARIABLES' => $arResult['VARIABLES'],
                        'SEF_FOLDER' => $arParams['SEF_FOLDER'],
                        'STEP' => $arResult['CALC_PAGE'],
                        'SECTION' => $arParams['SECTION'],
                        'FORM_CODE' => $arParams['FORM_CODE'],
                        'SESS_ID' => $_SESSION['fixed_session_id'],
                        'REQUIRED' => $arParams['REQUIRED'],
                    ), $component
                );
                ?>

            </div>

            <div class="page_steps__sidebar sidebar">
            <?
            if($arResult['CALC_PAGE']=='route') {
                $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "sidebar",
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
                        "CACHE_TIME" => "86400",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "SET_TITLE" => "N",
                        "SET_BROWSER_TITLE" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
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
            } else {
                $APPLICATION->IncludeComponent(
                    "nvadim:navigator",
                    '',
                    Array(
                        'CACHE_TIME' => 86400,
                        'CACHE_TYPE' => 'A',
                        'VARIABLES' => $arResult['VARIABLES'],
                        'SEF_FOLDER' => $arParams['SEF_FOLDER'],
                        'STEP' => $arResult['CALC_PAGE'],
                        'SESS_ID' => $_SESSION['fixed_session_id'],
                    ), $component
                );
            }
            ?>
            </div>
        </div>
    </div>
</div>