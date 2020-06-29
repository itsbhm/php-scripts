<?php

	function __autoload($variable){
	include "classes/$variable.php";
}

$HrOne = new HrOne();
echo $HrOne->name;
echo "<br/>";

$HrTwo = new HrTwo();
echo $HrTwo->name;
echo "<br/>";

$HrThree = new HrThree();
echo $HrThree->name;

// Access Multiple Classes by using __autoload funcation
?>