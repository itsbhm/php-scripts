<?php include_once("database.php") ;

if(ISSET($_POST['submit'])){
	
	$emp_id = $_POST['emp_id'];
	$emp_id_len = STRLEN($emp_id);
	$first_name = $_POST['emp_first_name'];
	$last_name = $_POST['emp_last_name'];
	$email = $_POST['emp_email'];
	
	if(empty($emp_id)){
	$chk_error = "Please Enter Employee_ID";
	}else if($emp_id_len<=6){
	$chk_error = "Employee_ID should be more than 6 char long.";
	}else if(empty($first_name)){
	$chk_error = "Please Enter Your First Name";
	}else if(empty($last_name)){
	$chk_error = "Please Enter Your Last Name";
	}else if(empty($email)){
	$chk_error = "Please Enter Your Email ID";
	}else if(!FILTER_VAR($email, FILTER_VALIDATE_EMAIL)){
	$chk_error = "Please Enter Valid Email ID";
	}else{
		if(mysqli_query($db, "INSERT INTO `employees` (`employee_id`, `first_name`, `last_name`, `email`) VALUES ('$emp_id', '$first_name', '$last_name', '$email')")){
		echo "<script>alert('Successfully submitted!');</script>";
	}else{
		echo "UNKNOWN ERROR";
		//var_dump($db);
		
	}
	}

}

//MYSQLI_STORE_RESULT
//mysql_real_escape_string


//	MAX VALUE
//	2147483647 => INT
//	9223372036854776000 => BIG INT
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
<input type="text" name="emp_id" ><span>Employee_ID Should be 6 Dig Long</span>
First_Name:
<input type="text" name="emp_first_name" >
Last_Name:
<input type="text" name="emp_last_name" >
Email:
<input type="text" name="emp_email" >

<input type="Submit" name="submit" Value="Submit" >
</pre>
</form>
<p style="color:red;"><?php if(ISSET($chk_error)){echo "Something went wrong"}?></p>
</body>
</html>