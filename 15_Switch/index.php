<!doctype>
<html>
<head>
<title>Switch in PHP</title>
</head>
<body>

<?php

$language = "java";
Switch($language){
	case "java":
	echo "Language is Java";
	break;
	
	case "php":
	echo "Language is PHP";
	break;
	
	case "python":
	echo "Language is Python";
	break;
	
	default:
	echo "Please Select a Supported Language";
}

?>


</body>
</html>