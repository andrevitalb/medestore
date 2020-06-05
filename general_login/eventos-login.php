<?php
    $hostname = "localhost";
    $username = "intracel_mluser";
    $password = "y3ll0wp4thyellow";
    $databaseNameEv = "intracel_eventos";

    $connectEv = mysqli_connect($hostname, $username, $password, $databaseNameEv);

	$mail = "";
	$password = "";
	$usuarioEv = 0;
	$errorMsgEv = "";

	function userEvEx(){
		global $mail, $password, $connectEv, $usuarioEv;
		$mail = $_POST['eventos_email'];
		$password = $_POST['eventos_pass'];
		$userEx = "Select usuario_mail from usuarios where usuario_mail = '$mail'";
		$resultEx = mysqli_query($connectEv, $userEx);
		$rEx = mysqli_fetch_array($resultEx);

        if($rEx){
        	$pwdEx = "Select usuario_password from usuarios where usuario_mail = '$mail'";
        	$pwdResult = mysqli_query($connectEv, $pwdEx);
        	$pwdFnl = mysqli_fetch_array($pwdResult);

        	if($pwdFnl[0] == $password) {
        		userEvID();
				return $usuarioEv;
			}
        	else {
        		errorMsgEv(1);
        		return -1;
        	}
        }
        else {
        	errorMsgEv(0);
        	return -1;
        }
	}

	function userEvID(){
		global $mail, $usuarioEv, $connectEv;
		$userID = "Select usuario_ID from usuarios where usuario_mail = '$mail'";
		$usrInd = mysqli_query($connectEv, $userID);
		$userInd = mysqli_fetch_array($usrInd);
		$usuarioEv = $userInd[0];
	}

	function errorMsgEv($ind){
		global $errorMsgEv;

		switch($ind){
			case 0: $errorMsgEv = '<div class="alert alert-danger alert-dismissible" role="alert" style="width:100%;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="zmdi zmdi-close"></i></button><strong><i class="zmdi zmdi-close-circle"></i> ¡Error!</strong> El correo ingresado no está registrado.</div>'; break;
			case 1: $errorMsgEv = '<div class="alert alert-danger alert-dismissible" role="alert" style="width:100%;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="zmdi zmdi-close"></i></button><strong><i class="zmdi zmdi-close-circle"></i> ¡Error!</strong> La contraseña ingresada es incorrecta o no coincide con el correo.</div>'; break; 
		}
	}
?>