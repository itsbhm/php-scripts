<?php

class Hr{
	public $name = "Shubham";
	public $email = "mail@itsmeshubham.com";

	public function Employees(){
		echo $this->name;
		echo "<BR/>";
		echo $this->email;
	}
}

$obj = new Hr();
echo $obj->Employees();

?>