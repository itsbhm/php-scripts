<!doctype>
<html>
<head>
<title>Associative Array with ForEach Loop in PHP</title>
</head>
<body>

<?php

$students = array(

	"shubham"=>306,
	"rajan"=>307,
	"lalit"=>308
);

foreach($students as $name => $id){
	echo "Student name is ".$name." and id is ".$id."<br/>";
//	echo $name."<br/>";
}

?>


<br><br><br>
<br>
<h3>Its ForEach loop($array as $name) with Associative Array(Key, Value)</h3>
</body>
</html>