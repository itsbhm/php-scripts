<?php

$roll_no = (int)$_REQUEST['id'];


$connection = mysqli_connect('localhost', 'root', '', 'test') or die('Connection faild to Database');

$sth = "DELETE FROM `students` WHERE `roll_no` = {$roll_no}";

if (mysqli_query($connection, $sth)){
    echo 1;
} else{
    echo 0;
}
?>