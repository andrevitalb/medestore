<?php
include('dbConnection.php');
$errorCode = '';

$whatsAppLink = $_POST['whatsAppLink'];
$localUrl = $_POST['localUrl'];

$recaptchaUrl = 'https://www.google.com/recaptcha/api/siteverify';
$recaptchaSecret = '6LffOdUZAAAAAINm-uzro-n2Q4Io6QY_y1h2SKbN';
$recaptchaResponse = $_POST['recaptcha_response'];
$recaptcha = file_get_contents($recaptchaUrl . '?secret=' . $recaptchaSecret . '&response=' . $recaptchaResponse);
$recaptcha = json_decode($recaptcha);

if ($recaptcha->score >= 0.7) {
	$section = $_POST['department'];
	$subject = $_POST['subject'];

	$state = $_POST['state'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$mail = $_POST['email'];
	$phone = $_POST['phone'];
	$speciality = $_POST['speciality'];

	if (isset($_POST['subscribe'])) $subscribe = 1;
	else $subscribe = 0;

	$queryContact = "INSERT INTO contactos (
		contactos_nombre,
		contactos_apellido,
		contactos_correo,
		contactos_telefono,
		contactos_estado,
		contactos_especialidad,
		contactos_suscrito,
		contactos_registro
	) VALUES (
		'$firstName',
		'$lastName',
		'$mail',
		'$phone',
		'$state',
		'$speciality',
		$subscribe,
		NOW()
	)";
	$resultContact = mysqli_query($connect, $queryContact);

	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8\r\n";
	$headers .= "From: $firstName $lastName <$mail>\r\n";
	$headers .= "Cc: ventas.medestore@medestore.odoo.com, leadsmedestore@gmail.com\r\n";

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
		<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Nombre:</strong></td>
		<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>$firstName $lastName</td>
		</tr>
		<tr>
		<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Teléfono:</strong></td>
		<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>$phone</td>
		</tr>
		<tr>
		<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Email:</strong></td>
		<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>$mail</td>
		</tr>
		<tr>
		<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Especialidad:</strong></td>
		<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>$speciality</td>
		</tr>
		<tr>
		<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Estado:</strong></td>
		<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>$state</td>
		</tr>
		<tr>
		<td colspan='2' align='center' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Enviado el:</strong> " . date('d-m-Y H:i:s') . "</td>
		</tr>
		<tr>
		<td width='50%' align='right'>&nbsp;</td>
		<td align='left'>&nbsp;</td>
		</tr>
		<tr>
		<td width='50%' align='right'>&nbsp;</td>
		<td align='left'>&nbsp;</td>
		</tr>
		</table>
		</body>
		</html>
	";

	$targetEmail = "contacto@medestore.mx";

	if (!mail($targetEmail, $subject, $message, $headers)) {
		$errorCode = 'EC-1001';
	}
} else $errorCode = 'EC-1002';

if ($errorCode == '') echo "<body><link href='https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap' rel='stylesheet'><a href='/$localUrl' id='returnLink'>< Regresar</a><div><div><img src='https://www.medestore.mx/assets/img/logo_medestore-color.png' alt='Logo Medestore'id='medestoreLogo'></div><h1>Mensaje Enviado</h1><h4>Gracias por ponerte en contacto con nosotros.<br>En breve uno de nuestros especialistas se comunicará contigo.<br>O envía mensaje a tu vendedor asignado</h4><a href='$whatsAppLink' target='_blank' id='whatsApp'>Contacto <img src='assets/img/whatsapp-icon.png' alt='WhatsApp'id='whatsAppIcon'></a></div><style>* {font-family: Raleway, sans-serif;}body {margin: 0;padding: 0;background-color: #fff;background-size: cover;height: 100vh;width: 100vw;}body>div {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);display: block;text-align: center;width: 85%;}#returnLink {display: block;position: absolute;top: 1.25rem;left: 1.25rem;text-decoration: none;font-weight: 700;}#medestoreLogo {width: 25rem;display: inline-block;margin: 0 0 5rem;}h1 {font-size: 50px;font-weight: 700;text-transform: uppercase;display: inline-block;color: #000;margin: 0 0 1.5rem;}h4 {font-size: 32px;font-weight: 400;margin: 0;}#whatsApp {display: inline-flex;align-items: center;padding: 1rem 2rem;background-color: #0FC244;margin-top: 1rem;color: #fff;border-radius: 15px;text-decoration: none;font-weight: 700;}#whatsAppIcon {width: 25px;display: inline-block;margin-left: 10px;}</style></body>";
else echo "<body><link href='https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap' rel='stylesheet'><div><div><img src='https://www.medestore.mx/assets/img/logo_medestore-color.png' alt='Logo Medestore'></div><h1>Ocurrió un problema</h1><h4>Por favor, vuelve a intentar mandar tu mensaje. $errorCode</h4></div><style>body{margin: 0;padding: 0;background-color: #fff;background-size: cover;height: 100vh;width: 100vw;}body>div {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);display: block;text-align: center;width: 85%;}img{width: 25rem;display: inline-block;margin: 0 0 5rem;}h1{font-family: Raleway, sans-serif;font-size: 50px;font-weight: 700;text-transform: uppercase;display: inline-block;color: #000;margin: 0 0 1.5rem;}h4{font-size: 32px;font-family: Raleway, sans-serif;font-weight: 400;margin: 0;}</style><meta http-equiv='refresh' content='2.5;URL=$url'/></body>";
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