<?php

	session_start();
	// Not including this will incur error message (if errors are displayed)
	// Notice: Undefined variable: _SESSION in /Applications/MAMP/htdocs/preparation/basics/sessions/new.php on line 3

	echo $_SESSION['name'];

?>