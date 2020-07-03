<?php
namespace controllers ;
//use AbstractController;extends In
class NotFoundController extends IndexController 

{

public function notFoundAction(){
		//echo'<h2>notfound controller and not found action</h2>';
	//require APP.'views'.DS.'notfound.view.php';
	$this->view();
	}
	public function defaultAction (){
	
	
	//echo '<h2>not found cotroller</h2>';
	$this->view();
}

}