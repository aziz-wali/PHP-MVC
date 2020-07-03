<?php

namespace controllers;
use controllers\AbstractController;
use models\ManageModel;
class ManageController extends AbstractController{

public function defaultAction(){
$this->arr['controllers']=ManageModel::getAll();

	$this->view();
}
public function addAction(){


	$this->view();
}

public function editAction(){
$id = $this->params[0];
$this->arr['controllers']=ManageModel::edit($id);
$edit =ManageModel::edit($id);
        
        if($_SERVER['REQUEST_METHOD']=='POST'){
		    $obj=new ManageModel();
		     $imagname=$_FILES['img']['name'];
    	$imagsize=$_FILES['img']['size'];
    	$imagtype=$_FILES['img']['type'];
    	$imagtmp=$_FILES['img']['tmp_name'];
    	$extensions =array("jpg","jpeg","png","gif","jfif","JPG");
         if(empty($imagname)){
         $img=$edit['article_img'];
         	
         }else{ $img = rand(0,1000000).'_'.$imagname;
            
               }

    	$imagexp =strtolower(end(explode(".",$imagname)));
			$obj->title=$_POST['title'];
			$obj->article=$_POST['text'];
			
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

			$obj->updateArticle($obj->title,$obj->article,$img,$id);
	}
	$this->view();
}


public function saveAction(){
	if(isset($this->params[0])){

		return $this->editAction();
	}else{
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$emp=new ManageModel();

        $imagname=$_FILES['img']['name'];
    	$imagsize=$_FILES['img']['size'];
    	$imagtype=$_FILES['img']['type'];
    	$imagtmp=$_FILES['img']['tmp_name'];
    	$extensions =array("jpg","jpeg","png","gif","jfif","JPG");

    	$imagexp =strtolower(end(explode(".",$imagname)));
        $emp->title=$_POST['title'];
		$emp->article=$_POST['text'];
		
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
                 $article_img = rand(0,1000000).'_'.$imagname;
                
                move_uploaded_file($imagtmp,'public/upload/image/'.$article_img);


		$emp->addarticle($emp->title,$emp->article,$article_img);
		 }
      }
}




public function deleteAction(){
 $id=$this->params[0];
 return ManageModel::delete($id);



}


}