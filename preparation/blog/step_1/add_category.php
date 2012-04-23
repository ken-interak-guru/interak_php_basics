<?php 

	include_once('resources/init.php');

	if (isset($_POST['name'])) {
		$name = trim($_POST['name']);
		
		if (empty($name)) {
			$error = 'Category name is required';
		} else if (category_exists('name', $name)) {
			$error = 'That category name already exists';
		} else if ( strlen($name) > 24 ) {
			$error = 'That category name is too long (24 character limit)';
		}
	
		if (!isset($error)) {
			add_category($name);
			
			header("Location: add_post.php");
			die();
		}

	}
	
 ?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <title> Add a Category </title>
</head>

<body>
    <h1> Add a Category </h1>
    
    <?php 
    
    	if (isset($error)) {
    		echo "<p>{$error}</p>\n";
    	}
    
     ?>
    
    <form action="" method="post">
        <div>
            <label for="name"> Name </label>
            <input type="text" name="name" value="">
        </div>
        <div>
            <input type="submit" value="Add Category">
        </div>
    </form>
</body>
</html>