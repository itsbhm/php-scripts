<?php
try{
	$connection = new PDO("mysql:host=localhost;dbname=test", 'root', '');
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//echo "Connection successfully established";
}catch(PDOException $ex_msg){
	echo "Error: ". $ex_msg->getMessage();
}

$stmt = $connection->prepare("SELECT MIN(user_rank) FROM players LIMIT 1");
$stmt->setFetchMode(PDO:: FETCH_OBJ);
$stmt->execute();

$grabData = $stmt->fetch();

$array = json_decode(json_encode($grabData), true);
$minRank = $array['MIN(user_rank)'];

echo $minRank;

?>