<?php
/**
 * Amazing MVC Framework
 * 
 * @copyright Copyright (c) 2014, Andrew Avdeev
 * @author Andrew Avdeev
 * @link http://auto-info.by/
 * 
 * @todo  Сделать импорт с помощью spl_autoload_register
 * @todo  Карта маршрутизации
 * @todo  Изменить префиксы
 * @todo  Стилизовать страницу 404 ошибки
 * @todo  Перевести комментарии на инглиш
 */

/**
 * Класс маршрутизатор для определения запрашиваемой страницы.
 * 
 * Цепляет классы контроллеров и моделей.
 * Создает экземпляры контролеров страниц и вызывает действия этих контроллеров.
 * 
 */
class Route {
	/**
     * Основная статическая функция маршрутизации
     * 
     * Обрабатывает URL
     * Подключает модель и контроллер
     * @static
     */
    public static function run() {

    	//назначение параметров по умолчанию
        /**
         * Default controller value
         */
        $controller_name = 'index';
        /**
         * Default action value
         */
        $action_name = 'index';
        //$action_parameters = array();

        //преобразуем строку запроса в массив
        $route_array = explode('/', $_SERVER['REQUEST_URI']);

        //присваиваем имя контроллера и экшена после парсинга URI
        if(!empty($route_array[1])) {
           $controller_name = $route_array[1];
        }

        if(!empty($route_array[2])) {
           $action_name = $route_array[2];
        }
        // добавляем префиксы
        $model_name = $controller_name.'Model';
        $controller_name = $controller_name.'Controller';
        $action_name = 'action'.$action_name;
        if(file_exists(ROOT_DIR.'/system/models/'.$model_name.'.php')) {
            include ROOT_DIR.'/system/models/'.$model_name.'.php';
        }else{
            if(file_exists(ROOT_DIR.'/application/models/'.$model_name.'.php')) {
                include ROOT_DIR.'/application/models/'.$model_name.'.php';
            }
        }


        if(file_exists(ROOT_DIR.'/system/controllers/'.$controller_name.'.php')) {
            include ROOT_DIR.'/system/controllers/'.$controller_name.'.php';
        }else{
            if(file_exists(ROOT_DIR.'/application/controllers/'.$controller_name.'.php')) {
                include ROOT_DIR.'/application/controllers/'.$controller_name.'.php';
            }else{
                // иначе редирект на страницу 404
                Route::ErrorPage404();
            }
        }

        // Экземпляр класса вызываемого контроллера, если такой есть.
        $controller = new $controller_name();
        // Если у контроллера есть действие '...', то всё ок!
        if (method_exists($controller, $action_name)) {
            // вызываем действие контроллера
            $controller->$action_name();
        } else {
            // иначе редирект на страницу 404
            Route::ErrorPage404();
        }
    }

    /**
     * Function 
     * 404 - not found
     * @static
     */
    public static function ErrorPage404(){
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'error');
    }
}