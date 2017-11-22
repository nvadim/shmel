<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
$formUrl = $APPLICATION->GetCurPageParam();

if(strpos($formUrl, '?')!==false) {
    $formUrl .= '&STEP='.$arResult['next_step'];
}
?>

<div class="page_steps__wrap">
    <div class="page_steps__content">
        <?= ShowTitleOrHeader()?>

        <div class="move_calc">
            <form action="<?=$formUrl ?>" name="calc_form" method="POST" class="move_calc__form">
                <input type="hidden" name="STEP" value="<?= $arResult['next_step']?>">
                <?require "include/" . $arResult['form']?>
            </form>
        </div>
    </div>
    <div class="page_steps__sidebar sidebar">
        <?require "include/" . $arResult['sidebar']?>
    </div>
</div>
