<?php
include_once "ParentClass.php";

class MyClass extends ParentClass{

	public function Sal(){
		return $this->salary();
	}
}

$obj = new MyClass();
echo $obj->Sal();
?>