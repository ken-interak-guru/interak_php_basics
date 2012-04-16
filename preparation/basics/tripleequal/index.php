<?php

	// = assign
	// == compare values
	// === compare entire objects

	$num = 10;
	$num2 = '10';
	
//	if ($num == $num2) { // same value even if string and int
//		echo 'Equal';
//	} else {
//		echo 'Not equal';
//	}
	
	if ($num === $num2) { // returns false since string != int
		echo 'Equal in value and type';
	} else {
		echo 'Not equal in either value or type';
	}
	
?>

<h1>Header</h1>

<?php 
	
	$num3 = '10';
	
	if ($num === (int)$num3) { // returns true after a type juggle (not yet covered)
		echo 'Equal in value and type';
	} else {
		echo 'Not equal in either value or type';
	}
	

?>