<?php

	$name = 'alex';
	
	if ($name == "alex") {
		echo "Hi, Alex";	
	} else {
		// Echo is not the best way to output html content
//		echo "
//			<form action='index.php' method='POST' />
//			You are not Alex, please type your name:<br />
//			<input type='text' name='name' />
//			<input type='submit' value='submit' />
//			</form>
//		";

	// Escape out of php mode to inject html
	// Html is only displayed if the php around indicates it should be
?>

		<form action='index.php' method='POST' />
		You are not Alex, please type your name:<br />
		<input type='text' name='name' />
		<input type='submit' value='submit' />
		</form>

<?php

	}

?>