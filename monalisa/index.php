<?php
include($_SERVER['DOCUMENT_ROOT'] . '/sellerInfo.php');
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
		<meta content="MONALISA" property="og:title" />
		<meta
			content="https://www.medestore.mx/assets/img/facebook-thumbnails/monalisa-facebook.png"
			property="og:image"
		/>
		<meta
			content="El ácido hialurónico más puro y seguro del mercado para la eliminación de marcas de la piel causadas por la edad."
			property="og:description"
		/>
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://www.medestore.mx/monalisa/" />
		<meta property="og:image:type" content="image/png" />
		<meta property="fb:app_id" content="804501393314781" />
		<!-- METAS TWITTER -->
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:site" content="@MonalisaRelleno" />
		<meta name="twitter:creator" content="@MonalisaRelleno" />
		<meta name="twitter:title" content="MONALISA" />
		<meta
			name="twitter:description"
			content="El ácido hialurónico más puro y seguro del mercado para la eliminación de marcas de la piel causadas por la edad."
		/>
		<meta
			name="twitter:image"
			content="https://www.medestore.mx/assets/img/facebook-thumbnails/monalisa-tw.png"
		/>
		<title>Medestore | MONALISA</title>
		<meta
			name="description"
			content="El ácido hialurónico más puro y seguro del mercado para la eliminación de marcas de la piel causadas por la edad."
		/>

		<!-- Favicons -->
		<link rel="shortcut icon" href="../assets/img/favicon.png?v=3" />
		<link
			rel="apple-touch-icon"
			sizes="152x152"
			href="../assets/img/icons/icono-medestore-retina.png"
		/>
		<link
			rel="apple-touch-icon"
			sizes="114x114"
			href="../assets/img/icons/icono-medestore-iphone.png"
		/>
		<link
			rel="apple-touch-icon"
			sizes="72x72"
			href="../assets/img/icons/icono-medestore-ipad.png"
		/>
		<link rel="apple-touch-icon" href="../assets/img/icons/icono-medestore.png" />

		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
		<link rel="stylesheet" href="../assets/css/preload.css" />
		<link rel="stylesheet" href="../assets/css/plugins.css" />
		<link rel="stylesheet" href="../assets/css/simple-line-icons.css" />
		<link rel="stylesheet" href="../assets/css/fullpage.css" />
		<!--<link rel="stylesheet" href="assets/css/examples.css">-->
		<link rel="stylesheet" href="../assets/css/style.css" />
		<link rel="stylesheet" href="../assets/css/media.css" />
		<link rel="stylesheet" href="../assets/css/contact_styles.css" />
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
			gtag("config", "AW-603809639")
		</script>
		<script>
			<?php echo "console.log($contactoEquipos[0] + $contactoConsumibles[0])"; ?>
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

		<!-- Event snippet for Contacto conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
		<script>
			function gtag_report_conversion(url) {
				var callback = function () {
					if (typeof url != "undefined") {
						window.location = url
					}
				}
				gtag("event", "conversion", {
					send_to: "AW-603809639/m3q8CIaGkNsBEOfO9Z8C",
					event_callback: callback,
				})
				return false
			}
		</script>

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

		<script type="text/javascript">
			_linkedin_partner_id = "2377074"
			window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []
			window._linkedin_data_partner_ids.push(_linkedin_partner_id)
		</script>
		<script type="text/javascript">
			;(function () {
				var s = document.getElementsByTagName("script")[0]
				var b = document.createElement("script")
				b.type = "text/javascript"
				b.async = true
				b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"
				s.parentNode.insertBefore(b, s)
			})()
		</script>
		<noscript>
			<img
				height="1"
				width="1"
				style="display: none"
				alt=""
				src="https://px.ads.linkedin.com/collect/?pid=2377074&fmt=gif"
			/>
		</noscript>

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
				<div class="container-fluid container-full">
					<div class="navbar-header">
						<a class="navbar-brand" href="../index.html">
							<img src="../assets/img/Logo-MedeStore-line.png" alt="Logotipo de MedeStore" />
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
															<a class="withripple" href="../depilacion.html">
																<i class="fa fa-arrow-circle-right"></i> Depilación</a
															>
														</li>
														<li>
															<a class="withripple" href="../rejuvenecimiento-facial.html">
																<i class="fa fa-arrow-circle-right"></i> Rejuvenecimiento facial</a
															>
														</li>
														<li>
															<a class="withripple" href="../pigmentaciones.html">
																<i class="fa fa-arrow-circle-right"></i> Pigmentaciones</a
															>
														</li>
														<li>
															<a class="withripple" href="../acne.html">
																<i class="fa fa-arrow-circle-right"></i> Acné</a
															>
														</li>
														<li>
															<a class="withripple" href="../reductivos.html">
																<i class="fa fa-arrow-circle-right"></i> Reductivos</a
															>
														</li>
														<li>
															<a class="withripple" href="../celulitis.html">
																<i class="fa fa-arrow-circle-right"></i> Celulitis</a
															>
														</li>
														<li>
															<a class="withripple" href="../estrias.html">
																<i class="fa fa-arrow-circle-right"></i> Estrías</a
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
															<a class="withripple" href="../hifu.html">
																<i class="fa fa-arrow-circle-right"></i> HIFU</a
															>
														</li>
														<li>
															<a class="withripple" href="../radiofrecuencia.html">
																<i class="fa fa-arrow-circle-right"></i> Radiofrecuencia</a
															>
														</li>
														<li>
															<a class="withripple" href="../laser.html">
																<i class="fa fa-arrow-circle-right"></i> Láser</a
															>
														</li>
														<li>
															<a class="withripple" href="../criolipolisis.html">
																<i class="fa fa-arrow-circle-right"></i> Criolipólisis</a
															>
														</li>
														<li>
															<a class="withripple" href="../ipl.html">
																<i class="fa fa-arrow-circle-right"></i> IPL</a
															>
														</li>
														<li>
															<a class="withripple" href="../plasma.html">
																<i class="fa fa-arrow-circle-right"></i> Plasma</a
															>
														</li>
														<li>
															<a class="withripple" href="../electroporacion.html">
																<i class="fa fa-arrow-circle-right"></i> Electroporación</a
															>
														</li>
														<li>
															<a class="withripple" href="../electromagnetismo.html">
																<i class="fa fa-arrow-circle-right"></i> Electromagnetismo</a
															>
														</li>
														<li>
															<a class="withripple" href="../hidra-dermoabrasion.html">
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
								<a href="index.php">MONALISA </a>
							</li>
							<li class="nav-item dropdown">
								<a href="../cellmula/">CELLMULA </a>
							</li>

							<li class="nav-item dropdown">
								<a
									href="../soporte.php"
									class="nav-link dropdown-toggle animated fadeIn animation-delay-10"
									role="button"
									aria-haspopup="true"
									aria-expanded="false"
									>Soporte</a
								>
							</li>

							<li class="nav-item dropdown">
								<a
									href="../contacto.php"
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
					class="ms-hero-page ms-hero-video ms-hero-img-room color-white intro-hero-full monalisa-bg-index section"
				>
					<div class="intro-hero-full-content bottom">
						<div class="container text-center">
							<div class="row">
								<div class="col-md-12">
									<span class="center-block mb-2 mt-2 animated zoomInDown animation-delay-7">
										<figure class="logo-product">
											<img
												src="../assets/img/products/monalisa/logo-monalisa-color.png"
												alt="Logotipo de MONALISA "
												class="img-fluid"
											/>
										</figure>
									</span>
									<!-- <h2 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-7">Relleno Dérmico de Ácido Hialurónico</h2> -->
									<h1 class="animated fadeInUp animation-delay-12 color-primary-monalisa"></h1>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 mb-2">
									<h2
										class="text-center color-white center-block mt-2 animated zoomInDown animation-delay-7 sub2"
									>
										Proceso de producción de Ácido Hialurónico
									</h2>
								</div>
							</div>

							<div class="row detalles-big02 animated zoomInDown animation-delay-7">
								<div class="col-md-3 text-center">
									<figure>
										<img
											src="../assets/img/products/monalisa-body/monalisa-produccion-cultivo.png"
											alt="Proceso de cultivo del Ácido Hialurónico"
											class="img-fluid"
										/>
									</figure>
									<p class="color-white">Cultivo</p>
								</div>
								<div class="col-md-3 text-center">
									<figure>
										<img
											src="../assets/img/products/monalisa-body/monalisa-produccion-fermentacion.png"
											alt="Proceso de fermentación del Ácido Hialurónico"
											class="img-fluid"
										/>
									</figure>
									<p class="color-white">Fermentación / Extracción</p>
								</div>
								<div class="col-md-3 text-center">
									<figure>
										<img
											src="../assets/img/products/monalisa-body/monalisa-produccion-purificacion.png"
											alt="Proceso de purificación del Ácido Hialurónico"
											class="img-fluid"
										/>
									</figure>
									<p class="color-white">Purificación</p>
								</div>
								<div class="col-md-3 text-center">
									<figure>
										<img
											src="../assets/img/products/monalisa-body/monalisa-produccion-ah.png"
											alt="Proceso de producción del Ácido Hialurónico"
											class="img-fluid"
										/>
									</figure>
									<p class="color-white">Ácido Hialurónico</p>
								</div>
							</div>
							<!-- <div class="row">
                        <div class="col-md-6">
                          <h4 class="no-m ms-site-title color-white center-block mt-2 animated zoomInDown animation-delay-7 sub2"><a href="monalisa-lidocaine.php" class="color-white link-stage">MONALISA Lidocaíne <i class="fa fa-angle-right"></i></a> </h4>
                          <span class="center-block mb-2 mt-2 animated zoomInDown animation-delay-7">
                            <figure class="logo-product">
                              <a href="monalisa-lidocaine.php"><img src="../assets/img/products/monalisa/boton-monalisa-lidocaina.png" alt="MONALISA Lidocaine " class="img-fluid"></a>
                            </figure>
                          </span>
                          
                          
                        </div>
                        <div class="col-md-6">
                          <h4 class="no-m ms-site-title color-white center-block mt-2 animated zoomInDown animation-delay-7 sub2"><a href="monalisa-body.php" class="color-white link-stage">MONALISA Body <i class="fa fa-angle-right"></i></a> </h4>
                          <span class="center-block mb-2 mt-2 animated zoomInDown animation-delay-7">
                            <figure class="logo-product">
                              <a href="monalisa-body.php"><img src="../assets/img/products/monalisa/boton-monalisa-body.png" alt="MONALISA Body " class="img-fluid"></a>
                            </figure>
                          </span>
                          
                        </div>
                      </div> -->
						</div>
					</div>
				</div>
				<!--.section-->

				<section id="hy-brid" class="section dark-background-medium">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2 class="text-center color-white mb-2">Tecnología Hy-BRID</h2>

								<p
									class="lead text-center aco text-dark fadeInDown animation-delay-6 mw-800 center-block mb-2 color-white"
								>
									Su hiper reticulado permite una resistencia a la absorción logrando resultados
									visibles y de mayor duración.
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="hy-brid-info">
									<figure>
										<img
											src="../assets/img/products/monalisa-body/tecnologa-hybrid-body.png"
											alt="Tecnología HY-BRID"
											class="img-fluid"
										/>
									</figure>
									<p class="color-white">
										<strong class="color-ultra-monalisa capital">Hy</strong>per Cross-linked
									</p>
									<p class="color-white">
										<strong class="color-ultra-monalisa capital">B</strong>ased on non-animal HA
									</p>
									<p class="color-white">
										<strong class="color-ultra-monalisa capital">R</strong>esidue-free
									</p>
									<p class="color-white">
										<strong class="color-ultra-monalisa capital">I</strong>mproved
										<strong class="color-ultra-monalisa capital">D</strong>ensity and elasticity
									</p>
									<p class="text-small color-white">
										* La duración puede variar de dependiendo de la condición del paciente.
									</p>
								</div>
							</div>
							<div class="col-md-6">
								<figure id="jeringa-green">
									<img
										src="../assets/img/products/monalisa-body/hybrid-monalisa-body.png"
										alt="Tecnología HY-BRID"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>
					</div>
				</section>

				<section id="hy-brid" class="section dark-background-medium">
					<div class="container">
						<div class="row text-center">
							<div class="col-md-12">
								<span class="center-block mb-2 mt-2 animated zoomInDown animation-delay-7">
									<figure class="logo-product">
										<img
											src="../assets/img/products/monalisa/logo-monalisa-color.png"
											alt="Logotipo de MONALISA "
											class="img-fluid"
										/>
									</figure>
								</span>
								<h2
									class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-7"
								>
									Relleno Dérmico de Ácido Hialurónico
								</h2>
								<h1 class="animated fadeInUp animation-delay-12 color-primary-monalisa"></h1>
							</div>
						</div>
						<div class="row text-center">
							<div class="col-md-6">
								<h4
									class="no-m ms-site-title color-white center-block mt-2 animated zoomInDown animation-delay-7 sub2"
								>
									<a href="monalisa-lidocaine.php" class="btn btn-raised btn-xlg btn-monalisa-l"
										>MONALISA Lidocaine</a
									>
								</h4>
								<span class="center-block mb-2 mt-2 animated zoomInDown animation-delay-7">
									<figure class="logo-product">
										<a href="monalisa-lidocaine.php"
											><img
												src="../assets/img/products/monalisa/boton-monalisa-lidocaina.png"
												alt="MONALISA Lidocaine "
												class="img-fluid"
										/></a>
									</figure>
								</span>

								<!-- <a href="#" class="btn btn-primary btn-raised btn-xlg animated fadeInUp animation-delay-20">Ver más información</a> -->
							</div>
							<div class="col-md-6">
								<h4
									class="no-m ms-site-title color-white center-block mt-2 animated zoomInDown animation-delay-7 sub2"
								>
									<a href="monalisa-body.php" class="btn btn-raised btn-xlg btn-monalisa-b"
										>MONALISA Body
									</a>
								</h4>
								<span class="center-block mb-2 mt-2 animated zoomInDown animation-delay-7">
									<figure class="logo-product">
										<a href="monalisa-body.php"
											><img
												src="../assets/img/products/monalisa/boton-monalisa-body.png"
												alt="MONALISA Body "
												class="img-fluid"
										/></a>
									</figure>
								</span>
							</div>
						</div>
					</div>
				</section>

				<!-- <section id="hy-brid" class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="monalisa text-center color-primary-monalisa mb-2">Tecnología Hy-BRID</h2>

              <p class="lead text-center aco text-dark fadeInDown animation-delay-6 mw-800 center-block mb-2">La tecnología <strong>Hy-BRID</strong> hace que el Ácido Hialurónico sea de alta densidad y sus partículas tengan un tamaño uniforme.</p>
              <p class="lead text-center aco text-dark fadeInDown animation-delay-6 mw-800 center-block mb-4"><strong>MONALISA</strong> tiene una óptima viscoelasticidad y sus resultados duran hasta 14 meses</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 ">
              <div class="hy-brid-info">
                <figure>
                	<img src="../assets/img/products/monalisa/tecnologa-hybrid-monalisa.png" alt="Tecnología HY-BRID" class="img-fluid">
              	</figure>
                <p><strong class="color-primary-monalisa capital">Hy</strong>per Cross-linked</p>
                <p><strong class="color-primary-monalisa capital">B</strong>ased on non-animal HA</p>
                <p><strong class="color-primary-monalisa capital">R</strong>esidue-free</p>
                <p><strong class="color-primary-monalisa capital">I</strong>mproved <strong class="color-primary-monalisa capital">D</strong>ensity and elasticity</p>
                <p class="text-small text-dark">* La duración puede variar de dependiendo de la condición del paciente.</p>
              </div>
            </div>
            <div class="col-md-6">
              <figure id="jeringa-green">
                <img src="../assets/img/products/monalisa/hy-brid-new.png" alt="Tecnología HY-BRID" class="img-fluid">
              </figure>
            </div>
          </div>
        </div>
      </section> -->

				<section id="garantia-autenticidad" class="section" data-anchor="garantia-autenticidad">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2 class="monalisa text-center color-primary-monalisa mb-2">GARANTÍA</h2>
								<p
									class="lead text-center aco fadeInDown animation-delay-6 mw-800 center-block mb-2"
								>
									<strong class="">Medestore</strong> es representante exclusivo de
									<strong class="color-primary-monalisa">MONALISA</strong> en México, el relleno de
									ácido hialurónico de alta pureza certificado por COFEPRIS.
								</p>
								<p
									class="lead text-center aco fadeInDown animation-delay-6 mw-900 center-block mb-2"
								>
									No arriesgues la salud de tus pacientes, adquiere productos
									<strong class="color-primary-monalisa">MONALISA</strong> originales con
									<strong>garantía de calidad</strong> y seguridad a través de nuestra red de
									distribuidores autorizados:
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="card card-info-monalisa">
									<div class="card-body overflow-hidden text-center">
										<p>
											<strong>Alan Adair Fernández Pérez</strong><br /><span class="zona-dist"
												>Aguascalientes, Guanajuato y S.L.P</span
											><br /><a href="tel:4491111637">(449) 111.1637</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-info-monalisa">
									<div class="card-body overflow-hidden text-center">
										<!-- <p><strong>Angela Julieta Porras Figueroa</strong><br><span class="zona-dist">Chihuahua</span><br><a href="tel:6143617266">(614) 361.7266</a></p> -->
										<p>
											<strong>Carlos Alberto Fuentes Arriaga</strong><br /><span class="zona-dist"
												>Chihuahua</span
											><br /><a href="tel:6141844319">(614) 184.4319</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-info-monalisa">
									<div class="card-body overflow-hidden text-center">
										<p>
											<strong>César Barrios Ramírez</strong><br /><span class="zona-dist"
												>Querétaro</span
											>
											<br /><a href="tel:4491912232">(449) 191.2232</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-info-monalisa">
									<div class="card-body overflow-hidden text-center">
										<p>
											<strong>Israel Estrada Guevara</strong><br /><span class="zona-dist"
												>CDMX y Edo. De México</span
											><br /><a href="tel:5551054351">(55) 5105.4351</a>
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3">
								<div class="card card-info-monalisa">
									<div class="card-body overflow-hidden text-center">
										<p>
											<strong>Farmaderm</strong><br /><span class="zona-dist">CDMX</span> <br /><a
												href="tel:5535725694"
												>(55) 3572.5694</a
											>
										</p>
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="card card-info-monalisa">
									<div class="card-body overflow-hidden text-center">
										<p>
											<strong>Luis Alfonso Ramírez Langarica</strong><br /><span class="zona-dist"
												>N.L., Coahuila, Tamaulipas y Durango</span
											>
											<br /><a href="tel:8116602204">(81) 1660.2204</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-info-monalisa">
									<div class="card-body overflow-hidden text-center">
										<p>
											<strong>Luis Armando Morales Espinoza</strong><br /><span class="zona-dist"
												>Michoacán, Puebla, Colima y Nayarit</span
											><br /><a href="tel:3335960295">(33) 3596.0295</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-info-monalisa">
									<div class="card-body overflow-hidden text-center">
										<p>
											<strong>Manuel Cardona Armenta</strong><br /><span class="zona-dist"
												>Querétaro</span
											><br /><a href="tel:5536771581">(55) 3677.1581</a>
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3">
								<div class="card card-info-monalisa">
									<div class="card-body overflow-hidden text-center">
										<p>
											<strong>Carmen María Torres</strong><br /><span class="zona-dist"
												>Sonora y Baja California Sur</span
											><br /><a href="tel:6624767928">(662) 476.7928</a>
										</p>
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="card card-info-monalisa">
									<div class="card-body overflow-hidden text-center">
										<p>
											<strong>Rocío Alhelí López Morales</strong><br /><span class="zona-dist"
												>Jalisco</span
											><br /><a href="tel:3318956852">(33) 1895.6852</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-info-monalisa">
									<div class="card-body overflow-hidden text-center">
										<p>
											<strong>Silvia Fematt</strong><br /><span class="zona-dist"
												>Ensenada y Tijuana</span
											><br /><a href="tel:6643270533">(664) 327.0533</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-info-monalisa">
									<div class="card-body overflow-hidden text-center">
										<p>
											<strong>Martha Flores Ruiz</strong><br /><span class="zona-dist">Tijuana</span
											><br /><a href="tel:6623517777">(664) 314.7617</a>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="card card-info-monalisa">
									<div class="card-body overflow-hidden text-center">
										<p>
											<strong>Farmaderm</strong><br /><span class="zona-dist">Veracruz</span
											><br /><a href="tel:2292289776">(229) 228.9776</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-info-monalisa">
									<div class="card-body overflow-hidden text-center">
										<p>
											<strong>Oficina Central</strong><br /><span class="zona-dist"
												>Resto de la república</span
											><br /><a href="tel:4494782400">(449) 478.2400</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section id="videos-section" class="section">
					<div class="container">
						<div class="row">
							<div class="col-md-12 titlebar">
								<h2 class="monalisa text-center color-blue-light">Videos</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 offset-md-3">
								<h6 class="monalisa small">Conozca donde se fabrica MONALISA</h6>
								<div class="card">
									<div
										data-plyr-provider="youtube"
										data-plyr-embed-id="tjQisiQoHqc"
										class="js-player"
									></div>
								</div>
							</div>
						</div>
						<div class="row"></div>
					</div>
				</section>

				<aside class="ms-footbar section fp-auto-height" style="margin-top: 0px">
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
											<a href="../aviso-de-privacidad.html">
												<i class="icon-docs"></i> Aviso de privacidad</a
											>
										</li>
										<li>
											<a href="../politicas-de-venta.html">
												<i class="icon-badge"></i> Políticas de venta</a
											>
										</li>
										<li>
											<a href="../politicas-de-servicio-tecnico.html">
												<i class="icon-settings"></i> Políticas de servicio técnico</a
											>
										</li>
										<li id="promociones-restricciones">
											<a href="politicas-de-servicio-tecnico.html">
												<i class="icon-tag"></i> Promociones y Restricciones</a
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
													href="https://twitter.com/Medestoremx"
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
										<img src="../assets/img/logo-medestore-white.png" alt="" />
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
						<p>Medestore&reg; 2023. Todos los derechos reservados</p>
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
							<img src="../assets/img/logo-medestore-white.png" alt="" />
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
								<a href="../depilacion.html">Depilación</a>
							</li>
							<li>
								<a href="../rejuvenecimiento-facial.html">Rejuvenecimiento facial</a>
							</li>
							<li>
								<a href="../pigmentaciones.html">Pigmentaciones</a>
							</li>
							<li>
								<a href="../acne.html">Acné</a>
							</li>
							<li>
								<a href="../reductivos.html">Reductivos</a>
							</li>
							<li>
								<a href="../celulitis.html">Celulitis</a>
							</li>
							<li>
								<a href="../estrias.html">Estrías</a>
							</li>

							<li>
								<a href="../hifu.html">HIFU</a>
							</li>
							<li>
								<a href="../radiofrecuencia.html">Radiofrecuencia</a>
							</li>
							<li>
								<a href="../laser.html">Láser</a>
							</li>
							<li>
								<a href="../criolipolisis.html">Criolipólisis</a>
							</li>
							<li>
								<a href="../ipl.html">IPL</a>
							</li>
							<li>
								<a href="../plasma.html">Plasma</a>
							</li>
							<li>
								<a href="../electroporacion.html">Electroporación</a>
							</li>
							<li>
								<a href="../hidra-dermoabrasion.html">Hidra-dermoabrasión</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="link" href="index.php"> <i class="zmdi zmdi-view-compact"></i> MONALISA</a>
					</li>
					<li>
						<a class="link" href="cellmula/"> <i class="zmdi zmdi-view-compact"></i> CELLMULA</a>
					</li>

					<li>
						<a class="link" href="../contacto.php"> <i class="icon-envelope"></i> Contacto</a>
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
							href="https://twitter.com/Medestoremx"
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

		<div id="whatsapp-chat_wrapper">
			<form method="post" action="../whatsAppHandler.php">
				<input type="hidden" name="whatsAppCounterLink" id="whatsAppCounterLink" />
				<button type="submit" id="whatsAppChat">
					<img src="../assets/img/whatsapp-icon.png" alt="Logo WhatsApp" />
				</button>
			</form>
		</div>

		<script src="../assets/js/plugins.min.js"></script>
		<script src="../assets/js/app.min.js"></script>
		<script src="../assets/js/app.js"></script>
		<script src="../assets/js/index.js"></script>
		<script src="../assets/js/fullpage.js"></script>
		<script src="../assets/js/home-generic-ultracel.js"></script>
		<script>
			$(document).ready(function () {
				$("#wrapper").fullpage({
					licenseKey: "667CBBF7-7C3C4F33-B8D7DA3E-D363FCA1",
					autoScrolling: $("body").width() > 574,
				})
			})
		</script>
		<?php include("../whatsAppHandler.php"); ?>
	</body>
</html>
