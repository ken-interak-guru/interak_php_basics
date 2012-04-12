<?php

	// $names = array('Alex' => 21, 'Billy' => 16, 'Dale' => 49); // Single dimensional array	
	// We want to store more information

	$names = array( // Replace ages with new values
		'Alex' => array('Age' => 21, 'Hair' => 'Blonde', 'Food' => array('Pizza', 'Pasta')), // Yet another array inside this one, three dimensional array
		'Billy' => array('Age' => 16, 'Hair' => 'Brown'),
		'Dale' => array('Age' => 49, 'Hair' => 'Blond')
		);

	echo $names['Dale']['Age'];

	echo '<br />';
		
	echo $names['Dale']['Hair'];
	
	echo '<br />';

	print_r($names['Alex']['Food']); // Inspects the inner array
	
	echo '<br />';
	
	echo $names['Alex']['Food'][0];
	
?>