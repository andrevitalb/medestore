<?php
    include('connections.php');
    
  	mysqli_set_charset ($connect, "utf8");
    date_default_timezone_set('America/Mexico_City');

	$errorMsg = "";

	$currEv = "Select MAX(congresos_ID) from congresos";
	$cEv = mysqli_query($connect, $currEv);
	$event = mysqli_fetch_array($cEv);

	$startDate = mysqli_fetch_array(mysqli_query($connect, "Select congresos_fechaInicio from congresos where congresos_ID = $event[0]"));
	$endDate = mysqli_fetch_array(mysqli_query($connect, "Select congresos_fechaFinal from congresos where congresos_ID = $event[0]"));

    function userReg(){
    	global $event, $startDate, $endDate, $errorMsg, $connect;

    	$currDate = new DateTime(date("d-m-Y H:i", time()));
    	$sDate = new DateTime($startDate[0]);
    	$eDate = new DateTime($endDate[0]);

    	if(($currDate > $sDate) && ($currDate < $eDate)){
			$fname = $_POST['register_fname'];
			$lname = $_POST['register_lname'];
			$mail = $_POST['register_mail'];
			$phone = $_POST['register_phone'];
			$trim = preg_replace("/[^0-9]/", "", $phone);
			$phone = $trim;
			$specialty = $_POST['register_specialty'];
			$state = $_POST['register_state'];
			$errorMsg = "";

			$userEx = "Select registros_correo from registros where registros_correo = '$mail'";
			$userPos = mysqli_query($connect, $userEx);
			$userInd = mysqli_fetch_array($userPos);

			$asisGet = "Select MAX(asistentes_ID) from asistentes";
			$aID = mysqli_query($connect, $asisGet);
			$assistentID = mysqli_fetch_array($aID);

			$assistentID[0] += 1;

		    if(!$userInd){
	    		$idGet = "Select MAX(registros_ID) from registros";
				$usID = mysqli_query($connect, $idGet);
				$userID = mysqli_fetch_array($usID);

				$userID[0] += 1;

	    		$insertUser = "Insert into registros (registros_ID, registros_nombre, registros_apellido, registros_correo, registros_telefono, registros_especialidad, registros_estado, registros_evento) values ($userID[0], '$fname', '$lname', '$mail', '$phone', '$specialty', '$state', $event[0])";
	    		$newUser = mysqli_query($connect, $insertUser);

	    		$assistUser = "Insert into asistentes (asistentes_ID, asistentes_usuario, asistentes_congreso) values ($assistentID[0], $userID[0], $event[0])";
	    		$newAssist = mysqli_query($connect, $assistUser);

	    		echo '<script>swal("¡Éxito!", "Registrado satisfactoriamente.", "success");</script>';
		    }
		    else {
		    	$userEx = "Select registros_evento from registros where registros_correo = '$mail'";
				$userPos = mysqli_query($connect, $userEx);
				$userInd = mysqli_fetch_array($userPos);

				if($userInd[0] != $event[0]){
					$updateUser = "Update registros set registros_telefono = '$phone', registros_especialidad = '$specialty', registros_estado = '$state', registros_evento = $event[0] where registros_correo = '$mail'";
	    			$updUser = mysqli_query($connect, $updateUser);

	    			$assistUser = "Insert into asistentes (asistentes_ID, asistentes_usuario, asistentes_congreso) values ($assistentID[0], $userID[0], $event[0])";
    				$newAssist = mysqli_query($connect, $assistUser);

	    			echo '<script>swal("¡Éxito!", "Registrado satisfactoriamente.", "success");</script>';
				}
				else echo '<script>swal("¡Error!", "Este usuario ya está registrado en este evento.", "error");</script>';
		    }
		}
		else echo '<script>swal("¡Error!", "Este evento ya no está disponible para registro.", "error");</script>';
	}
?>