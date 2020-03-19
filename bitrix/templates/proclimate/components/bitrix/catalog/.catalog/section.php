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
use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;

$this->setFrameMode(true);
?>

<div class="catalog-section">
	<div class="container">
		<div class="banner-second">
			<div class="left-column">
				<div class="banner-title">
					Скидка на кондиционеры <br>модели Kentatsu
				</div>
				<a href="" class="banner-btn">Подробнее</a>
			</div>
			<div class="right-column">
				<div class="banner-text">
					Скидки
					<span class="red-color">до 30 %</span>
				</div>
			</div>
		</div>
        <?
        $APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", Array("SITE_ID" => SITE_ID),
            false
        );
        ?>
		<h1>Каталог товаров</h1>

        <div class="row">
			<div class="col-xl-3 col-lg-4 col-md-4">
                <?
                if ($arParams['USE_FILTER'] == 'Y')
                {
                    $arFilter = array(
                        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                        "ACTIVE" => "Y",
                        "GLOBAL_ACTIVE" => "Y",
                    );
                    if (0 < intval($arResult["VARIABLES"]["SECTION_ID"]))
                    {
                        $arFilter["ID"] = $arResult["VARIABLES"]["SECTION_ID"];
                    }
                    elseif ('' != $arResult["VARIABLES"]["SECTION_CODE"])
                    {
                        $arFilter["=CODE"] = $arResult["VARIABLES"]["SECTION_CODE"];
                    }

                    $obCache = new CPHPCache();
                    if ($obCache->InitCache(36000, serialize($arFilter), "/iblock/catalog"))
                    {
                        $arCurSection = $obCache->GetVars();
                    }
                    elseif ($obCache->StartDataCache())
                    {
                        $arCurSection = array();
                        if (Loader::includeModule("iblock"))
                        {
                            $dbRes = CIBlockSection::GetList(array(), $arFilter, false, array("ID", "DESCRIPTION"));

                            if(defined("BX_COMP_MANAGED_CACHE"))
                            {
                                global $CACHE_MANAGER;
                                $CACHE_MANAGER->StartTagCache("/iblock/catalog");

                                if ($arCurSection = $dbRes->Fetch())
                                {
                                    $CACHE_MANAGER->RegisterTag("iblock_id_".$arParams["IBLOCK_ID"]);
                                }
                                $CACHE_MANAGER->EndTagCache();
                            }
                            else
                            {
                                if(!$arCurSection = $dbRes->Fetch())
                                    $arCurSection = array();
                            }
                        }
                        $obCache->EndDataCache($arCurSection);
                    }
                    ?>


                    <?$APPLICATION->IncludeComponent(
                    "bitrix:catalog.smart.filter",
                    "",
                    array(
                        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                        "SECTION_ID" => $arCurSection['ID'],
                        "FILTER_NAME" => $arParams["FILTER_NAME"],
                        "PRICE_CODE" => $arParams["PRICE_CODE"],
                        "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                        "CACHE_TIME" => $arParams["CACHE_TIME"],
                        "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                        "SAVE_IN_SESSION" => "N",
                        "FILTER_VIEW_MODE" => $arParams["FILTER_VIEW_MODE"],
                        "XML_EXPORT" => "Y",
                        "SECTION_TITLE" => "NAME",
                        "SECTION_DESCRIPTION" => "DESCRIPTION",
                        'HIDE_NOT_AVAILABLE' => $arParams["HIDE_NOT_AVAILABLE"],
                        "TEMPLATE_THEME" => $arParams["TEMPLATE_THEME"],
                        'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
                        'CURRENCY_ID' => $arParams['CURRENCY_ID'],
                        "SEF_MODE" => $arParams["SEF_MODE"],
                        "SEF_RULE" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["smart_filter"],
                        "SMART_FILTER_PATH" => $arResult["VARIABLES"]["SMART_FILTER_PATH"],
                        "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
                    ),
                    $component,
                    array('HIDE_ICONS' => 'Y')
                );
                }
                ?>
				<!-- end sidebar-filter -->
			</div>

            <div class="col-xl-9 col-lg-8 col-md-8">

                <div class="catalog-top_box">
					<div class="wrapper_filter-panel_item">
						<div class="filter-panel_item is-active">
							<div class="filter-panel_item-title">Мощность при охлаждении</div>
							<ul class="filter-panel_parameters-list">
								<li>1 кВт</li>
								<li>2 кВт</li>
								<li>3 кВт</li>
								<li>4 кВт</li>
								<li>5 кВт</li>
								<li>6 кВт</li>
								<li>7 кВт</li>
								<li>8 кВт</li>
								<li class="hidden_filter-paremeter_btn">
									<span class="text">Скрыть</span>
								</li>
							</ul>
						</div>
						<div class="filter-panel_item">
							<div class="filter-panel_item-title">Мощность при обогреве</div>
							<ul class="filter-panel_parameters-list">
								<li>1 кВт</li>
								<li>2 кВт</li>
								<li>3 кВт</li>
								<li>4 кВт</li>
								<li>5 кВт</li>
								<li>6 кВт</li>
								<li>7 кВт</li>
								<li>8 кВт</li>
								<li class="hidden_filter-paremeter_btn">
									<span class="text">Скрыть</span>
								</li>
							</ul>
						</div>
						<div class="filter-panel_item">
							<div class="filter-panel_item-title">Максимальная площадь помещения</div>
							<ul class="filter-panel_parameters-list">
								<li>1 кВт</li>
								<li>2 кВт</li>
								<li>3 кВт</li>
								<li>4 кВт</li>
								<li>5 кВт</li>
								<li>6 кВт</li>
								<li>7 кВт</li>
								<li>8 кВт</li>
								<li class="hidden_filter-paremeter_btn">
									<span class="text">Скрыть</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="catalog-filter_panel">
						<div class="row">
							<div class="col-sm-6 left-column">
								<span class="text">Сортировать по:</span>
								<select class="js-select">
									<option value="">Популярности</option>
									<option value="">Цене</option>
									<option value="">От дешевых</option>
								</select>
							</div>
							<div class="col-sm-6 right-column">
								<div class="catalog-filter_show-by">
									<span class="text">Показывать по:</span>
									<select class="js-select">
										<option value="">15</option>
										<option value="">30</option>
										<option value="">45</option>
									</select>
								</div>
								<ul class="view-mode_list">
									<li class="view-mode_list-item product_view-mode_table js-product-view is-active">
										<span class="glipf-table view-mode_icon"></span>
									</li>
									<li class="view-mode_list-item js-product-view">
										<span class="glipf-list view-mode_icon"></span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

                <?$intSectionID = $APPLICATION->IncludeComponent(
                    "bitrix:catalog.section",
                    "",
                    array(
                        "LIST_PROPERTY_CODE" => $arParams['LIST_PROPERTY_CODE'],
                        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                        "ELEMENT_SORT_FIELD" => $arParams["ELEMENT_SORT_FIELD"],
                        "ELEMENT_SORT_ORDER" => $arParams["ELEMENT_SORT_ORDER"],
                        "ELEMENT_SORT_FIELD2" => $arParams["ELEMENT_SORT_FIELD2"],
                        "ELEMENT_SORT_ORDER2" => $arParams["ELEMENT_SORT_ORDER2"],
                        "PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
                        "META_KEYWORDS" => $arParams["LIST_META_KEYWORDS"],
                        "META_DESCRIPTION" => $arParams["LIST_META_DESCRIPTION"],
                        "BROWSER_TITLE" => $arParams["LIST_BROWSER_TITLE"],
                        "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
                        "INCLUDE_SUBSECTIONS" => $arParams["INCLUDE_SUBSECTIONS"],
                        "BASKET_URL" => $arParams["BASKET_URL"],
                        "ACTION_VARIABLE" => $arParams["ACTION_VARIABLE"],
                        "PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
                        "SECTION_ID_VARIABLE" => $arParams["SECTION_ID_VARIABLE"],
                        "PRODUCT_QUANTITY_VARIABLE" => $arParams["PRODUCT_QUANTITY_VARIABLE"],
                        "PRODUCT_PROPS_VARIABLE" => $arParams["PRODUCT_PROPS_VARIABLE"],
                        "FILTER_NAME" => $arParams["FILTER_NAME"],
                        "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                        "CACHE_TIME" => $arParams["CACHE_TIME"],
                        "CACHE_FILTER" => $arParams["CACHE_FILTER"],
                        "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                        "SET_TITLE" => $arParams["SET_TITLE"],
                        "MESSAGE_404" => $arParams["MESSAGE_404"],
                        "SET_STATUS_404" => $arParams["SET_STATUS_404"],
                        "SHOW_404" => $arParams["SHOW_404"],
                        "FILE_404" => $arParams["FILE_404"],
                        "DISPLAY_COMPARE" => $arParams["USE_COMPARE"],
                        "PAGE_ELEMENT_COUNT" => $arParams["PAGE_ELEMENT_COUNT"],
                        "LINE_ELEMENT_COUNT" => $arParams["LINE_ELEMENT_COUNT"],
                        "PRICE_CODE" => $arParams["PRICE_CODE"],
                        "USE_PRICE_COUNT" => $arParams["USE_PRICE_COUNT"],
                        "SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],

                        "PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],
                        "USE_PRODUCT_QUANTITY" => $arParams['USE_PRODUCT_QUANTITY'],
                        "ADD_PROPERTIES_TO_BASKET" => (isset($arParams["ADD_PROPERTIES_TO_BASKET"]) ? $arParams["ADD_PROPERTIES_TO_BASKET"] : ''),
                        "PARTIAL_PRODUCT_PROPERTIES" => (isset($arParams["PARTIAL_PRODUCT_PROPERTIES"]) ? $arParams["PARTIAL_PRODUCT_PROPERTIES"] : ''),
                        "PRODUCT_PROPERTIES" => $arParams["PRODUCT_PROPERTIES"],

                        "DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
                        "DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
                        "PAGER_TITLE" => $arParams["PAGER_TITLE"],
                        "PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
                        "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
                        "PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
                        "PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
                        "PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
                        "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
                        "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],

                        "OFFERS_CART_PROPERTIES" => $arParams["OFFERS_CART_PROPERTIES"],
                        "OFFERS_FIELD_CODE" => $arParams["LIST_OFFERS_FIELD_CODE"],
                        "OFFERS_PROPERTY_CODE" => $arParams["LIST_OFFERS_PROPERTY_CODE"],
                        "OFFERS_SORT_FIELD" => $arParams["OFFERS_SORT_FIELD"],
                        "OFFERS_SORT_ORDER" => $arParams["OFFERS_SORT_ORDER"],
                        "OFFERS_SORT_FIELD2" => $arParams["OFFERS_SORT_FIELD2"],
                        "OFFERS_SORT_ORDER2" => $arParams["OFFERS_SORT_ORDER2"],
                        "OFFERS_LIMIT" => $arParams["LIST_OFFERS_LIMIT"],

                        "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
                        "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
                        "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
                        "DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["element"],
                        "USE_MAIN_ELEMENT_SECTION" => $arParams["USE_MAIN_ELEMENT_SECTION"],
                        'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
                        'CURRENCY_ID' => $arParams['CURRENCY_ID'],
                        'HIDE_NOT_AVAILABLE' => $arParams["HIDE_NOT_AVAILABLE"],

                        'LABEL_PROP' => $arParams['LABEL_PROP'],
                        'ADD_PICT_PROP' => $arParams['ADD_PICT_PROP'],
                        'PRODUCT_DISPLAY_MODE' => $arParams['PRODUCT_DISPLAY_MODE'],

                        'OFFER_ADD_PICT_PROP' => $arParams['OFFER_ADD_PICT_PROP'],
                        'OFFER_TREE_PROPS' => $arParams['OFFER_TREE_PROPS'],
                        'PRODUCT_SUBSCRIPTION' => $arParams['PRODUCT_SUBSCRIPTION'],
                        'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'],
                        'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'],
                        'MESS_BTN_BUY' => $arParams['MESS_BTN_BUY'],
                        'MESS_BTN_ADD_TO_BASKET' => $arParams['MESS_BTN_ADD_TO_BASKET'],
                        'MESS_BTN_SUBSCRIBE' => $arParams['MESS_BTN_SUBSCRIBE'],
                        'MESS_BTN_DETAIL' => $arParams['MESS_BTN_DETAIL'],
                        'MESS_NOT_AVAILABLE' => $arParams['MESS_NOT_AVAILABLE'],

                        'TEMPLATE_THEME' => (isset($arParams['TEMPLATE_THEME']) ? $arParams['TEMPLATE_THEME'] : ''),
                        "ADD_SECTIONS_CHAIN" => "Y",
                        'ADD_TO_BASKET_ACTION' => $basketAction,
                        'SHOW_CLOSE_POPUP' => isset($arParams['COMMON_SHOW_CLOSE_POPUP']) ? $arParams['COMMON_SHOW_CLOSE_POPUP'] : '',
                        'COMPARE_PATH' => $arResult['FOLDER'].$arResult['URL_TEMPLATES']['compare']
                    ),
                    $component
                );
                ?>


                <div class="tablet-small_visible">
					<div class="section-title">Наши услуги</div>
					<div class="sidebar-services">
						<div class="services-item_sidebar">
							<div class="services-item_sidebar-header">
								<span class="services-item_sidebar-icon glipf-air"></span>
								<span class="services-item_sidebar-title">Установка сплит-системы</span>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
							</p>
							<a href="" class="services-item_more-details">
								<span class="text">Подробнее</span> <span class="arrow">→</span>
							</a>
						</div>
						<div class="services-item_sidebar">
							<div class="services-item_sidebar-header">
								<span class="services-item_sidebar-icon glipf-tools"></span>
								<span class="services-item_sidebar-title">Обслуживание сплит-систем</span>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
							</p>
							<a href="" class="services-item_more-details">
								<span class="text">Подробнее</span> <span class="arrow">→</span>
							</a>
						</div>
						<div class="services-item_sidebar">
							<div class="services-item_sidebar-header">
								<span class="services-item_sidebar-icon glipf-drill"></span>
								<span class="services-item_sidebar-title">Алмазное бурение</span>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
							</p>
							<a href="" class="services-item_more-details">
								<span class="text">Подробнее</span> <span class="arrow">→</span>
							</a>
						</div>
						<div class="services-item_sidebar">
							<div class="services-item_sidebar-header">
								<span class="services-item_sidebar-icon glipf-tools"></span>
								<span class="services-item_sidebar-title">Обслуживание сплит-систем</span>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
							</p>
							<a href="" class="services-item_more-details">
								<span class="text">Подробнее</span> <span class="arrow">→</span>
							</a>
						</div>
					</div>
				</div>

				<div class="text-section"><?=$arCurSection['DESCRIPTION']?></div>
			</div>
		</div>
	</div>
</div>

<?
$GLOBALS['CATALOG_CURRENT_SECTION_ID'] = $intSectionID;
?>
