<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Page\Asset;
?>

<!DOCTYPE HTML>
<html>

<head>

    <?php $APPLICATION->ShowHead(); ?>

    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <?php
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/ionicons.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/styles.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/responsive.css");
    ?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

</head>

<body>

<div id="panel">
    <?php $APPLICATION->ShowPanel(); ?>
</div>

<header>

    <?$APPLICATION->IncludeComponent("bitrix:menu", "menu", Array(
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

</header>
