<?php

	$num1 = 10;
	$num2 = 2;
	
	// Available arithemic operators
	// + - * /
	// % ++ --
	
	$result = $num1 + $num2;

	// echo $result = $num1 * $num2; // Possible but not as clean

	$result = $num1 + $num2 / 2; // divides before adding

	$result = ($num1 + $num2) / 2; // brackets isolate separate operations to be done first
	
	echo $result;

	echo '<br/>';

	$num3 = 1;
	
	$num3++; // $num3 = $num3 + 1;
	
	echo $num3;
	
	echo '<br/>';

	$num3--;	
	
	echo $num3;

?>