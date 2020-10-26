<?php



	var_dump(gethostname());


	echo "<hr>";

	
	var_dump(php_uname('n'));


	echo "<hr>";


	var_dump($_SERVER['DOCUMENT_ROOT']);


	echo "<hr>";


	var_dump($_SERVER['SERVER_NAME']);


	echo "<hr>";


	var_dump($_SERVER['HTTP_HOST']);


	echo "<hr>";


	var_dump($_SERVER['SERVER_PROTOCOL']);


	echo "<hr>";


	var_dump($_SERVER['PHP_SELF']);


	echo "<hr>";

	$isSecure = false;
	if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
	$isSecure = true;
	}
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
	$isSecure = true;
	}

	$REQUEST_PROTOCOL = $isSecure ? 'https' : 'http';

	var_dump($REQUEST_PROTOCOL);

	echo "<hr>";

	$baseURL = $REQUEST_PROTOCOL . '://' . $_SERVER['HTTP_HOST'] .  '/';

	var_dump($baseURL);
?>
