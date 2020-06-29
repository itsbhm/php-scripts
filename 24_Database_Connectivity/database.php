<?php
error_reporting(0);
$error_msg= "Error establishing a database connection";
$db = mysqli_connect('localhost', 'root' ,'', 'hr') or die($error_msg);
?>