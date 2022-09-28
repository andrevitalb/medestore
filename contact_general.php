<meta http-equiv="refresh" content="2.5;URL=contacto.php"/>
<?php
	$error_code = '';
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
		mysqli_set_charset ($connect, "utf8");
		date_default_timezone_set('America/Mexico_City');

		$fname = $_REQUEST['contactFname'];
		$lname = $_REQUEST['contactLname'];
		$subject = $_REQUEST['contactSubject'];
		$mail = $_REQUEST['contactEmail'];
		$phone = $_REQUEST['contactTelefono'];
		$msg = $_REQUEST['contactMessage'];
		$spe = $_REQUEST['contactSpeciality'];

		$distName = $_REQUEST['sellerName'];
		$dist = $_REQUEST['sellerEmail'];
		$section = $_REQUEST['dpmtSection'];
		$state = $_REQUEST['selectedState'];

		$para = $dist;

		if($section == "Servicio Técnico" || $section == "Servicio al Cliente") $title = "Contacto " . $section;
		else $title = $subject;

		if($section == "Ventas Consumibles"){
			if($state == 'Ciudad de México') {
				$custom = "Select contacto_num from contadores where contacto_nombre = 'cdmx'";
				$cust = mysqli_query($connect, $custom);
				$props = mysqli_fetch_array($cust);

				if($props[0] == 1) $change = 2;
				else $change = 1;

				$custom = "Update contadores set contacto_num = $change where contacto_nombre = 'cdmx'";
				$cust = mysqli_query($connect, $custom);
			}
			else if($state == 'Estado de México') {
				$custom = "Select contacto_num from contadores where contacto_nombre = 'edmx'";
				$cust = mysqli_query($connect, $custom);
				$props = mysqli_fetch_array($cust);

				if($props[0] == 1) $change = 2;
				else $change = 1;

				$custom = "Update contadores set contacto_num = $change where contacto_nombre = 'edmx'";
				$cust = mysqli_query($connect, $custom);
			}
		}

		if($section == "Ventas Equipos"){
			if($state == 'Michoacán') {
				$custom = "Select contacto_num from contadores where contacto_nombre = 'michoacan'";
				$cust = mysqli_query($connect, $custom);
				$props = mysqli_fetch_array($cust);

				if($props[0] == 1) $change = 2;
				else $change = 1;

				$custom = "Update contadores set contacto_num = $change where contacto_nombre = 'michoacan'";
				$cust = mysqli_query($connect, $custom);
			}

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
				Un contacto ha sido asignado para tu seguimiento.<br><br>
				Por favor ve detalles en Odoo lo antes posible. Recuerda tenemos el compromiso de responder en no más de 12 horas hábiles.<br><br>
				Podrás encontrar el contacto en la sección de <strong>Iniciativas</strong> dentro de Odoo con el correo $mail
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
			mail($para, $subject, $message, $headers);
		}
		
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: '.$fname.' '.$lname.' <'.$mail.'>'."\r\n";
		if($section == "Ventas Equipos" || $section == "Ventas Consumibles") {
			if($section == "Ventas Consumibles") $headers .= 'Cc: ventas@medestore.odoo.com, ventas.consumibles@medestore.odoo.com'."\r\n";
			else $headers .= $headers .= 'Cc: ventas@medestore.odoo.com'."\r\n";
		}

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
		<td colspan='2' align='center' valign='top'style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Este lead fue asignado automáticamente a ".$distName." (".$dist.")</td>
		</tr>
		<tr>
		<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Nombre:</strong></td>
		<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$fname." ".$lname."</td>
		</tr>
		<tr>
		<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Teléfono:</strong></td>
		<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$phone."</td>
		</tr>
		<tr>
		<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Email:</strong></td>
		<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$mail."</td>
		</tr>
		<tr>
		<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Especialidad:</strong></td>
		<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$spe."</td>
		</tr>
		<tr>
		<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Estado:</strong></td>
		<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$state."</td>
		</tr>
		<tr>
		<td align='right' valign='top' style='border-top:1px solid #dfdfdf; border-bottom:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Mensaje:</strong></td>
		<td align='left' valign='top' style='border-top:1px solid #dfdfdf; border-bottom:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".nl2br($msg)."</td>
		</tr>
		<tr>
		<td colspan='2' align='center' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Enviado el:</strong> ".date('d-m-Y H:i:s')."</td>
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

		if($section == "Ventas Equipos") $para = "ventas.equipos@medestore.odoo.com";
		else if($section == "Servicio Técnico") $para = "soporte.servicio.tecnico@medestore.odoo.com";
		else if($section == "Servicio al Cliente") $para = "servicio.cliente@medestore.odoo.com";
		else $para = $dist;

		if(!mail($para, $subject, $message, $headers)) $error_code = 'EC-1001'
	} else $error_code = 'EC-1002'

	if($error_code == '') echo'<body><link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet"><div><div><img src="https://www.medestore.mx/assets/img/logo_medestore-color.png" alt="Logo Medestore"></div><h1>Mensaje Enviado</h1><h4>Gracias por ponerte en contacto con nosotros.<br> En breve uno de nuestros especialistas te contactará</h4></div><style>body{margin: 0;padding: 0;background-color: #fff;background-size: cover;height: 100vh;width: 100vw;}body>div {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);display: block;text-align: center;width: 85%;}img{width: 25rem;display: inline-block;margin: 0 0 5rem;}h1{font-family: Raleway, sans-serif;font-size: 50px;font-weight: 700;text-transform: uppercase;display: inline-block;color: #000;margin: 0 0 1.5rem;}h4{font-size: 32px;font-family: Raleway, sans-serif;font-weight: 400;margin: 0;}</style></body>';
	else echo "<body><link href='https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap' rel='stylesheet'><div><div><img src='https://www.medestore.mx/assets/img/logo_medestore-color.png' alt='Logo Medestore'></div><h1>Ocurrió un problema</h1><h4>Por favor, vuelve a intentar mandar tu mensaje. $error_code</h4></div><style>body{margin: 0;padding: 0;background-color: #fff;background-size: cover;height: 100vh;width: 100vw;}body>div {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);display: block;text-align: center;width: 85%;}img{width: 25rem;display: inline-block;margin: 0 0 5rem;}h1{font-family: Raleway, sans-serif;font-size: 50px;font-weight: 700;text-transform: uppercase;display: inline-block;color: #000;margin: 0 0 1.5rem;}h4{font-size: 32px;font-family: Raleway, sans-serif;font-weight: 400;margin: 0;}</style></body>";
?>