<?php 
namespace controllers;
use libx\database\EmployeeModel;
use controllers\AbstractController;
class EmployeeController extends AbstractController{


protected $arr =[];



	public function defaultAction(){
		
		$this->arr['employees']=EmployeeModel::getAll(); // get all return an array $rows
		$this->view();
	}
	public function addAction(){
		
		
		$this->view();
}
public function editAction(){
		$id=$this->params[0];
		$edit =EmployeeModel::edit($id);
		$this->arr['employee']=EmployeeModel::edit($id);
	if($_SERVER['REQUEST_METHOD']=='POST'){
		    $obj=new EmployeeModel();
		     $imagname=$_FILES['img']['name'];
    	$imagsize=$_FILES['img']['size'];
    	$imagtype=$_FILES['img']['type'];
    	$imagtmp=$_FILES['img']['tmp_name'];
    	$extensions =array("jpg","jpeg","png","gif","jfif","JPG");
         if(empty($imagname)){
         $img=$edit['img'];
         	
         }else{ $img = rand(0,1000000).'_'.$imagname;
            
               }

    	$imagexp =strtolower(end(explode(".",$imagname)));
			$obj->name=$_POST['name'];
			$obj->lastname=$_POST['last'];
			$obj->salary=$_POST['salary'];
			$obj->address=$_POST['address'];
			$errors =[];
		if(!empty($imagname) && !in_array($imagexp,$extensions)){

                	$errors[]= 'extension not allowed';
                }

                if(empty($imagname)){

                	$errors[]= 'image must not be empty';
                }

                if($imagsize>3000000){

                	$errors[]= 'size must not be more than 3 MB';
                }
                 move_uploaded_file($imagtmp,'public/upload/image/'.$img);

			$obj->update($obj->name,$obj->lastname,$obj->salary,$img,$obj->address,$id);
	}
	
	
	$this->view();
}
public function saveAction(){
	if(isset($this->params[0])){
				return $this->editAction();
			}else{
if($_SERVER['REQUEST_METHOD']=='POST'){
		$emp=new EmployeeModel();

        $imagname=$_FILES['img']['name'];
    	$imagsize=$_FILES['img']['size'];
    	$imagtype=$_FILES['img']['type'];
    	$imagtmp=$_FILES['img']['tmp_name'];
    	$extensions =array("jpg","jpeg","png","gif","jfif","JPG");

    	$imagexp =strtolower(end(explode(".",$imagname)));
        $emp->name=$_POST['name'];
		$emp->lastname=$_POST['last'];
		$emp->salary=$_POST['salary'];
		$emp->address=$_POST['address'];


		$errors =[];
		if(!empty($imagname) && !in_array($imagexp,$extensions)){

                	$errors[]= 'extension not allowed';
                }

                if(empty($imagname)){

                	$errors[]= 'image must not be empty';
                }

                if($imagsize>3000000){

                	$errors[]= 'size must not be more than 3 MB';
                }
                 $img = rand(0,1000000).'_'.$imagname;
                
                move_uploaded_file($imagtmp,'public/upload/image/'.$img);

              
		$emp->addemp($emp->name,$emp->lastname,$emp->salary,$img,$emp->address);


		                                    }
	
                   }
}

public function deleteAction(){
 $id=$this->params[0];
 return EmployeeModel::delete($id);



}
}