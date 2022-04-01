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

    <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "main",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "menu"
	),
	false
);?>

</header>
