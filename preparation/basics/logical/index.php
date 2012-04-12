<?php

	// 1. enter number
	// 2. upper limit 100
	// 3. lower limit 1
	// 4. react to input according to rules
	
	// Logical operators
	// && || !
	
	$number = 50;
	
	if ( $number >= 1 && $number <= 100 ) {
		echo 'All is good';
	} else if ( $number < 1 ) {
		echo 'Negative numbers are not allowed';
	} else if ( $number > 100 ) {
		echo 'Number is over 100';
	}
	
	echo '<br />';
	
	$name = 'Ken';
	
	if ( $name == 'Ken' || $name == 'Truls' ) {
		echo 'Hello there, ' . $name;
	} else {
		echo 'Go away, ' . $name;
	}

	echo '<br />';
	
	$name2 = 'Ken';
	$age = 50;
	
	if ( $name == 'Ken' && ( $age == 29 || $age == 50 ) ) { // brackets around tests that are connected for the logical comparisons
		echo 'Hello there, ' . $name;
	} else {
		echo 'Go away, ' . $name;
	}

?>