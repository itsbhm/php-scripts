
<?php

try{
include_once('db.php');

$sth = $connection->prepare("UPDATE employees SET email='sandhya.singh@company.com' WHERE employee_id = 1234"); //Secure from SQL Injection

$sth->execute();

echo $sth->rowCount() . " Records Updated";

//try end
}catch(PDOException $ex_msg){
	echo "Error: ". $ex_msg->getMessage();
}//catch end

?>