<?php
namespace libx\database;
use models\AbstractModel;

class EmployeeModel extends AbstractModel{
	
	public $name;
	public $lastname;
	public $salary ;
	public $img;
	public $address;
    protected static $tablename="employee";
    public static $tableid ="id";
    protected static $schema =array(
                                 'name',
                                 'lastname',
                                 'salary',
                                 'img',
                                 'address');







   

}