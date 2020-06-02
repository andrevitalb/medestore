<?php
   	$hostname = "localhost";
    $username = "intracel_mluser";
    $password = "y3ll0wp4thyellow";
    $databaseName = "intracel_controlContacto";

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
	mysqli_set_charset ($connect, "utf8");
	date_default_timezone_set('America/Mexico_City');

	$section = $_POST['contactDpmnt'];
	$subject = $_POST['contactSubject'];
	$url = $_POST['localUrl'];

	$state = $_POST['contactState'];
	$fname = $_POST['contactFName'];
	$lname = $_POST['contactLName'];
	$mail = $_POST['contactEmail'];
	$phone = $_POST['contactPhone'];
	$esp = $_POST['contactSpecialty'];

	if(isset($_POST['contactSubscribe'])) $subscribe = 1;
	else $subscribe = 0;

	$queryMax = "Select MAX(contactos_ID) from contactos";
    $takeMax = mysqli_query($connect, $queryMax);
    $maxInd = mysqli_fetch_array($takeMax);
    $maxInd[0] += 1;

    $queryContact = "Insert into contactos (contactos_ID, contactos_nombre, contactos_apellido, contactos_correo, contactos_telefono, contactos_estado, contactos_especialidad, contactos_suscrito, contactos_registro) values ($maxInd[0],";
    $queryContact .= '"'.$fname.'","'.$lname.'",';
    $queryContact .= "'$mail','$phone','$state','$esp',$subscribe,CURDATE())";
    $resultContact = mysqli_query($connect, $queryContact);

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
			case 'Zacatecas':
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

		mail($para, $subject, $message, $headers);
	}
	elseif($section == "Ventas Consumibles"){
		if($subject == "Interés en MONALISA"){
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

			    if($props[0] == 1) $change = 2;
			    else $change = 1;

			    $custom = "Update contadores set contacto_num = $change where contacto_nombre = 'cdmx'";
			    $cust = mysqli_query($connect, $custom);
			}
			elseif($state == 'Estado de México') {
		    	$custom = "Select contacto_num from contadores where contacto_nombre = 'edmx'";
			    $cust = mysqli_query($connect, $custom);
			    $props = mysqli_fetch_array($cust);
			    $edmx = "edmx-".$props[0];

			    if($props[0] == 1) $change = 2;
			    else $change = 1;

			    $custom = "Update contadores set contacto_num = $change where contacto_nombre = 'edmx'";
			    $cust = mysqli_query($connect, $custom);
			}

			switch($state){
	            case 'Aguascalientes':$dist = "ml.agu1@medestore.mx";break;
	            case 'Baja California':$dist = "ml.bcn1@medestore.mx";break;
	            case 'Baja California Sur':$dist = "ml.bcs1@medestore.mx";break;
	            case 'Campeche':$dist = "ml.cam1@medestore.mx";break;
	            case 'Chiapas':$dist = "ml.chp1@medestore.mx";break;
	            case 'Chihuahua':$dist = "ml.chh1@medestore.mx";break;
	            case 'Ciudad de México':$dist = $contacto[$cdmx]["email"];break;
	            case 'Coahuila':$dist = "ml.coa1@medestore.mx";break;
	            case 'Colima':$dist = "ml.col1@medestore.mx";break;
	            case 'Durango':$dist = "ml.dur1@medestore.mx";break;
	            case 'Guanajuato':$dist = "ml.gua1@medestore.mx";break;
	            case 'Guerrero':$dist = "ml.gro1@medestore.mx";break;
	            case 'Hidalgo':$dist = "ml.hid1@medestore.mx";break;
	            case 'Jalisco':$dist = "ml.jal1@medestore.mx";break;
	            case 'Estado de México':$dist = $contacto[$edmx]["email"];break;
	            case 'Michoacán':$dist = "ml.mic1@medestore.mx";break;
	            case 'Morelos':$dist = "ml.mor1@medestore.mx";break;
	            case 'Nayarit':$dist = "ml.nay1@medestore.mx";break;
	            case 'Nuevo León':$dist = "ml.nle1@medestore.mx";break;
	            case 'Oaxaca':$dist = "ml.oax1@medestore.mx";break;
	            case 'Puebla':$dist = "ml.pue1@medestore.mx";break;
	            case 'Querétaro':$dist = "ml.que1@medestore.mx";break;
	            case 'Quintana Roo':$dist = "ml.roo1@medestore.mx";break;
	            case 'San Luis Potosí':$dist = "ml.slp1@medestore.mx";break;
	            case 'Sinaloa':$dist = "ml.sin1@medestore.mx";break;
	            case 'Sonora':$dist = "ml.son1@medestore.mx";break;
	            case 'Tabasco':$dist = "ml.tab1@medestore.mx";break;
	            case 'Tamaulipas':$dist = "ml.tam1@medestore.mx";break;
	            case 'Tlaxcala':$dist = "ml.tla1@medestore.mx";break;
	            case 'Veracruz':$dist = "ml.ver1@medestore.mx";break;
	            case 'Yucatán':$dist = "ml.yuc1@medestore.mx";break;
	            case 'Zacatecas':$dist = "ml.zac1@medestore.mx";break;
	            default:$dist = "contacto@medestore.mx";break;
	        }

	        switch($state){
	            case 'Aguascalientes':
	            case 'Guanajuato':
	            case 'San Luis Potosí':
	                $distName = "Kliniken";
	            break;
	            case 'Baja California':$distName = "Silvia Fematt";break;
	            case 'Baja California Sur':$distName = "María del Socorro Drew Bastida";break;
	            case 'Ciudad de México':$distName = $contacto[$cdmx]["nombre"];break;
	            case 'Chihuahua':$distName = "Angela Julieta Porras Figueroa";break;
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
	            case 'Hidalgo':$distName = $contacto["cdmx-2"]["nombre"];break;
	            case 'Jalisco':$distName = "Rocío Alhelí López Morales";break;
	            case 'Estado de México':$distName = $contacto[$edmx]["nombre"];break;
	            case 'Sonora':$distName = "María Guadalupe Padilla Padilla";break;
	            case 'Zacatecas':$distName = $contacto["cdmx-2"]["nombre"];break;
	            default:$distName = "Medestore";break;
	        }
	    }
	    else {
	    	switch($state){
	            default:$dist = "contacto@medestore.mx";break;
	        }

	        switch($state){
	            default:$distName = "Medestore";break;
	        }
	    }
    }

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: ' .$fname. ' ' .$lname. ' <' .$mail. '>' . "\r\n";
	if($section == "Ventas Consumibles" && $distName != "Medestore") $headers .= 'Cc: ventas.consumibles@medestore.odoo.com, contacto@medestore.mx'."\r\n";
	else if($section == "Ventas Consumibles" && $distName == "Medestore") $headers .= 'Cc: ventas.consumibles@medestore.odoo.com'."\r\n";
	else $headers .= 'Cc: contacto@medestore.mx'."\r\n";

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

	if($section == "Ventas Equipos") $para = "ventas@medestore.odoo.com";
	else $para = $dist;

	if(mail($para, $subject, $message, $headers)) {
		echo"<body><link href='https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap' rel='stylesheet'><div><div><img src='https://www.medestore.mx/assets/img/logo_medestore-color.png' alt='Logo Medestore'></div><h1> Mensaje Enviado</h1><h4>Gracias por ponerte en contacto con nosotros.<br> En breve uno de nuestros especialistas te contactará</h4></div><style>body{margin: 0;padding: 0;background-color: #fff;background-size: cover;height: 100vh;width: 100vw;}body>div {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);display: block;text-align: center;width: 85%;}img{width: 25rem;display: inline-block;margin: 0 0 5rem;}h1{font-family: Raleway, sans-serif;font-size: 50px;font-weight: 700;text-transform: uppercase;display: inline-block;color: #000;margin: 0 0 1.5rem;}h4{font-size: 32px;font-family: Raleway, sans-serif;font-weight: 400;margin: 0;}</style></body><meta http-equiv='refresh' content='2.5;URL=$url'/>";
		
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: ' .$fname. ' ' .$lname. ' <' .$mail. '>' . "\r\n";

		mail("yellowpathwd@gmail.com", $subject, $message, $headers);
	}
	else echo"<body><link href='https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap' rel='stylesheet'><div><div><img src='https://www.medestore.mx/assets/img/logo_medestore-color.png' alt='Logo Medestore'></div><h1>Ocurrió un problema</h1><h4>Por favor, vuelve a intentar mandar tu mensaje.</h4></div><style>body{margin: 0;padding: 0;background-color: #fff;background-size: cover;height: 100vh;width: 100vw;}body>div {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);display: block;text-align: center;width: 85%;}img{width: 25rem;display: inline-block;margin: 0 0 5rem;}h1{font-family: Raleway, sans-serif;font-size: 50px;font-weight: 700;text-transform: uppercase;display: inline-block;color: #000;margin: 0 0 1.5rem;}h4{font-size: 32px;font-family: Raleway, sans-serif;font-weight: 400;margin: 0;}</style></body><meta http-equiv='refresh' content='2.5;URL=$url'/>";
?>