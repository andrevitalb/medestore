<?php
    $hostname = "localhost";
    $username = "yellowus_mluser";
    $password = "y3ll0wp4thyellow";
    $databaseName = "yellowus_monalisa";

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);

	if (isset($_POST["export-users"])){
		$queryUsers = "Select usuario_mail as 'Correo', usuario_nombre as 'Nombre Completo', usuario_telefono as 'Telefono', usuario_especialidad as 'Especialidad', usuario_ciudad as 'Ciudad', usuario_estado as 'Estado' from usuarios order by usuario_nombre";
    	$resultUsers = mysqli_query($connect, $queryUsers);
		$filename = "usuarios_registrados.xls";
		header("Content-Type: application/vnd.ms-excel");
		header("Content-Disposition: attachment; filename=\"$filename\"");
		$isPrintHeader = false;

		if (!empty($resultUsers)){
			foreach ($resultUsers as $row){
				if(!$isPrintHeader){
					echo implode("\t", array_keys($row)) . "\n";
					$isPrintHeader = true;
				}
				echo implode("\t", array_values($row)) . "\n";
			}
		}
		exit();
	}

	if (isset($_POST["export-codes"])){
		$queryCodes = "Select R.registrado_version as 'Version', S.stock_serie as 'Codigo', U.usuario_nombre as 'Usuario', U.usuario_mail as 'Correo', registrado_vendedor as 'Vendedor', registrado_fecha as 'Fecha' from codigos_registrados as R inner join usuarios as U on R.registrado_usuario = U.usuario_ID inner join codigos_stock as S on R.registrado_serie = S.stock_ID order by registrado_fecha";
    	$resultCodes = mysqli_query($connect, $queryCodes);
		$filename = "codigos_registrados.xls";
		header("Content-Type: application/vnd.ms-excel");
		header("Content-Disposition: attachment; filename=\"$filename\"");
		$isPrintHeader = false;

		if (!empty($resultCodes)){
			foreach ($resultCodes as $row){
				if(!$isPrintHeader){
					echo implode("\t", array_keys($row)) . "\n";
					$isPrintHeader = true;
				}
				echo implode("\t", array_values($row)) . "\n";
			}
		}
		exit();
	}
?>