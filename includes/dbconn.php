<?php
	$user = 'root';
	$password = 'root';
	$db = 'gou';
	$host = 'localhost';
	$port = 8889;

	$dbconn = mysqli_connect($host, $user, $password, $db, $port);


	if (!$dbconn){
	    echo "Not connected to database";
	}else{
	    echo "Successfully connected";
	}
?>