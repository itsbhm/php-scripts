<!doctype>
<html>
<head>
<title>Foreach loop in PHP</title>
</head>
<body>
<?php
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
    echo $value."<br>";
}
?>



<br><br><br>
<details>
<summary>Info:</summary>
<br>
<H3>Syntax: </H3>
<pre>
foreach ($array as $value) {
    code to be executed;
}
</pre>
</details>
</body>
</html>