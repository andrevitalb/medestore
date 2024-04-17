    <meta http-equiv="refresh" content="0;URL=index.php" />
         
                   	<?php
                   		
                   	    $nombre = $_REQUEST['contactFName'];
                   	    $apellido = $_REQUEST['contactLName'];
                   	    $mail = $_REQUEST['contactEmail'];
                   	    $tel = $_REQUEST['contactPhone'];
                   	    $estado = $_REQUEST['contactState'];
                   	    $especialidad = $_REQUEST['contactSpecialty'];
                   	    
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

						$para = 'yellowpathmkt2@gmail.com,bautistadaniel@hotmail.com';
						$asunto = 'CELLMULA - Aniversario14';

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
                               
           			