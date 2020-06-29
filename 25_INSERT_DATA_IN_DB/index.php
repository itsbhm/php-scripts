<?php include_once("database.php") ;

if(ISSET($_POST['submit'])){
	
	$emp_id = $_POST['emp_id'];
	$first_name = $_POST['emp_first_name'];
	$last_name = $_POST['emp_last_name'];
	$email = $_POST['emp_email'];
	
	if(mysqli_query($db, "INSERT INTO employees (employee_id, first_name, last_name, email) VALUES ('$emp_id', '$first_name', '$last_name', '$email')")){
		echo "Value has been Submitted";
	}
}


?>

<!doctype>
<html>
<head>
<title>INSET DATA IN DB USING PHP</title>
</head>
<body>

<form method="POST" action="">
<pre>
Employee_ID:
<input type="text" name="emp_id" >
First_Name:
<input type="text" name="emp_first_name" >
Last_Name:
<input type="text" name="emp_last_name" >
Email:
<input type="text" name="emp_email" >

<input type="Submit" name="submit" Value="Submit" >
</pre>
</form>

</body>
</html>