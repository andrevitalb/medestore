<?php
  include('connections.php');

	$mail = "";
	$password = "";
	$usuario = 0;
	$errorMsg = "";

	function userEx(){
		global $mail, $password, $connect, $usuario;
		$mail = $_POST['login_mail'];
		$password = $_POST['login_password'];
		$userEx = "Select usuario_ID from usuarios where usuario_mail = '$mail'";
		$resultEx = mysqli_fetch_array(mysqli_query($connect, $userEx))[0];

    if($resultEx){
      $userPasswordQuery = "Select usuario_password from usuarios where usuario_mail = '$mail'";
      $userPassword = mysqli_fetch_array(mysqli_query($connect, $userPasswordQuery))[0];

      if($userPassword == $password) {
        userID();
				return $usuario;
			}

      errorMsg(1);
      return -1;
    }

    errorMsg(0);
    return -1;
	}

	function userID(){
		global $mail, $usuario, $connect;
		$userIdQuery = "Select usuario_ID from usuarios where usuario_mail = '$mail'";
		$usuario = mysqli_fetch_array(mysqli_query($connect, $userIdQuery))[0];
	}

	function errorMsg($ind){
		global $errorMsg;

		switch($ind){
			case 0: $errorMsg = '<div class="alert alert-danger alert-dismissible" role="alert" style="width:100%;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="zmdi zmdi-close"></i></button><strong><i class="zmdi zmdi-close-circle"></i> ¡Error!</strong> El correo ingresado no está registrado.</div>'; break;
			case 1: $errorMsg = '<div class="alert alert-danger alert-dismissible" role="alert" style="width:100%;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="zmdi zmdi-close"></i></button><strong><i class="zmdi zmdi-close-circle"></i> ¡Error!</strong> La contraseña ingresada es incorrecta o no coincide con el correo.</div>'; break; 
		}
	}
?>