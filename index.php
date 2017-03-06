<?php 

// Основные настройки

// Отображение ошибок

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Подключение основных файлов

define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');


// Запуск Роутера

$router = new Router();

$router->start();

 