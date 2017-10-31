<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/* @var CUser $user */
/* @var CUser $USER */
$user = CUser::GetList($by = 'ID', $order = 'DESC', ['ID' => $USER->GetID()], ['FIELDS' => ['PERSONAL_PHOTO']])->Fetch();
if ($user["PERSONAL_PHOTO"] > 0)
{
    $file = CFile::ResizeImageGet($user["PERSONAL_PHOTO"], array('width'=>145, 'height'=>145), BX_RESIZE_IMAGE_EXACT, true);
    /* srcset="<?=FRONEND_BUILD_PATH?>img/avatar@2x.png 2x, <?=FRONEND_BUILD_PATH?>img/avatar@3x.png 3x" */
    $user["PERSONAL_PHOTO_HTML"] = '<img src="'.$file['src'].'" alt="" class="personal_card__avatar_img">';
}
?>
                        </div>
                        <div class="personal_box__right">
                            <div class="personal_box__card personal_card">
                                <div class="personal_card__avatar">
                                    <?=$user["PERSONAL_PHOTO_HTML"]?>
                                </div>
                                <div class="personal_card__name"><?=$USER->GetFullName()?></div>
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "personal",
                                    Array(
                                        "ALLOW_MULTI_SELECT" => "N",
                                        "CHILD_MENU_TYPE" => "left",
                                        "DELAY" => "N",
                                        "MAX_LEVEL" => "1",
                                        "MENU_CACHE_GET_VARS" => array(""),
                                        "MENU_CACHE_TIME" => "3600",
                                        "MENU_CACHE_TYPE" => "N",
                                        "MENU_CACHE_USE_GROUPS" => "N",
                                        "ROOT_MENU_TYPE" => "left",
                                        "USE_EXT" => "N"
                                    )
                                );?>
                                <div class="personal_card__out_box">
                                    <a href="/?logout=yes" class="personal_card__out_btn btn btn-white btn-white_color btn-width">Выйти</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?
require_once $_SERVER['DOCUMENT_ROOT'].'/local/include/footer.php';
?>