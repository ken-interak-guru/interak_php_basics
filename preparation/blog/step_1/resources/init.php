<?php

	include_once('config.php');
	
	mysql_connect(DB_HOST, DB_USER, DB_PASS);
	// DRY - Don't Repeat Yourself
	
	mysql_select_db(DB_NAME);

	include_once('func/blog.php');

?>