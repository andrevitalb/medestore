<?php
    $hostname = "localhost";
    $username = "yellowus_mluser";
    $password = "y3ll0wp4thyellow";
    $databaseName = "yellowus_monalisa";

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);

    $mail = "";
	$password = "";
	$confirm = "";
	$name = "";
	$phone = "";
	$specialty = "";
	$city = "";
	$state = "";
	$usuario = 0;
	$errorMsg = "";

    function userReg(){
    	global $mail, $password, $confirm, $name, $phone, $specialty, $city, $state, $usuario, $errorMsg, $connect;
		$mail = $_REQUEST['register_mail'];
		$password = $_REQUEST['register_password'];
		$confirm = $_REQUEST['confirm_password'];
		$name = $_REQUEST['register_name'];
		$phone = $_REQUEST['register_phone'];
		$trim = preg_replace("/[^0-9]/", "", $phone);
		$phone = $trim;
		$specialty = $_REQUEST['register_specialty'];
		$city = $_REQUEST['register_city'];
		$state = $_REQUEST['register_state'];
		$usuario = 0;
		$errorMsg = "";

		$userEx = "Select usuario_mail from usuarios where usuario_mail = '$mail'";
		$userPos = mysqli_query($connect, $userEx);
		$userInd = mysqli_fetch_array($userPos);

	    if(!$userInd){
	    	if($password == $confirm) {
	    		$idGet = "Select MAX(usuario_ID) from usuarios";
				$usID = mysqli_query($connect, $idGet);
				$userID = mysqli_fetch_array($usID);

				$userID[0] += 1;

	    		$insertUser = "Insert into usuarios (usuario_ID, usuario_mail, usuario_password, usuario_nombre, usuario_telefono, usuario_especialidad, usuario_ciudad, usuario_estado) values ($userID[0], '$mail', '$password', '$name', '$phone', '$specialty', '$city', '$state')";
	    		$newUser = mysqli_query($connect, $insertUser);
	    		return $userID[0];
	    	}
	    	else {
	    		errorRegMsg(1);
	    		return -1;
	    	}
	    }
	    else {
	    	errorRegMsg(0);
	    	return -1;
	    }
	}

	function errorRegMsg($ind){
		global $errorMsg;

		switch($ind){
			case 0: $errorMsg = '<div class="alert alert-danger alert-dismissible" role="alert" style="width:100%;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="zmdi zmdi-close"></i></button><strong><i class="zmdi zmdi-close-circle"></i> ¡Error!</strong> El correo ingresado ya está registrado.</div><script src="../../assets/js/component-snackbar.js"></script>'; break;
			case 1: $errorMsg = '<div class="alert alert-danger alert-dismissible" role="alert" style="width:100%;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="zmdi zmdi-close"></i></button><strong><i class="zmdi zmdi-close-circle"></i> ¡Error!</strong> Las contraseñas ingresadas no coinciden.</div>'; break;
		}
	}
?>