    <meta http-equiv="refresh" content="0;URL=confirmacion.html" />
         
                   	<?php
                   	    $nombre = $_REQUEST['first_name'];
                   	    $apellido = $_REQUEST['last_name'];
                   	    $mail = $_REQUEST['subscriber_email'];
                   	    $tel = $_REQUEST['custom_3'];
                   	    $especialidad = $_REQUEST['custom_1'];
                   	    $estado = $_REQUEST['custom_2'];
                   	    $subjet = $_REQUEST['subjet'];
                        
						$header = "From: " . $mail . "\r\n";
                        $header .= "Reply-To: ". $mail . "\r\n";
						//$header = 'De: ' . $mail . " \r\n";
						$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
						$header .= "Mime-Version: 1.0 \r\n";
						$header .= "Content-Type: text/plain; charset=UTF-8";

						$mensaje = "Nombre: " . $nombre . " " . $apellido . " \r\n";
						$mensaje .= "Teléfono: " . $tel . " \r\n";
						$mensaje .= "Mail: " . $mail . " \r\n";
						$mensaje .= "Especialidad: " . $especialidad . " \r\n";
						$mensaje .= "Estado: " . $estado . " \r\n";
						
						$mensaje .= "Enviado el ".date('d-m-Y H:i:s');

						$para = 'yellowpathwd@gmail.com';
						$asunto = $subjet;

						if(mail($para, $asunto, $mensaje, $header))
						  {
							  echo'<br><br><br><br><br>';
							  echo'<h2 align="center">ENVIANDO MENSAJE</h2>';
						  }
						else	 
					 	  {	  
						  	  echo'<br><br><br><br><br>';
						  	  echo'<h2 align="center">Error al enviar el formulario. Por favor, intentalo de nuevo más tarde.</h2>';
						  }					    
 
					 ?>
                               
           			