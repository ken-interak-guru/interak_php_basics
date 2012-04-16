<?php

	// Allow indeterminate amount of arguments into a function
	
	//	function add($num1, $num2) { // Only accepts a set number of arguments
	//		$total = $num1 + $num2;
	//		return $total;
	//	}
	//	
	//	echo add(15, 20);

	//	function add() {
	//		$total = 0;
			// print_r(func_get_args()); // get all arguments passed
	//		
	//		foreach (func_get_args() as $value) { // loop through arguments
	//			$total += (int)$value; // Juggle type to int
	//		}
	//		
	//		return $total;
	//	}
	//	
	//	echo add(5, 10, 152, 12);

	function append($initial) {
		$result = func_get_arg(0); // Sets up variable with value of first argument
		
		foreach (func_get_args() as $key => $value) { // Then loops through the arguments
			if ($key >= 1) { // Except the first one
				$result .= ' ' . $value;
			}
		}
		
		return $result;
	}
	
	echo append('Ken', 'Paulsen', 'Stevenson', 'Monkey');
?>