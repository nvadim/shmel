<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */
/** @global CCacheManager $CACHE_MANAGER */
/** @global CIntranetToolbar $INTRANET_TOOLBAR */

/*************************************************************************
 * Processing of received parameters
 *************************************************************************/
if (strlen($arParams["FILTER_NAME"]) <= 0 || !preg_match("/^[A-Za-z_][A-Za-z01-9_]*$/", $arParams["FILTER_NAME"])) {
    $arrFilter = array();
} else {
    global $$arParams["FILTER_NAME"];
    $arrFilter = ${$arParams["FILTER_NAME"]};
    if (!is_array($arrFilter))
        $arrFilter = array();
}

if (!isset($arParams["CACHE_TIME"]))
    $arParams["CACHE_TIME"] = 36000000;

if (!isset($arParams["COMPONENT_MARKER"]))
    $arParams["COMPONENT_MARKER"] = $this->randString();

$arParams["CACHE_FILTER"] = $arParams["CACHE_FILTER"] == "Y";
if (!$arParams["CACHE_FILTER"] && count($arrFilter) > 0)
    $arParams["CACHE_TIME"] = 0;

/*************************************************************************
 * Work with cache
 *************************************************************************/

$arResult = $_SESSION['MOVE_FORM'];
$arPages = [
    'route' => 'Маршрут',
    'depart' => 'Пункт отправления',
    'dest' => 'Пункт назначения',
    'transport' => 'Транспорт',
    'loaders' => 'Грузчики',
    'packaging' => 'Упаковка',
    'rigging' => 'Такелажные работы',
];
$pageUrlTemplate = "{$this->arParams['SEF_FOLDER']}#PAGE#/";

if ($this->StartResultCache(false, array($arParams, $arResult, ($arParams["CACHE_GROUPS"] === "N" ? false : $USER->GetGroups())))) {

    foreach ($arPages as $page => $arData) {
        if($page=='dest') {
            foreach ($arResult['FROM'] as $i => $item) {
                if($i == 0)
                    continue;

                $keyPage = 'intrm-'.$i;
                $dataPage = [
                    'URL' => str_replace('#PAGE#', $keyPage, $pageUrlTemplate),
                    'TEXT' => "Промежуточный адрес {$i}",
                    'IS_CURRENT' => ($keyPage == $arParams['STEP']) ? true : false
                ];
                $arResult['pages'][$keyPage] = $dataPage;
            }
        }

        $dataPage = [
            'URL' => str_replace('#PAGE#', $page, $pageUrlTemplate),
            'TEXT' => $arData,
            'IS_CURRENT' => ($page == $arParams['STEP']) ? true : false
        ];
        $arResult['pages'][$page] = $dataPage;


        if(!in_array($page, $arResult['PAGES_SAVED'])) {
            break;
        }
    }

}

$this->IncludeComponentTemplate();