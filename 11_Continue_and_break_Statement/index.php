<!doctype>
<html>
<head>
<title>Continue Statement in PHP</title>
</head>
<body>
<?php
$x=1;
for($x; $x<=10; $x++){
	if($x== 5){
		echo "Continue Called"."<br>";
		continue;
	}
	if($x==8){
		echo "Break Called"."<br>";
		break;
	}
	echo $x;
}

?>




</body>
</html>