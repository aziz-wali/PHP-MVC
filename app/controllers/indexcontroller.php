<?php
namespace controllers ;
use libx\database\EmployeeModel;
use models\ManageModel;
class IndexController extends AbstractController
{
protected $controller;
protected $action ;
protected $params;


public function defaultAction (){
$this->arr['employees']=EmployeeModel::getAll();
$this->arr['cont']=ManageModel::getArticle();

	$this->view();
	
}


public function loginAction(){
		
$this->view();
	}
	



}

