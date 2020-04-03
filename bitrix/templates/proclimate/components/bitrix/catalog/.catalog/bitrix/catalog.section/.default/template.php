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
<div class="row catalog-product_content">
    <? if (!empty($arResult['ITEMS'])): ?>
    <? foreach ($arResult['ITEMS'] as $key => $arItem): ?>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
            <div class="product-item">
                <div class="product-item_img">
                    <?
                        if($arItem['PROPERTIES']['MARK']['VALUE_XML_ID'])
                            include('mark/'.$arItem['PROPERTIES']['MARK']['VALUE_XML_ID'].'.php');
                    ?>
                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
                        <img data-src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>">
                    </a>
                </div>
                <div class="product-item_desc">
                    <div class="product_item_desc-top">
                        <span class="product-item_category"><?=$arItem['SECTION']['NAME'];?></span>
                        <div class="product-item_title">
                            <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
                                <?=$arItem['NAME']?>
                            </a>
                        </div>
                        <span class="product-item_price"><?=$arItem['PRICES']['BASE']['PRINT_VALUE']?></span>
                    </div>
                    <div class="product-item_hidden">
                        <ul class="product-item_features">
                            <? foreach ($arParams['LIST_PROPERTY_CODE'] as $code):
                                if(!$arItem['PROPERTIES'][$code]['VALUE'])
                                    continue;
                                ?>
                                <li>
                                    <span class="<?=($arItem['PROPERTIES'][$code]['HINT']) ?: 'glipf-swing'?>"></span>
                                    <span class="gray-color"><?=$arItem['PROPERTIES'][$code]['NAME']?></span> -
                                    <? echo (is_array($arItem['PROPERTIES'][$code]['VALUE']) ? implode(' / ', $arItem['PROPERTIES'][$code]['VALUE']) : $arItem['PROPERTIES'][$code]['VALUE']);?>
                                </li>
                            <? endforeach; ?>
                        </ul>
                        <a href="" class="product-item_buy-btn main-btn" data-id="<?=$arItem['ID']?>">Купить</a>
                    </div>
                </div>
            </div>
        </div>
    <? endforeach;?>
    <?else:?>
        <p>Нет товаров!</p>
    <? endif;?>
</div>

<? echo $arResult["NAV_STRING"]; ?>
