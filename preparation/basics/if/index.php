<?php
	
	$password = 'password';
	
	if ($password == 'ken') { // remember to compare, and not assign
		echo 'This is the correct password';
	}
	
	if ($password == 'password') {
		echo 'Password is password';
	}
	
	if ($password == 'ken') {
		echo 'This is the correct password';
	} else {
		echo 'This is the wrong password';
	}

	echo '<br />';
	
	$age = 19;
	
	if ( $age >= 21 ) {
		echo 'You\'re old enough to drink in USA and the UK';
	} else if ( $age >= 18 ) {
		echo 'You\'re old enough to drink in the UK';
	} else {
		echo 'You\'re not old enough to drink in USA or the UK';
	}
	
?>