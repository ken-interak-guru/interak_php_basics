<?php

	include_once('resources/init.php');

	if( isset($_POST['title'], $_POST['contents']) ) {
		$title = htmlentities($_POST['title']);
		$contents = htmlentities($_POST['contents']);
		
		// Set up query as a variable
		$query = "INSERT INTO `posts` SET
					`title` = '{$title}',
					`contents` = '{$contents}'";
		
		// Postponing query execution			
		//mysql_query($query);
		
		// Print out the query in plaintext
		echo $query;
		
		// Now insert DELETE FROM query into contents field
		// Dashes tells MySQL to stop executing code after this point
		// Starting with a quote ends the current SQL string
		// '; DELETE FROM `posts`; --
		// title is now set to '\'; DELETE FROM `posts`; --'
		// ( Note the slash escaping the single quote )
		
		// To ensure it is done on older PHP versions:
		// $title = mysql_real_escape_string(htmlentities($_POST['title']));
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert post</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>

<body>

	<div id="wrapper">
	
		<form method="post" action="">
		
			<p>
				<label for="title">Title</label>
				<input type="text" name="title" id="title" />
			</p>
		
			<p>
				<label for="contents">Post</label>
				<textarea name="contents" id="contents" rows="15" cols="50"></textarea>
			</p>
			
			<p>
				<input type="submit" name="submit" value="submit" />
			</p>

		</form>
	
	</div>

</body>
</html>