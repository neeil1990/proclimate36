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

<article class="news-detailed_section">
    <div class="container">
        <ul class="breadcrumbs">
            <li><a href="">Главная</a></li>
            <li><a href="">Новости</a></li>
            <li>Поздравляем с днем климатехника!</li>
        </ul>
        <?$ElementID = $APPLICATION->IncludeComponent(
            "bitrix:news.detail",
            "",
            Array(
                "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
                "DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
                "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
                "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
                "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                "FIELD_CODE" => $arParams["DETAIL_FIELD_CODE"],
                "PROPERTY_CODE" => $arParams["DETAIL_PROPERTY_CODE"],
                "DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
                "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
                "META_KEYWORDS" => $arParams["META_KEYWORDS"],
                "META_DESCRIPTION" => $arParams["META_DESCRIPTION"],
                "BROWSER_TITLE" => $arParams["BROWSER_TITLE"],
                "SET_CANONICAL_URL" => $arParams["DETAIL_SET_CANONICAL_URL"],
                "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
                "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
                "SET_TITLE" => $arParams["SET_TITLE"],
                "MESSAGE_404" => $arParams["MESSAGE_404"],
                "SET_STATUS_404" => $arParams["SET_STATUS_404"],
                "SHOW_404" => $arParams["SHOW_404"],
                "FILE_404" => $arParams["FILE_404"],
                "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
                "ADD_SECTIONS_CHAIN" => $arParams["ADD_SECTIONS_CHAIN"],
                "ACTIVE_DATE_FORMAT" => $arParams["DETAIL_ACTIVE_DATE_FORMAT"],
                "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                "CACHE_TIME" => $arParams["CACHE_TIME"],
                "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
                "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
                "DISPLAY_TOP_PAGER" => $arParams["DETAIL_DISPLAY_TOP_PAGER"],
                "DISPLAY_BOTTOM_PAGER" => $arParams["DETAIL_DISPLAY_BOTTOM_PAGER"],
                "PAGER_TITLE" => $arParams["DETAIL_PAGER_TITLE"],
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => $arParams["DETAIL_PAGER_TEMPLATE"],
                "PAGER_SHOW_ALL" => $arParams["DETAIL_PAGER_SHOW_ALL"],
                "CHECK_DATES" => $arParams["CHECK_DATES"],
                "ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
                "ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
                "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
                "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
                "IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
                "USE_SHARE" => $arParams["USE_SHARE"],
                "SHARE_HIDE" => $arParams["SHARE_HIDE"],
                "SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
                "SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
                "SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
                "SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
                "ADD_ELEMENT_CHAIN" => (isset($arParams["ADD_ELEMENT_CHAIN"]) ? $arParams["ADD_ELEMENT_CHAIN"] : ''),
                'STRICT_SECTION_CHECK' => (isset($arParams['STRICT_SECTION_CHECK']) ? $arParams['STRICT_SECTION_CHECK'] : ''),
            ),
            $component
        );?>
        <div class="news-detailed_services">
            <div class="news-detailed_services-header">Цена на услугу</div>
            <div class="news-detailed_services-item">
                <div class="news-detailed_services-item_header">Трасса межблочная</div>
                <div class="news-detailed_services-item_body">
                    <table class="news-detailed_services-item_table">
                        <tr>
                            <td>Монтаж короба 60х60, м (с материалом)</td>
                            <td>390 руб.</td>
                        </tr>
                        <tr>
                            <td>Монтаж короба 60х60, м (с материалом)</td>
                            <td>490 руб.</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="news-detailed_services-item is-active">
                <div class="news-detailed_services-item_header">Монтаж короба</div>
                <div class="news-detailed_services-item_body">
                    <table class="news-detailed_services-item_table">
                        <tr>
                            <td>Монтаж короба 60х60, м (с материалом)</td>
                            <td>390 руб.</td>
                        </tr>
                        <tr>
                            <td>Монтаж короба 60х60, м (с материалом)</td>
                            <td>490 руб.</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="news-detailed_services-item">
                <div class="news-detailed_services-item_header">Штробление стен</div>
                <div class="news-detailed_services-item_body">
                    <table class="news-detailed_services-item_table">
                        <tr>
                            <td>Монтаж короба 60х60, м (с материалом)</td>
                            <td>390 руб.</td>
                        </tr>
                        <tr>
                            <td>Монтаж короба 60х60, м (с материалом)</td>
                            <td>490 руб.</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="news-detailed_services-item">
                <div class="news-detailed_services-item_header">Высотные работы</div>
                <div class="news-detailed_services-item_body">
                    <table class="news-detailed_services-item_table">
                        <tr>
                            <td>Монтаж короба 60х60, м (с материалом)</td>
                            <td>390 руб.</td>
                        </tr>
                        <tr>
                            <td>Монтаж короба 60х60, м (с материалом)</td>
                            <td>490 руб.</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- end news-detailed_services -->
        <div class="news-detailed_additional-information">
            <div class="title">Дополнительная информация</div>
            <div class="wrapper-table">
                <table class="news-detailed_additional-information_table">
                    <tr>
                        <td><strong>Холодильная мощность, кВт</strong></td>
                        <td>1.5</td>
                        <td>2</td>
                        <td>2.5</td>
                        <td>3.5</td>
                        <td>5.5</td>
                        <td>7</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Стандартные типоразмеры модели</strong>
                        </td>
                        <td>05</td>
                        <td>07</td>
                        <td>09</td>
                        <td>12</td>
                        <td>18</td>
                        <td>24</td>
                        <td>36</td>
                    </tr>
                    <tr>
                        <td>Оконные кондиционеры</td>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Настенные кондиционеры</td>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Канальные кондиционеры</td>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Колонные кондиционеры</td>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Напольно-потолочные кондиционеры</td>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- end news-detailed_additional-information -->
        <div class="h3">Информация</div>
        <div class="news-detailed_subtitle">Условия оказания услуги</div>
        <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. <br>
            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. <br>
            Aenean vulputate eleifend tellus.
        </p>
        <p>
            Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
        </p>
        <div class="news-detailed_subtitle">Условия оказания услуги</div>
        <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
        </p>
        <div class="news-detailed_footer">
            <span class="news-detailed_date">25.01.2019</span>
            <span class="news-detailed_view">
								<span class="glipf-view"></span>315
							</span>
            <span class="news-detailed_share glipf-share"></span>
        </div>
    </div>
</article>
<!-- end news-mod_section -->
