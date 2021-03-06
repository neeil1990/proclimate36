<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("catalog");
?>
<main class="main-content">
    <?$APPLICATION->IncludeComponent(
	"bitrix:catalog",
	".catalog",
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "2",
		"SERVICE_IBLOCK_ID" => "13",
		"UF_FILTER_IBLOCK_ID" => "9",
		"TEMPLATE_THEME" => "site",
		"HIDE_NOT_AVAILABLE" => "N",
		"BASKET_URL" => "/personal/cart/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/catalog/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "Y",
		"ADD_SECTION_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "Y",
		"SET_STATUS_404" => "Y",
		"DETAIL_DISPLAY_NAME" => "N",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_FILTER" => "Y",
		"FILTER_NAME" => "",
		"FILTER_VIEW_MODE" => "VERTICAL",
		"USE_COMPARE" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_PROPERTIES" => "",
		"USE_PRODUCT_QUANTITY" => "Y",
		"CONVERT_CURRENCY" => "N",
		"QUANTITY_FLOAT" => "N",
		"OFFERS_CART_PROPERTIES" => array(
			0 => "SIZES_SHOES",
			1 => "SIZES_CLOTHES",
			2 => "COLOR_REF",
		),
		"SHOW_TOP_ELEMENTS" => "N",
		"SECTION_COUNT_ELEMENTS" => "N",
		"SECTION_TOP_DEPTH" => "3",
		"SECTIONS_VIEW_MODE" => "TILE",
		"SECTIONS_SHOW_PARENT_NAME" => "N",
		"PAGE_ELEMENT_COUNT" => "15",
		"LINE_ELEMENT_COUNT" => "3",
		"ELEMENT_SORT_FIELD" => "shows",
		"ELEMENT_SORT_ORDER" => "desc",
		"ELEMENT_SORT_FIELD2" => "name",
		"ELEMENT_SORT_ORDER2" => "asc",
		"LIST_PROPERTY_CODE" => array(
			0 => "TYPE",
			1 => "AREA",
			2 => "COMPRESSOR",
			3 => "COOLING",
			4 => "MAX_TEMP_POWER",
			5 => "AVERAGE_FUEL",
			6 => "NUMBER_TEMP_HEART",
			7 => "EFFECTIVE_SQUARE",
			8 => "NUMB_SECTION",
			9 => "GARANT",
			10 => "POWER",
			11 => "NUMBER_OF_SPEEDS",
			12 => "IDLING",
			13 => "UNDER_LOAD",
			14 => "DIAM_ALMZ_CROWN",
			15 => "CONNECTION",
			16 => "DIAM_CROWN",
			17 => "CROWN_LENGH",
			18 => "INSTAL_TYPE",
			19 => "BLOCK_COLOR",
			20 => "REMOTE_CONT",
			21 => "SILENT",
			22 => "INV_VALVE",
			23 => "TYPE_PRIB"

		),
		"INCLUDE_SUBSECTIONS" => "Y",
		"LIST_META_KEYWORDS" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_OFFERS_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "DETAIL_PICTURE",
			3 => ""
		),
		"LIST_OFFERS_PROPERTY_CODE" => array(
			0 => "SIZES_SHOES",
			1 => "SIZES_CLOTHES",
			2 => "COLOR_REF",
			3 => "MORE_PHOTO",
			4 => "ARTNUMBER",
			5 => "",
		),
		"LIST_OFFERS_LIMIT" => "0",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"DETAIL_PROPERTY_CODE" => array(
            0 => "TYPE",
            1 => "AREA",
            2 => "COMPRESSOR",
            3 => "COOLING",
            4 => "NOIZE",
            5 => "NIGHT_MODE",
            6 => "HEAT_MODE",
            7 => "SIZE",
            8 => "WEIGHT",
			9 => "POWER",
			10 => "NUMBER_OF_SPEEDS",
			11 => "IDLING",
			12 => "UNDER_LOAD",
			13 => "DIAM_ALMZ_KORONKI",
			14 => "CONNECTION",
			15 => "DIAM_CROWN",
			16 => "CROWN_LENGH",
			17 => "MAX_TEMP_POWER",
			18 => "AVERAGE_FUEL",
			19 => "NUMBER_TEMP_HEART",
			20 => "EFFECTIVE_SQUARE",
			21 => "NUMB_SECTION",
			22 => "GARANT",
			23 => "INSTAL_TYPE",
			24 => "BLOCK_COLOR",
			25 => "REMOTE_CONT",
			26 => "SILENT",
			27 => "INV_VALVE",
			28 => "TYPE_PRIB"

		),
        "DETAIL_MAIN_PROPERTY_CODE" => array(
			0 => "MANUFACTURE",
			1 => "BRAND_COUNTRY",
            2 => "TYPE",
            3 => "AREA",
            4 => "COMPRESSOR",
            5 => "COOLING",
            6 => "NOIZE",
            7 => "NIGHT_MODE",
            8 => "HEAT_MODE",
            9 => "SIZE",
            10 => "WEIGHT",
			11 => "POWER",
			12 => "NUMBER_OF_SPEEDS",
			13 => "IDLING",
			14 => "UNDER_LOAD",
			15 => "DIAM_ALMZ_KORONKI",
			16 => "CONNECTION",
			17 => "PROD_WEIGHT",
			18 => "MICROUDAR",
			19 => "DIAM_CROWN",
			20 => "CROWN_LENGH",
			21 => "SEGMENT_SIZE",
			22 => "NUMBER_OF_SEGMENTS",
			23 => "KEY_SIZE",
			24 => "TYPE_CONNECTION",
			25 => "COLOR",
			26 => "EFFECTIVE_SQUARE",
			27 => "MAX_TEMP_POWER",
			28 => "AVERAGE_FUEL",
			29 => "NUMBER_TEMP_HEART",
			30 => "CONTROL_FIRE",
			31 => "EMERGENCY_SHUTDOWN",
			32 => "OXY_LEVEL_SENSOR",
			33 => "BURNING_IGNITION",
			34 => "PLACEMENT",
			35 => "TYPE_OF_FUEL",
			36 => "WEIGHT_NETTO",
			37 => "PACKAGE_SIZE",
			38 => "REMOTE_CONTROL",
			39 => "CONTROL_TYPE",
			40 => "CONTROL_TEMP",
			41 => "DISPLAY",
			42 => "INDICATOR",
			43 => "GARANT_DOC",
			44 => "APP_AREA",
			45 => "CLASS_PROTEC",
			46 => "SELF_DIAG_SYST",
			47 => "PROTEC_OVERHEART",
			48 => "INV_TECHN",
			49 => "TYPE_HEART_ELEM",
			50 => "VOLTAGE",
			51 => "NETW_CABEL",
			52 => "CABEL_SYST_OTOP",
			53 => "SET_ELEM_KREP",
			54 => "ACC_TEMP_SET",
			55 => "DISPLAY_LIGHT",
			56 => "INDICATOR_TEMP_HEART",
			57 => "HEAT_POW_LVL",
			58 => "SERF_FIRE_PROT",
			59 => "NUMB_SECTION",
			60 => "GARANT",
			61 => "VIEW_CONDITION",
			62 => "INSTALATION",
			63 => "MODS",
			64 => "HEART",
			65 => "RECOM_AREA",
			66 => "MAX_POWER_CONS",
			67 => "EER_COP",
			68 => "CLASS_EFF",
			69 => "MAX_LVL_COOLING",
			70 => "POWER_ENRG",
			71 => "COOLING_TEMP",
			72 => "HEART_TEMP",
			72 => "SERIES_HLADAGENT",
			73 => "DIAM_JID_LINE",
			74 => "DIAM_GAS_LINE",
			75 => "MAX_LENGHT",
			76 => "MAX_HEIGHT",
			77 => "WEIGHT_HLADOGENT",
			78 => "AIR_FLOW",
			79 => "MARK_INNER_BLOCK",
			80 => "SIZE_INNER_BLOCK_NETTO",
			81 => "SIZE_INNER_BLOCK_BRUTTO",
			82 => "WEIGHT_INNER_BLOCK_BRUTTO",
			83 => "WEIGHT_INNER_BLOCK_NETTO",
			84 => "NOISE_LEVEL_INNER",
			85 => "MARK_OUT_BLOCK",
			86 => "SIZE_OUT_BLOCK_NETTO",
			87 => "SIZE_OUT_BLOCK_BRUTTO",
			88 => "WEIGHT_OUT_BLOCK_BRUTTO",
			89 => "WEIGHT_OUT_BLOCK_NETTO",
			90 => "NOISE_LEVEL_OUT",
			99 => "WIFI",
			100 => "COMP_MANUFACTURE",
			101 => "TEMP_RANGE",
			102 => "INFLOW_PERF",
			103 => "RECUP_PERF",
			104 => "INFLOW_NOISE",
			105 => "NETW_POWER",
			106 => "SIZE_ROOM_BLOCK",
			107 => "SIZE_ST_BLOCK",
			108 => "LIFE_TIME",
			109 => "KPD",
			110 => "REMOTE_CONT",
			111 => "SYNC_DEVICE",
			112 => "AIRFLOW",
			113 => "FILTR",
			114 => "INSTAL",
			115 => "CLASS_PROTECTION",
			116 => "HOLE_DIAM",
			117 => "MAX_POWER",
			118 => "TIMER_VENT",
			119 => "NOISE_LEVEL",
			120 => "ST_NOISE_LEVEL",
			121 => "TYPE_REGENERATION",
			122 => "PERFOMANCE",
			123 => "ENRG_CONS",
			124 => "NOMIN_POWER_COOLING",
			125 => "NOMIN_POWER_HEATING",
			126 => "SEER_SCOP",
			127 => "MAX_LENGH_TRUB",
			128 => "ADD_FUELING",
			129 => "IONIZ_NANOAQUA",
			130 => "SILENT_WORK",
			131 => "UF_CLEANING",
			132 => "AIR_SUPPLY",
			133 => "WET_DEL",
			134 => "WORK_HEART",
			135 => "TYPE_OF_RES",
			136 => "NAME_OF_RES",
			137 => "INSTAL_RES",
			138 => "MODEL_RES",
			139 => "TYPE_RADIO",
			140 => "WIFI_WAVE",
			141 => "POWER_EIIM",
			142 => "MAX_SPECTR_EIIM"
        ),
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_OFFERS_FIELD_CODE" => array(
			0 => "NAME",
			1 => "",
		),
		"DETAIL_OFFERS_PROPERTY_CODE" => array(
			0 => "ARTNUMBER",
			1 => "SIZES_SHOES",
			2 => "SIZES_CLOTHES",
			3 => "COLOR_REF",
			4 => "MORE_PHOTO",
			5 => "",
		),
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_IBLOCK_ID" => "",
		"LINK_PROPERTY_SID" => "",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"USE_ALSO_BUY" => "Y",
		"ALSO_BUY_ELEMENT_COUNT" => "4",
		"ALSO_BUY_MIN_BUYES" => "1",
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "desc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "desc",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
		"PAGER_SHOW_ALL" => "N",
		"ADD_PICT_PROP" => "-",
		"LABEL_PROP" => "-",
		"PRODUCT_DISPLAY_MODE" => "Y",
		"OFFER_ADD_PICT_PROP" => "MORE_PHOTO",
		"OFFER_TREE_PROPS" => array(
			0 => "SIZES_SHOES",
			1 => "SIZES_CLOTHES",
		),
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"SHOW_OLD_PRICE" => "Y",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_COMPARE" => "Сравнение",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"DETAIL_USE_VOTE_RATING" => "Y",
		"DETAIL_VOTE_DISPLAY_AS_RATING" => "rating",
		"DETAIL_USE_COMMENTS" => "Y",
		"DETAIL_BLOG_USE" => "Y",
		"DETAIL_VK_USE" => "N",
		"DETAIL_FB_USE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"USE_STORE" => "N",
		"BIG_DATA_RCM_TYPE" => "personal",
		"FIELDS" => array(
			0 => "SCHEDULE",
			1 => "STORE",
			2 => "",
		),
		"USE_MIN_AMOUNT" => "N",
		"STORE_PATH" => "/store/#store_id#",
		"MAIN_TITLE" => "Наличие на складах",
		"MIN_AMOUNT" => "10",
		"DETAIL_BRAND_USE" => "Y",
		"DETAIL_BRAND_PROP_CODE" => array(
			0 => "",
			1 => "BRAND_REF",
			2 => "",
		),
		"COMPATIBLE_MODE" => "N",
		"SIDEBAR_SECTION_SHOW" => "Y",
		"SIDEBAR_DETAIL_SHOW" => "Y",
		"SIDEBAR_PATH" => "/catalog/sidebar.php",
		"COMPONENT_TEMPLATE" => ".catalog",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"LABEL_PROP_MOBILE" => "",
		"LABEL_PROP_POSITION" => "top-left",
		"COMMON_SHOW_CLOSE_POPUP" => "N",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"DISCOUNT_PERCENT_POSITION" => "bottom-right",
		"SHOW_MAX_QUANTITY" => "N",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"SIDEBAR_SECTION_POSITION" => "right",
		"SIDEBAR_DETAIL_POSITION" => "right",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"SET_LAST_MODIFIED" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"USE_SALE_BESTSELLERS" => "N",
		"FILTER_HIDE_ON_MOBILE" => "N",
		"INSTANT_RELOAD" => "N",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"USE_COMMON_SETTINGS_BASKET_POPUP" => "N",
		"COMMON_ADD_TO_BASKET_ACTION" => "ADD",
		"TOP_ADD_TO_BASKET_ACTION" => "ADD",
		"SECTION_ADD_TO_BASKET_ACTION" => "ADD",
		"DETAIL_ADD_TO_BASKET_ACTION" => array(
			0 => "BUY",
		),
		"SEARCH_PAGE_RESULT_COUNT" => "50",
		"SEARCH_RESTART" => "N",
		"SEARCH_NO_WORD_LOGIC" => "Y",
		"SEARCH_USE_LANGUAGE_GUESS" => "N",
		"SEARCH_CHECK_DATES" => "N",
		"SECTIONS_HIDE_SECTION_NAME" => "N",
		"LIST_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"LIST_ENLARGE_PRODUCT" => "STRICT",
		"LIST_SHOW_SLIDER" => "Y",
		"LIST_SLIDER_INTERVAL" => "3000",
		"LIST_SLIDER_PROGRESS" => "N",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"SHOW_DEACTIVATED" => "N",
		"DETAIL_BLOG_URL" => "catalog_comments",
		"DETAIL_BLOG_EMAIL_NOTIFY" => "N",
		"DETAIL_FB_APP_ID" => "",
		"DETAIL_IMAGE_RESOLUTION" => "16by9",
		"DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
		"DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
		"DETAIL_SHOW_SLIDER" => "N",
		"DETAIL_DETAIL_PICTURE_MODE" => "MAGNIFIER",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
		"MESS_PRICE_RANGES_TITLE" => "Цены",
		"MESS_DESCRIPTION_TAB" => "Описание",
		"MESS_PROPERTIES_TAB" => "Характеристики",
		"MESS_COMMENTS_TAB" => "Комментарии",
		"DETAIL_SHOW_POPULAR" => "Y",
		"DETAIL_SHOW_VIEWED" => "Y",
		"USE_GIFTS_DETAIL" => "N",
		"USE_GIFTS_SECTION" => "N",
		"USE_GIFTS_MAIN_PR_SECTION_LIST" => "N",
		"GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",
		"GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_OLD_PRICE" => "Y",
		"GIFTS_SHOW_NAME" => "Y",
		"GIFTS_SHOW_IMAGE" => "Y",
		"GIFTS_MESS_BTN_BUY" => "Выбрать",
		"GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",
		"STORES" => array(
			0 => "",
			1 => "",
		),
		"USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_EMPTY_STORE" => "Y",
		"SHOW_GENERAL_STORE_INFORMATION" => "N",
		"USE_BIG_DATA" => "N",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"LAZY_LOAD" => "N",
		"LOAD_ON_SCROLL" => "N",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
		"DETAIL_ADD_TO_BASKET_ACTION_PRIMARY" => array(
			0 => "BUY",
		),
		"DETAIL_SHOW_MAX_QUANTITY" => "N",
		"DETAIL_SHOW_BASIS_PRICE" => "Y",
		"FILE_404" => "",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE#/",
			"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
			"compare" => "compare/",
			"smart_filter" => "#SECTION_CODE#/filter/#SMART_FILTER_PATH#/apply/",
		)
	),
	false
);?>
</main>
<!-- end main-content -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
