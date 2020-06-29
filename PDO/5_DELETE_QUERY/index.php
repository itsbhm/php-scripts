
<?php

try{
include_once('db.php');

$sql_query = ("DELETE FROM employees WHERE employee_id = '1234' ");

$connection->exec($sql_query);
echo "Record Deleted";

//try end
}catch(PDOException $ex_msg){
	echo "Error: ". $ex_msg->getMessage();
}//catch end

?>