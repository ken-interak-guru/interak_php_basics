<?php

	// alphanumeric
	// cannot start with number
	$name = 'Ken'; // String, include quotes
	$age = 21; // Number, no quotes needed. Float number also allowed outisde of quotes
	
	echo 'My name is name and I am age years old.'; // No variabled used
	
	echo '<br />';

	echo 'My name is ' . $name . ' and I am ' . $age . ' years old.'; // use dot to concatenate strings and variables

	echo '<br />';

	echo "My name is $name and I am $age years old."; // Double quotes interpret included variables

	echo '<br />';

	echo "My name is $name and I am $age years old. <input type=\"text\" />"; // Double quotes must be escaped inside double quotes
	
	echo '<br />';
	
	echo 'My name is ' . $name . ' and I am ' . $age . ' years old. <input type="text">'; // Double quotes inside single quotes is ok

	echo '<br />';

	echo "My name is $name and I am $age years old. <input type='text' />"; // Single quotes inside double quotes is also ok

?>