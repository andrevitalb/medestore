<?php
    $hostname = "localhost";
    $username = "intracel_mluser";
    $password = "y3ll0wp4thyellow";
    $databaseNameMona = "intracel_monalisa";

    $connectMona = mysqli_connect($hostname, $username, $password, $databaseNameMona);

	$mail = "";
	$password = "";
	$usuarioMona = 0;
	$errorMsgMona = "";

	function userMonaEx(){
		global $mail, $password, $connectMona, $usuarioMona;
		$mail = $_POST['mona_email'];
		$password = $_POST['mona_pass'];
		$userEx = "Select usuario_mail from usuarios where usuario_mail = '$mail'";
		$resultEx = mysqli_query($connectMona, $userEx);
		$rEx = mysqli_fetch_array($resultEx);

        if($rEx){
        	$pwdEx = "Select usuario_password from usuarios where usuario_mail = '$mail'";
        	$pwdResult = mysqli_query($connectMona, $pwdEx);
        	$pwdFnl = mysqli_fetch_array($pwdResult);

        	if($pwdFnl[0] == $password) {
        		userMonaID();
				return $usuarioMona;
			}
        	else {
        		errorMsgMona(1);
        		return -1;
        	}
        }
        else {
        	errorMsgMona(0);
        	return -1;
        }
	}

	function userMonaID(){
		global $mail, $usuarioMona, $connectMona;
		$userID = "Select usuario_ID from usuarios where usuario_mail = '$mail'";
		$usrInd = mysqli_query($connectMona, $userID);
		$userInd = mysqli_fetch_array($usrInd);
		$usuarioMona = $userInd[0];
	}

	function errorMsgMona($ind){
		global $errorMsgMona;

		switch($ind){
			case 0: $errorMsgMona = '<div class="alert alert-danger alert-dismissible" role="alert" style="width:100%;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="zmdi zmdi-close"></i></button><strong><i class="zmdi zmdi-close-circle"></i> ¡Error!</strong> El correo ingresado no está registrado.</div>'; break;
			case 1: $errorMsgMona = '<div class="alert alert-danger alert-dismissible" role="alert" style="width:100%;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="zmdi zmdi-close"></i></button><strong><i class="zmdi zmdi-close-circle"></i> ¡Error!</strong> La contraseña ingresada es incorrecta o no coincide con el correo.</div>'; break; 
		}
	}
?>