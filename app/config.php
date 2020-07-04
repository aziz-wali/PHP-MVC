<?php 


 

//define constants

define('HOST', 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']) .'/');


define('DS', DIRECTORY_SEPARATOR);
define('APP',realpath(dirname(__FILE__)).DS);//cours


define('CONTROLLER','/controllers'.DS );
define('MODEL', APP.'models'.DS );
define('VIEW', APP.'views'.DS ); 
require_once APP.'libx'.DS.'database'.DS.'database.php';
$con = libx\database\DataBase::init();
