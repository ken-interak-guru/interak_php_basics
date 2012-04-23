<?php

	include_once('resources/init.php');

	if( isset($_POST['title'], $_POST['contents']) ) {
	
		// Data inside here is added after skeleton around
		
		// mysql_query("");
		// explanation of MySQL structure in syntax.sql
		
		
		// Copy in MySQL query from syntax.sql
		// Change values to $_POST contents
		
		//mysql_query("INSERT INTO `posts` SET
		//				`title` = '{$_POST['title']}',
		//				`contents` = '{$_POST['contents']}'");

		// Above version does not take into consideration malicious content ( XSS - Cross Side Scripting )
		// Demonstrate with script exploit
		// contents: <script type="text/javascript">alert("Hello");</script>
		// Uncomment "EXPLOIT DEMO"
		
				
		// htmlentities can be used to strip malicious html contents
		// < becomes &lt;
		$title = htmlentities($_POST['title']);
		$contents = htmlentities($_POST['contents']);
		
		mysql_query("INSERT INTO `posts` SET
						`title` = '{$title}',
						`contents` = '{$contents}'");
		
	
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert post</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>

<body>
	<?php  
	// EXPLOIT DEMO
//		
//		$q = mysql_query("SELECT `contents` FROM `posts` WHERE `id` = 13");
		// Set proper id here
//		$r = mysql_fetch_assoc($q);
//	
//		echo $r['contents'];
//		
	?>

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