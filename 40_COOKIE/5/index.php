<?php

  header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
  header("Pragma: no-cache");
  header("Expires: Sat, 18 Jan 1998 00:00:00 GMT");

if(!ISSET($_COOKIE["login"])){
    header("location:do.login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Login Successfully With Permanent Cookie</h1>
    <center><a href="do.logout.php">logout</a></center>
</body>
</html>