<?php
	
	//Text Truncate in PHP
	 function text_truncate($str, $length, $ending) {

	if ($length == null) {
	  $length = 100;
	}
	if ($ending == null) {
	  $ending = '...';
	}
	if (strlen($str) > $length) {
		return substr($str, 0, $length).$ending;
	} else {
	  return $str;
	}
	};

	echo(text_truncate('Aliquam non convallis massa, ut pulvinar orci. Vivamus eu metus nunc. Nulla sed vestibulum tellus. Sed mattis auctor pharetra. Sed vehicula iaculis urna vitae viverra. Sed egestas est ornare tellus malesuada, faucibus elementum magna lacinia. Cras sagittis ligula at aliquet mattis. Vestibulum quis cursus.', '10', null));
?>