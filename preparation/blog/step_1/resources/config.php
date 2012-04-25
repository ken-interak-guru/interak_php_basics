<?php

	$config['db_host'] = 'localhost';
	$config['db_user'] = 'root';
	$config['db_pass'] = 'root';
	$config['db_name'] = 'blog';
//	$config['db_user'] = 'ckpaulse_interak';
//	$config['db_pass'] = 'samhandling';
//	$config['db_name'] = 'ckpaulse_blog';
	
	foreach ($config as $key => $value) {
		define( strtoupper($key), $value );
	}

	// DB_HOST == 'localhost'

?>