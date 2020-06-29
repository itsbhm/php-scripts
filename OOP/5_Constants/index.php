<?php

// define ("","",True/False);
//True -> Non Case sensitive
//False -> Sensitive  // By default

define ("Dummy","The Fox",true);


class Hr{
	const Department = "IT Administrator";
	public $name = "Shubham";
}

echo Hr::Department;
echo dummy; // Define-> True Case

//echo Dummy; // Define-> False Case
//echo Hr::Department = "Value can't modify";


// const -> Constants
//Constants value can't modify
//access behaviour like static function