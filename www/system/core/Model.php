<?php
/**
 * Amazing MVC Framework
 * 
 * @copyright Copyright (c) 2014, Andrew Avdeev
 * @author Andrew Avdeev
 * @link http://auto-info.by/
 * 
 * @todo Документировать код
 * @todo Переписать дефолтную модель. Или сделать класс пустым, или что-то прилумать.
 * 
 */
class Model {
	/**
	 * По дефолту вызывем пока что getSiteName. А в наследниках уже переопределяем. По-хорошему, надо подумать о дефолтной модели.
	 * @return mixed 
	 */
	protected $db;
    

    
    public function __construct() {
        $this->db=DataBase::ini();
    }

    //метод выборки данных по умолчанию
    public function get_data(array $parameters) {
        
    }
}