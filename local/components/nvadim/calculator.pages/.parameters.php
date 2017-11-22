<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arComponentParameters = array(
    "GROUPS" => array(),
    "PARAMETERS" => array(
        "VARIABLE_ALIASES" => array(
            "page" => array("NAME" => GetMessage("NC_PARAMETERS_ЗФПУ")),
            "intermediate_num" => array("NAME" => GetMessage("NC_PARAMETERS_INTER")),
        ),
        "SEF_MODE" => Array(
            "page" => Array(
                "NAME" => GetMessage("NC_PARAMETERS_SEF_ЗФПУ"),
                "DEFAULT" => "#page#/",
                "VARIABLES" => array()
            ),
            "intermediate" => Array(
                "NAME" => GetMessage("NC_PARAMETERS_SEF_INTERMEDIATE"),
                "DEFAULT" => "i#intermediate_num#/",
                "VARIABLES" => array("intermediate_num")
            ),
//            "depart" => Array(
//                "NAME" => GetMessage("NC_PARAMETERS_SEF_DEPART"),
//                "DEFAULT" => "depart/",
//                "VARIABLES" => array()
//            ),
//            "dest" => Array(
//                "NAME" => GetMessage("NC_PARAMETERS_SEF_DEST"),
//                "DEFAULT" => "dest/",
//                "VARIABLES" => array()
//            ),
//            "transport" => Array(
//                "NAME" => GetMessage("NC_PARAMETERS_SEF_TR"),
//                "DEFAULT" => "transport/",
//                "VARIABLES" => array()
//            ),
//            "loaders" => Array(
//                "NAME" => GetMessage("NC_PARAMETERS_SEF_LOAD"),
//                "DEFAULT" => "loaders/",
//                "VARIABLES" => array()
//            ),
        ),
        "CACHE_TIME"  =>  array("DEFAULT"=>36000000),

    )
);
?>
