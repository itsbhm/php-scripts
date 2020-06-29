<!doctype>
<html>
<head>
<title>Genrating Random Password in PHP</title>
</head>
<body>

<?php

$char_set= "1234567890";

$shuffle_val = STR_SHUFFLE($char_set);

echo SUBSTR($shuffle_val,0,5); //(string,starting index, length)
?>

</body>
</html>