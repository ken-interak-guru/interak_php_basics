<?php 

	// Switch statement
	// Useful when possible outcomes are more than two or three
	
	$num = 5;
	
	switch ($num) { // Could also be used to compare strings
	
		case 2: // e.g. case 'two'
			echo 'number is two';
			break;
		case 5:
			echo 'number is five';
			break;
		case 10:
			echo 'number is ten';
			break;
		default:
			echo 'number is unmatched';
			break;

	}

	echo '<br />';

	$num2 = 'nine';
	
	switch ($num2) {

		case 'ten':
			$num2 = 10;
			break;
		case 'nine':
			$num2 = 9;
			break;
		default:
			$num2 = 0;
			echo 'number not recognized ';

	}	

	echo $num2;

	echo '<br />';
	
	$name = 'Ken';
	
	switch ($name) {

		case 'Ken':
		
		case 'Truls':
		
		case 'Steinar':
			echo 'Hello there!';
			break;
		
		default:
			echo 'No way';
			break;
	}
	
?>