<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.02.2017
 * Time: 15:26
 */


//Front Controller

//Общие настройки

ini_set('display_errors', 1);
error_reporting(E_ALL);

//Подключаем файлы системы

define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/router.php');

//Устанавливаем соединение с БД



//Вызываем Router

$router = new Router();
$router->run();
