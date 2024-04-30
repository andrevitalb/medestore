<?php
	$hostname = "localhost";
	$username = "intracel_mluser";
	$password = "y3ll0wp4thyellow";
	$databaseName = "intracel_controlContacto";

	$connect = mysqli_connect($hostname, $username, $password, $databaseName);
	mysqli_set_charset($connect, "utf8");
	date_default_timezone_set('America/Mexico_City');
?>