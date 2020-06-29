<?php include_once("database.php") ;?>

<!doctype>
<html>
<head>
<title>SELECT QUERY IN  PHP</title>
<link rel="stylesheet" href="css/style.css" >
</head>
<body>
<?php 

$sql_query = mysqli_query($db, "SELECT * FROM employees");
// $sql_query = mysqli_query($db, "SELECT * FROM employees LIMIT 5");
while($result = mysqli_fetch_array($sql_query)){
	//print_r($result);
	echo $result['employee_id'];
}

?>
</body>
</html>