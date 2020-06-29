<?php

class City{
	
	public $ggn = "Gurgaon";
	public $dli = "Delhi";
}

class Departments extends City{

	public  $dep1 = "Marketing";
	public  $dep2 = "Development";
	public  $dep3 = "IT";

	public function showDepartment(){
		return $this->dep2. " is managed by " .$this->ggn;
	}
}

$obj = new Departments();
echo $obj->showDepartment();
?>