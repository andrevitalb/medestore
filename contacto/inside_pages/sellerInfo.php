<?php
	$hostname = "localhost";
    $username = "intracel_mluser";
    $password = "y3ll0wp4thyellow";
    $databaseName = "intracel_controlContacto";

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    mysqli_set_charset ($connect, "utf8");

    $custom = "Select contacto_num from contadores where contacto_nombre = 'cdmx'";
    $cust = mysqli_query($connect, $custom);
    $props = mysqli_fetch_array($cust);
    $cdmx = "cdmx-".$props[0];

    $custom = "Select contacto_num from contadores where contacto_nombre = 'edmx'";
    $cust = mysqli_query($connect, $custom);
    $props = mysqli_fetch_array($cust);
    $edmx = "edmx-".$props[0];

	$contactoEquipos = array(
		0 => '5214491111637',
		1 => '5214492255144',
		2 => '5214494782400',
		3 => '5215551054351'
	);

	$contactoConsumibles = array(
		0 => '5214491923991',
		1 => '5216643270533',
		2 => '5216241545589',
		3 => '5216143617266',
		4 => '5218120021246',
		5 => '5213335960295',
		6 => '5213318956852',
		7 => '5216621030924',
		8 => '5214494782400',
		"cdmx-1" => '5215551054351',
		"cdmx-2" => '5215533357545',
		"edmx-1" => '5215551054351',
		"edmx-2" => '5215533357545'
	);


 	if(isset($_POST['stateSellerWA'])){
		$st = $_POST['stateSellerWA'];
		if($st == 'Ciudad de México') {
			$queryUpdate = "Select contacto_num from contadores where contacto_nombre = 'cdmx'";
			$resultUpdate = mysqli_query($connect, $queryUpdate);
			$rUpdate = mysqli_fetch_array($resultUpdate);
			$cdmx = "cdmx-".$rUpdate[0];

			if($rUpdate[0] == 1) $change = 2;
			else $change = 1;

			$queryUpdate = "Update contadores set contacto_num = $change where contacto_nombre = 'cdmx'";
			$resultUpdate = mysqli_query($connect, $queryUpdate);
		}
		else if($st == 'Estado de México') {
			$queryUpdate = "Select contacto_num from contadores where contacto_nombre = 'edmx'";
			$resultUpdate = mysqli_query($connect, $queryUpdate);
			$rUpdate = mysqli_fetch_array($resultUpdate);
			$edmx = "edmx-".$rUpdate[0];

			if($rUpdate[0] == 1) $change = 2;
			else $change = 1;

			$queryUpdate = "Update contadores set contacto_num = $change where contacto_nombre = 'edmx'";
			$resultUpdate = mysqli_query($connect, $queryUpdate);
		}
		echo '<meta http-equiv="refresh" content="0;URL=https://medestore.mx/monalisa"/>';
	}
?>