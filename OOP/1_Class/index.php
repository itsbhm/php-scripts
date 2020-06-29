<?php

class Employees{

	public $name = "Shubham";
	public $email = "mail@itsmeshubham.com";

	public function hello(){
		echo "Hello ";
	}
	public function f1(){
		echo "Your email is: ";
	}

}


$h = new Employees();
echo $h->hello();
echo $h->name;
echo "<br/>";
echo $h->f1();
echo $h->email;
?>