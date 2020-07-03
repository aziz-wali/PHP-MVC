<?php
namespace controllers;
 class AbstractController {

protected $controller;
protected $action ;
protected $params;
protected $arr =[];

 const NOT_FOUND ='notFoundAction';


	public function notFoundAction(){
		$this->view();
	}
	public function defaultAction (){
	$this->view();
	
}
public function setController($setcont){

	$this->controller =$setcont;
}

public function setAction($setaction){
	$this->action =$setaction;
}
public function setParams($setparam){
	$this->params =$setparam;
}
protected function view(){
	$file =APP.'views'.DIRECTORY_SEPARATOR. $this->controller.DS.$this->action.'.views.php';
	if(file_exists($file)){
			
			if(!empty($this->arr)){
				extract($this->arr);
			}
			require APP.'template'.DS.'header.start.php';
			require APP.'template'.DS.'headerend.php';
			require $file;
			require APP.'template'.DS.'footer.php';
    }else{
			require APP.'template'.DS.'header.start.php';
			require APP.'template'.DS.'headerend.php';
			require APP.'views'.DS.'notfound'.DS.'notfound.views.php';
		   require APP.'template'.DS.'footer.php';
         }
	
	}
}