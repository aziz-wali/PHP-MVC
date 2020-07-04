<?php
namespace controllers ;
//use AbstractController;extends In
class NotFoundController extends IndexController 

{

public function notFoundAction(){
		//echo'<h2>notfound controller and not found action</h2>';
	
	$this->view();
	}
	public function defaultAction (){
	
	
	;
	$this->view();
}

}