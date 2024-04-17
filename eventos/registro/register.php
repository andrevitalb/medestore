<?php
  include('connections.php');

	$eventIdQuery = "SELECT MAX(congresos_ID) FROM congresos WHERE congresos_deshabilitado = 0";
	$eventId = mysqli_fetch_array(mysqli_query($connect, $eventIdQuery))[0];

  $startDate = mysqli_fetch_array(mysqli_query($connect, "SELECT congresos_fechaInicio FROM congresos WHERE congresos_ID = $eventId"));
	$endDate = mysqli_fetch_array(mysqli_query($connect, "SELECT congresos_fechaFinal FROM congresos WHERE congresos_ID = $eventId"));

	function userReg(){
		global $eventId, $startDate, $endDate, $connect;

		$currDate = new DateTime(date("d-m-Y H:i", time()));
		$sDate = new DateTime($startDate[0]);
		$eDate = new DateTime($endDate[0]);

		if(($currDate > $sDate) && ($currDate < $eDate)){
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$email = $_POST['email'];
			$phone = preg_replace("/[^0-9]/", "", $_POST['phone']);
			$speciality = $_POST['speciality'];
			$state = $_POST['state'];
			$seller = $_POST['seller'];
			$product = $_POST['product'];
			$comments = preg_replace("/\s+/", " ", $_POST['comments']);

			$userIdQuery = "SELECT registros_ID FROM registros WHERE registros_correo = '$email'";
			$userId = mysqli_fetch_array(mysqli_query($connect, $userIdQuery))[0];

			if(!$userId){
				$insertUserQuery = "INSERT INTO registros (registros_nombre, registros_apellido, registros_correo, registros_telefono, registros_especialidad, registros_estado, registros_evento) VALUES ('$firstName', '$lastName', '$email', '$phone', '$speciality', '$state', $eventId)";
				$userId = mysqli_fetch_array(mysqli_query($connect, $insertUserQuery))[0];
			} else {
				$userLastEventQuery = "SELECT registros_evento FROM registros WHERE registros_ID = $userId";
				$userLastEventId = mysqli_fetch_array(mysqli_query($connect, $userLastEventQuery))[0];

				if($userLastEventId != $eventId){
					$updateUserQuery = "UPDATE registros SET registros_telefono = '$phone', registros_especialidad = '$speciality', registros_estado = '$state', registros_evento = $eventId WHERE registros_ID = $userId";
					mysqli_query($connect, $updateUserQuery);
				} else echo '<script>swal("¡Error!", "Este usuario ya está registrado en este evento.", "error");</script>';
			}

			$registeredCheckQuery = "SELECT COUNT(*) AS registros FROM asistentes WHERE asistentes_usuario = $userId AND asistentes_congreso = $eventId";
			$registeredCheck = mysqli_fetch_array(mysqli_query($connect, $registeredCheckQuery))[0];

			if($registeredCheck <= 7) {
				$insertAttendantQuery = "INSERT INTO asistentes (asistentes_usuario, asistentes_congreso, asistentes_asesor, asistentes_producto, asistentes_comentarios) VALUES ($userId, $eventId, '$seller', '$product', '$comments')";
				mysqli_query($connect, $insertAttendantQuery);
			}

			echo '<script>swal("¡Éxito!", "Registrado satisfactoriamente.", "success");</script>';
		} else echo '<script>swal("¡Error!", "Este evento ya no está disponible para registro.", "error");</script>';
	}
?>
