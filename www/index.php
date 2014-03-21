<?php
/**
 * Amazing MVC Framework
 * 
 * @copyright Copyright (c) 2014, Andrew Avdeev
 * @author Andrew Avdeev
 * @link http://auto-info.by/
 * 
 */
//запускаю сессию
session_start();

//отображаю ошибки
error_reporting(E_ALL);
ini_set('display_errors', 1);

//проверяю версию php
if(version_compare(phpversion(), '5.3.0', '<') == true) {
    die('PHP >= 5.3.0 Only (PHP version must be >= 5.3.0)');
}

//В константе ROOT_DIR лежит имя корневой директории
define('ROOT_DIR', realpath(dirname(__FILE__)));
define('APP_DIR', ROOT_DIR .'/application');

//запускаю загрузчик
include ROOT_DIR.'/system/bootstrap.php';