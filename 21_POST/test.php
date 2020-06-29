<!doctype>
<html>
<head>
<title>POST METHOD IN PHP</title>
</head>
<body>

<?php 

$get_username = $_POST['u_username'];
$get_password = $_POST['u_password'];

echo $get_username;
echo "<br/>";
echo $get_password;

?>

</body>
</html>