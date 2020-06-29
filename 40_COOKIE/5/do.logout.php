<?php
header("Cache-Control: must-revalidate");
setcookie("login", "", time()-1);
header("location:do.login.php");