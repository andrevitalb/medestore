<meta http-equiv="refresh" content="3.5;URL=contacto.php" />
<?php
	$errorCode = '';

$distName = $_REQUEST['nameSellerWA'];
$dist = $_REQUEST['emailSellerWA'];

if (strpos($dist, '@medestore.mx')) {
	$hostname = "localhost";
	$username = "intracel_mluser";
	$password = "y3ll0wp4thyellow";
	$databaseName = "intracel_controlContacto";

	$connect = mysqli_connect($hostname, $username, $password, $databaseName);
	mysqli_set_charset($connect, "utf8");
	date_default_timezone_set('America/Mexico_City');

	$para = $dist;

	$title = "Contacto WhatsApp " . $distName;

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: noreply@medestore.mx'."\r\n";

	$message = "
		<html>
		<head>
		<title>$title</title>
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
			Se ha generado un contacto a través de WhatsApp desde el sitio web de Medestore.<br><br>
			Por favor proporciona los detalles del contacto en Odoo lo antes posible. Recuerda tenemos el compromiso de responder en no más de 12 horas hábiles.<br><br>
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

	mail($para, $title, $message, $headers);

	$message = "
		<html>
		<head>
		<title>$title</title>
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
			Se ha generado un nuevo contacto a través de WhatsApp desde el sitio web de Medestore con $distName ($dist).<br><br>
			Se le solicitó al vendedor proporcionara los detalles del contacto en Odoo lo antes posible.<br><br>
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

	$para = "contacto@medestore.mx";

	if (!mail($para, $subject, $message, $headers)) {
		$errorCode = 'EC-1001';
	}
} else {
	$errorCode = 'EC-1002';
}

if($errorCode == '') {
	echo '<body><link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet"><div><div><img src="https://www.medestore.mx/assets/img/logo_medestore-color.png" alt="Logo Medestore"></div><h1>Mensaje Enviado</h1><h4>Gracias por ponerte en contacto con nosotros.<br> En breve uno de nuestros especialistas te contactará</h4></div><style>body{margin: 0;padding: 0;background-color: #fff;background-size: cover;height: 100vh;width: 100vw;}body>div {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);display: block;text-align: center;width: 85%;}img{width: 25rem;display: inline-block;margin: 0 0 5rem;}h1{font-family: Raleway, sans-serif;font-size: 50px;font-weight: 700;text-transform: uppercase;display: inline-block;color: #000;margin: 0 0 1.5rem;}h4{font-size: 32px;font-family: Raleway, sans-serif;font-weight: 400;margin: 0;}</style></body>';
} else {
	echo "<body><link href='https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap' rel='stylesheet'><div><div><img src='https://www.medestore.mx/assets/img/logo_medestore-color.png' alt='Logo Medestore'></div><h1>Ocurrió un problema</h1><h4>Por favor, vuelve a intentar mandar tu mensaje. $errorCode</h4></div><style>body{margin: 0;padding: 0;background-color: #fff;background-size: cover;height: 100vh;width: 100vw;}body>div {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);display: block;text-align: center;width: 85%;}img{width: 25rem;display: inline-block;margin: 0 0 5rem;}h1{font-family: Raleway, sans-serif;font-size: 50px;font-weight: 700;text-transform: uppercase;display: inline-block;color: #000;margin: 0 0 1.5rem;}h4{font-size: 32px;font-family: Raleway, sans-serif;font-weight: 400;margin: 0;}</style></body>";
}
?>