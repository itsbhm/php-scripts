

<?php
$error_msg= "Error establishing a database connection";
$db = mysqli_connect('localhost', 'root' ,'', 'hr') or die($error_msg);
?>