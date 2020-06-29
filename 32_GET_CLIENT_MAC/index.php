<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>GET CLIENT MAC in PHP</title>
</head>
<body>

<?php
// Turn on output buffering
ob_start();
//Get the ipconfig details using system commond
system('ipconfig /all');

// Capture the output into a variable
$mycom=ob_get_contents();
// Clean (erase) the output buffer
ob_clean();

$findme = "Physical";
//Search the "Physical" | Find the position of Physical text
$pmac = strpos($mycom, $findme);

// Get Physical Address
$mac=substr($mycom,($pmac+36),17);
//Display Mac Address
echo $mac;
?>

</body>
</html>