<?php
require_once 'core/app.php';
require_once 'core/controller.php';

//define('ASSET_ROOT','http://localhost:9090/MVC/public');
define('ASSET_ROOT',
	'http://'. $_SERVER['HTTP_HOST'].
	str_replace($_SERVER['DOCUMENT_ROOT'],'',
		str_replace('\\', '/', dirname(__dir__).'/public')
	)
);

//echo $_SERVER['DOCUMENT_ROOT'];
//echo dirname(__dir__);