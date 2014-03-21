<?php
/**
 * Amazing MVC Framework
 * 
 * @copyright Copyright (c) 2014, Andrew Avdeev
 * @author Andrew Avdeev
 * @link http://auto-info.by/
 * 
 * @todo Документировать код
 * 
 */
class Controller {
	// По дефолту вызывем всё index. А в наследниках уже переопределяем метод action_index, и пляшем.
	public function actionIndex(){
		$view = new View();
		$view->render('index');
	}
}