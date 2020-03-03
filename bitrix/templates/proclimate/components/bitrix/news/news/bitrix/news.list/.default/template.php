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
<div class="row news-mod_content">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <div class="news-item">
            <div class="news-item_img">
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                    <img data-src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
                </a>
            </div>
            <div class="news-item-desc">
                <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
                    <span class="news-item_date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
                <?endif?>
                <div class="news-item_title"><?echo $arItem["NAME"]?></div>
                <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                    <p class="news-item_list-text"><?echo $arItem["PREVIEW_TEXT"];?></p>
                <?endif;?>
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news-item_more-details">
                    <span class="text">Подробнее</span> <span class="arrow">&#8594;</span>
                </a>
            </div>
        </div>
    </div>
    <?endforeach;?>

</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?>
<?endif;?>
