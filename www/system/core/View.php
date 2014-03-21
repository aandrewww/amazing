<?php
/**
 * Amazing MVC Framework
 * 
 * @copyright Copyright (c) 2014, Andrew Avdeev
 * @author Andrew Avdeev
 * @link http://auto-info.by/
 * 
 * @todo Документировать код
 * @todo  Подумать, какие ещё полезные плюшки можно сюда добавить.
 * 
 */
class View {
	public function render($view, $data = array()){ // $view = имя вьюшки; $data = инфа, которую мы хотим передать для отображения в шаблоне.
		include ROOT_DIR.'/system/views/template.php';
	}
}