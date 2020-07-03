<?php
namespace models;
use models\AbstractModel;

class ManageModel extends AbstractModel{
public $title;
public $article;
public $article_img;
public static $tablename ="control";
public static $tableid ="control_id";

protected static $schema= array('title' ,
                         'article',
                         'article_img'

                          );

 public function getArticle(){

	
		 $query = "SELECT * FROM " .static::$tablename .' ORDER BY '.static::$tableid." DESC";
       $sql=self::init()->prepare($query);
       $sql->execute();
      
       $rows=$sql->fetch();
       return $rows;
       }

}