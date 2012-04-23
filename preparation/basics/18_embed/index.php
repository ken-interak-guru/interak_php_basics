<?php 

	if (isset($_POST['name'])) {
		// All variables are available throughout the entire document
		$name = $_POST['name'];
		if (!empty($name)) {
			$sentence = $name . ' woke up and danced like a monkey';
		} else {
			echo 'Please enter a name';
		}
	}

?>

<html>
	<head>
	</head>
	
	<body>
	
		<strong>
			<?php 
				
				// echo 'Ken';
				
			?>
		</strong>
		
		<strong>
			<?php // echo 'Truls'; ?>
		</strong>
		
		<form action="index.php" method="POST">
		
			Type your name
			<input type="text" name="name" value="<?php echo $name; ?>" />
			<!-- can use variables from php on top inline later in document -->
			<input type="submit" value="submit" />
			
		
		</form>
	
		<br />
		<textarea rows="10" cols="25"><?php echo $sentence; ?></textarea>
	
	</body>
</html>