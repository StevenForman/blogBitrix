<?
// подключение файла обработки адресов urlrewrite.php
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

// установка HTTP статуса 404
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
// скрывает боковую панель на странице
define("HIDE_SIDEBAR", true);

// подключение header.php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

// установка заголовка страницы
$APPLICATION->SetTitle("Страница не найдена");?>

    <! -- начало содержимого страницы 404.php -->
    <div class="bx-404-container">
        <div class="bx-404-text-block">Неправильно набран адрес, <br>или такой страницы на сайте больше не существует.</div>
    </div>
    <! -- окончание содержимого страницы 404.php -->

    <! --  подключение файла footer.php -->
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>