<?php

try{
	$connection = new PDO("mysql:host=localhost;dbname=database-name-here", 'root', '');
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "Connection successfully established";

}catch(PDOException $ex_msg){
	echo "Error: ". $ex_msg->getMessage();
}

$getUsername = $_REQUEST["uname"];
$getPassword = $_REQUEST["upassword"];

$sth = $connection->prepare("SELECT * FROM `bb_com_users` WHERE username='".$getUsername."' and password='".$getPassword."' ");
$sth->setFetchMode(PDO:: FETCH_OBJ);
$sth->execute();
$count = $sth->rowCount();
echo $count;

?>