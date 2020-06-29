<?php
//Cookie name and  values are case sensitive
//("string")name,value
/*Epoch, also known as Unix timestamps, is the number of seconds (not milliseconds!) that have elapsed since January 1, 1970 at 00:00:00 GMT (1970-01-01 00:00:00 GMT).*/
// Year(YYYY) Month(01 to 12) Date(01 to 31) Hours(00 to 23) Minutes(00 to 59) Seconds(00 to 59) TimeZone(Local and GMT)
// 1day->(24*60*60)

//echo time();
 
//Temporary Cookie

setcookie("name", "Shubham");

//Permanent Cookie
/*
$time = time() + (24*60*60); 
setcookie("name", "Shubham", $time);
*/


echo $_COOKIE["name"];

?>

<br><br><br>
<hr>
<pre>
<code>
//Temporary Cookie
/*
setcookie("name", "Shubham");
*/

//Permanent Cookie
/*
$time = time() + (24*60*60); 
setcookie("name", "Shubham", $time);
*/


echo $_COOKIE["name"];

</code>
</pre>