<?php
	setcookie('username', 'Frank', time() + (86400 * 30)); # to change it

	// Delete Cookie
	setcookie('username', 'Frank', time() - 3600); # set the time that already passed

	if(count($_COOKIE) > 0){
		echo 'There are '.count($_COOKIE). ' cookies saved<br>';
	} else {
		echo 'There are no cookies saved<br>';
	}

	if(isset($_COOKIE['username'])){
		echo 'User '. $_COOKIE['username'] . ' is set<br>';
	} else {
		echo 'User is not set';
	}