<!doctype>
<html>
<head>
<title>SubString Function in PHP</title>
</head>
<body>

<?php

$line= "Shyam is on the way";
echo SUBSTR($line,4); //(string, length)
echo "<br/>";
echo SUBSTR($line,0,4); //(string,starting index, length)
?>

</body>
</html>