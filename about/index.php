<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О магазине");
?>

<main class="main-content">
    <div class="about-us_section">
        <div class="container">
            <?
            $APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", Array("SITE_ID" => SITE_ID),
                false
            );
            ?>

            <h1>О компании</h1>
            <div class="row">
                <div class="col-md-5 order-md-2">
                    <div class="about-us_img"><img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/about/01.jpg" alt="alt"></div>
                </div>
                <div class="col-md-7">
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. <br>
                        Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. <br>
                        Aenean vulputate eleifend tellus.
                    </p>
                    <p>
                        Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                    </p>
                    <p>
                        Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                    </p>
                </div>
            </div>
            <ul class="advantages-list advantages-list_mod">
                <li class="advantages-item">
                    <span class="advantages-item_icon glipf-file"></span>
                    Гарантия <br>от производителя <br>до 5 лет
                </li>
                <li class="advantages-item">
                    <span class="advantages-item_icon glipf-free-delivery"></span>
                    Бесплатная <br> доставка
                </li>
                <li class="advantages-item">
                    <span class="advantages-item_icon glipf-settings"></span>
                    Монтаж любой <br>сложности
                </li>
                <li class="advantages-item">
                    <span class="advantages-item_icon glipf-money-2"></span>
                    Гарантия <br>лучшей цены
                </li>
            </ul>
            <div class="row">
                <div class="col-md-5">
                    <div class="about-us_img"><img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/about/02.jpg" alt="alt"></div>
                </div>
                <div class="col-md-7">
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. <br>
                        Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. <br>
                        Aenean vulputate eleifend tellus.
                    </p>
                    <p>
                        Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                    </p>
                    <p>
                        Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end news-mod_section -->
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
