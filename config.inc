<?php 
	$hostname="localhost";
	$dbname="login";
	$username="root";
	$password="knock123";
	// $hostname="mysql1.000webhost.com";
	// $dbname="a9939826_user";
	// $username="a9939826_shubham";
	// $password="knock123";

	$link_db=mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');
	// Select the database
	mysql_select_db($dbname)	 or DIE('Database name is not available!');

?>