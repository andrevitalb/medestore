<?php
include('sellerInfo.php');
include('whatsapp-counter.php');
$equipo = "Clearlight";
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
		/>
		<meta name="theme-color" content="#333" />
		<!-- METAS FACEBOOK -->
		<meta content="Clearlight" property="og:title" />
		<meta
			content="https://www.medestore.mx/assets/img/facebook-thumbnails/clearlight-facebook.png"
			property="og:image"
		/>
		<meta
			content="Solución probada para todas las aplicaciones de eliminación de vello"
			property="og:description"
		/>
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://www.medestore.mx/clearlight.php" />
		<meta property="og:image:type" content="image/png" />
		<!-- METAS TWITTER -->
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:site" content="@medestoremx" />
		<meta name="twitter:creator" content="@medestoremx" />
		<meta name="twitter:title" content="Clearlight" />
		<meta
			name="twitter:description"
			content="Solución probada para todas las aplicaciones de eliminación de vello."
		/>
		<meta
			name="twitter:image"
			content="https://www.medestore.mx/assets/img/facebook-thumbnails/clearlight-facebook.png"
		/>
		<title>Medestore | Clearlight</title>
		<meta
			name="description"
			content="El mejor equipo con tecnología láser Diodo 808nm para la eliminación de cualquier tipo de vello."
		/>

		<!-- Favicons -->
		<link rel="shortcut icon" href="assets/img/favicon.png?v=3" />
		<link
			rel="apple-touch-icon"
			sizes="152x152"
			href="assets/img/icons/icono-medestore-retina.png"
		/>
		<link
			rel="apple-touch-icon"
			sizes="114x114"
			href="assets/img/icons/icono-medestore-iphone.png"
		/>
		<link rel="apple-touch-icon" sizes="72x72" href="assets/img/icons/icono-medestore-ipad.png" />
		<link rel="apple-touch-icon" href="assets/img/icons/icono-medestore.png" />

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
		<!-- Google Tag Manager -->
		<script>
			;(function (w, d, s, l, i) {
				w[l] = w[l] || []
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" })
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : ""
				j.async = true
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl
				f.parentNode.insertBefore(j, f)
			})(window, document, "script", "dataLayer", "GTM-M48C6MP")
		</script>
		<!-- End Google Tag Manager -->

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-33467298-1"></script>
		<script>
			window.dataLayer = window.dataLayer || []

			function gtag() {
				dataLayer.push(arguments)
			}
			gtag("js", new Date())

			gtag("config", "UA-33467298-1")
		</script>
		<script>
			!(function (f, b, e, v, n, t, s) {
				if (f.fbq) return
				n = f.fbq = function () {
					n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
				}
				if (!f._fbq) f._fbq = n
				n.push = n
				n.loaded = !0
				n.version = "2.0"
				n.queue = []
				t = b.createElement(e)
				t.async = !0
				t.src = v
				s = b.getElementsByTagName(e)[0]
				s.parentNode.insertBefore(t, s)
			})(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js")
			fbq("init", "2199805706970346")
			fbq("track", "PageView")
		</script>
		<noscript
			><img
				height="1"
				width="1"
				style="display: none"
				src="https://www.facebook.com/tr?id=2199805706970346&ev=PageView&noscript=1"
			/>
		</noscript>
		<!-- End Facebook Pixel Code -->

		<style>
			@media (max-width: 500px) {
				#whatsapp-chat_wrapper {
					display: none;
				}
			}
		</style>
		<!-- Google reCaptcha -->
		<script src="https://www.google.com/recaptcha/api.js?render=6LffOdUZAAAAAKgU2-T8nrSuRE3RsjVHos-GKMLK"></script>
		<script>
			grecaptcha.ready(function () {
				grecaptcha
					.execute("6LffOdUZAAAAAKgU2-T8nrSuRE3RsjVHos-GKMLK", {
						action: "submit",
					})
					.then(function (token) {
						var recaptchaResponse = document.getElementById("recaptchaResponse")
						recaptchaResponse.value = token
					})
			})
		</script>
	</head>

	<body>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-M48C6MP"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->

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
				<div
					id="home-stage"
					class="ms-hero-page ms-hero-video ms-hero-img-room color-white intro-hero-full clearlight-bg section"
				>
					<div class="intro-hero-full-content">
						<div class="container text-center">
							<div class="row">
								<div class="col-md-6 father-div">
									<div class="son-div">
										<span class="center-block mb-2 mt-2 animated zoomInDown animation-delay-7">
											<figure class="logo-product">
												<img
													src="assets/img/products/clearlight/logo-clearlight.png"
													alt="Logotipo de Clearlight"
													class="img-fluid"
												/>
											</figure>
										</span>
										<h2
											class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-7"
										>
											Más de lo que esperabas en depilación efectiva
										</h2>
										<h1 class="animated fadeInUp animation-delay-12 color-white">
											Depilación láser
										</h1>
										<!-- <a href="https://www.medestore.mx/training-in-korea.html?utm_source=Site&utm_medium=Direct&utm_content=clearlight-button&utm_campaign=Traininginkorea" class="btn btn-xlg btn-raised btn-white btn-clearlight animated fadeInUp animation-delay-12">
                        <i class="fa fa-plane"></i> Adquiérelo <strong>hoy</strong><br class="no-desktop mobile"> y <strong>capacítate en Corea</strong></a> -->
									</div>
								</div>
								<div class="col-md-6">
									<div class="center-block mt-2 animated zoomInDown animation-delay-8">
										<figure class="stage-product">
											<img
												src="assets/img/products/clearlight/stage-clearlight.png"
												alt="Equipo Clearlight"
												class="img-fluid"
											/>
										</figure>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--.section-->

				<section class="section">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2 class="text-center color-primary-clearlight mb-2">Clearlight</h2>
								<h4
									class="text-center color-secondary-clearlight mb-2 fadeInDown animation-delay-5"
								>
									Solución probada para todas las aplicaciones de eliminación de vello
								</h4>

								<p
									class="lead text-center aco fadeInDown animation-delay-6 mw-800 center-block mb-4"
								>
									<strong>Clearlight</strong> facilita la depilación profesional y la hace más
									eficiente.
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 text-center">
								<figure>
									<img
										src="assets/img/products/clearlight/hand-clearlight.png"
										alt="Pieza de mano de Clearlight"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>
					</div>
				</section>

				<section
					id="funcionamiento-clearlight"
					class="section ms-hero-img-room color-white intro-hero-full"
				>
					<div class="container">
						<div class="row">
							<div id="full-clearlight" class="col-md-3 text-center">
								<figure>
									<img
										src="assets/img/products/clearlight/clearlight-full.png"
										alt="Equipo Clearlight"
										class="img-fluid"
									/>
								</figure>
							</div>
							<div class="col-md-9 father-div">
								<div class="son-div">
									<h3 class="text-white mb-2 fadeInDown animation-delay-5">
										¿Por qué <strong class="color-white">Clearlight</strong>?
									</h3>
									<h6 class="color-white">1. Ventajas para el usuario</h6>
									<ul class="list-mobile text-white">
										<li>Tratamiento efectivo.</li>
										<li>Solución superior para la eliminación de vello.</li>
										<li>Ahorra tiempo y esfuerzo.</li>
										<li>Convenientes programas de diseño y tratamiento.</li>
									</ul>

									<h6 class="color-white">2. Ventajas para el propietario</h6>
									<ul class="list-mobile text-white">
										<li>Menor costo de mantenimiento y largo ciclo de vida del equipo.</li>
										<li>
											Ahorro de tiempo gracias al pulso de alta potencia y al área de disparo más
											grande.
										</li>
									</ul>

									<h6 class="color-white">3. Ventajas para el paciente</h6>
									<ul class="list-mobile text-white mb-4">
										<li>Tratamiento sin anestesia.</li>
										<li>Menos dolor gracias a su sistema de enfriamiento.</li>
										<li>Evita quemaduras.</li>
										<li>Excelentes resultados.</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section id="aplicacion-facial-info" class="section">
					<div class="container-fluid">
						<div class="row">
							<div id="aplicaciones" class="col-md-6">
								<div id="aplica-facial-info">
									<h3
										class="text-center color-primary-clearlight text-light mb-2 fadeInDown animation-delay-5"
									>
										TRATAMIENTO DE DEPILACIÓN
									</h3>
									<ul class="facial-list">
										<li>Elimina cualquier tipo de vello.</li>
										<li>Seguro y con menos sesiones que otros tratamientos.</li>
										<li>
											Cualquier persona es candidata para este procedimiento, tomando en cuenta su
											historial clínico y el tipo de piel que posee.
										</li>
										<li>Tratamientos más rápidos y eficaces.</li>
									</ul>
								</div>
							</div>
							<div id="aplicacion-facial" class="col-md-6">
								<figure>
									<img
										src="assets/img/products/clearlight/aplicacion-clearlight.png"
										alt="Resultados de depilación con Clearlight"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>
					</div>
				</section>

				<section id="gfr-ultracel" class="section bg-blue-clearlight">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h4 class="text-center color-white text-light mb-2 fadeInDown animation-delay-5">
									Sistema Láser Diodo de alta potencia
								</h4>

								<p
									class="lead text-center aco color-white fadeInDown animation-delay-6 center-block mb-4"
								>
									El <strong>Clearlight</strong> está especialmente diseñado para la eliminación de
									vello. La tecnología de pulso de alta potencia realiza un rápido y efectivo
									tratamiento; además, las ondas continuas y el sistema de enfriamiento por chiller
									lo hacen el más seguro.
								</p>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<h4 class="text-center color-white text-light mb-2 fadeInDown animation-delay-5">
									Tecnología de pulso avanzada
								</h4>

								<p
									class="lead text-center aco color-white fadeInDown animation-delay-6 mw-800 center-block mb-4"
								>
									El modo <strong>HRS</strong> incluye funciones especializadas de 4 pulsos, ayuda a
									reducir el dolor y mejora el efecto del tratamiento.
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 text-center">
								<figure>
									<img
										src="assets/img/products/clearlight/pulsos-clearlight.png"
										alt="Tecnología avanzada de pulsos de Clearlight"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>
					</div>
				</section>

				<section id="gfr-ultracel" class="section bg-light-clearlight">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h4
									class="text-center color-primary-clearlight text-light mb-2 fadeInDown animation-delay-5"
								>
									Tratamiento de alta velocidad
								</h4>

								<p
									class="lead text-center aco color-dark fadeInDown animation-delay-6 mw-900 center-block mb-4"
								>
									Alta frecuencia de repeticiones que facilita al usuario el manejo.<br /><strong
										>Modo HRS:</strong
									>
									hasta 3 Hz <br /><strong>Modo HRM:</strong> hasta 15 Hz <br /><strong
										>Modo STM:</strong
									>
									hasta 10 Hz
								</p>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 text-center">
								<h4
									class="text-center color-primary-clearlight text-light mb-2 fadeInDown animation-delay-5"
								>
									Profundidad de penetración
								</h4>
								<figure class="movil-image">
									<img
										src="assets/img/products/clearlight/penetracion-clearlight.png"
										alt="Profundidad de penetración de Clearlight"
										class="img-fluid"
									/>
								</figure>
							</div>
							<div class="col-md-6 text-center">
								<h4
									class="text-center color-primary-clearlight text-light mb-2 fadeInDown animation-delay-5"
								>
									Tamaño grande de disparo
								</h4>
								<p class="color-dark">Tamaño del punto mejorado a 14mm x 14mm</p>
								<figure class="movil-image">
									<img
										src="assets/img/products/clearlight/spot-size.png"
										alt="Tamaño de disparo de Clearlight"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>
					</div>
				</section>

				<section id="videos-section" class="section">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 titlebar">
								<h2 class="text-center color-blue-light">Videos</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 offset-md-4 col-12">
								<h6>Clearlight</h6>
								<div class="card">
									<div
										data-plyr-provider="youtube"
										data-plyr-embed-id="TmAanxGblGE"
										class="js-player"
									></div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section
					id="data-sheet"
					class="section data-sheet ms-hero-img-room color-white intro-hero-full data-sheet-cellec"
				>
					<div class="container">
						<div class="row">
							<div class="col-md-7 col-12">
								<div class="title-data-sheet">
									<figure class="logo-product">
										<img
											src="assets/img/products/clearlight/logo-ClearLight-full.png"
											alt="Logotipo de Clearlight"
											class="img-fluid"
										/>
									</figure>
								</div>
								<div class="data-sheet-contain">
									<div class="data-sheet-logo"></div>
									<table class="table table-responsive">
										<thead>
											<tr>
												<th colspan="2">Especificaciones Técnicas</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><strong>Tipo de láser</strong></td>
												<td>Matriz de diodos (onda continua)</td>
											</tr>
											<tr>
												<td><strong>Longitud de onda</strong></td>
												<td>808 nm</td>
											</tr>
											<tr>
												<td><strong>Fluencia</strong></td>
												<td>1 ~ 120 J/cm<sup>2</sup></td>
											</tr>
											<tr>
												<td><strong>Duración del pulso</strong></td>
												<td>800 ms(max)</td>
											</tr>
											<tr>
												<td><strong>Tamaño de punto</strong></td>
												<td>12 mm x 12 mm</td>
											</tr>
											<tr>
												<td><strong>Tasa de repetición</strong></td>
												<td>
													<ul>
														<li>Modo HRS: hasta 3 Hz</li>
														<li>Modo HRM: hasta 15 Hz</li>
														<li>Modo STM: hasta 15 Hz</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td><strong>Potencia máxima</strong></td>
												<td>600 Watts</td>
											</tr>
											<tr>
												<td><strong>Enfriamiento</strong></td>
												<td>Contact Cooling System</td>
											</tr>
											<tr>
												<td><strong>Panel</strong></td>
												<td>Pantalla táctil LCD de 10.2 pulgadas</td>
											</tr>
											<tr>
												<td><strong>Dimensiones (AxPxH mm)</strong></td>
												<td>388 x 610 x 1.212</td>
											</tr>
											<tr>
												<td><strong>Peso</strong></td>
												<td>55 kg (121 lbs.)</td>
											</tr>
											<tr>
												<td><strong>Requerimientos de electricidad</strong></td>
												<td>110V</td>
											</tr>
											<tr class="border-end">
												<td><strong>COFEPRIS</strong></td>
												<td>Registro Sanitario No. 0200E2021 SSA</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="download-brochure">
									<a
										href="assets/brochures/brochure-Clearlight.pdf"
										class="btn btn-raised btn-primary btn-brochure"
										target="_blank"
										>DESCARGAR FOLLETO</a
									>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="section fp-auto-height">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-6 mt-6">
								<div class="text-center">
									<h4>QUIERO MÁS INFORMACIÓN</h4>
								</div>
								<form
									method="post"
									action="contact-equipment.php"
									class="container-fluid contactEqpmnt"
								>
									<div class="row" style="display: none">
										<input
											type="text"
											name="department"
											id="contactDpmnt"
											value="Ventas Equipos"
										/>
										<input
											type="text"
											name="subject"
											id="contactSubject"
											value="Interés en <?php echo $equipo; ?>"
										/>
										<input type="text" name="whatsAppLink" id="whatsAppLink" />
										<input
											type="text"
											name="localUrl"
											id="localUrl"
											value="<?php echo strtolower(str_replace(' ', '-', $equipo));?>.php"
										/>
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
											<input
												type="text"
												id="firstName"
												name="firstName"
												placeholder="Nombre*"
												required
											/>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<input
												type="text"
												id="lastName"
												name="lastName"
												placeholder="Apellido*"
												required
											/>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<input
												type="email"
												id="contactEmail"
												name="email"
												placeholder="Email*"
												required
											/>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<input
												type="text"
												id="contactPhone"
												name="phone"
												placeholder="Tel&eacute;fono*"
												required
											/>
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
													Sí, quiero suscribirme a la lista de MedeStore
												</label>
											</div>
											<input type="hidden" name="recaptcha_response" id="recaptchaResponse" />
											<button
												type="submit"
												class="btn btn-raised btn-primary btn-lg"
												id="formSubmit"
											>
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
					<a
						href="#"
						data-scroll
						id="back-top"
						class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised"
					>
						<i class="zmdi zmdi-long-arrow-up"></i>
					</a>
				</div>
			</div>
			<!--.wrapper-->

			<div class="btn-back-top">
				<a
					href="#"
					data-scroll
					id="back-top"
					class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised"
				>
					<i class="zmdi zmdi-long-arrow-up"></i>
				</a>
			</div>
		</div>
		<!-- ms-site-container -->
		<?php include('menu_left.php'); ?>

		<div id="whatsapp-chat_wrapper" style="display: none">
			<form method="post" action="whatsapp-counter.php">
				<input type="hidden" name="whatsAppCounterLink" id="whatsAppCounterLink" />
				<button type="submit" id="whatsAppChat" target="_blank">
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
		<script src="assets/js/home-generic-ultracel.js"></script>
		<script>
			$(document).ready(function () {
				var autoScrollMobile = true

				if ($("body").width() <= 574) autoScrollMobile = false
				else autoScrollMobile = true

				$("#wrapper").fullpage({
					licenseKey: "667CBBF7-7C3C4F33-B8D7DA3E-D363FCA1",
					autoScrolling: autoScrollMobile,
				})
			})
		</script>
		<script>
			$("#contactState").change(function() {
			  const state = $("#contactState").children("option:selected").val();
			  if (state != 'Fuera de México') {
			    let phoneNumber
			    if (state == 'Ciudad de México' || state == 'Estado de México') {
			      phoneNumber = "<?php echo $contactoEquipos["cdmx"]; ?>"
			    } else {
			      switch (<?php echo $whatsAppCounter[0] ?> % 4) {
			        case 0:
			          phoneNumber = "<?php echo $contactoEquipos[0]; ?>"
			          break;
			        case 1:
			          phoneNumber = "<?php echo $contactoEquipos[1]; ?>"
			          break;
			        case 2:
			          phoneNumber = "<?php echo $contactoEquipos[2]; ?>"
			          break;
			        case 3:
			          phoneNumber = "<?php echo $contactoEquipos[3]; ?>"
			          break;
			      }
			    }

			    const equipo = "<?php echo str_replace(' ', '%20', $equipo); ?>"
			    const whatsAppLink = `https://api.whatsapp.com/send?phone=${phoneNumber}&text=Hola,%20estoy%20visitando%20su%20página%20web%20y%20me%20interesaría%20recibir%20información%20sobre%20el%20equipo%20${equipo}`

			    $('#whatsAppLink').val(whatsAppLink)
			    $('#whatsAppCounterLink').val(whatsAppLink)
			    $('#whatsapp-chat_wrapper').css('display', 'block');
			    $('#formSubmit').removeAttr('disabled');
			  } else {
			    alert("Por el momento, en MedeStore sólo atendemos clientes en México, contacte con un distribuidor en su país para mayor información.");
			    $('#formSubmit').attr('disabled', 'true');
			    $('#whatsapp-chat_wrapper').css('display', 'none');
			  }
			});
		</script>
	</body>
</html>
