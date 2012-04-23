<?php 
	
	include_once('resources/init.php');
	
	// Query structured in syntax.sl
	$query = mysql_query("SELECT `id`, `title`, `contents` FROM `posts`");
	
	// Count number of posts
	$query = mysql_query("SELECT COUNT(1) FROM `posts`");
	$count = mysql_result($query, 0);
	// 0 here means get first retrieved column ( COUNT(1) )
	
	// echo 'number of total posts: ' . $count;
	
	// DISTINCT does not retrieve duplicate entries by given column
	$query = mysql_query("SELECT DISTINCT `title` FROM `posts`");

	// ORDER BY
	// ASC / DESC
	// LIMIT
	$query = mysql_query("SELECT `id`, `title`, `contents` FROM `posts` ORDER BY `id` DESC LIMIT 2");
	// or ORDER BY `id` LIMIT 1, 3
	// Selecting only first and third in result set
	
	// WHERE
	$query = mysql_query("SELECT `id`, `title`, `contents` FROM `posts` WHERE `id` = 3 OR `title` = '123'");
	// AND / OR used to increase or reduce scope
	
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