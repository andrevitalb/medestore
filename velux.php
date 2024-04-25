<?php $device = "VeLux"; ?>
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
		<meta content="Velux" property="og:title" />
		<meta
			content="https://www.medestore.mx/assets/img/facebook-thumbnails/velux-facebook.png"
			property="og:image"
		/>
		<meta content="El nuevo equipo con tecnología de láser diodo con doble longitud de onda." />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://www.medestore.mx/velux.php" />
		<meta property="og:image:type" content="image/png" />
		<!-- METAS TWITTER -->
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:site" content="@medestoremx" />
		<meta name="twitter:creator" content="@medestoremx" />
		<meta name="twitter:title" content="VeLux" />
		<meta
			name="twitter:description"
			content="El nuevo equipo con tecnología de láser diodo con doble longitud de onda."
		/>
		<meta
			name="twitter:image"
			content="https://www.medestore.mx/assets/img/facebook-thumbnails/velux-facebook.png"
		/>
		<title>Medestore | VeLux</title>
		<meta
			name="description"
			content="El nuevo equipo con tecnología de láser diodo con doble longitud de onda."
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
				<div class="ms-hero-page ms-hero-img-room color-white intro-hero-full velux-bg section">
					<div class="intro-hero-full-content">
						<div class="container text-center">
							<div class="row">
								<div class="col-md-6 col-12 father-div">
									<div class="son-div">
										<span class="center-block mb-2 mt-2 animated zoomInDown animation-delay-7">
											<figure class="logo-product">
												<img
													src="assets/img/products/velux/logo-velux-white.png"
													alt="Logotipo de Velux"
													class="img-fluid"
												/>
											</figure>
										</span>
										<h2
											id="LIPO1060-title"
											class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-7"
										>
											<strong class="color-primary-velux">Láser Diodo</strong> con <br /><strong
												class="color-secondary-velux"
												>Doble Longitud de Onda</strong
											>
										</h2>

										<!-- <h1 class="animated fadeInUp animation-delay-12">ULTRA
                                <span class="typed-class typed-block color-primary">rápido</span>
                            </h1> -->
									</div>
								</div>
								<div class="col-md-6">
									<div class="center-block mt-2 animated zoomInDown animation-delay-8">
										<figure class="stage-product">
											<img
												src="assets/img/products/velux/velux-stage.png"
												alt="Equipo VeLux"
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
							<h2 class="text-center color-primary-velux mb-2">VeLux</h2>
							<!-- <h4 class="text-center color-sub-lipo1060 mb-2 fadeInDown animation-delay-5">Alta fluidez en pulsos de corta duración hasta 3ms</h4> -->
							<p class="text-center color-text-lipo1060 destacado">
								<strong>VeLux</strong> crea la solución para una óptima depilación permanente al
								combinar dos efectivas longitudes de onda láser de 755nm & 808nm basado en la
								tecnología de escaneo en movimiento. Las dos longitudes de onda láser trabajan de
								manera simultánea y su energía concentrada remueve el vello no deseado escaneando a
								través de un rayo láser directo al folículo piloso con un dolor mínimo.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="center-block mt-2 animated zoomInDown text-center animation-delay-9">
								<figure>
									<img
										src="assets/img/products/velux/handpiece-velux.png"
										alt="Pieza de mano de VeLux"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="text-center color-text-lipo1060 destacado">
								Además, la tecnología de escaneo en movimiento con un amplio y ajustable tamaño de
								spot de 50x15mm permite un tratamiento del vello seguro, de alta velocidad y
								comodidad sin el uso de anestésicos o gel tanto para superficies grandes y pequeñas.
							</p>
						</div>
					</div>
				</div>

				<!--.section-->

				<section id="porque-velux" class="section ms-hero-img-room color-white intro-hero-full">
					<div class="container">
						<div class="row">
							<div id="full-ultracel" class="col-md-4 text-center">
								<figure class="">
									<img
										src="assets/img/products/velux/velux-equipo-full.png"
										alt="Equipo Velux"
										class="img-fluid"
									/>
								</figure>
							</div>
							<div class="col-md-8 father-div">
								<div class="son-div">
									<h3 class="text-dark mb-2 fadeInDown animation-delay-5">
										¿Por qué <span class="color-primary-velux">Velux?</span>
									</h3>
									<h6 class="color-secondary-velux">1. Tecnología de escaneo en movimiento</h6>
									<p class="text-dark">
										Esta tecnología permite una depilación rápida y efectiva en una área grande sin
										riesgo a efectos secundarios.
									</p>
									<h6 class="color-secondary-velux">2. Tamaño de punto variable</h6>
									<p class="text-dark">
										El tamaño es ajustable de 50 a 10mm, lo que permite una depilación segura y
										efectiva tanto en el rostro como cualquier parte del cuerpo.
									</p>
									<h6 class="color-secondary-velux">3. Enfriamiento por contacto y por aire</h6>
									<p class="text-dark">
										Permite una depilación cómoda hasta en pieles, sin la necesidad de usar
										anestésicos o geles.
									</p>
									<h6 class="color-secondary-velux">4. Operación segura, no invasiva.</h6>
									<p class="text-dark">
										Gracias a la combinación de sus tecnologías permite tratamientos cómodos,
										seguros y rápidos.
									</p>
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
										class="text-center color-secondary-velux text-light mb-2 fadeInDown animation-delay-5"
									>
										DEPILACIÓN FACIAL Y CORPORAL
									</h3>
									<ul class="facial-list">
										<li>Elimina cualquier tipo de vello.</li>
										<li>Seguro y con menos sesiones que otros tratamientos.</li>
										<li>
											Gran eficacia en superficies pequeñas del rostro o superficies grandes del
											cuerpo.
										</li>
										<li>Tratamientos más rápidos y eficaces.</li>
									</ul>
								</div>
							</div>
							<div id="aplicacion-facial" class="col-md-6">
								<figure>
									<img
										src="assets/img/products/velux/aplicacion-corporal-velux.png"
										alt="Resultados de la aplicación corporal de VeLux"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>
					</div>
				</section>

				<section id="" class="section ms-hero-img-room color-white intro-hero-full bg-velux-one">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2
									class="text-center color-sub-lipo1060 text-light mb-2 fadeInDown animation-delay-5"
								>
									Tecnología de escaneo en movimiento
								</h2>
								<h3
									class="text-center color-secondary-velux text-light mb-2 fadeInDown animation-delay-5"
								>
									Alta fluidez en pulsos de corta duración hasta 3ms
								</h3>
								<p class="text-center color-text-lipo1060 destacado">
									La tecnología de escaneo en movimiento es un método revolucionario para el
									tratamiento de depilación rápida del vello escaneando eficazmente un área grande
									de 50 por 15 mm en aproximadamente 0,5-1,5 segundos. Además, ofrece una alta
									densidad de potencia de 2.400 vatios/cm2 y permite suministrar una alta fluencia
									con una duración de pulso corta de hasta 3 ms para el vello fino y brillante sin
									riesgo de efectos secundarios.
								</p>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-6 col-12">
								<figure class="text-center tecno-vacuum">
									<img
										src="assets/img/products/velux/target-velux.jpg"
										alt="Tecnología de VeLux"
										class="img-fluid"
									/>
								</figure>
							</div>
							<div class="col-md-6 col-12">
								<figure class="text-center tecno-vacuum">
									<img
										src="assets/img/products/velux/lines-velux.jpg"
										alt="Depilación con VeLux"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>
					</div>
				</section>

				<section id="" class="section bg-velux-two">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<h3 class="text-center color-white mb-4">¿Cómo trabaja <strong>VeLux</strong>?</h3>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<figure>
									<img
										src="assets/img/products/velux/etapa-enfriamiento-velux.jpg"
										alt="Sistema de enfriamiento de VeLux"
										class="img-fluid"
									/>
								</figure>
								<!-- <h6 class="color-primary-ultracel_q text-center">Fase de inflamación</h6> -->
								<p class="text-center color-white mt-2">
									La piel se enfría antes y durante el tratamiento.
								</p>
							</div>
							<div class="col-md-3">
								<figure>
									<img
										src="assets/img/products/velux/etapa-ondas_dobles-velux.jpg"
										alt="Smart Target Motion de VeLux"
										class="img-fluid"
									/>
								</figure>

								<p class="text-center color-white mt-2">
									Las ondas dobles se concentran en un solo rayo láser que escanea y llega al
									folículo piloso.(Smart Target Motion)
								</p>
							</div>
							<div class="col-md-3">
								<figure>
									<img
										src="assets/img/products/velux/etapa-eritema-velux.jpg"
										alt="Zona tratada con VeLux"
										class="img-fluid"
									/>
								</figure>

								<p class="text-center color-white mt-2">
									Puede aparecer un leve eritema y edema en las zonas tratadas.
								</p>
							</div>
							<div class="col-md-3">
								<figure>
									<img
										src="assets/img/products/velux/etapa-vello_desaparece-velux.jpg"
										alt="Depilación efectiva con VeLux "
										class="img-fluid"
									/>
								</figure>

								<p class="text-center color-white mt-2">
									El vello comenzará a desaparecer de forma natural.
								</p>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row mt-2">
							<div class="col-md-12">
								<p class="text-center color-white destacado">
									La tecnología <strong>Smart Target Motion</strong> suministrará la energía en 5
									zonas diferentes en orden aleatorio y hará que el tratamiento sea prácticamente
									indoloro y bastante tolerable durante el proceso.
								</p>
							</div>
						</div>
					</div>
				</section>

				<section id="ultra-delgado" class="section">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<h3 class="text-center mb-4">
									Ventajas de <strong class="color-primary-velux">VeLux</strong>
								</h3>
								<!-- <h3 class="text-center text-primary-dark mb-2 fadeInDown animation-delay-5"><strong class="color-primary-ultracel_q">ULTRA</strong> DELGADO</h3> -->
								<!-- <p class="text-center destacado"><strong>ULTRAcel Q+</strong> te brinda hasta 65% de mejor visibilidad en el área de tratamiento para un procedimiento seguro y conveniente.</p> -->
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-12">
								<h5 class="text-center color-secondary-velux">Alta velocidad y Flexibilidad</h5>

								<figure class="text-center grafica">
									<img
										src="assets/img/products/velux/flexibilidad-VeLux.png"
										alt="Alta velocidad y flexibilidad de VeLux"
										class="img-fluid"
									/>
								</figure>
								<p class="text-center mt-2">
									El gran tamaño del punto ofrecerá un tratamiento rápido del vello gracias a su
									tecnología de escaneo en movimiento. Su tamaño de escaneo es ajustable de 50 a 10
									mm para una aplicación fácil y sencilla dirigida a pequeñas áreas de la cara y el
									cuerpo. Además, la exclusiva y magnética punta facial conectable hace que sea más
									fácil y cómodo llegar a zonas estrechas de 10 por 15 mm para obtener un resultado
									excelente.
								</p>
							</div>
							<div class="col-md-4 col-12">
								<h5 class="text-center color-secondary-velux">Doble longitud de onda</h5>

								<figure class="text-center grafica">
									<img
										src="assets/img/products/velux/Doble-Longitud-de-onda-grafica-velux.png"
										alt="Doble longitud de onda de VeLux"
										class="img-fluid"
									/>
								</figure>
								<p class="text-center mt-2">
									Al aprovechar todas las ventajas de la penetración profunda y la alta tasa de
									absorción de energía de 2 longitudes de onda diferentes de láser de 808 y 755nm,
									VeLux775 será capaz de ofrecer una amplia gama de cobertura de tratamiento seguro
									para todos los tipos de piel y vello, incluso los de color claro y vello fino
								</p>
							</div>
							<div class="col-md-4 col-12">
								<h5 class="text-center color-secondary-velux">Potente refrigeración y comodidad</h5>

								<figure class="text-center grafica">
									<img
										src="assets/img/products/velux/enfriamiento-VeLux.png"
										alt="Enfrimiento de VeLux"
										class="img-fluid"
									/>
								</figure>
								<p class="text-center mt-2">
									La combinación de la potente tecnología de enfriamiento por contacto de la punta
									de zafiro y la tecnología de escaneo de movimiento proporciona el beneficio óptimo
									del tratamiento de depilación sin anestésicos ni geles en comparación con su
									sistema de láser de depilación de diodo convencional. Además, el profesional puede
									elegir un adaptador de refrigeración por aire adicional para el vello fino o la
									piel sensible, que ofrece una mayor comodidad durante el tratamiento.
								</p>
							</div>
						</div>
					</div>
				</section>

				<div id="casos-clinicos" class="section">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2>ANTES Y <strong>DESPUÉS</strong></h2>
								<p class="destacado">
									Con <strong>VeLux</strong> lograrás los mejores resultados en depilación mediante
									un tratamiento seguro, cómodo y efectivo para tus pacientes.
								</p>
							</div>
						</div>
						<!--.row-->
						<div class="row">
							<div class="col-md-6 col-6">
								<ul class="clinic-cases-list list-unstyled">
									<li>
										<div class="row">
											<div class="col-md-4 col-12">
												<div class="card">
													<div class="card-block p-05">
														<div class="withripple">
															<a
																href="assets/img/casos-clinicos/velux/Velux_Casos-01.jpg"
																data-lightbox="gallery"
																data-title="Depilación en brazo con VeLux"
															>
																<img
																	src="assets/img/casos-clinicos/velux/Velux_Casos-01-thumb.jpg"
																	alt="Depilación con VeLux"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 col-12 no-mobile">
												<p>
													<strong>Fototipo IV | Femenino | 29 años</strong><br /><strong
														>Observaciones: </strong
													>Resultados en 6 sesiones
												</p>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-4">
												<div class="card">
													<div class="card-block p-05">
														<div class="withripple">
															<a
																href="assets/img/casos-clinicos/velux/Velux_Casos-03.jpg"
																data-lightbox="gallery"
																data-title="Depilación en pectoral con VeLux"
															>
																<img
																	src="assets/img/casos-clinicos/velux/Velux_Casos-03-thumb.jpg"
																	alt="Depilación con VeLux"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Fototipo III | Masculino | 40 años</strong><br /><strong
														>Observaciones: </strong
													>Resultados en 6 sesiones
												</p>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-4">
												<div class="card">
													<div class="card-block p-05">
														<div class="withripple">
															<a
																href="assets/img/casos-clinicos/velux/Velux_Casos-05.jpg"
																data-lightbox="gallery"
																data-title="Depilación en piernas con VeLux"
															>
																<img
																	src="assets/img/casos-clinicos/velux/Velux_Casos-05-thumb.jpg"
																	alt="Depilación con VeLux"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Fototipo IV | Femenino | 29 años</strong><br /><strong
														>Observaciones: </strong
													>Resultados en 3 sesiones
												</p>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-4 col-12">
												<div class="card">
													<div class="card-block p-05">
														<div class="withripple">
															<a
																href="assets/img/casos-clinicos/velux/Velux_Casos-07.jpg"
																data-lightbox="gallery"
																data-title="Depilación en brazos con VeLux"
															>
																<img
																	src="assets/img/casos-clinicos/velux/Velux_Casos-07-thumb.jpg"
																	alt="Depilación con VeLux"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Fototipo IV | Femenino | 50 años</strong><br /><strong
														>Observaciones: </strong
													>Resultados en 4 sesiones
												</p>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-4 col-12">
												<div class="card">
													<div class="card-block p-05">
														<div class="withripple">
															<a
																href="assets/img/casos-clinicos/velux/Velux_Casos-09.jpg"
																data-lightbox="gallery"
																data-title="Depilación en brazos con VeLux"
															>
																<img
																	src="assets/img/casos-clinicos/velux/Velux_Casos-09-thumb.jpg"
																	alt="Depilación con VeLux"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Fototipo IV | Femenino | 27 años</strong><br /><strong
														>Observaciones: </strong
													>Resultados en 4 sesiones
												</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<!--col-md-6  -->
							<div class="col-md-6 col-6">
								<ul class="clinic-cases-list list-unstyled">
									<li>
										<div class="row">
											<div class="col-md-4 col-12">
												<div class="card">
													<div class="card-block p-05">
														<div class="withripple">
															<a
																href="assets/img/casos-clinicos/velux/Velux_Casos-02.jpg"
																data-lightbox="gallery"
																data-title="Depilación en piernas con VeLux"
															>
																<img
																	src="assets/img/casos-clinicos/velux/Velux_Casos-02-thumb.jpg"
																	alt="Depilación con VeLux"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Fototipo IV | Masculino | 32 años</strong><br /><strong
														>Observaciones: </strong
													>Resultados en 6 sesiones
												</p>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-4 col-12">
												<div class="card">
													<div class="card-block p-05">
														<div class="withripple">
															<a
																href="assets/img/casos-clinicos/velux/Velux_Casos-04.jpg"
																data-lightbox="gallery"
																data-title="Depilación en brazos con VeLux"
															>
																<img
																	src="assets/img/casos-clinicos/velux/Velux_Casos-04-thumb.jpg"
																	alt="Depilación con VeLux"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Fototipo IV | Femenino | 38 años</strong><br /><strong
														>Observaciones: </strong
													>Resultados en 3 sesiones
												</p>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-4 col-12">
												<div class="card">
													<div class="card-block p-05">
														<div class="withripple">
															<a
																href="assets/img/casos-clinicos/velux/Velux_Casos-06.jpg"
																data-lightbox="gallery"
																data-title="Depilación en brazos con VeLux"
															>
																<img
																	src="assets/img/casos-clinicos/velux/Velux_Casos-06-thumb.jpg"
																	alt="Depilación con VeLux"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Fototipo IV | Femenino | 21 años</strong><br /><strong
														>Observaciones: </strong
													>Resultados en 3 sesiones
												</p>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-4 col-12">
												<div class="card">
													<div class="card-block p-05">
														<div class="withripple">
															<a
																href="assets/img/casos-clinicos/velux/Velux_Casos-08.jpg"
																data-lightbox="gallery"
																data-title="Depilación en brazos con VeLux"
															>
																<img
																	src="assets/img/casos-clinicos/velux/Velux_Casos-08-thumb.jpg"
																	alt="Depilación con VeLux"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Fototipo II | Femenino | 23 años</strong><br /><strong
														>Observaciones: </strong
													>Resultados en 1 sesión
												</p>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-md-4 col-12">
												<div class="card">
													<div class="card-block p-05">
														<div class="withripple">
															<a
																href="assets/img/casos-clinicos/velux/Velux_Casos-10.jpg"
																data-lightbox="gallery"
																data-title="Depilación en piernas con VeLux"
															>
																<img
																	src="assets/img/casos-clinicos/velux/Velux_Casos-10-thumb.jpg"
																	alt="Depilación con VeLux"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Fototipo III | Masculino | 27 años</strong><br /><strong
														>Observaciones: </strong
													>Resultados en 3 sesines
												</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--.section-->

				<!-- <section id="videos-section" class="section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 titlebar no-mobile">
              <h2 class="text-center color-blue-light">Videos</h2>

            </div>
          </div>
          <div class="row">
            <div class="col-md-4 offset-md-4 col-12">
              <h6 class="mt80-video-mobile txt-18">Velux</h6>
              <div class="card">
                <div data-plyr-provider="youtube" data-plyr-embed-id="5WvEAfAv6Z0" class="js-player"></div>
              </div>
            </div>
          </div>
        </div>
      </section> -->

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
											src="assets/img/products/velux/logo-velux-color.png"
											alt="Logotipo de LIPO1060"
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
												<td><strong>Longitud de onda</strong></td>
												<td>Combina 755 & 808nm</td>
											</tr>
											<tr>
												<td><strong>Densidad de energía</strong></td>
												<td>Máx. 2,499 W/cm<sup>2</sup></td>
												<!-- <td>09 W/cm<sup>2</sup> ~ 1.4W/cm<sup>2</sup> 20%</td> -->
											</tr>
											<tr>
												<td><strong>Fluencia</strong></td>
												<td>Hasta 100J/cm<sup>2</sup></td>
											</tr>
											<tr>
												<td><strong>Duración del pulso</strong></td>
												<td>Min. 3ms ~ Máx. 150ms</td>
											</tr>
											<tr>
												<td><strong>Tamaño de punto</strong></td>
												<td>15x10, 15x20, 15x30, 15x40, 15x50 (nm)</td>
											</tr>
											<tr>
												<td><strong>Energía eléctrica</strong></td>
												<td>100 - 240VAC, 50/60Hz, 1.3kVA</td>
											</tr>
											<tr>
												<td><strong>Dimensiones (mm)</strong></td>
												<td>691(W) x 1260(H) x 343(L)</td>
											</tr>
											<tr>
												<td><strong>Peso</strong></td>
												<td>Aprox. 60 Kg</td>
											</tr>
											<tr>
												<td><strong>Tipo de protección para descargas eléctricas</strong></td>
												<td>CLASE 1/Tipo B</td>
											</tr>
											<tr>
												<td><strong>Grado contra descargas eléctricas</strong></td>
												<td>Clase de seguridad IV para productos de Láser IEC60825-1 (2014)</td>
											</tr>
											<tr>
												<td><strong>COFEPRIS</strong></td>
												<td>Registro Sanitario: 0275E2023 SSA</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="download-brochure">
									<a
										href="assets/brochures/brochure-VeLux.pdf"
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
									id="form-equipo-velux"
									method="post"
									action="contact-equipment.php"
									class="container-fluid contactEqpmnt"
								>
									<div class="row" style="display: none">
										<input type="text" name="department" id="contactDpmnt" value="Ventas Equipos" />
										<input
											type="text"
											name="subject"
											id="contactSubject"
											value="Interés en <?php echo $device; ?>"
										/>
										<input type="text" name="whatsAppLink" id="whatsAppLink" />
										<input
											type="text"
											name="localUrl"
											id="localUrl"
											value="<?php echo strtolower(str_replace(' ', '-', $device));?>.php"
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
		<div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar">
			<div class="sb-slidebar-container">
				<header class="ms-slidebar-header">
					<div class="ms-slidebar-title">
						<div class="ms-slidebar-t">
							<img src="assets/img/LogoMede_Blanco.svg" alt="" />
						</div>
					</div>
				</header>
				<ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
					<li>
						<a class="link" href="#"> <i class="icon-home"></i> Inicio</a>
					</li>
					<li class="card" role="tab" id="sch2">
						<a
							class="collapsed"
							role="button"
							data-toggle="collapse"
							href="#sc2"
							aria-expanded="false"
							aria-controls="sc2"
						>
							<i class="icon-diamond"></i> Premium
						</a>
						<ul
							id="sc2"
							class="card-collapse collapse"
							role="tabpanel"
							aria-labelledby="sch2"
							data-parent="#slidebar-menu"
						>
							<li>
								<a href="depilacion.html">Depilación</a>
							</li>
							<li>
								<a href="rejuvenecimiento-facial.html">Rejuvenecimiento facial</a>
							</li>
							<li>
								<a href="pigmentaciones.html">Pigmentaciones</a>
							</li>
							<li>
								<a href="acne.html">Acné</a>
							</li>
							<li>
								<a href="reductivos.html">Reductivos</a>
							</li>
							<li>
								<a href="celulitis.html">Celulitis</a>
							</li>
							<li>
								<a href="estrias.html">Estrías</a>
							</li>
							<li>
								<a href="reafirmantes-corporales.html">Reafirmantes corporales</a>
							</li>

							<li>
								<a href="hifu.html">HIFU</a>
							</li>
							<li>
								<a href="radiofrecuencia.html">Radiofrecuencia</a>
							</li>
							<li>
								<a href="laser.html">Láser</a>
							</li>
							<li>
								<a href="criolipolisis.html">Criolipólisis</a>
							</li>
							<li>
								<a href="ipl.html">IPL</a>
							</li>
							<li>
								<a href="plasma.html">Plasma</a>
							</li>
							<li>
								<a href="electroporacion.html">Electroporación</a>
							</li>
							<li>
								<a href="hidra-dermoabrasion.html">Hidra-dermoabrasión</a>
							</li>
						</ul>
					</li>

					<li>
						<a class="link" href="monalisa/"> <i class="zmdi zmdi-view-compact"></i> MONALISA</a>
					</li>
					<li>
						<a class="link" href="cellmula/"> <i class="zmdi zmdi-view-compact"></i> CELLMULA</a>
					</li>

					<li>
						<a class="link" href="soporte.php"> <i class="zmdi zmdi-library"></i> Soporte</a>
					</li>
					<li>
						<a class="link" href="contacto.php"> <i class="icon-envelope"></i> Contacto</a>
					</li>
				</ul>
				<div class="ms-slidebar-social ms-slidebar-block">
					<h4 class="ms-slidebar-block-title">Social Links</h4>
					<div class="ms-slidebar-social">
						<a
							href="https://www.facebook.com/medestore/"
							class="btn-circle btn-circle-raised btn-facebook"
						>
							<i class="fa-brands fa-facebook-f"></i>
							<div class="ripple-container"></div>
						</a>
						<a
							href="https://www.instagram.com/medestoremx/"
							class="btn-circle btn-circle-raised btn-instagram"
						>
							<i class="fa-brands fa-instagram"></i>
							<div class="ripple-container"></div>
						</a>
						<a
							href="https://twitter.com/Medestoremx"
							class="btn-circle btn-circle-raised btn-twitter"
						>
							<i class="fa-brands fa-x-twitter"></i>
							<div class="ripple-container"></div>
						</a>
						<a
							href="https://www.youtube.com/user/MedeStore"
							class="btn-circle btn-circle-raised btn-google"
						>
							<i class="fa-brands fa-youtube"></i>
							<div class="ripple-container"></div>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div id="whatsapp-chat_wrapper">
			<form method="post" action="whatsAppHandler.php">
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
				$("#wrapper").fullpage({
					licenseKey: "667CBBF7-7C3C4F33-B8D7DA3E-D363FCA1",
					autoScrolling: $("body").width() > 574,
				})
			})
		</script>
		<?php include("whatsAppHandler.php"); ?>
	</body>
</html>
