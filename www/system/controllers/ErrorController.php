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
class ErrorController extends Controller{
	// Переопределяем метод actionIndex родительского контроллера Controller
	public function actionIndex(){
		$view = new View();
		$view->render('error');
	}
}