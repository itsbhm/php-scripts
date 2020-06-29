<!doctype>
<html>
<head>
<title>INCLUDE OR REQUIRE in PHP</title>
</head>
<body>

<?php
require("includes/file_a.php");
include("includes/file_b.php");

$name = $v_first_name.' '.$v_last_name;
echo $name;
?>

</body>
</html>