<?php
namespace libx;
use controllers\EmployeeController;
use libx\database;

class FrontController{
	
	private $controller = 'index' ;
	private $action = 'default';
	private $params = array();
	
	 const NOT_FOUND ='notFoundAction';

public function __construct(){
	$this->url();
}
 private function url(){
	$url =trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),'/');
	
	$url=explode('/',$url,3);
	
	if(isset($url[0])&&$url[0]!=''){
		$this->controller = $url[0];
	}
	if(isset($url[1])&&$url[1]!=''){
		$this->action = $url[1];
	}
	if(isset($url[2])&&$url[2]!=''){
		$this->params = explode('/',$url[2]);
		$id=$this->params[0];
	}


}
public function show(){

	$classController = 'controllers\\'.ucfirst($this->controller).'Controller' ;
	$action = $this->action . 'Action';
		if(!class_exists($classController)){
	 $classController ='controllers\\'.'NotFoundController' ;
	}

		if(!method_exists( $classController,$action)){
		$this->action=$action = self::NOT_FOUND;
	}
	
	$object =new $classController();
    $object->setController($this->controller);
    $object->setAction($this->action);
    $object->setParams($this->params);
    $object->$action();
     
	
	
	
    echo'<pre>';
   // var_dump($action);
  echo'</pre>';
				 
}
}