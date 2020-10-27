<?php


$payload = file_get_contents('php://input');
$data = json_decode($payload); 

echo $data->first_name;

echo $data->last_name;

?>