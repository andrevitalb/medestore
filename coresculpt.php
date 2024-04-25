<?php $device = "CoreSculpt"; ?>
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
		<meta content="CoreSculpt" property="og:title" />
		<meta
			content="https://www.medestore.mx/assets/img/facebook-thumbnails/coresculpt-facebook.png"
			property="og:image"
		/>
		<meta
			content="Es un equipo que ayuda a mantener un cuerpo sano, al esculpir los músculos de manera estética."
		/>
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://www.medestore.mx/coresculpt.php" />
		<meta property="og:image:type" content="image/png" />
		<!-- METAS TWITTER -->
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:site" content="@medestoremx" />
		<meta name="twitter:creator" content="@medestoremx" />
		<meta name="twitter:title" content="CoreSculpt" />
		<meta
			name="twitter:description"
			content="Es un equipo que ayuda a mantener un cuerpo sano, al esculpir los músculos de manera estética."
		/>
		<meta
			name="twitter:image"
			content="https://www.medestore.mx/assets/img/facebook-thumbnails/coresulpt-facebook.png"
		/>
		<title>Medestore | CoreSculpt</title>
		<meta
			name="description"
			content="Es un equipo que ayuda a mantener un cuerpo sano, al esculpir los músculos de manera estética."
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
			gtag("config", "G-HSMZ3WLJ1C")
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
						;[...document.querySelectorAll(".recaptchaResponse")].forEach(
							(input) => (input.value = token),
						)
					})
			})
		</script>
		<!-- Global site tag (gtag.js) - Google Ads: 10868482655 -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10868482655"></script>
		<script>
			window.dataLayer = window.dataLayer || []
			function gtag() {
				dataLayer.push(arguments)
			}
			gtag("js", new Date())

			gtag("config", "AW-10868482655")
		</script>
		<script>
			gtag("event", "page_view", {
				send_to: "AW-10868482655",
				user_id: "replace with value",
				value: "replace with value",
				items: [
					{
						id: "replace with value",
						location_id: "replace with value",
						google_business_vertical: "custom",
					},
				],
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
					class="ms-hero-page ms-hero-img-room color-white intro-hero-full coresculpt-bg section"
				>
					<div class="intro-hero-full-content">
						<div class="container text-center">
							<div class="row">
								<div class="col-md-6 col-12 father-div">
									<div class="son-div">
										<span class="center-block mb-2 mt-2 animated zoomInDown animation-delay-7">
											<figure class="logo-product">
												<img
													src="assets/img/products/coresculpt/CoreSculpt-logo-white.png"
													alt="Logotipo de CoreSculpt"
													class="img-fluid"
												/>
											</figure>
										</span>
										<h2
											id="LIPO1060-title"
											class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-7"
										>
											Sistema <strong>Electromagnético</strong> de <strong>Alta Intensidad</strong>
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
												src="assets/img/products/coresculpt/CoreSculpt-stage.png"
												alt="Equipo CoreSculpt"
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
							<h2 class="text-center color-primary-coresculpt mb-2">CoreSculpt</h2>
							<h4 class="text-center color-sub-lipo1060 mb-2 fadeInDown animation-delay-5">
								Es un equipo que ayuda a mantener un cuerpo sano, al esculpir los músculos de manera
								estética.
							</h4>
							<h4 class="text-center color-sub-lipo1060 mb-2 fadeInDown animation-delay-5">
								Sus dos piezas de mano realizan un tratamiento efectivo de abdomen, hombro, muslos,
								glúteo y más.
							</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="center-block mt-2 animated zoomInDown text-center animation-delay-9">
								<figure>
									<img
										src="assets/img/products/coresculpt/highlights-CoreSculpt.png"
										alt="Tratamientos con CoreSculpt"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 offset-md-2 col-sm-12">
							<div
								id="coresculpt-form-special"
								class="card card-info animated zoomInDown animation-delay-10"
							>
								<div class="card-header">
									<h2 class="card-title text-center">Quiero más información</h2>
								</div>
								<div class="card-body">
									<form
										method="post"
										action="contact-info.php"
										class="container-fluid contactEqpmnt special-coresculpt"
									>
										<div class="row">
											<div class="col-md-9 col-sm-12">
												<input
													type="email"
													id="contactEmail"
													name="email"
													placeholder="Email*"
													required
												/>
											</div>
											<div class="col-md-3 col-sm-12">
												<input type="hidden" name="recaptcha_response" class="recaptchaResponse" />
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
				</div>
				<!--.section-->

				<section
					id="porque-coresculpt"
					class="section ms-hero-img-room color-white intro-hero-full"
				>
					<div class="container">
						<div class="row">
							<div id="full-ultracel" class="col-md-4 text-center">
								<figure class="">
									<img
										src="assets/img/products/coresculpt/Coresculpt-full.png"
										alt="Equipo CoreSculpt"
										class="img-fluid"
									/>
								</figure>
							</div>
							<div class="col-md-8 father-div">
								<div class="son-div">
									<h3 class="color-dark mb-2 fadeInDown animation-delay-5">
										¿Por qué <strong class="color-primary-coresculpt">CoreSculpt</strong>?
									</h3>
									<h6 class="color-dark">1. Refuerzo Muscular</h6>
									<p class="color-dark">
										El campo electromagnético es efectivo para la prevención de hernia de disco,
										corrección de postura, alivia el dolor de espalda y más.
									</p>
									<h6 class="color-dark">2. Alivio del Dolor</h6>
									<p class="color-dark">
										Energía Electromagnética con 3 tesla de alta intensidad contraen y relajan los
										músculos de manera repetitiva. <br />Contrae: fibras intrafusales, fibras
										sensoriales y fibras extrafusales.
									</p>
									<h6 class="color-dark">3. Efecto de Ejercicio Máximo Efectivo</h6>
									<p class="color-dark">
										Energía electromagnética de alta intensidad contrae y relaja los músculos mínimo
										20,000 a un máximo de 36,000 veces en una sesión de 30 minutos. Esta simulación
										del músculo tiene el mismo efecto que hacer sentadillas o abdominales.
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
										class="text-center color-primary-coresculpt text-light mb-2 fadeInDown animation-delay-5"
									>
										APLICACIÓN CORPORAL
									</h3>
									<ul class="facial-list">
										<li>Reafirma y esculpe abdomen. hombros, muslos, glúteos y otras áreas.</li>
										<li>No genera calor ni congela, por lo que no causa dolor ni daña la piel.</li>
										<li>No requiere tiempo de inactividad.</li>
									</ul>
								</div>
							</div>
							<div id="aplicacion-facial" class="col-md-6">
								<figure>
									<img
										src="assets/img/products/coresculpt/aplicacion-corporal-coresculpt.png"
										alt="Resultados de la aplicación corporal de CoreSculpt"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>
					</div>
				</section>

				<section
					id="funcionamiento-coresculpt"
					class="section ms-hero-img-room color-white intro-hero-full"
				>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h3 class="text-center text-white text-light mb-2 fadeInDown animation-delay-5">
									Los pacientes sienten sólo
									<strong class="color-secondary-coresculpt"
										>Profundas contracciones Musculares,</strong
									>
									¡como al hacer el ejercicio más intenso!
								</h3>
								<p class="text-center text-white destacado">
									El Campo Magnético de pulso sólido es instantáneamente transmitido hacia un
									conducto que es fácilmente transmitido por un campo magnético así como al cuerpo
									humano, resultando en corrientes inducidas. Estas inducidas biocorrientes afectan
									cada tejido del cuerpo humano con mecanismos electrofisiológicos y estos efectos
									electrofisiológicos aparecen en los nervios sensoriales, vasos sanguíneos, tejido
									óseo, etc.
								</p>
								<p class="text-center text-white destacado">
									El campo magnético además de ser inofensivo, también trabaja de manera profunda
									activando células, nervios y tejido muscular, creando resultados extraordinarios.
								</p>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-10 offset-md-1 col-12">
								<h5 class="text-center color-secondary-coresculpt">Tratamiento CoreSculpt</h5>
								<h5 class="text-center text-white">36,000 contracciones durante 30 min.</h5>
								<figure class="text-center tecno-vacuum">
									<img
										src="assets/img/products/coresculpt/contracciones-coresculpt.png"
										alt="36,000 contracciones durante 30 min."
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-md-8 offset-md-2 col-sm-12">
								<div id="coresculpt-form-special" class="card card-info">
									<div class="card-header">
										<h2 class="card-title text-center">Quiero más información</h2>
									</div>
									<div class="card-body">
										<form
											method="post"
											action="contact-info.php"
											class="container-fluid contactEqpmnt special-coresculpt"
										>
											<div class="row">
												<div class="col-md-9 col-sm-12">
													<input
														type="email"
														id="contactEmail"
														name="email"
														placeholder="Email*"
														required
													/>
													<div style="display: none">
														<input type="text" name="subject" value="Lanzamiento Coresculpt" />
														<input
															type="text"
															name="localUrl"
															id="localUrl"
															value="<?php echo strtolower(str_replace(' ', '-', $device)); ?>.php"
														/>
													</div>
												</div>
												<div class="col-md-3 col-sm-12">
													<input
														type="hidden"
														name="recaptcha_response"
														class="recaptchaResponse"
													/>
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
						<!-- <div class="row">
            <div class="col-md-8 offset-md-2 text-center mt-3">
                        <figure id="ventajas-lipo">
                  <img src="assets/img/products/lipo1060/ventajas-lipo1060.png" alt="..." class="img-fluid">
                        </figure> 
            </div>
          
        </div>   -->
					</div>
				</section>

				<section id="" class="section bg-coresculpt-two">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<!-- <h3 class="text-center color-primary-coresculpt text-light mb-2 fadeInDown animation-delay-5">Punto 1</h3> -->
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<figure class="">
									<img
										src="assets/img/products/coresculpt/enfriamiento-coresculpt.jpg"
										alt="Enfriamiento CoreSculpt"
										class="img-fluid"
									/>
								</figure>
							</div>
							<div class="col-md-6">
								<h5 class="text-center color-primary-coresculpt">Enfriamiento con agua</h5>
								<p class="color-text-lipo1060">
									La potente circulación del agua calma el calor de la bobina para tener un
									tratamiento satisfactorio sin tiempo de inactividad.<br />No hay ningún peligro de
									fuga de aceite y agua.
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<!-- <h3 class="text-center color-primary-coresculpt text-light mb-2 fadeInDown animation-delay-5">Punto 2</h3> -->
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<figure class="text-center">
									<img
										src="assets/img/products/coresculpt/punto02.png"
										alt="Punto 2 CoreSculpt"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-md-8 offset-md-2 col-sm-12">
								<div id="coresculpt-form-special" class="card card-info">
									<div class="card-header">
										<h2 class="card-title text-center">Quiero más información</h2>
									</div>
									<div class="card-body">
										<form
											method="post"
											action="contact-info.php"
											class="container-fluid contactEqpmnt special-coresculpt"
										>
											<div class="row">
												<div class="col-md-9 col-sm-12">
													<input
														type="email"
														id="contactEmail"
														name="email"
														placeholder="Email*"
														required
													/>
													<div style="display: none">
														<input type="text" name="subject" value="Lanzamiento Coresculpt" />
														<input
															type="text"
															name="localUrl"
															id="localUrl"
															value="<?php echo strtolower(str_replace(' ', '-', $device)); ?>.php"
														/>
													</div>
												</div>
												<div class="col-md-3 col-sm-12">
													<input
														type="hidden"
														name="recaptcha_response"
														class="recaptchaResponse"
													/>
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
					</div>
				</section>

				<section id="" class="section bg-coresculpt-one">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h3 class="text-center color-white mb-4">
									Proceso de tratamiento con <strong>CoreSculpt</strong>
								</h3>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<figure>
									<img
										src="assets/img/products/coresculpt/icon-30min.png"
										alt="Tratamiento de 30min con CoreSculpt"
										class="img-fluid"
									/>
								</figure>
								<!-- <h6 class="color-primary-ultracel_q text-center">Fase de inflamación</h6> -->
							</div>
							<div class="col-md-4">
								<figure>
									<img
										src="assets/img/products/coresculpt/icon-2veces-semana.png"
										alt="Tratamiento 2 veces por semana"
										class="img-fluid"
									/>
								</figure>
							</div>
							<div class="col-md-4">
								<figure>
									<img
										src="assets/img/products/coresculpt/icon-4a6sesiones.png"
										alt="De 4 a 6 semanas de tratamiento CoreSculpt"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h3 class="text-center color-white mb-4">
									La pieza de mano genera pulsaciones Electromagnéticas. <br />El paciente sólo se
									recuesta en una cama durante 30 minutos por área a tratar. <br />Sólo son 4
									sesiones por 2 semanas.
								</h3>
							</div>
						</div>
					</div>
				</section>

				<!-- <section id="videos-section" class="section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 titlebar no-mobile">
              <h2 class="text-center color-blue-light">Videos</h2>

            </div>
          </div>
          <div class="row">
            <div class="col-md-4 offset-md-4 col-12">
              <h6 class="mt80-video-mobile txt-18">CoreSculpt</h6>
              <div class="card">
                <div data-plyr-provider="youtube" data-plyr-embed-id="5WvEAfAv6Z0" class="js-player"></div>
              </div>
            </div>
          </div>
        </div>
      </section> -->

				<div id="casos-clinicos" class="section">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2>ANTES Y <strong>DESPUÉS</strong></h2>
								<p class="destacado">
									Con <strong>CoreSculpt</strong> obtendrás los mejores resultados en Modelado
									Corporal, al esculpir eficazmente áreas como abdomen, hombro, muslos, glúteo y
									más.
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
																href="assets/img/casos-clinicos/coresculpt/Core_PacienteB_1.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento en abdomen con CoreSculpt"
															>
																<img
																	src="assets/img/casos-clinicos/coresculpt/Core_PacienteB_1.jpg"
																	alt="Tratamiento en abdomen con CoreSculpt"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 col-12 no-mobile">
												<p>
													<strong>Abdomen</strong><br /><!-- <strong>Observaciones: </strong> -->
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
																href="assets/img/casos-clinicos/coresculpt/Core_PacienteC_1.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento en abdomen con CoreSculpt"
															>
																<img
																	src="assets/img/casos-clinicos/coresculpt/Core_PacienteC_1-thumb.jpg"
																	alt="Tratamiento en abdomen con CoreSculpt"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Abdomen</strong
													><!-- <br><strong>Observaciones: </strong> -->
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
																href="assets/img/casos-clinicos/coresculpt/Core_PacienteD_1.jpg"
																data-lightbox="gallery"
																data-title="atamiento en glúteos con CoreSculpt"
															>
																<img
																	src="assets/img/casos-clinicos/coresculpt/Core_PacienteD_1-thumb.jpg"
																	alt="Tratamiento en glúteos con CoreSculpt"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Glúteos</strong
													><!-- <br><strong>Observaciones: </strong> -->
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
																href="assets/img/casos-clinicos/coresculpt/Core_PacienteE_1.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento en torso con CoreSculpt"
															>
																<img
																	src="assets/img/casos-clinicos/coresculpt/Core_PacienteE_1-thumb.jpg"
																	alt="Tratamiento en torso con CoreSculpt"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Torso</strong
													><!-- <br><strong>Observaciones: </strong> -->
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
																href="assets/img/casos-clinicos/coresculpt/Core_PacienteE_3.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento en glúteos con CoreSculpt"
															>
																<img
																	src="assets/img/casos-clinicos/coresculpt/Core_PacienteE_3-thumb.jpg"
																	alt="Tratamiento en glúteos con CoreSculpt"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Glúteos</strong
													><!-- <br><strong>Observaciones: </strong> -->
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
																href="assets/img/casos-clinicos/coresculpt/Core_PacienteF_1.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento en abdomen con CoreSculpt"
															>
																<img
																	src="assets/img/casos-clinicos/coresculpt/Core_PacienteF_1-thumb.jpg"
																	alt="Tratamiento en abdomen con CoreSculpt"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Abdomen</strong
													><!-- <br><strong>Observaciones: </strong> -->
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
																href="assets/img/casos-clinicos/coresculpt/Core_PacienteA.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento en espalda con CoreSculpt"
															>
																<img
																	src="assets/img/casos-clinicos/coresculpt/Core_PacienteA-thumb.jpg"
																	alt="Tratamiento en espalda con CoreSculpt"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Espalda</strong
													><!-- <br><strong>Observaciones: </strong> -->
												</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="col-md-6 col-6">
								<ul class="clinic-cases-list list-unstyled">
									<li>
										<div class="row">
											<div class="col-md-4 col-12">
												<div class="card">
													<div class="card-block p-05">
														<div class="withripple">
															<a
																href="assets/img/casos-clinicos/coresculpt/Core_PacienteB_2.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento en abdomen con CoreSculpt"
															>
																<img
																	src="assets/img/casos-clinicos/coresculpt/Core_PacienteB_2.jpg"
																	alt="Tratamiento en abdomen con CoreSculpt"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 col-12 no-mobile">
												<p>
													<strong>Abdomen</strong
													><!-- <br><strong>Observaciones: </strong> -->
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
																href="assets/img/casos-clinicos/coresculpt/Core_PacienteC_2.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento en abdomen con CoreSculpt"
															>
																<img
																	src="assets/img/casos-clinicos/coresculpt/Core_PacienteC_2-thumb.jpg"
																	alt="Tratamiento en abdomen con CoreSculpt"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Abdomen</strong
													><!-- <br><strong>Observaciones: </strong> -->
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
																href="assets/img/casos-clinicos/coresculpt/Core_PacienteD_2.jpg"
																data-lightbox="gallery"
																data-title="atamiento en glúteos con CoreSculpt"
															>
																<img
																	src="assets/img/casos-clinicos/coresculpt/Core_PacienteD_2-thumb.jpg"
																	alt="Tratamiento en glúteos con CoreSculpt"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Glúteos</strong
													><!-- <br><strong>Observaciones: </strong> -->
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
																href="assets/img/casos-clinicos/coresculpt/Core_PacienteE_2.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento en torso con CoreSculpt"
															>
																<img
																	src="assets/img/casos-clinicos/coresculpt/Core_PacienteE_2-thumb.jpg"
																	alt="Tratamiento en torso con CoreSculpt"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Torso</strong
													><!-- <br><strong>Observaciones: </strong> -->
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
																href="assets/img/casos-clinicos/coresculpt/Core_PacienteE_4.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento en glúteos con CoreSculpt"
															>
																<img
																	src="assets/img/casos-clinicos/coresculpt/Core_PacienteE_4-thumb.jpg"
																	alt="Tratamiento en glúteos con CoreSculpt"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Glúteos</strong
													><!-- <br><strong>Observaciones: </strong> -->
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
																href="assets/img/casos-clinicos/coresculpt/Core_PacienteF_2.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento en Glúteos con CoreSculpt"
															>
																<img
																	src="assets/img/casos-clinicos/coresculpt/Core_PacienteF_2-thumb.jpg"
																	alt="Tratamiento en Glúteos con CoreSculpt"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Glúteos</strong
													><!-- <br><strong>Observaciones: </strong> -->
												</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!--row-->
						<div class="row">
							<!-- <div class="col-md-4 col-12 offset-md-4">
          		<div>
                	<a href="assets/articulos-clinicos/abstract-cellec-v.pdf" class="btn btn-raised btn-primary btn-brochure" target="_blank">VER ARTÍCULO CLÍNICO</a>
              	</div>
          	</div> -->
						</div>
						<!--row-->
					</div>
				</div>
				<!--.section-->

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
											src="assets/img/products/coresculpt/CoreSculpt-logo-color.png"
											alt="Logotipo de CoreSculpt"
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
												<td><strong>Número de modelo</strong></td>
												<td>MST-1002</td>
											</tr>
											<tr>
												<td><strong>Tipo de energía</strong></td>
												<td>Campo Magnético</td>
											</tr>
											<tr>
												<td><strong>Duración del Pulso</strong></td>
												<td>400𝝻s</td>
											</tr>
											<tr>
												<td><strong>Intensidad del Campo Magnético</strong></td>
												<td>3 Tesla</td>
											</tr>
											<tr>
												<td><strong>Consumo Máximo de Energía</strong></td>
												<td>3.3kVA</td>
											</tr>

											<tr>
												<td><strong>Requerimientos de electricidad</strong></td>
												<td>110V</td>
											</tr>

											<tr>
												<td><strong>COFEPRIS</strong></td>
												<td>Registro Sanitario: 0276E2023 SSA</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="download-brochure">
									<a
										href="assets/brochures/brochure-CoreSculpt.pdf"
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
									id="form-equipo-coresculpt"
									method="post"
									action="contact-equipment-coresculpt.php"
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
										<input
											type="text"
											name="localUrl"
											id="localUrl"
											value="<?php echo strtolower(str_replace(' ', '-', $device)); ?>.php"
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
											<label for="">Teléfono (10 dígitos)</label>
											<input
												type="tel"
												id="contactPhone"
												name="phone"
												placeholder="Tel&eacute;fono*"
												pattern="[0-9]{10}"
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
											<input type="hidden" name="recaptcha_response" class="recaptchaResponse" />
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
