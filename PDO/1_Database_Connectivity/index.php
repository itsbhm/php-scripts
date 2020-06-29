
<?php

try{
	$connection = new PDO("mysql:host=localhost;dbname=hr", 'root', '');
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	echo "Connection successfully established";

}catch(PDOException $ex_msg){
	echo "Error: ". $ex_msg->getMessage();
}

?>