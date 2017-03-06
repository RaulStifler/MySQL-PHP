<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
	require 'script/Con.php';
	$db = new DbConnection();
	$db->connect();
	if ($db->disconnect()) {
		echo "Se cerro";
	}
?>