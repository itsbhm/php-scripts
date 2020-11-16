<!doctype>
<html>
<head>
<title>Implode Function IN  PHP</title>
</head>
<body>
<?php
$a_line = array('I', 'am', 'learning', 'PHP');
$s_data = IMPLODE("_", $a_line);
//print_r($a_line);
echo $s_data;


// ----------------
/*
$dt = '2009-01-16';

$m =explode('-',$dt)[1];
$d =explode('-',$dt)[2];
$y =explode('-',$dt)[0];
*/

?>
</body>
</html>