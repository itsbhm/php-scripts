<?php

class Hr{
	public function __construct(){
		echo "construct Function in PHP";
	}// call automatically

	public function __destruct(){
		echo "destruct Function in PHP";
	}

	public function Dual(){
		echo "This is Dual Function";
	}
}

$obj = new Hr();


//  __autoload
//	__set
//	__get
//	__clone
//	__construct
//	__destruct
?>