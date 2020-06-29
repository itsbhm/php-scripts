<!doctype>
<html>
<head>
<title>INCLUDE once OR REQUIRE once in PHP</title>
</head>
<body>

<?php
require_once("includes/file_a.php");
include_once("includes/file_b.php");

require_once("includes/file_a.php");
include_once("includes/file_b.php");

$name = $v_first_name.' '.$v_last_name;
echo $name;
?>

</body>
</html>