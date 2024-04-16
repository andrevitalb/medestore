<?php
include('sellerInfo.php');
include('whatsapp-counter.php');
$equipo = "Blue Eva";
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
		<meta content="Blue Eva" property="og:title" />
		<meta
			content="https://www.medestore.mx/assets/img/facebook-thumbnails/blue-eva-facebook.png"
			property="og:image"
		/>
		<meta
			content="Evacuador de humo de poder intenso y filtro de alta calidad. Provee un ambiente sano y cómodo para los usuarios y pacientes que inhalan humo y olor generado durante el tratamiento láser."
		/>
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://www.medestore.mx/blue-eva.php" />
		<meta property="og:image:type" content="image/png" />
		<!-- METAS TWITTER -->
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:site" content="@medestoremx" />
		<meta name="twitter:creator" content="@medestoremx" />
		<meta name="twitter:title" content="Blue Eva" />
		<meta
			name="twitter:description"
			content="Evacuador de humo de poder intenso y filtro de alta calidad. Provee un ambiente sano y cómodo para los usuarios y pacientes que inhalan humo y olor generado durante el tratamiento láser."
		/>
		<meta
			name="twitter:image"
			content="https://www.medestore.mx/assets/img/facebook-thumbnails/blue-eva-facebook.png"
		/>
		<title>Medestore | Blue Eva</title>
		<meta
			name="description"
			content="Evacuador de humo de poder intenso y filtro de alta calidad. Provee un ambiente sano y cómodo para los usuarios y pacientes que inhalan humo y olor generado durante el tratamiento láser."
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
				<div class="ms-hero-page ms-hero-img-room color-white intro-hero-full blue-eva-bg section">
					<div class="intro-hero-full-content">
						<div class="container text-center">
							<div class="row">
								<div class="col-md-6 col-12 father-div">
									<div class="son-div">
										<span class="center-block mb-2 mt-2 animated zoomInDown animation-delay-7">
											<figure class="logo-product">
												<img
													src="assets/img/products/blue-eva/logo-blue-eva-white.png"
													alt="Logotipo de Blue Eva"
													class="img-fluid"
												/>
											</figure>
										</span>
										<h2
											id="LIPO1060-title"
											class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-7"
										>
											<strong class="color-white2">Evacuador de humo</strong>
										</h2>
										<h4 class="animated zoomInDown animation-delay-7">
											Filtrado Avanzado<br />Mayor Duración<br />Diseño Compacto<br />Sin ruido
										</h4>
									</div>
								</div>
								<div class="col-md-6">
									<div class="center-block mt-2 animated zoomInDown animation-delay-8">
										<figure class="stage-product">
											<img
												src="assets/img/products/blue-eva/blue-eva-equipo.png"
												alt="Equipo Blue Eva"
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

				<div id="introduccion" class="container mt-3 section">
					<!--<h2 class="text-center color-primary-dark mb-2 wow fadeInDown animation-delay-4">MedeStore</h2>-->
					<div class="row">
						<div class="col-md-12">
							<h2 class="text-center color-primary-blue-eva mb-2">Blue Eva</h2>
							<!-- <h4 class="text-center color-sub-lipo1060 mb-2 fadeInDown animation-delay-5">Alta fluidez en pulsos de corta duración hasta 3ms</h4> -->
							<p class="text-center color-text-lipo1060 destacado">
								Durante los procedimientos de cirugía láser y de electrocoagulación se genera humo
								quirúrgico peligroso. Este humo causa efectos carcinógenos agudos o retardados en
								los humanos.
							</p>
							<p class="text-center color-text-lipo1060 destacado">
								Evite la contaminación por virus y las preocupaciones utilizándolo en todos sus
								procedimientos de medicina estética.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="center-block mt-2 animated zoomInDown text-center animation-delay-9">
								<figure>
									<img
										src="assets/img/products/blue-eva/blue-eva-use.jpg"
										alt="Blue Eva evacuador de humo"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>
					</div>
				</div>

				<!--.section-->

				<div id="introduccion" class="container mt-3 section">
					<!--<h2 class="text-center color-primary-dark mb-2 wow fadeInDown animation-delay-4">MedeStore</h2>-->
					<div class="row">
						<div class="col-md-12">
							<h3 class="text-center color-primary-blue-eva mb-2">Descripción del producto</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="center-block mt-2 animated zoomInDown text-center animation-delay-9">
								<figure>
									<img
										src="assets/img/products/blue-eva/descripcion-blue-eva.jpg"
										alt="Blue Eva evacuador de humo"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>
					</div>
				</div>

				<!--.section-->

				<section id="aplicacion-facial-info" class="section bg-blue-eva-one">
					<div class="container">
						<div class="row">
							<div id="aplicaciones" class="col-md-6">
								<div id="aplica-facial-info">
									<h3 class="text-center color-primary-blue-eva mb-2 fadeInDown animation-delay-5">
										Succión Poderosa
									</h3>
									<!-- <h6 class="color-primary-blue-eva">Hoyo de Succión de Aire</h6> -->
									<p class="text-dark">
										Evacúa humo con gran fuerza de succión durante el tratamiento.<br />La malla de
										alambre protege el filtro principal separando las partículas gruesas.
									</p>
								</div>
							</div>
							<div id="" class="col-md-6">
								<figure>
									<img
										src="assets/img/products/blue-eva/hole-suction-blue-eva.jpg"
										alt="Poder de succión de Blue Eva"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>
					</div>
				</section>

				<section id="" class="section ms-hero-img-room color-white intro-hero-full">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h3 class="text-center color-primary-blue-eva mb-2 fadeInDown animation-delay-5">
									Efectivo
								</h3>
								<h4 class="text-center color-text-lipo1060 mb-2 fadeInDown animation-delay-5">
									“Sistema 3 en 1”
								</h4>
								<p class="text-center color-text-lipo1060 destacado">
									Filtro PRE + Filtro de Carbón + Filtro HEPA
								</p>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-12 col-12">
								<figure class="text-center tecno-vacuum">
									<img
										src="assets/img/products/blue-eva/filtro-blue-eva.jpg"
										alt="Filtro Blue Eva"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>
						<div class="row mt-3 text-center">
							<div class="col-md-4 col-12">
								<p class="text-center color-text-lipo1060 destacado">Filtro PRE</p>
								<p class="text-center color-text-lipo1060">Filtra partículas de un micrón.</p>
							</div>
							<div class="col-md-4 col-12">
								<p class="text-center color-text-lipo1060 destacado">Filtro de Carbón</p>
								<p class="text-center color-text-lipo1060">Elimina olores.</p>
							</div>
							<div class="col-md-4 col-12">
								<p class="text-center color-text-lipo1060 destacado">Filtro HEPA (H13)</p>
								<p class="text-center color-text-lipo1060">Filtra partículas de 0.3 micrones.</p>
							</div>
						</div>
					</div>
				</section>

				<section id="" class="section bg-blue-eva-one">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h3 class="text-center color-primary-blue-eva mb-4">Filtro HEPA (H13)</h3>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<figure>
									<img
										src="assets/img/products/blue-eva/alta-eficiencia-blue-eva.jpg"
										alt="Alta eficeincia Blue Eva"
										class="img-fluid"
									/>
								</figure>
							</div>
							<div class="col-md-6">
								<figure>
									<img
										src="assets/img/products/blue-eva/tabla-blue-eva.jpg"
										alt="Tabla Filtro HEPA"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row mt-2">
							<div class="col-md-12">
								<p class="text-center color-text-lipo1060">
									Los filtros con el estándar HEPA tienen muchas aplicaciones, incluyendo el uso en
									cuartos limpios para fabricación IC, facilidades médicas, automóviles, aeronaves y
									hogares.<br />El filtro tiene que satisfacer ciertos estándares de eficiencia como
									los establecidos por el Departamento de Energía de Estados Unidos (United States
									Department of Energy) (DOE)<br />Para calificar en HEPA por los estándares de la
									industria, un filtro de aire debe remover (por el aire que pasa a través) 99.97%
									de las partículas que tienen un tamaño más grande o equivalente a 0.3μm.
								</p>
							</div>
						</div>
					</div>
				</section>
				<!-- <section id="porque-blue-eva" class="section ms-hero-img-room color-white intro-hero-full">
        <div class="container">
          <div class="row">
            
            <div class="col-md-12 father-div">
              <div class="son-div text-center">
                <h3 class="text-dark mb-2 fadeInDown animation-delay-5 color-white">Estructura de Madera</h3>
                <h6 class="color-white2">Auto-Ajustable</h6>
                <p class="text-white2 destacado">No se necesita sostener la manguera durante el tratamiento.<br>Aunque no esté tirando de la manguera, Blue Eva está diseñado para situarse en cualquier posición que desee.<br>Mejora la eficiencia para hacer el tratamiento solo.</p>
              </div>
            </div>
            
          </div>
        </div>
      </section> -->
				<section id="aplicacion-facial-info" class="section">
					<div class="container">
						<div class="row">
							<div id="aplicaciones" class="col-md-4">
								<div id="aplica-facial-info">
									<h6 class="text-center color-primary-blue-eva mb-2 fadeInDown animation-delay-5">
										Estructura de Manguera de Posición Múltiple
									</h6>

									<p class="text-dark">
										¡Cambia la longitud y posición de la manguera! De arriba a abajo, incluso al
										otro lado, se mantiene en cualquier ángulo. Estira la manguera donde sea que
										quieras.
									</p>
								</div>
							</div>
							<div id="" class="col-md-8">
								<figure>
									<img
										src="assets/img/products/blue-eva/estructura-blue-eva.png"
										alt="Estructura de Blue Eva"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>
					</div>
				</section>
				<section id="" class="section bg-blue-eva-one">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h3 class="text-center color-primary-blue-eva mb-4">Diseño Compacto</h3>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 text-center">
								<figure>
									<img
										src="assets/img/products/blue-eva/Evacuador-escala.png"
										alt="Tamaño pequeño Blue Eva"
										class="img-fluid"
									/>
								</figure>
							</div>
							<div class="col-md-4 text-center">
								<figure>
									<img
										src="assets/img/products/blue-eva/diseno-simple-blue-eva.jpg"
										alt="Tamaño pequeño Blue Eva"
										class="img-fluid"
									/>
								</figure>
								<p class="text-center color-text-lipo1060 destacado mt-2">
									Tamaño Pequeño<br />Diseño Simple
								</p>
								<p class="text-center color-text-lipo1060">
									Ocupa menos espacio en el área de trabajo y permite el uso eficiente del espacio.
								</p>
							</div>
							<div class="col-md-4 text-center">
								<figure>
									<img
										src="assets/img/products/blue-eva/facil-control-blue-eva.jpg"
										alt="Facil control Blue Eva"
										class="img-fluid"
									/>
								</figure>
								<p class="text-center color-text-lipo1060 destacado mt-2">
									Fuerza de Succión<br />Fácil de Controlar
								</p>
								<p class="text-center color-text-lipo1060">
									Usando un tipo de palanca de dial, se puede ajustar fácilmente la potencia de
									evacuación.
								</p>
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
									<!-- <div class="row"> -->
									<!-- <div class="col-6"> -->
									<figure class="logo-product">
										<img
											src="assets/img/products/blue-eva/logo-blue-eva-color.png"
											alt="Logotipo de Blue Eva"
											class="img-fluid"
										/>
									</figure>
									<!-- </div> -->
									<!-- <div class="col-6"> -->
									<!-- <a href="#" class="btn btn-raised btn-primary btn-brochure">DESCARGAR BROCHURE</a> -->
									<!-- </div> -->
									<!--  </div> -->
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
												<td><strong>Sistema</strong></td>
												<td>Evacuador de Humo</td>
											</tr>
											<tr>
												<td><strong>Presión de Succión</strong></td>
												<td>100mmAq</td>
												<!-- <td>09 W/cm<sup>2</sup> ~ 1.4W/cm<sup>2</sup> 20%</td> -->
											</tr>
											<!-- <tr>
                      <td><strong>Poder de Succión</strong></td>
                      <td>1200W</td>
                    </tr> -->
											<tr>
												<td><strong>Filtración</strong></td>
												<td>Filtros de 4 etapas</td>
											</tr>
											<tr>
												<td><strong>Energía eléctrica</strong></td>
												<td>110-240VAC, 50/60 Hz</td>
											</tr>
											<tr>
												<td><strong>Dimensiones (Unidad Principal)</strong></td>
												<td>250(W) x 250(L) x 500 (H) mm</td>
											</tr>

											<tr>
												<td><strong>Longitud (Manguera de Succión)</strong></td>
												<td>Min.1000mm / Max. 1200mm</td>
											</tr>
											<tr>
												<td><strong>Peso</strong></td>
												<td>12 Kg</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="download-brochure">
									<!-- <a href="assets/brochures/brochure-blue-eva.pdf" class="btn btn-raised btn-primary btn-brochure" target="_blank">DESCARGAR FOLLETO</a> -->
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
									id="form-equipo-blue-eva"
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
													Sí, quiero suscribirme a la lista de Medestore
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
		<script src="assets/js/home-generic-7.js"></script>
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
