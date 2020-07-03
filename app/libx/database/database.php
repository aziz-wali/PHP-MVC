<?php
namespace libx\database;

class DataBase {
	private static $con ;
  
    public static function init()
    {
        $dsn='mysql:host=localhost;dbname=employees';
        $user='root';
        $pass='';
        $option=array(
        \PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8',);
         if(null===self::$con){
        try{
        self::$con = new \PDO($dsn,$user,$pass,$option);
        self::$con -> setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);


            }
            catch(PDOException $e){
                echo 'sorry.. no connection' . $e ->getMessage();
            }


        }
            return self::$con;
    }
   

    }
    
