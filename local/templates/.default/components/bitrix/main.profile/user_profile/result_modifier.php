<?php
if ($arResult['DATA_SAVED'] == 'Y'){
    LocalRedirect('/personal/');
}

if ($arResult["arUser"]["PERSONAL_PHOTO"] > 0)
{
    $file = CFile::ResizeImageGet($arResult["arUser"]['PERSONAL_PHOTO'], array('width'=>145, 'height'=>145), BX_RESIZE_IMAGE_EXACT, true);
    /* srcset="<?=FRONEND_BUILD_PATH?>img/avatar@2x.png 2x, <?=FRONEND_BUILD_PATH?>img/avatar@3x.png 3x" */
    $arResult["arUser"]["PERSONAL_PHOTO_HTML"] = '<img src="'.$file['src'].'" alt="" class="personal_edit__avatar_img">';
}