<?php

//	function name() { // Function without argument
//		echo 'Ken';
//	}
//
//	name();
	
//	function name($name) { // Function with argument
//		echo 'My name is ' . $name;
//	}
//
//	name('Johan');
//	
//	name('Ken');

//	function name($name) {
//		return 'My name is ' . $name;
//	}
//	
//	$return_value = name('Ken');
//	
//	echo $return_value;
//
//	echo name('Ken');

	function name($name, $age) {
		return 'My name is ' . $name . ' and I am ' . $age . ' years old.';
	}
	
	// echo name('Ken'); // Error, wrong number of arguments

	echo name('Ken', 29);

	function add($num1, $num2) {
		$result = $num1 + $num2;
		return $result;
	}
	
	echo add(40, 12);

?>