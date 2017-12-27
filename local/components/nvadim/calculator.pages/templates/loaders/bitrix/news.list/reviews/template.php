<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="reviews_index gray">
    <div class="reviews_index__wrap box">
        <p class="reviews_index__title title">Отзывы клиентов</p>
        <div class="reviews_index__slider_wrap">
            <div class="reviews_index__slider">

            <? foreach($arResult["ITEMS"] as $arItem) {
                if(!$arItem['UID'])
                    continue;

                $props = $arItem['PROPERTIES'];
                $userInfo = $arResult["USERS"][$arItem['UID']];
                ?>
                <div class="reviews_index__item reviews_item">
                    <div class="reviews_item__wrap">
                        <? if($userInfo['AVATAR_PATH']) {?>
                        <div class="reviews_item__info">
                            <div class="reviews_item__pic">
                                <img src="<?= $userInfo['AVATAR_PATH']?>" alt="" class="reviews_item__img">
                            </div>
                        </div>
                        <? }?>
                        <div class="reviews_item__content">
                            <div class="reviews_item__head">
                                <p class="reviews_item__title"><?= "{$userInfo['LAST_NAME']} {$userInfo['NAME']}"?></p>
                                <div class="reviews_item__stars rating">
                                    <div class="rating__list">
                                    <? for($i = 0; $i<5; $i++) {?>
                                    <span class="rating__item <?= $i?>">
                                        <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                            <path class="rating__path<?= ((5-$i)<=$props['MARK']['VALUE'])?' rating__path-active':''?>" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"></path>
                                        </svg>
                                    </span>
                                    <? }?>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews_item__body"><?= $arItem['PREVIEW_TEXT']?></div>
                        </div>
                    </div>
                </div>
            <? } ?>

            </div>
            <div class="reviews_index__navigation">
                <div class="reviews_index__more_box">
                    <a href="/reviews/" class="reviews_index__more_link btn btn-white">Все отзывы</a>
                </div>
                <button class="reviews_index__arrow reviews_index__arrow-next reviews_arrow">
                    <span class="reviews_arrow__text">Следующий отзыв</span>
                    <span class="reviews_arrow__ico"></span>
                </button>
            </div>
        </div>
    </div>
</div>
