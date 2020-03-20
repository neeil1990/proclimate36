<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-logo">
                    <a href=""><img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/logo.png" alt="alt"></a>
                </div>
            </div>
            <div class="col-md-5 footer-nav">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "bottom.menu",
                    array(
                        "ROOT_MENU_TYPE" => "bottom",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_TIME" => "36000000",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_THEME" => "site",
                        "CACHE_SELECTED_ITEMS" => "N",
                        "MENU_CACHE_GET_VARS" => array(
                        ),
                        "MAX_LEVEL" => "1",
                        "USE_EXT" => "N",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "N",
                        "COMPONENT_TEMPLATE" => "bottom.menu1",
                        "CHILD_MENU_TYPE" => "left"
                    ),
                    false
                );?>
            </div>
            <div class="col-md-3 footer-right_column">
                <div class="footer-right_content">
                    <ul class="footer-contact">
                        <li>
                            <span class="glipf-phone"></span>
                            <a href="tel:+<?= tplvar('phone');?>"><?= tplvar('phone', true);?></a>
                        </li>
                        <li>
                            <span class="glipf-placeholder"></span>
                            <?= tplvar('city', true);?>
                        </li>
                        <li>
                            <a href="mailto:online@rusklimat.ru">
                                <span class="glipf-email"></span>
                                <?= tplvar('email', true);?>
                            </a>
                        </li>
                    </ul>
                    <ul class="social-network">
                        <li><a href=""><span class="glipf-vk"></span></a></li>
                        <li><a href=""><span class="glipf-fb"></span></a></li>
                        <li><a href=""><span class="glipf-odnoklassniki"></span></a></li>
                        <li><a href=""><span class="glipf-twitter"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end main-footer -->
<div class="scroll-to-top"></div>
</div>
<!-- END GLOBAL-WRAPPER -->

<div aria-hidden="true" class="modal fade js-modal" id="callback" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-callback" role="document">
        <div class="modal-content">
            <button aria-label="Close" class="close uhified_close-btn" data-dismiss="modal" type="button"></button>

            <?$APPLICATION->IncludeComponent(
                "prime:main.feedback",
                "",
                array(
                    "EVENT_MESSAGE_ID" => array(
                        0 => "7",
                    ),
                    "IBLOCK_ID" => "10",
                    "IBLOCK_TYPE" => "feedback",
                    "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                    "PROPERTY_CODE" => array(
                        0 => "NAME",
                        1 => "PHONE",
                    ),
                    "USE_CAPTCHA" => "N",
                    "CAPTCHA_SITE_KEY" => "",
                    "CAPTCHA_SERVER_KEY" => "",
                    "COMPONENT_TEMPLATE" => ""
                ),
                false
            );?>
        </div>
    </div>
</div>

<? if($_REQUEST["success"]): ?>
    <div aria-hidden="true" class="modal fade js-modal" id="success_msg" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-callback" role="document">
            <div class="modal-content">
                <button aria-label="Close" class="close uhified_close-btn" data-dismiss="modal" type="button"></button>
                <div class="form-callback_title" style="padding: 30px;">
                    <h3>Сообщение отправлено!</h3>
                    <small>Мы обязательно вам перезвоним.</small>
                </div>
            </div>
        </div>
    </div>
<? endif; ?>


<link href="<?=SITE_TEMPLATE_PATH?>/css/min.css" rel="stylesheet" />
<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>

<link href="<?=SITE_TEMPLATE_PATH?>/css/main.css" rel="stylesheet" />
<script src="<?=SITE_TEMPLATE_PATH?>/js/min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
</body>
</html>

