<?php

	// Only live while page has been recently accessed / visited
	// Gone on browser close
	
	session_start(); // Always required on top of code using sessions
	
	// $_SESSION['name'] = 'Ken'; // Run once then comment out

	echo $_SESSION['name']; // after first run, uncomment and run again
	
	// unset($_SESSION['name']); // Removing given variable in session
	
	// session_destroy(); // Destroys entire session
	
?>