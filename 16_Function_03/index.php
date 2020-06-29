<!doctype>
<html>
<head>
<title>Function with arguments in PHP</title>
</head>
<body>

<?php

function sum($val_1, $val_2){

$result = $val_1 + $val_2;
return $result;	
}


$res_vaule = sum(10, 55);
echo $res_vaule;

?>


</body>
</html>