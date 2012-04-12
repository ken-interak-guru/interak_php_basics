<?php

	echo '10<br />9<br />8<br />7<br />6<br />5<br />4<br />3<br />2<br />1<br />0'; // Desired output

	echo '<br /><br />';

	// Used to loop through a set of data
	
	$num = 10;
	
	while ($num >= 0) { // Repeat contents of curly brackets as long as condition equals true
		echo $num . "<br />";
		$num--;
	}

	echo '<br /><br />';

	$num = 10;
	
	while ($num >= 0): // Alternative while syntax (remember endwhile)
		echo $num . "<br />";
		$num--;
	endwhile;

?>