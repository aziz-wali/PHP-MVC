<?php
namespace models;
use libx\database\DataBase;
class AbstractModel extends DataBase{



	private function bindvl(){
		$col='';
		foreach (static::$schema as $column){
			$col.="?,";

		}
		return trim($col,",") ;
	}
private function returnSql(){
			$columns='';
			foreach(static::$schema as $column){
			$columns .=$column.',';
			}
			return trim($columns,',');
			

}




			public function addemp($val1,$val2,$val3,$val4,$val5){
	
               
		 $query = "INSERT INTO ".static::$tablename."(" .$this->returnSql() .") VALUES(".$this->bindvl() .")";
		 var_dump($query);
		       $sql=self::init()->prepare($query);
                $sql->execute(array($val1,$val2,$val3,$val4,$val5));
                
		        if($sql){
		         echo 'add has been successfully...';

			}
			header('refresh:100;/employee/ ');
			}
public function addarticle($title,$article,$article_img){
	

		 $query = "INSERT INTO ".static::$tablename.'(' .$this->returnSql().')' ."VALUES(?,?,?)";
		       $sql=self::init()->prepare($query);
                $sql->execute(array($title,$article,$article_img));
		        if($sql){
		           $_SESSION['message']= 'add has been successfully...';

			}
			header('refresh:100;/employee/ ');
			}

     public function getAll(){

	
		 $query = "SELECT * FROM ".static::$tablename . " ORDER BY " .static::$tableid. " DESC";
       $sql=self::init()->prepare($query);
       $sql->execute();
      
       $rows=$sql->fetchAll();
       return $rows;
        
        ;


	

           }
    public function edit($id){

	
		 $query = "SELECT * FROM ".static::$tablename." WHERE ".static::$tableid ."=? ";
       $sql=self::init()->prepare($query);
       $sql->execute(array($id));
      
       $rows=$sql->fetch();
       return $rows;
       }
  public function update($name, $lastname,$salary,$img,$address,$id){
       
	
		 $query = "UPDATE ".static::$tablename." SET name=? , lastname=?, salary=? , img=? , address=?   WHERE ".static::$tableid ." =? ";
         $sql=self::init()->prepare($query);
         $sql->execute(array($name,$lastname,$salary,$img,$address,$id));
      
       	header('refresh:29;/employee/ ' );
        }
         public function updateArticle($title, $article,$img,$id){

	
		 $query = "UPDATE ".static::$tablename." SET title=? ,article=? ,article_img=? WHERE ".static::$tableid ."=? ";
       $sql=self::init()->prepare($query);
       $sql->execute(array($title,$article,$img,$id));
      
       	header('refresh:29;/manage/ ' );
        }
   public function delete($id){

        $query="DELETE FROM ".static::$tablename." WHERE ".static::$tableid."=?";
        $stmt=self::init()->prepare($query);
        $stmt->execute(array($id));
        header('refresh:0.5;'.$_SERVER['HTTP_REFERER'] );
        }
}

