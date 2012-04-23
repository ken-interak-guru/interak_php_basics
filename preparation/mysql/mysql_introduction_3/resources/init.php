<?php

	include_once('config.php');
	
	mysql_connect(DB_HOST, DB_USER, DB_PASS); // Select database server, user and pass
	mysql_select_db(DB_NAME); // Select which database to open

?>