<?php

	// GET parameters
	// http://localhost:8888/preparation/basics/get/index.php?name=Ken&age=21
	// Passes variables through GET (not POST)
	// $_GET['name']
	// $_GET['age']

	// echo 'I am ' . $_GET['name'] . ' and I am ' . $_GET['age'] . ' years old.';
	
	
	

?>

<form action="index.php" method="GET">
<!-- action corresponds to php file, method corresponds to variable retrieval method -->

	<p>
		<label for="name">Name</label>
		<input type="text" name="name" />
	</p>
	
	<p>
		<label for="age">Age</label>
		<input type="text" name="age" />
	</p>
		
	<input type="submit" value="submit" />

</form>

<?php

	$name = $_GET['name'];
	$age = $_GET['age'];
	
	// echo 'I am ' . $name . ' and I am ' . $age . ' years old.';
	// Will print out even if name or name is not present
	
	//	if (isset($name) && isset($age) && !empty($name) && !empty($age)) {
			// check if variable is set, and check if variable is empty or blank
	//		echo 'I am ' . $name . ' and I am ' . $age . ' years old.';
	//	} else {
	//		echo 'Please type something';
	//	}

	if (isset($name) && isset($age)) {
		if (!empty($name) && !empty($age)) {
			echo 'I am ' . $name . ' and I am ' . $age . ' years old.';
		} else {
			echo 'Please enter something';
		}
	}

	// Get works for smaller amount of data where visibility is not an issue
	
?>