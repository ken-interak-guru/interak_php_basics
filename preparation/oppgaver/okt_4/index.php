<?php

	echo '<h1>oppg 1</h1>';
	function writeHello() {
		echo "Heisann alle sammen";
	}
	
	writeHello();

	echo '<br />';

	echo '<h1>oppg 2</h1>';
	function printNames($name1, $name2) {
		echo $name1 . '<br />' . $name2;
	}
	
	printNames("Ken", "Johan");

	echo '<br />';

	echo '<h1>oppg 3</h1>';
	function multiply($num1, $num2) {
		$result = $num1 * $num2;
		return $result;
	}
	
	echo multiply(5, 6);

	echo '<br />';

	echo '<h1>oppg 4</h1>';
	function quadMultiply($num1, $num2, $num3, $num4) {
		$result = multiply(
			multiply($num1, $num2),
			multiply($num3, $num4)
			);
		return $result;
	}
	
	echo quadMultiply(5, 2, 6, 3);

	echo '<br />';

	echo '<h1>oppg 5</h1>';
	function tripleAdd($num1, $num2, $num3) {
		if (gettype($num1) != 'integer' || gettype($num2) != 'integer' || gettype($num3) != 'integer') {
			return 'Denne funksjonen tar kun i mot heltall';
		}
		
		return $num1 + $num2 + $num3;
	}
	
	echo tripleAdd(5, 4, 2);

?>