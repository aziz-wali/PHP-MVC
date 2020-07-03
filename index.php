<?php
namespace mvc;
use libx\FrontController;
use libx\database\EmployeeModel;


	/*if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');	exit;*/
//if(file_exists('autoload.php')){
	
//}

require 'app/config.php';
require 'app/libx/autoload.php';

$x= new FrontController();

	//echo '<br>index<br>';
$x->show();

	echo '<pre>';

	echo '</pre>';
	/*$tableSchema='';
	 $tableSchema = array(
        'Name'              => \PDO::PARAM_STR,
        'PhoneNumber'       => \PDO::PARAM_INT,
        'Email'             => \PDO::PARAM_STR,
        'Address'           => \PDO::PARAM_STR

    );
	   $namedParams = '';
        foreach ($tableSchema as $columnName => $type) {
            $namedParams .= $columnName . ' = :' . $columnName . ', ';
        }
      echo  $namedParams.'<br>';
    echo  trim($namedParams, ', ');
	//*/
	 //global $_instance;
	
 /*$q =new EmployeeModel();
				// $q->addemp("sam","ahmed","2276");
				 var_dump($q);
$q->getemp();
global $con;
var_dump($con);*/
//echo MVC;
//echo MODEL.'<br>';
//echo realpath(dirname(__FILE__)); // this file (index)
//echo APP; //config ----app folder //