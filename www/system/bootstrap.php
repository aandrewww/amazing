<?php
/**
 * Amazing MVC Framework
 * 
 * @copyright Copyright (c) 2014, Andrew Avdeev
 * @author Andrew Avdeev
 * @link http://auto-info.by/
 * 
 * @todo Сделать импорт с помощью spl_autoload_register
 */

//подключаем классы ядра фреймворка.
include ROOT_DIR.'/system/core/Controller.php';
include ROOT_DIR.'/system/core/Model.php';
include ROOT_DIR.'/system/core/View.php';
include ROOT_DIR.'/system/core/Route.php';
include ROOT_DIR.'/system/classes/functions.php';
include ROOT_DIR.'/system/config/config.php';
include ROOT_DIR.'/system/classes/database.php';
include ROOT_DIR.'/system/classes/settings.php';
include ROOT_DIR.'/system/database/database.php';
include ROOT_DIR.'/system/database/database_pdo.php';
//запускаем маршрутизатор
Route::run();