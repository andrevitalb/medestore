<?php
ini_set('display_errors', 1);
$errorCode = '';

$localUrl = $_POST['localUrl'];

$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
$recaptcha_secret = '6LffOdUZAAAAAINm-uzro-n2Q4Io6QY_y1h2SKbN';
$recaptcha_response = $_POST['recaptcha_response'];
$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
$recaptcha = json_decode($recaptcha);

if ($recaptcha->score >= 0.7) {
	$email = $_POST['email'];
	$subject = $_POST['subject'];

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: noreply@medestore.mx'."\r\n";

	$message = "
		<html>
		<head>
		<title>$subject</title>
		</head>
		<body>
		<table width='50%' border='0' align='center' cellpadding='0' cellspacing='0'>
		<tr>
		<td colspan='2' align='center' valign='top'><img style=' width: 250px; margin-top: 15px; ' src='https://www.medestore.mx/assets/img/Logo-MedeStore.png'></td>
		</tr>
		<tr>
		<td width='50%' align='right'>&nbsp;</td>
		<td align='left'>&nbsp;</td>
		</tr>
		<tr>
		<td colspan='2' align='center' valign='top' style='border-top:1px solid #dfdfdf; border-bottom:1px solid #dfdfdf;font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:20px 15px;'>
			Se ha solicitado información a través del sitio de CoreSculpt.<br><br>
			<strong>Correo del cliente:</strong> $email.<br><br>
		</td>
		</tr>
		<tr>
		<td colspan='2' align='center' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:7px 5px 7px 0;'><strong>Enviado el:</strong> ".date('d-m-Y H:i:s')."</td>
		</tr>
		<tr>
		<td width='50%' align='right'>&nbsp;</td>
		<td align='left'>&nbsp;</td>
		</tr>
		</table>
		</body>
		</html>
		";

	if (!mail("yellowpathcm@gmail.com", $subject, $message, $headers)) {
		$errorCode = 'EC-1001';
	}
} else {
	$errorCode = 'EC-1002';
}

if ($errorCode == '') {
	echo "<body><link href='https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap' rel='stylesheet'><a href='/$localUrl' id='returnLink'>< Regresar</a><div><div><img src='https://www.medestore.mx/assets/img/logo_medestore-color.png' alt='Logo Medestore'id='medestoreLogo'></div><h1>Mensaje Enviado</h1><h4>Gracias por ponerte en contacto con nosotros.<br> En breve uno de nuestros especialistas tecontactará.<br>O contacta directo a tu vendedor asignado</h4>$recaptcha->score</div><style>* {font-family: Raleway, sans-serif;}body {margin: 0;padding: 0;background-color: #fff;background-size: cover;height: 100vh;width: 100vw;}body>div {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);display: block;text-align: center;width: 85%;}#returnLink {display: block;position: absolute;top: 1.25rem;left: 1.25rem;text-decoration: none;font-weight: 700;}#medestoreLogo {width: 25rem;display: inline-block;margin: 0 0 5rem;}h1 {font-size: 50px;font-weight: 700;text-transform: uppercase;display: inline-block;color: #000;margin: 0 0 1.5rem;}h4 {font-size: 32px;font-weight: 400;margin: 0;}</style></body>";
} else {
	echo "<body><link href='https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap' rel='stylesheet'><div><div><img src='https://www.medestore.mx/assets/img/logo_medestore-color.png' alt='Logo Medestore'></div><h1>Ocurrió un problema</h1><h4>Por favor, vuelve a intentar mandar tu mensaje. $errorCode</h4>$recaptcha->score</div><style>body{margin: 0;padding: 0;background-color: #fff;background-size: cover;height: 100vh;width: 100vw;}body>div {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);display: block;text-align: center;width: 85%;}img{width: 25rem;display: inline-block;margin: 0 0 5rem;}h1{font-family: Raleway, sans-serif;font-size: 50px;font-weight: 700;text-transform: uppercase;display: inline-block;color: #000;margin: 0 0 1.5rem;}h4{font-size: 32px;font-family: Raleway, sans-serif;font-weight: 400;margin: 0;}</style><meta http-equiv='refresh' content='2.5;URL=$localUrl'/></body>";
}
?>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-33467298-1"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
	dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'UA-33467298-1');
</script>