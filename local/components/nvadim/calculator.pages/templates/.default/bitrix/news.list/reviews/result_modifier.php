<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


$arResult['USERS'] = [];
foreach ($arResult["ITEMS"] as &$item)
{
    $item['UID'] = $item['PROPERTIES']['USER_ID']['VALUE'];
    if(!$item['UID'])
        continue;

    $arResult['USERS'][$item['UID']] = [];
}

$rs = CUser::GetList(
    $by = 'id', $order = 'desc',
    [
        'ID' => implode('|', array_keys($arResult['USERS']))
    ],
    [
        'FIELDS' => ['ID', 'NAME', 'LAST_NAME', 'PERSONAL_PHOTO'],
        'NAV_PARAMS' => array(),
    ]
);
while ($u = $rs->GetNext()) {
    if (!$u['PERSONAL_PHOTO']) {
        unset($u['PERSONAL_PHOTO']);
    }

    $u['AVATAR_PATH'] = CFile::GetPath($u['PERSONAL_PHOTO']);
    $arResult['USERS'][$u['ID']] = $u;
}