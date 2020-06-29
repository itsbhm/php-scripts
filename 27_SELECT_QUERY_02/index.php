<?php include_once("database.php") ;?>

<!doctype>
<html>
<head>
<title>SELECT QUERY IN  PHP</title>
<link rel="stylesheet" href="css/style.css" >
</head>
<body>
<table>
  <tr>
    <th>Employee_ID</th>
    <th>First_Name</th>
    <th>Last_name</th>
	<th>Email_ID</th>
  </tr>
<?php 
$sql_query = mysqli_query($db, "SELECT * FROM employees");
while($result = mysqli_fetch_array($sql_query)){
?>
  <tr>
    <td><?php echo $result['employee_id']; ?></td>
    <td><?php echo $result['first_name']; ?></td>
    <td><?php echo $result['last_name']; ?></td>
	<td><?php echo $result['email']; ?></td>
  </tr>

<?php
}
?>
</table>

</body>
</html>