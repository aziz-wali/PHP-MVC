<?php
namespace libx;

class autoload{

public static function autoload($classname){
	
	$classname =strtolower($classname);

$classname =str_replace('\\', '/', $classname);
//$classname =str_replace('lib', '', $classname);
 $classname = APP . $classname . '.php';

if(!file_exists($classname)){
	return false;
}else{
	require $classname;
}

}



}
//$x=new autoload();
spl_autoload_register(__NAMESPACE__.'\autoload::autoload');
