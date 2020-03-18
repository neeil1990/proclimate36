<!DOCTYPE html>
<html class="no-js" lang="<?=LANGUAGE_ID?>">
<head>
    <meta content="<?=SITE_TEMPLATE_PATH?>/browserconfig.xml" name="msapplication-config" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?$APPLICATION->ShowTitle()?></title>
    <link href="<?=SITE_DIR?>img/favicon.ico" rel="icon" type="image/png" />
    <link href="<?=SITE_DIR?>img/favicon.png" rel="icon" type="image/png" />
    <link href="<?=SITE_DIR?>img/apple-touch-icon.png" rel="apple-touch-icon" />
    <? $APPLICATION->ShowHead(); ?>
    <style>body{opacity: 0;}</style>
    <script>var filterPrice = {};</script>
</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<!--[if lt IE 10]>
<p class="browsehappy"><br>Вы используете <strong>устаревший</strong> браузер.
    Пожалуйста, <a href="http://browsehappy.com/">обновите его</a> для корректного
    отображения сайтов.</p>
<![endif]-->
<div class="global-wrapper">

    <div class="wrapper-loader">
        <div class="preloader">
            <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
        </div>
    </div>

    <header class="ui-header">
        <div class="main-head">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-3 col-7 head_left-column">
                        <div class="hamburger hamburger--spring">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                        <div class="head-logo">
                            <a href=""><img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/logo.png" alt="alt"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-5 head_right-column">
                        <div class="wrapper-head_form-search">
                            <div class="head_search_icon"><span class="glipf-search"></span></div>
                            <form action="#" class="head_form-search">
                                <input type="text" class="head_form-search_input" placeholder="Поиск среди 4000 товаров">
                                <input type="submit" class="head_form-search_submit" value="Найти">
                            </form>
                        </div>

                        <div class="head-cart" id="small_cart">
                            <?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "basket.small", Array(
                                "HIDE_ON_BASKET_PAGES" => "N",	// Не показывать на страницах корзины и оформления заказа
                                "POSITION_FIXED" => "N",	// Отображать корзину поверх шаблона
                                "SHOW_AUTHOR" => "N",	// Добавить возможность авторизации
                                "SHOW_EMPTY_VALUES" => "Y",	// Выводить нулевые значения в пустой корзине
                                "SHOW_NUM_PRODUCTS" => "Y",	// Показывать количество товаров
                                "SHOW_PERSONAL_LINK" => "N",	// Отображать персональный раздел
                                "SHOW_PRODUCTS" => "Y",	// Показывать список товаров
                                "SHOW_REGISTRATION" => "N",	// Добавить возможность регистрации
                                "SHOW_TOTAL_PRICE" => "Y",	// Показывать общую сумму по товарам
                                "COMPONENT_TEMPLATE" => ".default_old"
                            ),
                                false
                            );?>
                        </div>

                        <div class="head-contact">
                            <a href="tel:+79009494229" class="head_phone-number">
                                <span class="glipf-phone"></span>+7 (900) 949-42-29</a>
                            <div class="head-adress">
                                <span class="glipf-placeholder"></span>Воронеж
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="head_bottom-panel">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "catalog.menu.fixed", Array(
                            "ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
                            "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                            "MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                            "MENU_THEME" => "site",	// Тема меню
                            "CACHE_SELECTED_ITEMS" => "N",
                            "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                            "MAX_LEVEL" => "3",	// Уровень вложенности меню
                            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                            "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                            "DELAY" => "N",	// Откладывать выполнение шаблона меню
                            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                            "COMPONENT_TEMPLATE" => "catalog_horizontal"
                        ),
                            false
                        );?>
                    </div>
                    <div class="col-md-9">
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "top.menu", Array(
                            "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                            "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                            "MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                            "MENU_THEME" => "site",	// Тема меню
                            "CACHE_SELECTED_ITEMS" => "N",
                            "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                            "MAX_LEVEL" => "1",	// Уровень вложенности меню
                            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                            "DELAY" => "N",	// Откладывать выполнение шаблона меню
                            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                            "COMPONENT_TEMPLATE" => "catalog_horizontal"
                        ),
                            false
                        );?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END UI-HEADER -->
