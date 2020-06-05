<meta http-equiv="refresh" content="2;url=index.php">
<?php
    $hostname = "localhost";
    $username = "yellowus_mluser";
    $password = "y3ll0wp4thyellow";
    $databaseName = "yellowus_monalisa";

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);

	$mail = $_POST['reset_mail'];
	$errorMsg = "";
	
	$userEx = "Select usuario_mail from usuarios where usuario_mail = '$mail'";
    $userList = mysqli_query($connect, $userEx);
    $userReq = mysqli_fetch_array($userList);
    $userReset = $userReq[0];

    if($userReset){
    	$userD = "Select usuario_nombre from usuarios where usuario_mail = '$mail'";
    	$userN = mysqli_query($connect, $userD);
        $userNm = mysqli_fetch_array($userN);
    	$userName = $userNm[0];

    	$userP = "Select usuario_password from usuarios where usuario_mail = '$mail'";
    	$userPass = mysqli_query($connect, $userP);
        $userPwd = mysqli_fetch_array($userPass);
    	$userPassword = $userPwd[0];

		$header =  'MIME-Version: 1.0' . "\r\n";
    	$header .= 'From: Soporte MONALISA <contacto@medestore.mx>' . "\r\n";
    	$header .= 'Content-type: text/html; charset=UTF-8' . "\r\n"; 

		$mensaje = "Estimado " . $userName . " \r\n";
		$mensaje .= ", se ha solicitado el reestablecimiento de contraseña para tu cuenta de MONALISA, " . $mail . " \r\n";
		$mensaje .= ". Si no has sido tú, solo ignora este correo, no compartiremos esta información con ningún otro correo que no sea el que registraste. \n\n\tTu CONTRASEÑA es: " . $userPassword . " \r\n";

		$para = $mail;
		$asunto = 'Reestablecimiento de contaseña';

		if(mail($para, $asunto, $mensaje, $header)) echo '<head><meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"></head><body><link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"><div><img src="../../assets/img/products/monalisa/ML_logo.png" alt="Monalisa"><h1>Hemos enviado tu contraseña a tu correo.</h1></div><style>body{margin: 0;padding: 0;}div{background-image:url(../../assets/img/stages/header-monalisa.jpg);background-size:cover;background-position:center;height:100vh;width:100vw;text-align:center;}img{width:50%;margin-top:25vh;display:inline-block;}h1{font-family:Raleway, sans-serif;}@media(max-width:450px){div{background-position:left;}img{width:80vw;margin-top: 30vh;}}</style></body>';
    }
    else errorPwdMsg();

	function errorPwdMsg(){
		global $errorMsg;

		$errorMsg = '<head><meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"></head><body><link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"><div><img src="../../assets/img/products/monalisa/ML_logo.png" alt="Monalisa"><h1>El correo ingresado no está registrado, por favor verifícalo.</h1></div><style>body{margin: 0;padding: 0;}div{background-image:url(../../assets/img/stages/header-monalisa.jpg);background-size:cover;background-position:center;height:100vh;width:100vw;text-align:center;}img{width:50%;margin-top:25vh;display:inline-block;}h1{font-family:Raleway, sans-serif;}@media(max-width:450px){div{background-position:left;}img{width:80vw;margin-top: 30vh;}}</style></body>';
        echo $errorMsg;
	}
?>