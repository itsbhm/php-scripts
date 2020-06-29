<!doctype>
<html>
<head>
<title>Return Multiple Value in PHP</title>
</head>
<body>

<?php
function add_up($val_a, $val_b){
	$arr = array(
	$val_a,
	$val_b,
	$val_a + $val_b
	);
		return $arr;
}
	$value = add_up(10, 15);
	
	print_r($value);
	//echo $value[2];
?>

</body>
</html>