<!doctype>
<html>
<head>
<title>GET METHOD IN PHP</title>
</head>
<body>

<?php 

$get_username = $_GET['u_username'];
$get_password = $_GET['u_password'];

echo $get_username;
echo "<br/>";
echo $get_password;

?>

</body>
</html>