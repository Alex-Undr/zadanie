<?php

//Робота з помилками
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Підключення файлів системи
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');


//Виклик роутера
$router = new Router();
$router->run();


//Перевірка на індексну сторінку
$uri = $_SERVER['REQUEST_URI'];
$count_r = substr_count($uri, '/');

if($count_r <= 2)
{
	require_once(ROOT.'/views/index.php');
}



