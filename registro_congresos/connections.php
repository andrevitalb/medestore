<?php 
	$hostname = "localhost";
    $username = "intracel_mluser";
    $password = "y3ll0wp4thyellow";
    $databaseName = "intracel_eventos";
    $databaseName2 = "intracel_controlContacto";

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    $connect2 = mysqli_connect($hostname, $username, $password, $databaseName2);
?>