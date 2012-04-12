<?php

	for ($i = 0; $i < 10; $i++) { // Counter with initial value; condition ; increment
		echo 'This '.$i.'<br />';
	}

	for ($i = 10; $i >= 1; $i--) { // Or decrement
		echo 'This '.$i.'<br />';
	}
	
	$count = 200; // Use external condition value
	
	for ($i = 10; $i <= $count; $i=$i+10) { // $i=$i+10 can be written $i+=10
		echo $i . '<br />';
	}

?>