<?php
  include('connections.php');

	$eventIdQuery = "Select MAX(congresos_ID) from congresos where congresos_deshabilitado = 0";
	$eventId = mysqli_fetch_array(mysqli_query($connect, $eventIdQuery))[0];

  $startDate = mysqli_fetch_array(mysqli_query($connect, "Select congresos_fechaInicio from congresos where congresos_ID = $eventId"));
	$endDate = mysqli_fetch_array(mysqli_query($connect, "Select congresos_fechaFinal from congresos where congresos_ID = $eventId"));

	function userReg(){
		global $eventId, $startDate, $endDate, $connect;

		$currDate = new DateTime(date("d-m-Y H:i", time()));
		$sDate = new DateTime($startDate[0]);
		$eDate = new DateTime($endDate[0]);

		if(($currDate > $sDate) && ($currDate < $eDate)){
			$fname = $_POST['register_fname'];
			$lname = $_POST['register_lname'];
			$mail = $_POST['register_mail'];
			$phone = preg_replace("/[^0-9]/", "", $_POST['register_phone']);
			$specialty = $_POST['register_specialty'];
			$state = $_POST['register_state'];
			$seller = $_POST['register_seller'];
			$product = $_POST['register_product'];
			$comments = preg_replace("/\s+/", " ", $_POST['register_comments']);

			$userIdQuery = "Select registros_ID from registros where registros_correo = '$mail'";
			$userId = mysqli_fetch_array(mysqli_query($connect, $userIdQuery))[0];

			$maxAttendantIdQuery = "Select MAX(asistentes_ID) from asistentes";
			$newAttendantId = mysqli_fetch_array(mysqli_query($connect, $maxAttendantIdQuery))[0] + 1;

			if(!$userId){
				$userIdQuery = "Select MAX(registros_ID) from registros";
				$userId = mysqli_fetch_array(mysqli_query($connect, $userIdQuery))[0] + 1;

				$insertUserQuery = "Insert into registros (registros_ID, registros_nombre, registros_apellido, registros_correo, registros_telefono, registros_especialidad, registros_estado, registros_evento) values ($userId, '$fname', '$lname', '$mail', '$phone', '$specialty', '$state', $eventId)";
				mysqli_query($connect, $insertUserQuery);
			} else {
				$userLastEventQuery = "Select registros_evento from registros where registros_ID = $userId";
				$userLastEventId = mysqli_fetch_array(mysqli_query($connect, $userLastEventQuery))[0];

				if($userLastEventId != $eventId){
					$updateUserQuery = "Update registros set registros_telefono = '$phone', registros_especialidad = '$specialty', registros_estado = '$state', registros_evento = $eventId where registros_ID = $userId";
					mysqli_query($connect, $updateUserQuery);
				} else echo '<script>swal("¡Error!", "Este usuario ya está registrado en este evento.", "error");</script>';
			}

			$insertAttendantQuery = "Insert into asistentes (asistentes_ID, asistentes_usuario, asistentes_congreso, asistentes_asesor, asistentes_producto, asistentes_comentarios) values ($newAttendantId, $userId, $eventId, '$seller', '$product', '$comments')";
			mysqli_query($connect, $insertAttendantQuery);

			echo '<script>swal("¡Éxito!", "Registrado satisfactoriamente.", "success");</script>';
		} else echo '<script>swal("¡Error!", "Este evento ya no está disponible para registro.", "error");</script>';
	}
?>
