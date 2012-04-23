<?php // Dummy program just for commenting purposes

	/* Comments are important for when handing over code to other developers
	 * Makes it easier to read code at a later time
	 * Also, multi line comment
	 */

	// Comment before code
	$num = 1;
	
	if (isset($_POST['name'])) { // Comment on end of line
		$name = htmlentities($_POST['name']);
		
		if (!empty($name) /* Comment in middle of line */) {

			$name_exp = explode(' ', $name );
			
			foreach ($name_exp as $name_part) {
				echo 'Part ' . $num . ' of name is ' . $name_part . '<br />';
				$num++;
			}
			
		} else {
			echo 'Please enter a name';
			/*
				Multi line comments don't need the star at start of each line
				That's all down to taste and preference
			*/
		}
		
	}

?>

<form action="index.php" method="POST">

<input type="text" name="name" />

</form>