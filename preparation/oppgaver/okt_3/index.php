<?php

	echo '<h1>oppg 1</h1>';
	$courses = array('Pizza', 'Pasta', 'Taco', 'Oven Roasted Salmon');

	echo '<br />';
	
	echo '<h1>oppg 2</h1>';
	echo $courses[3];
	// Oven Roasted Salmon
	
	echo '<br />';
	
	echo '<h1>oppg 3</h1>';
	foreach ($courses as $value) {
		echo $value . '<br />';
	}
	
	echo '<br />';
	
	echo '<h1>oppg 4</h1>';
	$dogs = array(
		array(
			'race' => 'Boston Terrier',
			'fur' => 'Grey',
			'name' => 'Fido',
			'age' => 3,
			'owner' => array(
				'name' => 'Ole',
				'age' => 43
			)
		),
		array(
			'race' => 'Golden Retriever',
			'fur' => 'Blonde',
			'name' => 'Steve',
			'age' => 6,
			'owner' => array(
				'name' => 'Nils',
				'age' => 31
			)
		),
		array(
			'race' => 'St. Bernhards',
			'fur' => 'Brown',
			'name' => 'Bolivar',
			'age' => 8,
			'owner' => array(
				'name' => 'Jan Erik',
				'age' => 71
			)
		)
	);	
	
	echo '<br />';

	echo '<h1>oppg 5</h1>';
	echo $dogs[1]['fur'];
	
	echo '<br />';
	
	echo '<h1>oppg 6</h1>';

	echo '<p><ul>';
	foreach ($dogs as $dog) {
		
		echo '<li>';
		echo 'Race: ' . $dog['race'] . '<br />';
		echo 'Fur: ' . $dog['fur'] . '<br />';
		echo 'Name: ' . $dog['name'] . '<br />';
		echo 'Age: ' . $dog['age'] . '<br />';
		echo 'Owner: ' . $dog['owner']['name'] . ' (' . $dog['owner']['age'] . ')';
		
		
		echo '</li>';
		
	}
	echo '</ul></p>';
	
?>