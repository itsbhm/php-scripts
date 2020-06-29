<!doctype>
<html>
<head>
<title>UNSET FUNCTION IN PHP</title>
</head>
<body>

<?php

$value = "HP";
if(ISSET($value)){
	echo "ISSET RESULT: "."True";
}else{
	echo "ISSET RESULT: "."False";
}

echo ("<br/>");

UNSET($value);

if(ISSET($value)){
	echo "UNSET RESULT: "."True";
}else{
	echo "UNSET RESULT: "."False";
}

?>

</body>
</html>