

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
<form method="GET" action="check.login.php">
    <pre>
    Username: <input type="text" name="uname">

    Password: <input type="text" name="upassword">

    <input type="checkbox" value="1" name="remember"> Keep me login

    <input type="submit" value="login" name="submit"> <input type="reset" value="reset">
    
    <?php
    if(ISSET($_REQUEST["err"])){
        echo "Invalid username or password";
    }
    ?>
    </pre>
</form>
</body>
</html>