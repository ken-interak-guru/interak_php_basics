<?php 
	
	include_once('resources/init.php');
	
	// Query structured in syntax.sl
	$query = mysql_query("SELECT `id`, `title`, `contents` FROM `posts`");
	
	// Store result in array
	// $row = mysql_fetch_assoc($query);
	// Allows for access to values in $row variable
	// $row['title']
	
	// loop through results
	while ( $row = mysql_fetch_assoc($query) ) {
		?>
	
		<h2>
			<a href="post.php?id=<?php echo $row['id']; ?>">
				<?php echo $row['title']; ?>
			</a>
		</h2>
		
		<p>
			<?php echo $row['contents']; ?>
		</p>
	
		<?php
	}

 ?>

<!DOCTYPE html>
<html>

<head>
	<title>Just a title showing the posts</title>
</head>

<body>
	<div id="wrapper">
	
	</div>
</body>

</html>