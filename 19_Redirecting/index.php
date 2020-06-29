<?php ob_start(); ?> 
<!-- Sometimes it will show error link header already send then ob_start(); helps -->

<!doctype>
<html>
<head>
<title>Page Redirecting in PHP</title>
</head>
<body>

<?php

header("Location: http://itsmeshubham.com/");
//header("refresh:5; url= http://itsmeshubham.com/");

?>

</body>
</html>