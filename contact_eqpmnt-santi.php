<?php
$error_code = '';

$whatsAppLink = $_POST['whatsAppLink'];
$localUrl = $_POST['localUrl'];

$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
$recaptcha_secret = '6LffOdUZAAAAAINm-uzro-n2Q4Io6QY_y1h2SKbN';
$recaptcha_response = $_POST['recaptcha_response'];
$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
$recaptcha = json_decode($recaptcha);


if ($recaptcha->score >= 0.7) {
	$hostname = "localhost";
	$username = "intracel_mluser";
	$password = "y3ll0wp4thyellow";
	$databaseName = "intracel_controlContacto";

	$connect = mysqli_connect($hostname, $username, $password, $databaseName);
	mysqli_set_charset($connect, "utf8");
	date_default_timezone_set('America/Mexico_City');

	$section = $_POST['contactDpmnt'];
	$subject = $_POST['contactSubject'];

	$state = $_POST['contactState'];
	$fname = $_POST['contactFName'];
	$lname = $_POST['contactLName'];
	$mail = $_POST['contactEmail'];
	$phone = $_POST['contactPhone'];
	$esp = $_POST['contactSpecialty'];

	if (isset($_POST['contactSubscribe'])) $subscribe = 1;
	else $subscribe = 0;

	$queryMax = "Select MAX(contactos_ID) from contactos";
	$takeMax = mysqli_query($connect, $queryMax);
	$maxInd = mysqli_fetch_array($takeMax);
	$maxInd[0] += 1;

	$queryContact = "Insert into contactos (contactos_ID, contactos_nombre, contactos_apellido, contactos_correo, contactos_telefono, contactos_estado, contactos_especialidad, contactos_suscrito, contactos_registro) values ($maxInd[0],";
	$queryContact .= '"' . $fname . '","' . $lname . '",';
	$queryContact .= "'$mail','$phone','$state','$esp',$subscribe,CURDATE())";
	$resultContact = mysqli_query($connect, $queryContact);

	if ($section == "Ventas Equipos") {
		// Old
		// switch ($state) {
		// 	case 'Aguascalientes':
		// 	case 'Baja California Sur':
		// 	case 'Campeche':
		// 	case 'Chihuahua':
		// 	case 'Guanajuato':
		// 	case 'Hidalgo':
		// 	case 'Michoacán':
		// 	case 'Nayarit':
		// 	case 'Nuevo León':
		// 	case 'Querétaro':
		// 	case 'Quintana Roo':
		// 	case 'San Luis Potosí':
		// 	case 'Veracruz':
		// 		$distName = "Alan Adair Fernández Pérez";
		// 		$dist = "alan.fernandez@medestore.mx";
		// 		break;
		// 	case 'Baja California':
		// 	case 'Coahuila':
		// 	case 'Jalisco':
		// 	case 'Sinaloa':
		// 	case 'Zacatecas':
		// 		$distName = "Claudia Ivette Malacara Jiménez";
		// 		$dist = "claudia.malacara@medestore.mx";
		// 		break;
		// 	case 'Chiapas':
		// 	case 'Colima':
		// 	case 'Durango':
		// 	case 'Guerrero':
		// 	case 'Morelos':
		// 	case 'Oaxaca':
		// 	case 'Puebla':
		// 	case 'Sonora':
		// 	case 'Tabasco':
		// 	case 'Tamaulipas':
		// 	case 'Tlaxcala':
		// 	case 'Yucatán':
		// 		$distName = "Daniel Ortega Arellano";
		// 		$dist = "daniel.ortega@medestore.mx";
		// 		break;
		// 	case 'Ciudad de México':
		// 	case 'Estado de México':
		// 		$distName = "Israel Estrada Guevara";
		// 		$dist = "israel.estrada@medestore.mx";
		// 		break;
		// }

		if ($state == 'Ciudad de México' || $state == 'Estado de México') {
			$distName = "Israel Estrada Guevara";
			$dist = "israel.estrada@medestore.mx";
		} else {
			$currentContact
			switch($maxInd[0] % 4) {
				case 0:
					$distName = "Alan Adair Fernández Pérez";
					$dist = "alan.fernandez@medestore.mx";
					break;
				case 1:
					$distName = "Claudia Ivette Malacara Jiménez";
					$dist = "claudia.malacara@medestore.mx";
					break;
				case 2:
					$distName = "Daniel Ortega Arellano";
					$dist = "daniel.ortega@medestore.mx";
					break;
				case 3:
					$distName = "Lourdes Rivero";
					$dist = "lulu.rivero@medestore.mx";
					break;
			}
		}

		$para = $dist;

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: noreply@medestore.mx' . "\r\n";

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
					Un contacto ha sido asignado para tu seguimiento.<br><br>
					Por favor ve detalles en Odoo lo antes posible. Recuerda tenemos el compromiso de responder en no más de 12 horas hábiles.<br><br>
					Podrás encontrar el contacto en la sección de <strong>Iniciativas</strong> dentro de Odoo con el correo $mail
				</td>
				</tr>
				<tr>
				<td colspan='2' align='center' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:7px 5px 7px 0;'><strong>Enviado el:</strong> " . date('d-m-Y H:i:s') . "</td>
				</tr>
				<tr>
				<td width='50%' align='right'>&nbsp;</td>
				<td align='left'>&nbsp;</td>
				</tr>
				</table>eba
				</body>
				</html>
				";

		mail($para, $subject, $message, $headers);
	} elseif ($section == "Ventas Consumibles") {
		if ($subject == "Interés en MONALISA") {
			// $contacto = array(
			// 	"cdmx-1" => array("nombre" => "Israel Estrada Guevara", "phone" => "5215551054351", "email" => "ml.cmx1@medestore.mx"),
			// 	"cdmx-2" => array("nombre" => "Jorge Omar Ávila", "phone" => "5215533357545", "email" => "ml.cmx2@medestore.mx"),
			// 	"edmx-1" => array("nombre" => "Israel Estrada Guevara", "phone" => "5215551054351", "email" => "ml.mex1@medestore.mx"),
			// 	"edmx-2" => array("nombre" => "Jorge Omar Ávila", "phone" => "5215533357545", "email" => "ml.mex2@medestore.mx")
			// );

			// if ($state == 'Ciudad de México') {
			// 	$custom = "Select contacto_num from contadores where contacto_nombre = 'cdmx'";
			// 	$cust = mysqli_query($connect, $custom);
			// 	$props = mysqli_fetch_array($cust);
			// 	$cdmx = "cdmx-" . $props[0];

			// 	if ($props[0] == 1) $change = 2;
			// 	else $change = 1;

			// 	$custom = "Update contadores set contacto_num = $change where contacto_nombre = 'cdmx'";
			// 	$cust = mysqli_query($connect, $custom);
			// } elseif ($state == 'Estado de México') {
			// 	$custom = "Select contacto_num from contadores where contacto_nombre = 'edmx'";
			// 	$cust = mysqli_query($connect, $custom);
			// 	$props = mysqli_fetch_array($cust);
			// 	$edmx = "edmx-" . $props[0];

			// 	if ($props[0] == 1) $change = 2;
			// 	else $change = 1;

			// 	$custom = "Update contadores set contacto_num = $change where contacto_nombre = 'edmx'";
			// 	$cust = mysqli_query($connect, $custom);
			// }

			switch ($state) {
				case 'Aguascalientes':
					$dist = "ml.agu1@medestore.mx";
					break;
				case 'Baja California':
					$dist = "ml.bcn1@medestore.mx";
					break;
				case 'Baja California Sur':
					$dist = "ml.bcs1@medestore.mx";
					break;
				case 'Campeche':
					$dist = "ml.cam1@medestore.mx";
					break;
				case 'Chiapas':
					$dist = "ml.chp1@medestore.mx";
					break;
				case 'Chihuahua':
					$dist = "ml.chh1@medestore.mx";
					break;
				case 'Ciudad de México':
					$dist = 'ml.cmx1@medestore.mx';
					// $dist = $contacto[$cdmx]["email"];
					break;
				case 'Coahuila':
					$dist = "ml.coa1@medestore.mx";
					break;
				case 'Colima':
					$dist = "ml.col1@medestore.mx";
					break;
				case 'Durango':
					$dist = "ml.dur1@medestore.mx";
					break;
				case 'Guanajuato':
					$dist = "ml.gua1@medestore.mx";
					break;
				case 'Guerrero':
					$dist = "ml.gro1@medestore.mx";
					break;
				case 'Hidalgo':
					$dist = "ml.hid1@medestore.mx";
					break;
				case 'Jalisco':
					$dist = "ml.jal1@medestore.mx";
					break;
				case 'Estado de México':
					$dist = "ml.mex1@medestore.mx";
					// $dist = $contacto[$edmx]["email"];
					break;
				case 'Michoacán':
					$dist = "ml.mic1@medestore.mx";
					break;
				case 'Morelos':
					$dist = "ml.mor1@medestore.mx";
					break;
				case 'Nayarit':
					$dist = "ml.nay1@medestore.mx";
					break;
				case 'Nuevo León':
					$dist = "ml.nle1@medestore.mx";
					break;
				case 'Oaxaca':
					$dist = "ml.oax1@medestore.mx";
					break;
				case 'Puebla':
					$dist = "ml.pue1@medestore.mx";
					break;
				case 'Querétaro':
					$dist = "ml.que1@medestore.mx";
					break;
				case 'Quintana Roo':
					$dist = "ml.roo1@medestore.mx";
					break;
				case 'San Luis Potosí':
					$dist = "ml.slp1@medestore.mx";
					break;
				case 'Sinaloa':
					$dist = "ml.sin1@medestore.mx";
					break;
				case 'Sonora':
					$dist = "ml.son1@medestore.mx";
					break;
				case 'Tabasco':
					$dist = "ml.tab1@medestore.mx";
					break;
				case 'Tamaulipas':
					$dist = "ml.tam1@medestore.mx";
					break;
				case 'Tlaxcala':
					$dist = "ml.tla1@medestore.mx";
					break;
				case 'Veracruz':
					$dist = "ml.ver1@medestore.mx";
					break;
				case 'Yucatán':
					$dist = "ml.yuc1@medestore.mx";
					break;
				case 'Zacatecas':
					$dist = "ml.zac1@medestore.mx";
					break;
				default:
					$dist = "contacto@medestore.mx";
					break;
			}

			switch ($state) {
				case 'Aguascalientes':
				case 'Guanajuato':
				case 'San Luis Potosí':
					$distName = "Kliniken";
					break;
				case 'Baja California':
					$distName = "Mónica Angélica Terreros Martínez";
					break;
				case 'Baja California Sur':
					$distName = "María del Socorro Drew Bastida";
					break;
				case 'Ciudad de México':
					// $distName = $contacto[$cdmx]["nombre"];
					$distName = "Israel Estrada Guevara";
					break;
				case 'Chihuahua':
					$distName = "Angela Julieta Porras Figueroa";
					break;
				case 'Coahuila':
				case 'Durango':
				case 'Nuevo León':
				case 'Tamaulipas':
					$distName = "Lura Medical";
					break;
				case 'Colima':
				case 'Michoacán':
				case 'Nayarit':
				case 'Puebla':
					$distName = "Medical Aesthetic Devices";
					break;
				case 'Jalisco':
					$distName = "Rocío Alhelí López Morales";
					break;
				case 'Estado de México':
					// $distName = $contacto[$edmx]["nombre"];
					$distName = "Israel Estrada Guevara";
					break;
				case 'Sonora':
					$distName = "María Guadalupe Padilla Padilla";
					break;
				default:
					$distName = "Medestore";
					break;
			}
		} elseif ($subject == "Interés en CELLMULA") {
			switch ($state) {
				case 'Aguascalientes':
					$dist = "cell.agu1@medestore.mx";
					break;
				case 'Baja California':
					$dist = "cell.bcn1@medestore.mx";
					break;
				case 'Baja California Sur':
					$dist = "cell.bcs1@medestore.mx";
					break;
				case 'Campeche':
					$dist = "cell.cam1@medestore.mx";
					break;
				case 'Chiapas':
					$dist = "cell.chp1@medestore.mx";
					break;
				case 'Chihuahua':
					$dist = "cell.chh1@medestore.mx";
					break;
				case 'Ciudad de México':
					$dist = 'cell.cmx1@medestore.mx';
					break;
				case 'Coahuila':
					$dist = "cell.coa1@medestore.mx";
					break;
				case 'Colima':
					$dist = "cell.col1@medestore.mx";
					break;
				case 'Durango':
					$dist = "cell.dur1@medestore.mx";
					break;
				case 'Guanajuato':
					$dist = "cell.gua1@medestore.mx";
					break;
				case 'Guerrero':
					$dist = "cell.gro1@medestore.mx";
					break;
				case 'Hidalgo':
					$dist = "cell.hid1@medestore.mx";
					break;
				case 'Jalisco':
					$dist = "cell.jal1@medestore.mx";
					break;
				case 'Estado de México':
					$dist = "cell.mex1@medestore.mx";
					break;
				case 'Michoacán':
					$dist = "cell.mic1@medestore.mx";
					break;
				case 'Morelos':
					$dist = "cell.mor1@medestore.mx";
					break;
				case 'Nayarit':
					$dist = "cell.nay1@medestore.mx";
					break;
				case 'Nuevo León':
					$dist = "cell.nle1@medestore.mx";
					break;
				case 'Oaxaca':
					$dist = "cell.oax1@medestore.mx";
					break;
				case 'Puebla':
					$dist = "cell.pue1@medestore.mx";
					break;
				case 'Querétaro':
					$dist = "cell.que1@medestore.mx";
					break;
				case 'Quintana Roo':
					$dist = "cell.roo1@medestore.mx";
					break;
				case 'San Luis Potosí':
					$dist = "cell.slp1@medestore.mx";
					break;
				case 'Sinaloa':
					$dist = "cell.sin1@medestore.mx";
					break;
				case 'Sonora':
					$dist = "cell.son1@medestore.mx";
					break;
				case 'Tabasco':
					$dist = "cell.tab1@medestore.mx";
					break;
				case 'Tamaulipas':
					$dist = "cell.tam1@medestore.mx";
					break;
				case 'Tlaxcala':
					$dist = "cell.tla1@medestore.mx";
					break;
				case 'Veracruz':
					$dist = "cell.ver1@medestore.mx";
					break;
				case 'Yucatán':
					$dist = "cell.yuc1@medestore.mx";
					break;
				case 'Zacatecas':
					$dist = "cell.zac1@medestore.mx";
					break;
				default:
					$dist = "contacto@medestore.mx";
					break;
			}

			switch ($state) {
				case 'Aguascalientes':
				case 'Guanajuato':
				case 'San Luis Potosí':
					$distName = "Kliniken";
					break;
				default:
					$distName = "Medestore";
					break;
			}
		}
	}

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: ' . $fname . ' ' . $lname . ' <' . $mail . '>' . "\r\n";
	if ($distName != "Medestore") $headers .= 'Cc: ventas.medestore@medestore.odoo.com, contacto@medestore.mx' . "\r\n";
	else $headers .= 'Cc: ventas.medestore@medestore.odoo.com' . "\r\n";

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
			<td colspan='2' align='center' valign='top'style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Este lead fue asignado automáticamente a " . $distName . " (" . $dist . ")</td>
			</tr>
			<tr>
			<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Nombre:</strong></td>
			<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>" . $fname . " " . $lname . "</td>
			</tr>
			<tr>
			<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Teléfono:</strong></td>
			<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>" . $phone . "</td>
			</tr>
			<tr>
			<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Email:</strong></td>
			<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>" . $mail . "</td>
			</tr>
			<tr>
			<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Especialidad:</strong></td>
			<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>" . $esp . "</td>
			</tr>
			<tr>
			<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Estado:</strong></td>
			<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>" . $state . "</td>
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

	if ($section == "Ventas Equipos") $para = "ventas.medestore@medestore.odoo.com";
	else $para = $dist;

	if (!mail($para, $subject, $message, $headers)) $error_code = 'EC-1001';
} else $error_code = 'EC-1002';

