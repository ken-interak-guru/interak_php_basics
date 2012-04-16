<?php

	if (isset($_GET['agree']) && $_GET['agree'] == "true") { // value can be overridden with your own name
		// Also, change form to POST to avoid sending the parameter
		echo 'Agreed!';
	} else {
		echo 'You must agree!';
	}

?>