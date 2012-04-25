<?php

	// Printing images with details in $_FILES array
	// This is a multidimensional array
	//	if (!empty($_FILES)) {
	//		print_r($_FILES);
	//		
	//	}
	
	function allowed_ext() {
		$allowed_ext = array('jpg', 'jpeg', 'png', 'gif');
		return $allowed_ext;
	}
	
	// Has images been inserted into array?
	if (isset($_FILES['image'])) {
		
		// List errors in images
		$errors = array();
		
		// List of allowed file extensions
		// $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');
		// Moving this into a function when listing images afterwards
		
		// Retrieve file name from image
		$file_name = $_FILES['image']['name'];

		// Extension of image file
		// Explode file name by '.' into an array
		// $file_ext = explode('.', $file_name);
		
		// Then select last element in array
		// $file_ext = end(explode('.', $file_name));
		
		// Then downcase the extension to match the $allowed_ext array
		$file_ext = strtolower(end(explode('.', $file_name)));

		// Check what is pulled as filename
		// Test both with '.jpg' and '.JPG'
		// print_r($file_ext);

		// Size of image file
		$file_size = $_FILES['image']['size'];

		// File temporary location
		$file_tmp = $_FILES['image']['tmp_name'];
		
		// Check if $file_ext is not in $allowed_ext array
		if ( !in_array($file_ext, allowed_ext()) ) { // in_array() === false
			// Adding a message to the $errors array
			$errors[] = 'Extension not allowed';
		}
		
		// Now test with 'test.bmp'
		
		// Test size against 2MB (in bytes)
		if ( $file_size > 2097152 ) {
			$errors[] = 'File size must be less than 2MB';
		}
		
		// Now test with both 'cat_in_bag.jpg' and 'test.bmp'
		// allowing both errors to be produced
		// print_r($errors);
		
		// Validate no errors have occured
		if (empty($errors)) {
			// Move uploaded file to 'images' folder
			// move_uploaded_file($file_tmp, 'images/' . $file_name);
			
			// Validate that upload and file move worked
			if (move_uploaded_file($file_tmp, 'images/' . $file_name)) {
				echo 'File uploaded';
			}
		} else {
			// Print errors
			foreach ($errors as $error) {
				echo $error, '<br />';
			}
		}
	}

?>

<!DOCTYPE html>
<html>

<head></head>

<body>

	<form method="POST" action="" enctype="multipart/form-data">
	
		<p>
			<input type="file" name="image" />
			<input type="submit" value="upload" />
		</p>
	
	</form>
	
	<div id="images">
	
		<?php 
		
			// Loop through images and display them
		
			$image_path = "images/";
			$files = glob($image_path . "*.*");

			// Remember to implement allowed_ext() function now
			
			// Validate that any files exist in the directory
			if (count($files) > 0) {

				// Loop through the files
				foreach ($files as $file) {
					
					// Get file extension
					$f_x = strtolower(end(explode('.', $file)));
					
					// Validate that it is an image
					if (in_array($f_x, allowed_ext())) {
					
						// Display the image
						// (Inline width limiting to not take whole screen)
						echo '<img src="' . $file . '" width=200 />';
					}
				}
			}			
		
		 ?>
	
	</div>

</body>

</html>