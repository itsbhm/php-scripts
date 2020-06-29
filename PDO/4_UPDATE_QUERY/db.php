
<?php

try{
	$connection = new PDO("mysql:host=localhost;dbname=hr", 'root', '');
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "Connection successfully established";

}catch(PDOException $exc_msg){
	echo "Error: ". $exc_msg->getMessage();
}

?>