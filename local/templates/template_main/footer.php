<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="footer-section">

    <?$APPLICATION->IncludeComponent("bitrix:menu", "menu_footer", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "main",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>

    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/button_top.php"
        )
    );?>

                </div>
            </div>
        </div>
    </div>
</footer>

<!-- SCIPTS -->

<?php
use Bitrix\Main\Page\Asset;

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.1.1.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/tether.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/scripts.js");

?>

</body>
</html>