if ($error_code == '') echo "<body><link href='https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap' rel='stylesheet'><a href='/$localUrl' id='returnLink'>< Regresar</a><div><div><img src='https://www.medestore.mx/assets/img/logo_medestore-color.png' alt='Logo Medestore'id='medestoreLogo'></div><h1>Mensaje Enviado</h1><h4>Gracias por ponerte en contacto con nosotros.<br>En breve uno de nuestros especialistas se comunicará contigo.<br>O envía mensaje a tu vendedor asignado</h4><a href='$whatsAppLink' target='_blank' id='whatsApp'>Contacto <img src='assets/img/whatsapp-icon.png' alt='WhatsApp'id='whatsAppIcon'></a></div><style>* {font-family: Raleway, sans-serif;}body {margin: 0;padding: 0;background-color: #fff;background-size: cover;height: 100vh;width: 100vw;}body>div {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);display: block;text-align: center;width: 85%;}#returnLink {display: block;position: absolute;top: 1.25rem;left: 1.25rem;text-decoration: none;font-weight: 700;}#medestoreLogo {width: 25rem;display: inline-block;margin: 0 0 5rem;}h1 {font-size: 50px;font-weight: 700;text-transform: uppercase;display: inline-block;color: #000;margin: 0 0 1.5rem;}h4 {font-size: 32px;font-weight: 400;margin: 0;}#whatsApp {display: inline-flex;align-items: center;padding: 1rem 2rem;background-color: #0FC244;margin-top: 1rem;color: #fff;border-radius: 15px;text-decoration: none;font-weight: 700;}#whatsAppIcon {width: 25px;display: inline-block;margin-left: 10px;}</style></body>";
else echo "<body><link href='https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap' rel='stylesheet'><div><div><img src='https://www.medestore.mx/assets/img/logo_medestore-color.png' alt='Logo Medestore'></div><h1>Ocurrió un problema</h1><h4>Por favor, vuelve a intentar mandar tu mensaje. $error_code</h4></div><style>body{margin: 0;padding: 0;background-color: #fff;background-size: cover;height: 100vh;width: 100vw;}body>div {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);display: block;text-align: center;width: 85%;}img{width: 25rem;display: inline-block;margin: 0 0 5rem;}h1{font-family: Raleway, sans-serif;font-size: 50px;font-weight: 700;text-transform: uppercase;display: inline-block;color: #000;margin: 0 0 1.5rem;}h4{font-size: 32px;font-family: Raleway, sans-serif;font-weight: 400;margin: 0;}</style><meta http-equiv='refresh' content='2.5;URL=$url'/></body>";
?>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-33467298-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-33467298-1');
</script>
