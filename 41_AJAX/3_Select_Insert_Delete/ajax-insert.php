<?php

$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];


$connection = mysqli_connect('localhost', 'root', '', 'test') or die('Connection faild to Database');

$sth = "INSERT INTO students(first_name, last_name) VALUES ('{$first_name}', '{$last_name}')";

if (mysqli_query($connection, $sth)){
    echo 1;
}else {
    echo 0;
}

?>