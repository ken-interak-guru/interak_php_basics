<?php

	// Operators for comparing
	// == !=
	// < >
	// <= >=

	$name = 'Ken';
	$age = 29;
	
	if ( $name != 'Ken' ) { // != can also be written <>
		echo 'TRUE';
	} else {
		echo 'FALSE';
	}
	
	echo '<br/>';
	
	if ( $age > 29 ) {
		echo 'TRUE';
	} else {
		echo 'FALSE';
	}

	echo '<br/>';

	if ( $age >= 29 ) {
		echo 'TRUE';
	} else {
		echo 'FALSE';
	}

	echo '<br/>';

	$age2 = 21;
	$status = false; // boolean variable
	
	if ( $age2 >= 21 ) {
		$status = true;
	}
	
	echo $status; // boolean echoes as 1 and 0

	echo '<br/>';
	
	if ( $status == true ) {
		echo 'Welcome in';
	} else if ( $status == false ) { // == false can be written != true
		echo 'Stay out, youngster';
	}
	
?>