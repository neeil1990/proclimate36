<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Кондиционеры в Воронеже");
?>

<main class="main-content">

    <div class="main-section">
        <div class="container">
            <div class="main-slider">

                <div class="main-slide">
                    <div class="row align-items-center">
                        <div class="col-md-6 order-md-2">
                            <div class="main-slide_title tablet-small_visible">
                                Кондиционеры <br> в Воронеже
                            </div>
                            <div class="main-slide_img">
                                <img data-src="img/static/main-slider/01.png" alt="alt">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="main-slide_title tablet-small_hidden">
                                Кондиционеры <br> в Воронеже
                            </div>
                            <p>
                                Мы предлагаем широкий выбор кондиционеров и сплит-систем
                                на любой вкус и достаток, а также качественную установку
                                и сервисное обслуживание
                            </p>
                            <a href="" class="main-btn main-slide_btn">В каталог</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end main-section -->

    <div class="advantages-section">
        <div class="container">
            <ul class="advantages-list">

                <li class="advantages-item">
                    <span class="advantages-item_icon glipf-delivery"></span>
                    Быстрая <br> доставка
                </li>

            </ul>
        </div>
    </div>
    <!-- end advantages-section -->

    <div class="container">
        <?$APPLICATION->IncludeComponent(
            "bitrix:catalog.section.list",
            "main",
            Array(
                "ADD_SECTIONS_CHAIN" => "N",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "COUNT_ELEMENTS" => "N",
                "FILTER_NAME" => "sectionsFilter",
                "IBLOCK_ID" => "2",
                "IBLOCK_TYPE" => "catalog",
                "SECTION_CODE" => "",
                "SECTION_FIELDS" => array(0=>"",1=>"",),
                "SECTION_ID" => "",
                "SECTION_URL" => "",
                "SECTION_USER_FIELDS" => array(0=>"",1=>"",),
                "SHOW_PARENT_NAME" => "Y",
                "TOP_DEPTH" => "1",
                "VIEW_MODE" => "LINE"
            )
        );?>
        <!-- end category-section -->

        <div class="product-section">
            <div class="section-title">Популярные товары</div>
            <div class="row product-slider">

                <div class="col-xl-3">
                    <div class="product-item">
                        <div class="product-item_img">
                            <div class="product-item_top">
                                <span class="glipf-top"></span>тор
                            </div>
                            <a href=""><img data-src="img/static/product/01.jpg" alt="alt"></a>
                        </div>
                        <span class="product-item_category">Настенный кондиционер</span>
                        <div class="product-item_title">
                            <a href="">Ballu BSAG-09HN1_17Y</a>
                        </div>
                        <span class="product-item_price">25 290 руб</span>
                        <div class="product-item_hidden">
                            <ul class="product-item_features">
                                <li>
                                    <span class="glipf-conditioner"></span>
                                    <span class="gray-color">Тип</span> - сплит-система
                                </li>
                                <li>
                                    <span class="glipf-swing"></span>
                                    <span class="gray-color">Площадь</span> - 100 м2
                                </li>
                                <li>
                                    <span class="glipf-compressor"></span>
                                    <span class="gray-color">Компрессор</span> - обычный
                                </li>
                                <li>
                                    <span class="glipf-cold"></span>
                                    <span class="gray-color">Охлаждение</span> - 3,12 кВт
                                </li>
                            </ul>
                            <a href="" class="product-item_buy-btn main-btn">Купить</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="text-center">
                <a href="" class="all-product_btn main-btn">Все товары</a>
            </div>
        </div>
        <!-- end product-section -->
        <div class="banner">
            <div class="banner-title">
                Подготовтесь к лету <br>уже сейчас!
            </div>
            <a href="" class="banner-btn">Подробнее</a>
        </div>
        <!-- end banner -->

        <?$APPLICATION->IncludeComponent(
            "bitrix:news.line",
            "services",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "300",
                "CACHE_TYPE" => "A",
                "DETAIL_URL" => "",
                "FIELD_CODE" => array(0 => "PREVIEW_TEXT",),
                "IBLOCKS" => array(0 => "5",),
                "IBLOCK_TYPE" => "news",
                "NEWS_COUNT" => "3",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC"
            )
        );?>
        <!-- end services-section -->

        <?$APPLICATION->IncludeComponent(
            "bitrix:news.line",
            "news",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "300",
                "CACHE_TYPE" => "A",
                "DETAIL_URL" => "",
                "FIELD_CODE" => array(0 => "PREVIEW_PICTURE", 1 => "PREVIEW_TEXT",),
                "IBLOCKS" => array(0 => "1",),
                "IBLOCK_TYPE" => "news",
                "NEWS_COUNT" => "4",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC"
            )
        );?>
        <!-- end news-section -->

        <?$APPLICATION->IncludeComponent(
            "bitrix:news.line",
            "brands",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "300",
                "CACHE_TYPE" => "A",
                "DETAIL_URL" => "",
                "FIELD_CODE" => array(0 => "PREVIEW_PICTURE", 1 => "PREVIEW_TEXT",),
                "IBLOCKS" => array(0 => "4",),
                "IBLOCK_TYPE" => "news",
                "NEWS_COUNT" => "15",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC"
            )
        );?>
        <!-- end brands-section -->
    </div>
    <div class="contact-section">
        <div class="container-fluid">
            <div class="row no-gutters  align-items-center">
                <div class="col-md-6">
                    <div class="contact-section_desc">
                        <div class="section-title">Наши контакты</div>
                        <ul class="contact-list">
                            <li>
                                <span class="glipf-placeholder"></span>
                                г. Воронеж, Монтажный проезд, д. 26
                            </li>
                            <li>
                                <span class="glipf-phone"></span>
                                <a href="tel:88007771977">8 (800) 777-19-77</a>
                            </li>
                            <li>
                                <a href="mailto:online@rusklimat.ru">
                                    <span class="glipf-email"></span>
                                    online@rusklimat.ru</a>
                            </li>
                        </ul>
                        <a href="#callback" data-toggle="modal" class="callback-btn main-btn">Заказать звонок</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map-container">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact-section -->
</main>
<!-- end main-content -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
