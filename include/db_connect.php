   
<?php

	include("config.php");
	$db = new mysqli($server, $username, $password, $dbname);
	if ($db->connect_errno) {
   	echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
	}
	$db->query("SET NAMES 'utf8'");
