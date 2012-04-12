<?php

	$namelist = 'Ken (29), Truls (25), Frank (40)'; // Just a string
	echo $namelist;
	
	echo '<br />';
	
	$names = array('Ken', 'Truls', 'Frank');
	echo $names; // Only prints the type
	
	echo '<br />';
	
	print_r($names); // Inspects the array with keys and values
	
	echo '<br />';
	
	echo $names[0]; // Prints value at key index 0
	
	echo '<br />';
	
	// echo $names[5]; // Cannot retrieve value with index outside array

	echo '<br />';
	
	$names2 = array('Ken' => 29, 'Truls' => 25, 'Frank' => 40);
	
	print_r($names2); // Names are now keys and ages are values
	
	echo '<br />';
	
	echo $names2['Ken']; // Prints value with key 'Ken'

	echo '<br />';
	
	$names2['Arne'] = 36; // Adds a key with a value
	$names2['Ken'] = 12; // Overwrites if exists
	$names2['Lisa'] = $names2['Truls'];
	
	print_r($names2);

?>