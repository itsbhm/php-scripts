
<?php
try{
include_once('db.php');


$emp_id = 1234;
$a_name = "Sandhya";
$b_name = "Singh";
$e_email = "sandhya@company.com";

$sth = $connection->prepare("INSERT INTO employees (employee_id, first_name, last_name, email) VALUES (:e_id, :f_name, :l_name, :email)"); //Secure from SQL Injection

$sth->bindParam(':e_id', $emp_id);
$sth->bindParam(':f_name', $a_name);
$sth->bindParam(':l_name', $b_name);
$sth->bindParam(':email', $e_email);

/*
$sth->execute();
echo "Data Inserted";
*/

if($sth->execute()){
echo "Data Inserted";	
}else{
	echo "Something Went Wrong!";
}

//try end
}catch(PDOException $ex_msg){
	echo "Error: ". $ex_msg->getMessage();
}//catch end

?>