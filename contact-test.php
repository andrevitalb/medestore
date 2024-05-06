<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="theme-color" content="#333" />
		<title>Contact Test | Medestore</title>

		<!-- Favicons -->
		<link rel="shortcut icon" href="assets/img/favicon.png?v=3" />

		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
		<link rel="stylesheet" href="assets/css/preload.css" />
		<link rel="stylesheet" href="assets/css/plugins.css" />
		<link rel="stylesheet" href="assets/css/simple-line-icons.css" />
		<link rel="stylesheet" href="assets/css/fullpage.css" />
		<!--<link rel="stylesheet" href="assets/css/examples.css">-->
		<link rel="stylesheet" href="assets/css/style.css" />
		<link rel="stylesheet" href="assets/css/media.css" />
		<link rel="stylesheet" href="assets/css/contact_styles.css" />
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<style>
		@media (max-width: 500px) {
			#whatsapp-chat_wrapper {
				display: none;
			}
		}
		</style>
	</head>
	<body>
		<div id="ms-preload" class="ms-preload">
			<div id="status">
				<div class="spinner">
					<div class="dot1"></div>
					<div class="dot2"></div>
				</div>
			</div>
		</div>
		<div class="ms-site-container">
			<?php include('menu_superior.php'); ?>

			<div id="wrapper">
				<div class="section fp-auto-height">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-6 mt-6">
								<div class="text-center">
									<h4>QUIERO MÁS INFORMACIÓN</h4>
								</div>
								<form id="form-equipo-blue-eva" method="post" action="contact-equipment--test.php"
											class="container-fluid contactEqpmnt">
									<div class="row" style="display: none">
										<input type="text" name="subject" id="contactSubject" value="Contact Test" />
										<input type="text" name="whatsAppLink" id="whatsAppLink" />
										<input type="text" name="localUrl" id="localUrl" value="contact-test.php" />
									</div>
									<div class="row">
										<div class="col-sm-12">
											<label for="contactState">Estado</label>
										</div>
										<div class="col-sm-12">
											<select name="state" id="contactState" required>
												<option disabled selected>Selecciona uno</option>
												<option value="Aguascalientes">Aguascalientes</option>
												<option value="Baja California">Baja California</option>
												<option value="Baja California Sur">Baja California Sur</option>
												<option value="Campeche">Campeche</option>
												<option value="Chiapas">Chiapas</option>
												<option value="Chihuahua">Chihuahua</option>
												<option value="Ciudad de M&eacute;xico">Ciudad de M&eacute;xico</option>
												<option value="Coahuila">Coahuila</option>
												<option value="Colima">Colima</option>
												<option value="Durango">Durango</option>
												<option value="Estado de M&eacute;xico">Estado de M&eacute;xico</option>
												<option value="Guanajuato">Guanajuato</option>
												<option value="Guerrero">Guerrero</option>
												<option value="Hidalgo">Hidalgo</option>
												<option value="Jalisco">Jalisco</option>
												<option value="Michoac&aacute;n">Michoac&aacute;n</option>
												<option value="Morelos">Morelos</option>
												<option value="Nayarit">Nayarit</option>
												<option value="Nuevo Le&oacute;n">Nuevo Le&oacute;n</option>
												<option value="Oaxaca">Oaxaca</option>
												<option value="Puebla">Puebla</option>
												<option value="Quer&eacute;taro">Quer&eacute;taro</option>
												<option value="Quintana Roo">Quintana Roo</option>
												<option value="San Luis Potos&iacute;">San Luis Potos&iacute;</option>
												<option value="Sinaloa">Sinaloa</option>
												<option value="Sonora">Sonora</option>
												<option value="Tabasco">Tabasco</option>
												<option value="Tamaulipas">Tamaulipas</option>
												<option value="Tlaxcala">Tlaxcala</option>
												<option value="Veracruz">Veracruz</option>
												<option value="Yucat&aacute;n">Yucat&aacute;n</option>
												<option value="Zacatecas">Zacatecas</option>
												<option value="Fuera de M&eacute;xico">Fuera de M&eacute;xico</option>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<input type="text" id="firstName" name="firstName" placeholder="Nombre*" required />
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<input type="text" id="lastName" name="lastName" placeholder="Apellido*" required />
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<input type="email" id="contactEmail" name="email" placeholder="Email*" required />
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<input type="text" id="contactPhone" name="phone" placeholder="Tel&eacute;fono*" required />
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<label for="contactSpecialty">Especialidad</label>
										</div>
										<div class="col-sm-12">
											<select name="speciality" id="contactSpecialty" required>
												<option value="" disabled selected>Selecciona una</option>
												<option value="Dermatolog&iacute;a">Dermatolog&iacute;a</option>
												<option value="Cirug&iacute;a Pl&aacute;stica">
													Cirug&iacute;a Pl&aacute;stica
												</option>
												<option value="Medicina Est&eacute;tica">Medicina Est&eacute;tica</option>
												<option value="Cosmetolog&iacute;a">Cosmetolog&iacute;a</option>
												<option value="Ginecolog&iacute;a">Ginecolog&iacute;a</option>
												<option value="Cirug&iacute;a Cosm&eacute;tica">
													Cirug&iacute;a Cosm&eacute;tica
												</option>
												<option value="Otros">Otros</option>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="subscribe" id="contactSubscribe" />
													Sí, quiero suscribirme a la lista de Medestore
												</label>
											</div>
											<input type="hidden" name="recaptcha_response" id="recaptchaResponse" />
											<button type="submit" class="btn btn-raised btn-primary btn-lg" id="formSubmit">
												Enviar
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<?php include('footer.php'); ?>

				<div class="btn-back-top">
					<a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised">
						<i class="zmdi zmdi-long-arrow-up"></i>
					</a>
				</div>
			</div>
			<!--.wrapper-->

			<div class="btn-back-top">
				<a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised">
					<i class="zmdi zmdi-long-arrow-up"></i>
				</a>
			</div>
		</div>
		<!-- ms-site-container -->
		<?php include('menu_left.php'); ?>

		<div id="whatsapp-chat_wrapper">
			<form method="post" action="whatsAppHandler.php">
				<input type="hidden" name="whatsAppCounterLink" id="whatsAppCounterLink" />
				<button type="submit" id="whatsAppChat">
					<img src="assets/img/whatsapp-icon.png" alt="Logo WhatsApp" />
				</button>
			</form>
		</div>

		<script src="assets/js/plugins.min.js"></script>
		<script src="assets/js/app.min.js"></script>
		<script src="assets/js/app.js"></script>
		<script src="assets/js/index.js"></script>
		<script src="assets/js/fullpage.js"></script>
		<script src="https://kit.fontawesome.com/13d6b37258.js" crossorigin="anonymous"></script>
		<script src="assets/js/home-generic-7.js"></script>
		<script>
		$(document).ready(function() {
			$("#wrapper").fullpage({
				licenseKey: "667CBBF7-7C3C4F33-B8D7DA3E-D363FCA1",
				autoScrolling: $("body").width() > 574,
			})
		})
		</script>
		<?php include("whatsAppHandler.php"); ?>
	</body>
</html>