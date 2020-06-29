
<?php

include_once('db.php');

//$sth = $connection->query("SELECT * FROM employees");
$sth = $connection->prepare("SELECT * FROM employees"); //Secure from SQL Injection

//$sth->setFetchMode(PDO:: FETCH_ASSOC); //Normal Style
$sth->setFetchMode(PDO:: FETCH_OBJ); //OOP Style


$sth->execute(); //Secure from SQL Injection

while($row = $sth->fetch()){

//echo $row['first_name']."<br/>"; //Normal Style
echo $row->first_name."<br/>"; //OOP Style
}

?>