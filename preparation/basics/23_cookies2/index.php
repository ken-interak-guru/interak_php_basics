<?php

	$exp = time() + 86400;
	
	//setcookie('name', 'Ken', $exp);
	//setcookie('age', 29, $exp);

	$exp_unset = time() - 86400; // Set expiry time in past to have cookie as already expired

	//setcookie('name', '', $exp_unset);

	if (isset($_COOKIE['name'])) {
		echo 'Cookie is set';
	} else {
		echo 'Cookie is not set';
	}

?>