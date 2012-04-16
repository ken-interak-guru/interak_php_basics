<?php

	// Useful for storing information for longer than session
	// Persists in browser when browser is closed (unless otherwise set up)
	// Useful for e.g. "Remember me"
	// Limited size available, so be careful
	
	// setcookie($name[, $value[, $expire=0[, $path[, $domain[, $secure=false[, $httponly=false]]]]]])
	// $expire is set in seconds
	$exp = time()+ 86400; // Lasts a day ( 24h * 60m * 60s )
	
	/*
	setcookie('name', 'Ken', $exp); // Uncommenting this after page has been reloaded
	*/
	
	// setcookie('age', 29, $exp);
	
	echo $_COOKIE['name'] . ' is ' . $_COOKIE['age'];
	
	?><br /><?php
	
	print_r($_COOKIE);
	
?>