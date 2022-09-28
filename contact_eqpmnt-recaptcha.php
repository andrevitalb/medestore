<?php
	$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify'; 
	$recaptcha_secret = '6LffOdUZAAAAAINm-uzro-n2Q4Io6QY_y1h2SKbN'; 
	$recaptcha_response = $_POST['recaptcha_response']; 
	$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response); 
	$recaptcha = json_decode($recaptcha); 

	if($recaptcha->score >= 0.7){
		$hostname = "localhost";
	    $username = "intracel_mluser";
	    $password = "y3ll0wp4thyellow";
	    $databaseName = "intracel_controlContacto";

	    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
		mysqli_set_charset ($connect, "utf8");
		date_default_timezone_set('America/Mexico_City');

		$fname = $_REQUEST['first_name'];
		$lname = $_REQUEST['last_name'];
		$subject = $_REQUEST['contactSubject'];
		$mail = $_REQUEST['subscriber_email'];
		$phone = $_REQUEST['custom_3'];
		$state = $_REQUEST['custom_2'];
		$esp = $_REQUEST['custom_1'];

		$section = $_REQUEST['dpmtSection'];
		$url = $_REQUEST['localUrl'];
		if($state != "Fuera de México"){
			if($section == "Ventas Equipos"){
				switch($state){
					case 'Aguascalientes':
					case 'Baja California Sur':
					case 'Guanajuato':
					case 'Michoacán':
					case 'Nuevo León':
					case 'Nayarit':
					case 'Quintana Roo':
					case 'San Luis Potosí':
						$distName = "Alan Adair Fernández Pérez";
						$dist = "alan.fernandez@medestore.mx";
					break;
					case 'Baja California':
					case 'Coahuila':
					case 'Jalisco':
					case 'Sinaloa':
						$distName = "Claudia Ivette Malacara Jiménez";
						$dist = "claudia.malacara@medestore.mx";
					break;
					case 'Campeche':
					case 'Chihuahua':
					case 'Colima':
					case 'Durango':
					case 'Sonora':
					case 'Tamaulipas':
					case 'Tlaxcala':
						$distName = "Daniel Ortega Arellano";
						$dist = "daniel.ortega@medestore.mx";
					break;
					case 'Chiapas':
					case 'Ciudad de México':
					case 'Guerrero':
					case 'Hidalgo':
					case 'Estado de México':
					case 'Morelos':
					case 'Oaxaca':
					case 'Puebla':
					case 'Querétaro':
					case 'Tabasco':
					case 'Veracruz':
					case 'Yucatán':
						$distName = "Israel Estrada Guevara";
						$dist = "israel.estrada@medestore.mx";
					break;
				}

				$para = $dist;

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

				mail('prueba56@mailinator.com', $subject, $message, $headers);
			}
			else if($section == "Ventas Consumibles"){
				$contacto = array(
			        "cdmx-1"=>array("nombre"=>"Israel Estrada Guevara", "phone"=>"5215551054351", "email"=>"ml.cmx1@medestore.mx"),
			        "cdmx-2"=>array("nombre"=>"Jorge Omar Ávila", "phone"=>"5215533357545", "email"=>"ml.cmx2@medestore.mx"),
			        "edmx-1"=>array("nombre"=>"Israel Estrada Guevara", "phone"=>"5215551054351", "email"=>"ml.mex1@medestore.mx"),
			        "edmx-2"=>array("nombre"=>"Jorge Omar Ávila", "phone"=>"5215533357545", "email"=>"ml.mex2@medestore.mx")
			    );

			    if($state == 'Ciudad de México') {
			    	$custom = "Select contacto_num from contadores where contacto_nombre = 'cdmx'";
				    $cust = mysqli_query($connect, $custom);
				    $props = mysqli_fetch_array($cust);
				    $cdmx = "cdmx-".$props[0];

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
				    $edmx = "edmx-".$props[0];

					$custom = "Select contacto_num from contadores where contacto_nombre = 'edmx'";
				    $cust = mysqli_query($connect, $custom);
				    $props = mysqli_fetch_array($cust);

				    if($props[0] == 1) $change = 2;
				    else $change = 1;

				    $custom = "Update contadores set contacto_num = $change where contacto_nombre = 'edmx'";
				    $cust = mysqli_query($connect, $custom);
				}
						
				switch($state){
		            case 'Aguascalientes':$dist = "ml.agu1@medestore.mx";break;
		            case 'Coahuila':$dist = "ml.coa1@medestore.mx";break;
		            case 'Colima':$dist = "ml.col1@medestore.mx";break;
		            case 'Durango':$dist = "ml.dur1@medestore.mx";break;
		            case 'Guanajuato':$dist = "ml.gua1@medestore.mx";break;
		            case 'Michoacán':$dist = "ml.mic1@medestore.mx";break;
		            case 'Nayarit':$dist = "ml.nay1@medestore.mx";break;
		            case 'Nuevo León':$dist = "ml.nle1@medestore.mx";break;
		            case 'San Luis Potosí':$dist = "ml.slp1@medestore.mx";break;
		            case 'Tamaulipas':$dist = "ml.tam1@medestore.mx";break;
		        }

		        switch($state){
		            case 'Aguascalientes':
		            case 'Guanajuato':
		            case 'San Luis Potosí':
		                $distName = "Kliniken";
		            break;
		            case 'Baja California':
		                $distName = "Silvia Fematt";
		                $dist = "ml.bcn1@medestore.mx";
		            break;
		            case 'Baja California Sur':
		                $distName = "María del Socorro Drew Bastida";
		                $dist = "ml.bcs1@medestore.mx";
		            break;
		            case 'Ciudad de México':
		                $distName = $contacto[$cdmx]["nombre"];
		                $dist = $contacto[$cdmx]["email"];
		            break;
		            case 'Chihuahua':
		                $distName = "Angela Julieta Porras Figueroa";
		                $dist = "ml.chh1@medestore.mx";
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
		                $distName = "Medical Aesthetic Devices";
		            break;
		            case 'Hidalgo':
		                $distName = $contacto["cdmx-2"]["nombre"];
		                $dist = "ml.hid1@medestore.mx";
		            break;
		            case 'Jalisco':
		                $distName = "Rocío Alhelí López Morales";
		                $dist = "ml.jal1@medestore.mx";
		            break;
		            case 'Estado de México':
		                $distName = $contacto[$edmx]["nombre"];
		                $dist = $contacto[$edmx]["email"];
		            break;
		            case 'Sinaloa':
		                $distName = "Karent Benítez";
		                $dist = "ml.sin1@medestore.mx";
		            break;
		            case 'Sonora':
		                $distName = "María Guadalupe Padilla Padilla";
		                $dist = "ml.son1@medestore.mx";
		            break;
		            case 'Zacatecas':
		                $distName = $contacto["cdmx-2"]["nombre"];
		                $dist = "ml.zac1@medestore.mx";
		            break;
		            default:
		                $distName = "Medestore";
		                $dist = "bautistadaniel@hotmail.com";
		            break;
		        }
		    }
		}
		else {
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
				Estimado(a) $fname $lname:<br><br>
				Le informamos que MedeStore únicamente opera en el mercado mexicano. Sin embargo, si le interesa cualquier producto, se puede poner en contacto con cualquiera de nuestros cuatro proveedores para que le puedan brindar atención.<br><br>
				A continuación, le proporcionamos los enlaces a la plataforma web de cada uno:<br><br>
				<a href = 'www.jeisys.com' target = '_blank' style = 'font-color: #1D9ACE'>www.jeisys.com</a><br>
				<a href = 'www.esglobal.co.kr/en/' target = '_blank' style = 'font-color: #1D9ACE'>www.esglobal.co.kr/en/</a><br>
				<a href = 'www.monalisafiller.com' target = '_blank' style = 'font-color: #1D9ACE'>www.monalisafiller.com</a><br>
				<a href = 'www.mycw.co.kr' target = '_blank' style = 'font-color: #1D9ACE'>www.mycw.co.kr</a><br>
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

			$para = $mail;

			mail('prueba56@mailinator.com', $subject, $message, $headers);
		}

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: '.$fname.' '.$lname.' <'.$mail.'>'."\r\n";
		if($state != "Fuera de México"){
			if($section == "Ventas Consumibles" && $distName != "Medestore") $headers .= 'Cc: ventas.consumibles@medestore.odoo.com, bautistadaniel@hotmail.com'."\r\n";
			else if($section == "Ventas Consumibles" && $distName == "Medestore") $headers .= 'Cc: ventas.consumibles@medestore.odoo.com'."\r\n";
			else $headers .= 'Cc: bautistadaniel@hotmail.com'."\r\n";
		}

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
		</tr>";

		if($state != "Fuera de México") $message .= "<tr>
		<td colspan='2' align='center' valign='top'style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Este lead fue asignado automáticamente a ".$distName." (".$dist.")</td>
		</tr>";

		$message .= "<tr>
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
		<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$esp."</td>
		</tr>
		<tr>
		<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;'><strong>Estado:</strong></td>
		<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$state."</td>
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

		if($state == "Fuera de México") $para = "bautistadaniel@hotmail.com";
		else {
			if($section == "Ventas Equipos") $para = "ventas@medestore.odoo.com";
			else $para = $dist;
		}

		if(mail('prueba56@mailinator.com', $subject, $message, $headers))  echo'<body><link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet"><div><div><img src="https://www.medestore.mx/assets/img/logo_medestore-color.png" alt="Logo Medestore"></div><h1>Mensaje Enviado</h1><h4>Gracias por ponerte en contacto con nosotros.<br> En breve uno de nuestros especialistas te contactará</h4></div><style>body{margin: 0;padding: 0;background-color: #fff;background-size: cover;height: 100vh;width: 100vw;}body>div {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);display: block;text-align: center;width: 85%;}img{width: 25rem;display: inline-block;margin: 0 0 5rem;}h1{font-family: Raleway, sans-serif;font-size: 50px;font-weight: 700;text-transform: uppercase;display: inline-block;color: #000;margin: 0 0 1.5rem;}h4{font-size: 32px;font-family: Raleway, sans-serif;font-weight: 400;margin: 0;}</style></body><meta http-equiv="refresh" content="2.5;URL='.$url.'"/>';
		else echo'<body><link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet"><div><div><img src="https://www.medestore.mx/assets/img/logo_medestore-color.png" alt="Logo Medestore"></div><h1>Ocurrió un problema</h1><h4>Por favor, vuelve a intentar mandar tu mensaje.</h4></div><style>body{margin: 0;padding: 0;background-color: #fff;background-size: cover;height: 100vh;width: 100vw;}body>div {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);display: block;text-align: center;width: 85%;}img{width: 25rem;display: inline-block;margin: 0 0 5rem;}h1{font-family: Raleway, sans-serif;font-size: 50px;font-weight: 700;text-transform: uppercase;display: inline-block;color: #000;margin: 0 0 1.5rem;}h4{font-size: 32px;font-family: Raleway, sans-serif;font-weight: 400;margin: 0;}</style></body><meta http-equiv="refresh" content="2.5;URL='.$url.'"/>';
	} else echo'<body><link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet"><div><div><img src="https://www.medestore.mx/assets/img/logo_medestore-color.png" alt="Logo Medestore"></div><h1>Ocurrió un problema</h1><h4>Por favor, vuelve a intentar mandar tu mensaje.</h4></div><style>body{margin: 0;padding: 0;background-color: #fff;background-size: cover;height: 100vh;width: 100vw;}body>div {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);display: block;text-align: center;width: 85%;}img{width: 25rem;display: inline-block;margin: 0 0 5rem;}h1{font-family: Raleway, sans-serif;font-size: 50px;font-weight: 700;text-transform: uppercase;display: inline-block;color: #000;margin: 0 0 1.5rem;}h4{font-size: 32px;font-family: Raleway, sans-serif;font-weight: 400;margin: 0;}</style></body><meta http-equiv="refresh" content="2.5;URL='.$url.'"/>'; 
?>