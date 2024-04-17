<?php
include('sellerInfo.php');
include('whatsapp-counter.php');
$equipo = "INTRAcel PRO";
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
		<meta content="INTRAcel PRO" property="og:title" />
		<meta
			content="https://www.medestore.mx/assets/img/facebook-thumbnails/intracel-pro-facebook.png"
			property="og:image"
		/>
		<meta
			content="El Origen de la Tecnología RF Fraccional con Micro-electrodos. Obtén resultados mucho más notorios, seguros y duraderos con el tratamiento que combina las puntas SRR, FRM y SRT."
		/>
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://www.medestore.mx/intracel-pro.php" />
		<meta property="og:image:type" content="image/png" />
		<!-- METAS TWITTER -->
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:site" content="@medestoremx" />
		<meta name="twitter:creator" content="@medestoremx" />
		<meta name="twitter:title" content="INTRAcel PRO" />
		<meta
			name="twitter:description"
			content="El Origen de la Tecnología RF Fraccional con Microagujas. Obtén resultados mucho más notorios, seguros y duraderos con el tratamiento que combina las puntas SRR, FRM y SRT."
		/>
		<meta
			name="twitter:image"
			content="https://www.medestore.mx/assets/img/facebook-thumbnails/intracel-pro-facebook.png"
		/>
		<title>MedeStore | INTRAcel PRO</title>
		<meta
			name="description"
			content="El Origen de la Tecnología RF Fraccional con Micro-electrodos. Obtén resultados mucho más notorios, seguros y duraderos con el tratamiento que combina las puntas SRR, FRM y SRT."
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
			<nav class="navbar navbar-expand-md navbar-static ms-navbar ms-navbar-white navbar-mode">
				<div class="container container-full">
					<div class="navbar-header">
						<a class="navbar-brand" href="index.html">
							<img src="assets/img/Logo-MedeStore-line.png" alt="Logotipo de MedeStore" />
						</a>
					</div>
					<div class="collapse navbar-collapse" id="ms-navbar">
						<ul class="navbar-nav">
							<li class="nav-item dropdown dropdown-megamenu-container">
								<a
									href="#"
									class="nav-link dropdown-toggle animated fadeIn animation-delay-7"
									data-toggle="dropdown"
									data-hover="dropdown"
									role="button"
									aria-haspopup="true"
									aria-expanded="false"
									data-name="component"
									>Premium
									<!--<i class="zmdi zmdi-chevron-down"></i>-->
								</a>
								<ul class="dropdown-menu dropdown-megamenu animated fadeIn animated-2x">
									<li class="container">
										<div class="row">
											<div class="col-sm-6 megamenu-col">
												<div class="megamenu-block animated fadeInLeft animated-2x">
													<h3 class="megamenu-block-title">
														<i class="fa fa-bookmark-o"></i> Tratamientos
													</h3>
													<ul class="megamenu-block-list">
														<li>
															<a class="withripple" href="depilacion.html">
																<i class="fa fa-arrow-circle-right"></i> Depilación</a
															>
														</li>
														<li>
															<a class="withripple" href="rejuvenecimiento-facial.html">
																<i class="fa fa-arrow-circle-right"></i> Rejuvenecimiento facial</a
															>
														</li>
														<li>
															<a class="withripple" href="pigmentaciones.html">
																<i class="fa fa-arrow-circle-right"></i> Pigmentaciones</a
															>
														</li>
														<li>
															<a class="withripple" href="acne.html">
																<i class="fa fa-arrow-circle-right"></i> Acné</a
															>
														</li>
														<li>
															<a class="withripple" href="reductivos.html">
																<i class="fa fa-arrow-circle-right"></i> Reductivos</a
															>
														</li>
														<li>
															<a class="withripple" href="celulitis.html">
																<i class="fa fa-arrow-circle-right"></i> Celulitis</a
															>
														</li>
														<li>
															<a class="withripple" href="estrias.html">
																<i class="fa fa-arrow-circle-right"></i> Estrías</a
															>
														</li>
														<li>
															<a class="withripple" href="reafirmantes-corporales.html">
																<i class="fa fa-arrow-circle-right"></i> Reafirmantes corporales</a
															>
														</li>
													</ul>
												</div>
											</div>
											<div class="col-sm-6 megamenu-col">
												<div class="megamenu-block animated fadeInLeft animated-2x">
													<h3 class="megamenu-block-title">
														<i class="fa fa-bookmark-o"></i> Tecnología
													</h3>
													<ul class="megamenu-block-list">
														<li>
															<a class="withripple" href="hifu.html">
																<i class="fa fa-arrow-circle-right"></i> HIFU</a
															>
														</li>
														<li>
															<a class="withripple" href="radiofrecuencia.html">
																<i class="fa fa-arrow-circle-right"></i> Radiofrecuencia</a
															>
														</li>
														<li>
															<a class="withripple" href="laser.html">
																<i class="fa fa-arrow-circle-right"></i> Láser</a
															>
														</li>
														<li>
															<a class="withripple" href="criolipolisis.html">
																<i class="fa fa-arrow-circle-right"></i> Criolipólisis</a
															>
														</li>
														<li>
															<a class="withripple" href="ipl.html">
																<i class="fa fa-arrow-circle-right"></i> IPL</a
															>
														</li>
														<li>
															<a class="withripple" href="plasma.html">
																<i class="fa fa-arrow-circle-right"></i> Plasma</a
															>
														</li>
														<li>
															<a class="withripple" href="electroporacion.html">
																<i class="fa fa-arrow-circle-right"></i> Electroporación</a
															>
														</li>
														<li>
															<a class="withripple" href="electromagnetismo.html">
																<i class="fa fa-arrow-circle-right"></i> Electromagnetismo</a
															>
														</li>
														<li>
															<a class="withripple" href="hidra-dermoabrasion.html">
																<i class="fa fa-arrow-circle-right"></i> Hidra-dermoabrasión</a
															>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</li>

							<li class="nav-item dropdown">
								<a href="monalisa/">MONALISA </a>
							</li>
							<li class="nav-item dropdown">
								<a href="cellmula/">CELLMULA </a>
							</li>

							<li class="nav-item dropdown">
								<a
									href="soporte.php"
									class="nav-link dropdown-toggle animated fadeIn animation-delay-10"
									role="button"
									aria-haspopup="true"
									aria-expanded="false"
									>Soporte</a
								>
							</li>

							<li class="nav-item dropdown">
								<a
									href="contacto.php"
									class="nav-link dropdown-toggle animated fadeIn animation-delay-10"
									role="button"
									aria-haspopup="true"
									aria-expanded="false"
									>Contacto</a
								>
							</li>
						</ul>
					</div>
					<a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu">
						<i class="zmdi zmdi-menu"></i>
					</a>
				</div>
				<!-- container -->
			</nav>

			<div id="wrapper">
				<div
					id="home-stage"
					class="ms-hero-page ms-hero-video ms-hero-img-room color-white intro-hero-full intracel-bg section"
				>
					<div class="intro-hero-full-content">
						<div class="container text-center">
							<div class="row">
								<div class="col-md-6 father-div">
									<div class="son-div">
										<span class="center-block mb-2 mt-2 animated zoomInDown animation-delay-7">
											<figure class="logo-product">
												<img
													src="assets/img/products/intracel-pro/logo-intracel_pro-white.png"
													alt="Logotipo INTRAcel PRO"
													class="img-fluid"
												/>
											</figure>
										</span>
										<h2
											class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-7"
										>
											Evolución del 1<sup style="text-transform: none">er</sup> <br />Equipo de
											<strong>Radiofrecuencia fraccionada</strong> del Mundo
										</h2>
										<!-- <h1 class="animated fadeInUp animation-delay-12 color-primary-intracel">Tecnología
                    <span class="typed-class typed-block text-bold">HIFU</span>
                  </h1> -->
									</div>
								</div>
								<div class="col-md-6">
									<div class="center-block mt-2 animated zoomInDown animation-delay-8">
										<figure class="stage-product">
											<img
												src="assets/img/products/intracel-pro/INTRAcel_PRO-stage.png"
												alt="Equipo INTRAcel PRO"
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
								<h2 class="text-center color-primary-intracel mb-2">INTRAcel PRO</h2>
								<h4
									class="text-center color-primary-dark text-light mb-2 fadeInDown animation-delay-5"
								>
									El Origen de la Tecnología RF Fraccional con Microelectrodos
								</h4>

								<p
									class="lead text-center aco fadeInDown animation-delay-6 mw-800 center-block mb-4"
								>
									<strong>INTRAcel PRO,</strong> resultados mucho más notorios, seguros y duraderos
									con el tratamiento que combina las puntas <strong>SRR, FRM</strong> y
									<strong>SRT</strong>.
								</p>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="center-block mt-2 animated zoomInDown text-center animation-delay-9">
									<figure>
										<img
											src="assets/img/products/intracel-pro/handpiece-INTRAcel_PRO.png"
											alt="Pieza de mano de INTRAcel PRO"
											class="img-fluid"
										/>
									</figure>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="container">
          <div class="row mtop30 mt-4">
            <div class="col-md-12">
              <p class="lead text-center aco fadeInDown animation-delay-6 mw-800 center-block mb-4 color-primary-intracel">Esta combinación de tecnologías permite gran variedad de tratamientos de forma rápida y efectiva con resultados inigualables.</p>
            </div>
          </div>
        </div> -->
				</section>
				<section
					id="funcionamiento-intracel"
					class="section ms-hero-img-room color-white intro-hero-full"
				>
					<div class="container">
						<div class="row">
							<div id="" class="col-md-3 text-center">
								<figure>
									<img
										src="assets/img/products/intracel-pro/INTRAcel_Pro-full.png"
										alt="Equipo INTRAcel PRO"
										class="img-fluid"
									/>
								</figure>
							</div>
							<div class="col-md-9 father-div">
								<div class="son-div">
									<h3 class="text-white mb-2 fadeInDown animation-delay-5">
										¿Por qué <span class="color-primary-intracel_q">INTRAcel PRO™</span>?
									</h3>
									<h6 class="color-primary-intracel">
										1. Sistema de verificación de impedancia en tiempo real
									</h6>
									<p class="text-white">
										La medición de impedancia única de INTRAcel PRO permite adaptar la energía a
										cada paciente para siempre lograr los mismos efectos.
									</p>
									<h6 class="color-primary-intracel">2. Tratamiento rápido y eficaz</h6>
									<p class="text-white">
										Sólo una hora es necesaria, durante la cual la sensación en la piel será de
										calor.
									</p>
									<h6 class="color-primary-intracel">3. Sin tiempo de recuperación</h6>
									<p class="text-white">
										Al finalizar el tratamiento, el paciente puede regresar a sus actividades de
										inmediato
									</p>
									<h6 class="color-primary-intracel">4. Resultados</h6>
									<p class="text-white">
										Logra resultados de gran duración para tener una piel más firme, tersa, joven y
										sana. Se observarán cambios paulatinos a partir de la primera semana.
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
										class="text-center color-primary-intracel text-light mb-2 fadeInDown animation-delay-5"
									>
										APLICACIÓN FACIAL
									</h3>
									<ul class="facial-list">
										<li>Elimina la flacidez facial.</li>
										<li>Disminuye considerablemente arrugas y líneas de expresión.</li>
										<li>Complemento en el tratamiento de melasma.</li>
										<li>Atenua cicatrices y estrías.</li>
										<li>Efecto lifting natural.</li>
									</ul>
								</div>
							</div>
							<div id="aplicacion-facial" class="col-md-6">
								<figure>
									<img
										src="assets/img/products/intracel-pro/aplicacion-intracel.png"
										alt="Aplicación facial con INTRAcel PRO"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>
					</div>
				</section>

				<section id="fus-ultracel" class="section bg-intracel-one">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2 class="text-center color-white mb-2">Tecnología MSR en tiempo real</h2>
								<!-- <h4 class="text-center color-white text-light mb-2 fadeInDown animation-delay-5">Midiendo la resistencia de la piel</h4> -->

								<p
									class="lead text-center aco color-white fadeInDown animation-delay-6 mw-800 center-block mb-2"
								>
									Para calentar el área dérmica, se irradia energía óptima que va midiendo la
									resistencia de la piel en tiempo real.
								</p>
							</div>
						</div>
						<!-- <div class="big-image row">
            <div class="col-md-12 text-center">
              <figure>
                <img src="assets/img/products/ultracel/fus-techno-hand.png" alt="Pieza de mano FUS / HIFU de INTRAcel PRO " class="img-fluid">
              </figure>
            </div>
          </div> -->
						<div class="row fus-steps mt-2">
							<div class="xs-image col-md-4">
								<figure class="text-center">
									<img
										src="assets/img/products/intracel-pro/MSR-irradiacion.jpg"
										alt="Irradiación de energía con INTRAcel PRO"
										class="img-fluid"
									/>
								</figure>
								<h6 class="text-center color-white">
									<span class="no-mobile">01 |</span> Irradiación
								</h6>
								<p class="text-center color-white text-mobile">Irradiación de energía óptima.</p>
							</div>
							<div class="xs-image col-md-4">
								<figure class="text-center">
									<img
										src="assets/img/products/intracel-pro/MSR-monitoreo.jpg"
										alt="Monitoreo de resistencia de la piel INTRAcel PRO"
										class="img-fluid"
									/>
								</figure>
								<h6 class="text-center color-white">
									<span class="no-mobile">02 |</span> Monitoreo
								</h6>
								<p class="text-center color-white text-mobile">
									Monitoreo de la resistencia de la piel y retroalimentación instantánea.
								</p>
							</div>
							<div class="xs-image col-md-4">
								<figure class="text-center">
									<img
										src="assets/img/products/intracel-pro/MSR-irradiacion.jpg"
										alt="Entrega óptima de energía con INTRAcel PRO"
										class="img-fluid"
									/>
								</figure>
								<h6 class="text-center color-white"><span class="no-mobile">03 |</span> Entrega</h6>
								<p class="text-center color-white text-mobile">
									Se irradia la energía óptima de acuerdo a la resistencia de la piel.
								</p>
							</div>
						</div>
					</div>
				</section>

				<section id="frm-ultracel" class="section">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2 class="text-center color-primary-intracel mb-2">Beneficios</h2>
								<h4
									class="text-center color-primary-intracel text-light mb-2 fadeInDown animation-delay-5"
								>
									Coadyuvante en el tratamiento de Melasma
								</h4>

								<p
									class="lead text-center aco color-primary-intracel fadeInDown animation-delay-6 mw-800 center-block mb-4"
								>
									Técnica única para tratar el área objetivo (dermis) por medio de la penetración de
									micro-electrodos de diseño especial que no dañan la epidermis.
								</p>
							</div>
						</div>
						<div class="big-image row">
							<div class="col-md-12 text-center">
								<figure>
									<img
										src="assets/img/products/intracel-pro/beneficios-tratamiento-melasma-INTRAcel.png"
										alt="Beneficios INTRAcel PRO en tratamiento de Melasma"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>
					</div>
				</section>

				<section id="gfr-ultracel" class="section bg-intracel-one">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2 class="text-center color-white mb-2">Punta SRR</h2>
								<h4 class="text-center color-white text-light mb-2 fadeInDown animation-delay-5">
									49 agujas no-invasivas
								</h4>

								<p
									class="lead text-center aco color-white fadeInDown animation-delay-6 mw-800 center-block mb-4"
								>
									<strong>BIPOLAR</strong><br />Rejuvenecimiento de las arrugas periorbitales
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 text-center">
								<figure>
									<img
										src="assets/img/products/intracel-pro/punta-SRR.png"
										alt="Punta SRR 49 agujas no invasivas de INTRAcel PRO"
										class="img-fluid"
									/>
								</figure>
							</div>
							<div class="col-md-6 text-center">
								<figure>
									<img
										src="assets/img/products/intracel-pro/punta-SRR-detail.png"
										alt="Punta SRR 49 agujas no invasivas de INTRAcel PRO"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>

						<!-- <div class="row">
            <div class="col-md-6 text-center">
              <figure>
                <img src="assets/img/products/intracel-pro/punta-SRR-detalle.png" alt="Efecto de calor em ña epidermis con INTRAcel PRO" class="img-fluid">
              </figure>
              <p class="lead text-center aco color-white fadeInDown animation-delay-6 mw-800 center-block mb-4">Tipo redondo</p>

            </div>
            <div class="col-md-6 text-center">
              <figure>
                <img src="assets/img/products/intracel-pro/efecto-SRR.png" alt="Efecto de calor em ña epidermis con INTRAcel PRO" class="img-fluid">
              </figure>

            </div>
          </div> -->
					</div>
				</section>

				<section id="gfr-ultracel" class="section">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2 class="text-center color-primary-intracel mb-2">Punta FRM</h2>
								<h4
									class="text-center color-primary-intracel text-light mb-2 fadeInDown animation-delay-5"
								>
									49 agujas aisladas
								</h4>

								<p
									class="lead text-center aco color-dark fadeInDown animation-delay-6 mw-800 center-block mb-4"
								>
									<strong>MONO/BIPOLAR</strong><br />Arrugas / Poros / Acné<br />Arrugas finas /
									Cicatrices
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 text-center">
								<figure>
									<img
										src="assets/img/products/intracel-pro/punta-FRM-49agujas.png"
										alt="Punta FRM 49 agujas no invasivas de INTRAcel PRO"
										class="img-fluid"
									/>
								</figure>
							</div>
							<div class="col-md-6 text-center">
								<figure>
									<img
										src="assets/img/products/intracel-pro/punta-FRM-detail.png"
										alt="Punta FRM 49 agujas no invasivas de INTRAcel PRO"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>

						<!-- <div class="row">
            <div class="col-md-6 text-center">
              <figure>
                <img src="assets/img/products/intracel-pro/punta-FRM-detalle.png" alt="Efecto de calor en la epidermis con INTRAcel PRO" class="img-fluid">
              </figure>
              <p class="lead text-center aco color-dark fadeInDown animation-delay-6 mw-800 center-block mb-4">Aisladas</p>

            </div>
            <div class="col-md-6 text-center">
              <figure>
                <img src="assets/img/products/intracel-pro/efecto-FRM.png" alt="Efecto de calor en la epidermis con INTRAcel PRO" class="img-fluid">
              </figure>

            </div>
          </div> -->
					</div>
				</section>
				<section id="gfr-ultracel" class="section bg-intracel-one">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2 class="text-center color-white mb-2">Punta SRT</h2>
								<h4 class="text-center color-white text-light mb-2 fadeInDown animation-delay-5">
									16 agujas no-aisladas
								</h4>

								<p
									class="lead text-center aco color-white fadeInDown animation-delay-6 mw-800 center-block mb-4"
								>
									<strong>BIPOLAR</strong><br />Enrojecimiento / Pecas<br />Melasma
								</p>
							</div>
						</div>
						<div class="big-image row">
							<div class="col-md-6 text-center">
								<figure>
									<img
										src="assets/img/products/intracel-pro/punta-SRT-16agujas.png"
										alt="Punta SRR 49 agujas no invasivas de INTRAcel PRO"
										class="img-fluid"
									/>
								</figure>
							</div>
							<div class="col-md-6 text-center">
								<figure>
									<img
										src="assets/img/products/intracel-pro/punta-SRT-detail.png"
										alt="Punta SRR 49 agujas no invasivas de INTRAcel PRO"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>

						<!-- <div class="row">
            <div class="col-md-6 text-center">
              <figure>
                <img src="assets/img/products/intracel-pro/punta-SRT-no_aislada.png" alt="Efecto de calor em ña epidermis con INTRAcel PRO" class="img-fluid">
              </figure>
              <p class="lead text-center aco color-white fadeInDown animation-delay-6 mw-800 center-block mb-4">No aisladas</p>

            </div>
            <div class="col-md-6 text-center">
              <figure>
                <img src="assets/img/products/intracel-pro/efecto-SRT.png" alt="Efecto de calor em ña epidermis con INTRAcel PRO" class="img-fluid">
              </figure>

            </div>
          </div> -->
					</div>
				</section>

				<div id="casos-clinicos" class="section">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2>ANTES Y <strong>DESPUÉS</strong></h2>
								<p class="destacado">
									Con <strong>INTRAcel PRO</strong> obtendrás los mejores resultados en un menor
									tiempo en aplicación facial.
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
																href="assets/img/casos-clinicos/intracel-pro/Caso01.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento de acné"
															>
																<img
																	src="assets/img/casos-clinicos/intracel-pro/Caso01-thumb.jpg"
																	alt="Tratamiento de acné en mejillas con INTRAcel PRO"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 col-12 no-mobile">
												<p><strong>Mejillas</strong><br /><strong>Observaciones: </strong></p>
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
																href="assets/img/casos-clinicos/intracel-pro/Caso03.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento de acné"
															>
																<img
																	src="assets/img/casos-clinicos/intracel-pro/Caso03-thumb.jpg"
																	alt="Tratamiento de acné mandíbula con INTRAcel PRO"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p><strong>Mandíbula</strong><br /><strong>Observaciones: </strong></p>
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
																href="assets/img/casos-clinicos/intracel-pro/Caso05.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento de estrías"
															>
																<img
																	src="assets/img/casos-clinicos/intracel-pro/Caso05-thumb.jpg"
																	alt="Tratamiento de estrías con INTRAcel PRO"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p><strong>Estrías</strong><br /><strong>Observaciones: </strong></p>
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
																href="assets/img/casos-clinicos/intracel-pro/Caso02.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento se acné"
															>
																<img
																	src="assets/img/casos-clinicos/intracel-pro/Caso02-thumb.jpg"
																	alt="Tratamiento de acné en mejillas con INTRAcel PRO"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p><strong>Mejillas</strong><br /><strong>Observaciones: </strong></p>
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
																href="assets/img/casos-clinicos/intracel-pro/Caso04.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento de acné"
															>
																<img
																	src="assets/img/casos-clinicos/intracel-pro/Caso04-thumb.jpg"
																	alt="Tratamiento acne en mejillas con INTRAcel PRO"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p><strong>Marcas de acné</strong><br /><strong>Observaciones: </strong></p>
											</div>
										</div>
									</li>
									<!-- <li>
                  <div class="row">
                    <div class="col-md-4 col-12">
                      <div class="card">
                        <div class="card-block p-05">
                          <div class="withripple ">
                            <a href="assets/img/casos-clinicos/ultracel/caso06_ultracel.png" data-lightbox="gallery" data-title="Tratamiento en papada">
                              <img src="assets/img/casos-clinicos/ultracel/caso06_ultracel-thumb.png" alt="Tratamiento en papada con INTRAcel PRO" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 no-mobile">
                      <p><strong>Papada</strong><br><strong>Observaciones: </strong></p>
                    </div>
                  </div>
                </li> -->
								</ul>
							</div>
						</div>
						<!--row-->
						<div class="row">
							<div class="col-md-4 col-12 offset-md-4">
								<div>
									<a
										href="assets/articulos-clinicos/abstract-intracel.pdf"
										class="btn btn-raised btn-primary btn-brochure"
										target="_blank"
										>VER ARTÍCULO CLÍNICO</a
									>
								</div>
							</div>
						</div>
						<!--row-->
					</div>
				</div>
				<!--.section-->

				<section id="videos-section" class="section">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 titlebar">
								<h2 class="text-center color-blue-light">Videos</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 offset-md-4 col-12">
								<h6>INTRAcel PRO</h6>
								<div class="card">
									<div
										data-plyr-provider="youtube"
										data-plyr-embed-id="cUXkZU0Ejhk"
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
											src="assets/img/products/intracel-pro/logo-intracel_pro-color.png"
											alt="Logotipo INTRAcel PRO"
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
												<td><strong>Tipo de RF</strong></td>
												<td>Bipolar / Monopolar</td>
											</tr>
											<tr>
												<td><strong>Potencia</strong></td>
												<td>Max 50 W</td>
											</tr>
											<tr>
												<td><strong>Frecuencia</strong></td>
												<td>1 Mhz</td>
											</tr>
											<tr>
												<td><strong>Tasa de repetición</strong></td>
												<td>0.2 / 0.5 / 1.0 / 2.0 / Single</td>
											</tr>
											<tr>
												<td><strong>Pieza de mano</strong></td>
												<td>Pieza de mano</td>
											</tr>
											<tr>
												<td rowspan="2" valign="middle" class="row-span border-end">
													<strong>Puntas</strong>
												</td>
												<td><strong>Invasiva</strong></td>
												<td>
													49 Micro-Aguja de punta aislada<br />16 Micro-Aguja de punta no aislada
												</td>
											</tr>
											<tr class="border-end">
												<td><strong>No Invasiva</strong></td>
												<td>16 Micro-Aguja de punta no aislada</td>
											</tr>
											<tr>
												<td><strong>Grosor de punta</strong></td>
												<td>0.025 cm</td>
											</tr>
											<tr>
												<td><strong>Área de tratamiento</strong></td>
												<td>1 X 1 cm</td>
											</tr>
											<tr>
												<td><strong>Profundidad Ajustable</strong></td>
												<td>0.05 / 0.08 / 0.15 / 0.2 cm</td>
											</tr>
											<tr class="border-end">
												<td><strong>Duración de Tratamiento</strong></td>
												<td>10 ms - 5.0 sec</td>
											</tr>
										</tbody>
									</table>
									<!-- <table class="table table-responsive ">
                  <thead>
                    <tr>
                      <th colspan="3">Especificaciones Técnicas</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td rowspan="7" valign="middle" class="row-span border-end"><strong>Puntas</strong></td>
                      <td><strong>Invasiva</strong></td>
                      <td>49 Micro-Aguja de punta aislada<br>16 Micro-Aguja de punta no aislada</td>
                    </tr>
                    <tr class="border-end">
                      <td><strong>No Invasiva</strong></td>
                      <td>16 Micro-Aguja de punta no aislada</td>
                    </tr>
                    
                  </tbody>
                </table> -->

									<table class="table table-responsive">
										<thead>
											<tr>
												<th colspan="2">Especificaciones del sistema</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><strong>Peso</strong></td>
												<td>64 kg</td>
											</tr>
											<tr>
												<td><strong>Dimensiones</strong></td>
												<td>41 cm (G) X 35 cm (L) X 168 cm (G)</td>
											</tr>
											<tr>
												<td><strong>Requerimientos de electricidad</strong></td>
												<td>110V</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="download-brochure">
									<a
										href="assets/brochures/brochure-INTRAcel_PRO.pdf"
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
										<input type="text" name="department" id="contactDpmnt" value="Ventas Equipos" />
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

				<aside class="ms-footbar section fp-auto-height">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<!-- <h4 class="text-center ms-footbar-title subtitle">Contáctanos</h4>-->
							</div>
						</div>
						<!--.row-->

						<div class="row">
							<div class="col-lg-4 ms-footer-col">
								<div class="ms-footbar-block">
									<h6 class="ms-footbar-title">Privacidad</h6>
									<ul class="list-unstyled ms-icon-list">
										<li>
											<a href="aviso-de-privacidad.html">
												<i class="icon-docs"></i> Aviso de privacidad</a
											>
										</li>
										<li>
											<a href="politicas-de-venta.html">
												<i class="icon-badge"></i> Políticas de venta</a
											>
										</li>
										<li>
											<a href="politicas-de-servicio-tecnico.html">
												<i class="icon-settings"></i> Políticas de servicio técnico</a
											>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 ms-footer-col ms-footer-alt-color">
								<div class="ms-footbar-block">
									<h6 class="ms-footbar-title text-center">Social Media</h6>
									<div class="media">
										<div class="ms-footbar-social">
											<div class="footer-social-links">
												<a
													href="https://www.facebook.com/medestore/"
													class="btn-circle btn-facebook"
													target="_blank"
												>
													<i class="zmdi zmdi-facebook"></i>
												</a>
												<a
													href="https://www.instagram.com/medestoremx/"
													class="btn-circle btn-instagram"
													target="_blank"
												>
													<i class="zmdi zmdi-instagram"></i>
												</a>
												<a
													href="https://twitter.com/Medestore_mx"
													class="btn-circle btn-twitter"
													target="_blank"
												>
													<i class="zmdi zmdi-twitter"></i>
												</a>
												<a
													href="https://www.youtube.com/user/MedeStore"
													class="btn-circle btn-youtube"
													target="_blank"
												>
													<i class="zmdi zmdi-youtube"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 ms-footer-col ms-footer-text-right">
								<div class="ms-footbar-block">
									<div class="ms-footbar-title">
										<img src="assets/img/logo-medestore-white.png" alt="" />
									</div>
									<address class="no-mb">
										<p><i class="icon-location-pin mr-1"></i> Carr. a los Arquitos 603</p>
										<p><i class="icon-map mr-1"></i> Jesús María, Ags. C.P. 20996</p>

										<p>
											<a href="tel:+524494782400"
												><i class="icon-phone mr-1"></i>+52 (449) 478 2400</a
											>
										</p>
										<p></p>
										<p>
											<a href="https://api.whatsapp.com/send?phone=5214491732054"
												><i class="zmdi zmdi-whatsapp mr-1"></i>WhatsApp</a
											>
										</p>
									</address>
								</div>
							</div>
						</div>
					</div>
				</aside>
				<footer class="ms-footer section fp-auto-height">
					<div class="container">
						<p>MedeStore&reg; 2022. Todos los derechos reservados</p>
					</div>
				</footer>
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
							<img src="assets/img/logo-medestore-white.png" alt="" />
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
						<a class="link" href="monalisa/index.html">
							<i class="zmdi zmdi-view-compact"></i> MONALISA</a
						>
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
							<i class="zmdi zmdi-facebook"></i>
							<div class="ripple-container"></div>
						</a>
						<a
							href="https://www.instagram.com/medestoremx/"
							class="btn-circle btn-circle-raised btn-instagram"
						>
							<i class="zmdi zmdi-instagram"></i>
							<div class="ripple-container"></div>
						</a>
						<a
							href="https://twitter.com/Medestore_mx"
							class="btn-circle btn-circle-raised btn-twitter"
						>
							<i class="zmdi zmdi-twitter"></i>
							<div class="ripple-container"></div>
						</a>
						<a
							href="https://www.youtube.com/user/MedeStore"
							class="btn-circle btn-circle-raised btn-google"
						>
							<i class="zmdi zmdi-youtube"></i>
							<div class="ripple-container"></div>
						</a>
					</div>
				</div>
			</div>
		</div>

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
