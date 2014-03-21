<?php 
/**
 * Amazing MVC Framework
 * 
 * @copyright Copyright (c) 2014, Andrew Avdeev
 * @author Andrew Avdeev
 * @link http://auto-info.by/
 *  
 */

    /** Development Environment **/
    // when Set to false, no error will be throw out, but saved in temp/log.txt file.
   // define ('DEVELOPMENT_ENVIRONMENT',true);

    /** Site Root **/
    // Domain name of the site (no slash at the end!)
    //define('SITE_ROOT' , 'http://You domain name');
    //define('SITE_ROOT' , 'http://169.0.0.1');
    //define ('DEFAULT_CONTROLLER', "index");
    //define ('DEFAULT_ACTION', "index");
/*    $config['base_url'] = ''; // Base URL including trailing slash (e.g. http://localhost/)
    $config['default_controller'] = 'index'; // Default controller to load
    $config['default_action'] = 'index'; // Default action to load
    $config['error_controller'] = 'error'; // Controller used for errors (e.g. 404, 500 etc)*/
    /*********** DataBase config ***********/
    // $config['db_pdo'] = 'mysql:host=localhost;dbname=blog'; // Database host (e.g. localhost)
/*    $config['db_driver'] = 'pdo'; // pdo mysql sqlite postgresql
    $config['db_port'] = '';
    $config['db_charset'] = 'utf8';
    $config['db_name'] = 'name';
    $config['db_username'] = 'root';
    $config['db_password'] = 'password';
    $config['db_type'] = 'mysql';
*/
class Config {
    
    private $conf;
    
    public function __construct() {
        $this->conf=array(
            'db'=>array(
                'db_driver' => 'pdo',
                'db_host'=>'localhost',
                'db_port'=>'',
                'db_name'=>'auto-info',
                'db_username'=>'root',
                'db_password'=>'',
                'db_type'=>'mysql',
                'db_charset' => 'utf8'
            ),
            //'developer_mode'=>true
        );
        Settings::add($this->conf);
    }

}
?>