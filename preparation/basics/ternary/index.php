<?php

	$age = 18;
	
	$old_enough = false;
	
	if ($age >= 18) {
		$old_enough = true;
	}
	
	if ($old_enough === true) { // or just if($old_enough)
		echo 'Old enough';
	} else {
		echo 'Not old enough';
	}

?>

<br />

<h1>Inlined</h1>

<?php

	// Ternary operator ( condition ) ? true_action : false_action;

	$old_enough = ( $age >= 18 ) ? true : false;
	
	echo ( $old_enough ? 'Old enough' : 'Not old enough' ); // or ( $old_enough === true )

?>