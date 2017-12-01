<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$arDefaultVariableAliases = array();
$arComponentVariables = array('intermediate_num', 'page');

$arDefaultUrlTemplates404 = array(
    'intermediate' => 'intrm-#intermediate_num#/',
    'page' => '#page#',
);

$arPages = [
    'route',
    'depart',
    'dest',
    'transport',
    'loaders',
    'packaging',
    'rigging',
];

$calcPage = '';
if ($arParams['SEF_MODE'] == 'Y')
{
    $arVariables = array();

    $engine = new CComponentEngine($this);
    $arUrlTemplates = CComponentEngine::makeComponentUrlTemplates($arDefaultUrlTemplates404, $arParams["SEF_URL_TEMPLATES"]);
    $arVariableAliases = CComponentEngine::makeComponentVariableAliases($arDefaultVariableAliases404, $arParams["VARIABLE_ALIASES"]);

    $componentPage = $engine->guessComponentPath(
        $arParams["SEF_FOLDER"],
        $arUrlTemplates,
        $arVariables
    );

    if (isset($arVariables['page'])
        && in_array($arVariables['page'], $arPages)
    ) {
        $calcPage = $arVariables['page'];
    }
    if(isset($arVariables['intermediate_num'])) {
        $calcPage = 'intrm-' . $arVariables['intermediate_num'];
        $componentPage = 'page';
    }

    if(!$componentPage)
    {
        $componentPage = "index";
    }

    CComponentEngine::initComponentVariables($componentPage, $arComponentVariables, $arVariableAliases, $arVariables);
    $arResult = array(
        "FOLDER" => $arParams["SEF_FOLDER"],
        "URL_TEMPLATES" => $arUrlTemplates,
        "VARIABLES" => $arVariables,
        "ALIASES" => $arVariableAliases,
        "CALC_PAGE" => $calcPage,
    );
}
else
{
    $arVariables = array();

    $arVariableAliases = CComponentEngine::makeComponentVariableAliases($arDefaultVariableAliases, $arParams["VARIABLE_ALIASES"]);
    CComponentEngine::initComponentVariables(false, $arComponentVariables, $arVariableAliases, $arVariables);

    $componentPage = "";

    if (!empty($arVariables))
        $componentPage = 'page';
    else
        $componentPage = 'index';

    $currentPage = htmlspecialcharsbx($APPLICATION->GetCurPage())."?";
    $arResult = array(
        "FOLDER" => "",
        "URL_TEMPLATES" => array(
            "intermediate" => $currentPage.$arVariableAliases["intermediate_num"]."=#intermediate_num#",
            "page" => $currentPage.$arVariableAliases["page"] . '=#page#',
        ),
        "VARIABLES" => $arVariables,
        "ALIASES" => $arVariableAliases
    );

}

if (isset($arVariables['page'])
    && !in_array($arVariables['page'], $arPages)) {

    LocalRedirect($arParams['SEF_FOLDER'], true);
}

$this->IncludeComponentTemplate($componentPage);