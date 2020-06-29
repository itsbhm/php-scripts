<!doctype>
<html>
<head>
<title>GET METHOD IN PHP</title>
</head>
<body>

<?php 

if(ISSET($_GET['u_username']) && ($_GET['u_password'])){

echo $_GET['u_username'];
echo "<br/>";
echo $_GET['u_password'];
}else{
	echo "Please fill the form";
}

?>

</body>
</html>