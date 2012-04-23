<?php 

	include_once('resources/init.php');

 ?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
   
    <title> Category List </title>
</head>

<body>
	
	<h1>Category List</h1>
    
    <?php 
    
    	foreach (get_categories() as $category) {
    		// echo $category['name'], '<br />';
    		?>
    		
    		<p>
    			<a href="category.php?id=<?php echo $category['id'] ?>"><?php echo $category['name']; ?></a>
    			[
    			<a href="delete_category.php?id=<?php echo $category['id']; ?>">delete</a>
    			]
    		</p>
    		
    		<?php
    	}
    
     ?>
    
</body>
</html>