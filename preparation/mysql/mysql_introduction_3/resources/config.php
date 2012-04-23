<?php

	$config['db_host'] = 'localhost';
	$config['db_user'] = 'root';
	$config['db_pass'] = 'root';
	$config['db_name'] = 'blog_preparation';
	
	foreach ($config as $key => $value) {
		define(strtoupper($key), $value);
		// define('DB_HOST', 'localhost');
		// DB_HOST is now localhost
	}

?>