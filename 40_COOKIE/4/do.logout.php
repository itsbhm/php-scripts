<?php

setcookie("login", "", time()-1);
header("location:do.login.php");