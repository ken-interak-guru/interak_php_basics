<?php

	$config['db_host'] = 'localhost';
	$config['db_user'] = 'root';
	$config['db_pass'] = 'root';
	$config['db_name'] = 'blog';
	$config['site_name'] = 'My Super Special Blog'; // Just for fun
	
	foreach ($config as $key => $value) {
		define( strtoupper($key), $value );
	}

	// DB_HOST == 'localhost'

?>