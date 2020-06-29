<!doctype>
<html>
<head>
<title>GET CLIENT IP in PHP</title>
</head>
<body>
<?php

// Get User IP
function get_client_ip() {
	 $ipaddress = '';
	 if (isset($_SERVER['HTTP_CLIENT_IP'])) //Router
			 $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	 else if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) //Proxy
			 $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	 else if(isset($_SERVER['HTTP_X_FORWARDED'])) //for_this
			 $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	 else if(isset($_SERVER['HTTP_FORWARDED_FOR'])) //for_this
			 $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	 else if(isset($_SERVER['HTTP_FORWARDED'])) //for_this
			 $ipaddress = $_SERVER['HTTP_FORWARDED'];
	 else if(isset($_SERVER['REMOTE_ADDR'])) //Direct
			 $ipaddress = $_SERVER['REMOTE_ADDR'];
	 else
			 $ipaddress = 'UNKNOWN';

	 return $ipaddress;
}


// Get user IP
$user_ip=get_client_ip();

echo $user_ip;
?>
</body>
</html>