<!doctype>
<html>
<head>
<title>Return Single Value in PHP</title>
</head>
<body>

<?php
function hello($name){
	if($name == 'shubham'){
		return 'Hey, Shubham!';
	}else{
		return 'Hey, Stranger!';
	}
}

$greeting = hello('shubham');

echo $greeting;
?>

</body>
</html>