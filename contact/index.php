<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<main class="main-content">
    <div class="contact-mod_section">
        <div class="container">
            <?
            $APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", Array("SITE_ID" => SITE_ID),
                false
            );
            ?>
            <h1>Контакты</h1>
            <ul class="contact-section_top-panel">
                <li>
                    <span class="glipf-placeholder"></span>
                    <?= tplvar('street', true);?>
                </li>
                <li>
                    <span class="glipf-phone"></span>
                    <a href="tel:<?= tplvar('phone');?>"><?= tplvar('phone', true);?></a>
                </li>
                <li>
                    <a href="mailto:online@rusklimat.ru">
                        <span class="glipf-email"></span>
                        <?= tplvar('email', true);?>
                    </a>
                </li>
            </ul>
        </div>
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="contact-section_desc-mod">
                        <div class="h3">Есть вопросы? <br> Оставьте ваше сообщение</div>
                        <?$APPLICATION->IncludeComponent("prime:main.feedback", "contact", Array(
                            "EVENT_MESSAGE_ID" => array(	// Почтовые шаблоны для отправки письма
                                0 => "7",
                            ),
                            "IBLOCK_ID" => "11",	// Код информационного блока
                            "IBLOCK_TYPE" => "feedback",	// Тип информационного блока (используется только для проверки)
                            "OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
                            "PROPERTY_CODE" => array(	// Поля формы
                                0 => "NAME",
                                1 => "EMAIL",
                                2 => "PHONE",
                                3 => "MSG",
                            ),
                            "USE_CAPTCHA" => "N",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
                            "CAPTCHA_SITE_KEY" => "",
                            "CAPTCHA_SERVER_KEY" => "",
                            "COMPONENT_TEMPLATE" => ""
                        ),
                            false
                        );?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map-container map-container_mod">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact-section -->
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
