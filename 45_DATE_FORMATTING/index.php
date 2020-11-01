<?php

$input_date = "31-12-2020"; // Input in String Format

var_dump($input_date);
echo("<hr>");


$input_new_date = strtotime($input_date); // Convert Input String Into Time Format

var_dump($input_new_date);
echo("<hr>");


$date = date("Y-m-d", $input_new_date); // Formatting Date Pattern/Order

var_dump($date);
echo("<hr>");

// In Short a line
var_dump(date("Y-m-d", strtotime($input_date)));