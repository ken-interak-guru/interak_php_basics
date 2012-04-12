<?php

	// Ensure block is run at least once
	
	$num = 1;

	do {
		echo 'This';
	} while ($num != 1); // Will print This only once
	
	while ($num != 1) { // Will never run
		echo 'That';
	}
	
	echo '<br />';
	
	do {
		echo 'This ' . $num . '<br />';
		$num++;
	} while ($num <= 10);
	
?>