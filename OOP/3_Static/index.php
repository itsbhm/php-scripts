<?php

class Employees{

	public static $name = "SHUBHAM";
	public static $hr = "HR Group Name";
	
	public static function HrGroup(){
		return self::$hr;
	}

}

echo Employees::$hr;
//echo Employees::$hr="IT Administrator";
echo "<BR/>";


class Dual extends Employees{

	public static function eName(){
		return parent::$name;
	}
}

echo Dual::eName();


// No need to create class obj for static
//Statc value can change
//Constent value can't change
?>