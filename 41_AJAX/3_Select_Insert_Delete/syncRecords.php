<?php


$connection = mysqli_connect('localhost', 'root', '', 'test') or die('Connection faild to Database');

$sth = "SELECT * FROM students";
$result = mysqli_query($connection, $sth) or die('SQL Query Failed');
$output = '';

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result)){
    $output .= "
    <tr>
    <th scope='row'>{$row['roll_no']}</th>
    <td>{$row['first_name']}</td>
    <td>{$row['last_name']}</td>
    <td><button class='btn btn-danger delete-btn' data-id='{$row['roll_no']}'>Delete</button></td>
    </tr>
    ";
}

mysqli_close($connection);

echo($output);

} else {
    echo '<td colspan="4" class="text-center pt-5">No Records Found</td>';
}
