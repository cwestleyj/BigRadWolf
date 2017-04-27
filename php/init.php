
<?php

	$dbhost = 'localhost';
	$dbuser = 'westleyj_master';
	$dbpwd  = 'there can only be one';
	$dbname = 'westleyj_bigRadWolf_DB';
	$link = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);

	if (!$link) {
		die('Connect Error with following problems: (' . mysqli_connect_errno() . ') '
				. mysqli_connect_error());
	}
