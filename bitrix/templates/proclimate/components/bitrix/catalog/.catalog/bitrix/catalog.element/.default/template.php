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

<div class="row selected-product_content">
    <div class="col-lg-5">
        <div class="selected-product_desc-header  tablet-visible">
            <span class="selected-product_desc-type">Настенный кондиционер</span>
            <h1 class="selected-product_title"><?=$arResult['NAME']?></h1>
            <div class="selected-product_bottom-panel">
                <span class="selected-product_code">Код товара: <?=$arResult['ID']?></span>
                <span class="selected-product_brand"><img data-src="img/static/brand-product/01.jpg" alt="alt"></span>
            </div>
        </div>

        <div class="selected-product_large-slider js-big-slider-img">
            <? foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $key => $gallery):?>
                <a href="<?=$gallery?>" class="fancybox selected-product_large-img" data-fancybox="group">
                <img data-src="<?=$gallery?>" alt="<?=$arResult['NAME']?>">
                <div class="product-item_new">
                    <span class="<?=$arResult['PROPERTIES']['GALLERY']['DESCRIPTION'][$key]?>"></span>
                </div>
            </a>
            <? endforeach; ?>
        </div>
        <!-- end selected-product-large-img -->
        <ul class="selected-product_small-slider js-miniature-pictures">
            <? foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $key => $gallery):?>
            <li>
                <img data-src="<?=$gallery?>" alt="<?=$arResult['NAME']?>">
            </li>
            <? endforeach; ?>
        </ul>
        <!-- end realty-detailed-small-slider -->
    </div>
    <div class="col-lg-7">
        <div class="selected-product_desc">
            <div class="selected-product_desc-header  tablet-hidden">
                <span class="selected-product_desc-type">Настенный кондиционер</span>
                <h1 class="selected-product_title"><?=$arResult['NAME']?></h1>
                <div class="selected-product_bottom-panel">
                    <span class="selected-product_code">Код товара: <?=$arResult['ID']?></span>
                    <span class="selected-product_brand"><img data-src="img/static/brand-product/01.jpg" alt="alt"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5 col-mod-right">
                    <div class="selected-product_features-title">Основные характеристики:</div>
                    <ul class="selected-product_features">
                        <? foreach ($arParams['DETAIL_PROPERTY_CODE'] as $code):?>
                        <li>
                            <span class="<?=($arResult['PROPERTIES'][$code]['HINT']) ?: 'glipf-swing'?>"></span>
                            <?=$arResult['PROPERTIES'][$code]['NAME']?> - <? echo (is_array($arResult['PROPERTIES'][$code]['VALUE']) ? implode(' / ', $arResult['PROPERTIES'][$code]['VALUE']) : $arResult['PROPERTIES'][$code]['VALUE']);?>
                        </li>
                        <? endforeach; ?>
                    </ul>
                </div>
                <div class="col-sm-7">
                    <div class="selected-product_border-box">
                        <div class="selected-product_box-top">
                            <span class="text">Цена</span>
                            <span class="product-availability">В наличии</span>
                        </div>
                        <span class="selected-product_price"><?=$arResult['PRICES']['BASE']['PRINT_VALUE']?></span>
                        <a href="" class="selected-product_buy-btn main-btn" data-id="<?=$arResult['ID']?>">Купить</a>
                        <a href="" class="selected-product_help-btn border-blue_btn">Помощь специалиста</a>
                        <div class="selected-product_services-title">Выберите услугу:</div>
                        <ul class="selected-product_services-list">

                            <li>
                                <label class="unified-radio unified-radio_mod">
                                    <input value="" type="radio" name="radio">
                                    <span class="radio-text">Алмазное бурение</span>
                                </label>
                                <div class="selected-product_hint">
                                    <p>
                                        <strong>Сервисное обслуживание сплит-систем</strong> – это комплекс мероприятий, которые не касаются замены деталей и узлов оборудования. В общий перечень услуг входят:
                                    </p>
                                    <ul>
                                        <li>замер давления хладагента</li>
                                        <li>дозаправка</li>
                                        <li>чистка внутреннего и внешнего блоков</li>
                                        <li>чистка дренажной системы</li>
                                        <li>чистка теплообменника и турбины</li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="products_same-series">
    <span class="products_same-series_title">Кондиционеры из серии VELA другой мощности:</span>
    <ul class="products_same-series_list">

        <li class="product_same-series_item">
            <a href="">
                <span class="product_same-series_content">
                    Площадь ох-ния до 30 кв.м
                </span>
                <span class="product_same-series_price">19 590 руб</span>
            </a>
        </li>

    </ul>
</div>
<!-- end products_same-series -->

<div class="tab-container">
    <ul class="selected-product_tab-names">
        <li class="tab active">Описание</li>
        <li class="tab">Характеристики</li>
        <li class="tab">Отзывы</li>
        <li class="tab">Оплата и доставка</li>
    </ul>
    <div class="selected-product_content-tabs">
        <div class="tab-item is-visible"><?=$arResult['DETAIL_TEXT']?></div>
        <div class="tab-item"><?=$arResult['PROPERTIES']['OPTION_TEXT']['~VALUE']['TEXT']?></div>
        <div class="tab-item">
            Отзывы
        </div>
        <div class="tab-item">
            Оплата и доставка
        </div>
    </div>
</div>

