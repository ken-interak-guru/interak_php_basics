<form action="index.php" method="POST">

	<p>
		Please enter your password
	</p>
	
	<p>
		<label for="password" />Password
			<input type="password" name="password" /> <!-- remember type "password" -->
		</label>
	</p>
	
	<p>
		<input type="submit" value="submit" />
	</p>

</form>

<?php

	// Receives parameters without showing them in address field

	$password = 'password'; // The correct password
	
//	if (isset($_POST['password'])) {
//		// Validates isset
//		echo "submitted"; // Confirm that parameter is being set	
//	}

//	if(isset($_POST['password']) && !empty($_POST['password'])) {
		// Check both set and filled
//		echo 'submitted with content';
//	} else {
//		
//	}

	if(isset($_POST['password']) && !empty($_POST['password'])) {
		$password_post = $_POST['password']; // Assign to variable to make easier to write
		if($password_post == $password) {
			echo 'Correct password';
		} else {
			echo 'Incorrect password!';
		}
	} else {
		
	}
	

?>