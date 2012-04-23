<?php

	// Iterate through elements in an array
	
	echo '<h1>Listing all elements in array</h1>';
	
	$names = array('Alex', 'Billy', 'Dale');
	
	foreach ($names as $value) { // Loops through each value in the array
		echo $value . '<br />';
	}

	echo '<h1>Indexing values</h1>';

	$num = 1; // Adding a counter for each value
	
	foreach ($names as $value) {
		echo $value . ' - ' . $num . '<br />';
		$num++;
	}
	
	echo '<h1>Using array index as key</h1>';
	
	foreach ($names as $key => $value) { // Adds a key to each value using its index in the array
		echo $key . ": " . $value . '<br />';
	}

	echo '<h1>Using own keys in array</h1>';

	$names = array('Alex'=>21, 'Billy'=>16, 'Dale'=>49); // Set up keys and values instead of using the array index

	foreach ($names as $key => $value) { // Using keys and values given in the array
		echo $key . ": " . $value . '<br />';
	}

	echo '<h1>No more Alex</h1>';

	foreach ($names as $key => $value) { // Using keys and values given in the array
		if ($key != 'Alex') {
			echo $key . ": " . $value . '<br />';
		}
	}
	
?>