<?php 
	$host = 'localhost';
	$database_name = 'church';
	$username = 'root';
	$password = '';


	$db = new mysqli($host, $username, $password, $database_name);

	if ($db -> connect_errno){
		echo 'Connection Error'.$db -> connect_error .' .';
		die();
	}
	$db->set_charset("utf8mb4");

	$con = $db;
?>