<?php
  include('connections.php');

	if (isset($_POST["export-users"])){
		$queryUsers = "Select registros_correo as 'Correo', registros_nombre as 'Nombre', registros_apellido as 'Apellido', registros_telefono as 'Teléfono', registros_especialidad as 'Especialidad', registros_estado as 'Estado' from registros order by registros_ID desc;";
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

	if (isset($_POST["export-current"])){
		$queryCurrentAttendants = "Select C.congresos_nombre as 'Nombre Congreso', R.registros_nombre as 'Nombre', R.registros_apellido as 'Apellido', R.registros_correo as 'Correo', R.registros_telefono as 'Telefono' from asistentes as A inner join registros as R on A.asistentes_usuario = R.registros_ID inner join congresos as C on A.asistentes_congreso = C.congresos_ID where congresos_ID = (Select MAX(congresos_ID) from congresos where congresos_deshabilitado = 0) order by A.asistentes_ID desc";
    $resultCurrentAttendants = mysqli_query($connect, $queryCurrentAttendants);
		$filename = "asistentes_ultimo_congreso.xls";
		header("Content-Type: application/vnd.ms-excel");
		header("Content-Disposition: attachment; filename=\"$filename\"");
		$isPrintHeader = false;

		if (!empty($resultCurrentAttendants)){
			foreach ($resultCurrentAttendants as $row){
				if(!$isPrintHeader){
					echo implode("\t", array_keys($row)) . "\n";
					$isPrintHeader = true;
				}
				echo implode("\t", array_values($row)) . "\n";
			}
		}
		exit();
	}

	if (isset($_POST["export-assist"])){
		$queryCodes = "Select C.congresos_nombre as 'Nombre Congreso', R.registros_nombre as 'Nombre', R.registros_apellido as 'Apellido', R.registros_correo as 'Correo', R.registros_telefono as 'Telefono', R.registros_estado as 'Estado', A.asistentes_asesor as 'Asesor de ventas', A.asistentes_producto as 'Producto de interés', A.asistentes_comentarios as 'Notas' from asistentes as A inner join registros as R on A.asistentes_usuario = R.registros_ID inner join congresos as C on A.asistentes_congreso = C.congresos_ID where C.congresos_ID = " . $_POST['eventAssistantsCongressId'] . " order by A.asistentes_ID desc";
    $resultCodes = mysqli_query($connect, $queryCodes);
		$filename = "asistentes_congreso.xls";
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

	if (isset($_POST["export-stats"])){
		$queryCodes = "Select C.congresos_nombre as 'Nombre Congreso', LEFT(C.congresos_fechaInicio, 10) as 'Fecha Inicio', LEFT(C.congresos_fechaFinal, 10) as 'Fecha Final', COUNT(A.asistentes_ID) as 'Número de Asistentes' from asistentes as A inner join congresos as C on A.asistentes_congreso = C.congresos_ID group by C.congresos_nombre order by C.congresos_ID desc";
    	$resultCodes = mysqli_query($connect, $queryCodes);
		$filename = "datos_congresos.xls";
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

	if (isset($_POST["export-contacts"])){
		$queryConts = "Select contactos_nombre as Nombre, contactos_apellido as Apellido, contactos_correo as Correo, contactos_telefono as Teléfono, contactos_estado as Estado, contactos_especialidad as Especialidad, contactos_suscrito as Suscrito from contactos order by contactos_ID";
    	$resultConts = mysqli_query($connect2, $queryConts);
		$filename = "datos_contactos.xls";
		header("Content-Type: application/vnd.ms-excel");
		header("Content-Disposition: attachment; filename=\"$filename\"");
		$isPrintHeader = false;

		if (!empty($resultConts)){
			foreach ($resultConts as $row){
				if(!$isPrintHeader){
					echo implode("\t", array_keys($row)) . "\n";
					$isPrintHeader = true;
				}
				echo implode("\t", array_values($row)) . "\n";
			}
		}
		exit();
	}

	if (isset($_POST["export-corea"])){
		$queryConts = "Select contactos_nombre as Nombre, contactos_apellido as Apellido, contactos_correo as Correo, contactos_telefono as Teléfono, contactos_estado as Estado, contactos_especialidad as Especialidad, contactos_suscrito as Suscrito from contactocorea order by contactos_ID";
    	$resultConts = mysqli_query($connect2, $queryConts);
		$filename = "datos_corea.xls";
		header("Content-Type: application/vnd.ms-excel");
		header("Content-Disposition: attachment; filename=\"$filename\"");
		$isPrintHeader = false;

		if (!empty($resultConts)){
			foreach ($resultConts as $row){
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