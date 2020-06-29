<?php

class Employees{

	public $name = "Shubham";
	protected $email = "mail@itsmeshubham.com";

}// end of Class Employees


class Departments extends Employees{

public function eEmail(){
	return $this->email;
}

}// end of Class Departments

$obj = new Departments();
//echo $obj->setEmail; //Can't access protected property of Employees;
echo $obj->eEmail();
echo "<br/>";
echo $obj->name; 
?>