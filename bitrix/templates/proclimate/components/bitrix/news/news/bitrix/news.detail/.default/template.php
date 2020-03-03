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
<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
    <h1><?=$arResult["NAME"]?></h1>
<?endif;?>
<div class="row">
    <div class="col-md-5 order-md-2">
        <figure class="news-detailed_img">
            <img data-src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="<?=$arResult["NAME"]?>">
        </figure>
    </div>
    <div class="col-md-7">
        <div class="news-detailed_desc-box">
            <?echo $arResult["DETAIL_TEXT"];?>
        </div>
    </div>
</div>
