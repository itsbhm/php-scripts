<?php

try{
    $connection = new PDO("mysql:host=localhost;dbname=test", 'admin', 'admin');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $_DB_STATUS =  "Connection successfully established";
}catch(PDOException $ex_msg){
    $_DB_STATUS = "Error: ". $ex_msg->getMessage();
}


$sth = $connection->prepare("SELECT * FROM item_codes WHERE item_cid = 8080");
$sth->setFetchMode(PDO:: FETCH_OBJ);
$sth->execute();
$data = $sth->fetch();


function fetchItemName ($connection, $item_id){
    $sth = $connection->prepare("SELECT * FROM items WHERE item_id = $item_id");
    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth->execute(); 
    $data = $sth->fetch();
    $resp = $data->item_name;

    return $resp;
}

$a = [];

foreach (json_decode($data->item_id) as $item_id) {
    $val = fetchItemName($connection, $item_id);
    array_push($a, $val);
}

echo implode(", ",$a);

?>