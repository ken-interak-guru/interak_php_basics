<?php
	
	if (isset($_GET['language'])) { // POST data removes parameters from URL
		// If check is removed, then undefined index: language is raised
		echo $_GET['language'] . ' is your favourite language';
	}

?>