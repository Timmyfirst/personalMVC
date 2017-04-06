<?php
	require('autoloader.php');

	$adresse = $_SERVER["REQUEST_URI"];
	$pages= explode('/',$adresse);
	$page=$pages[3];

?>