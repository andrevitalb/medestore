<?php
include('sellerInfo.php');
$device = "Olidia"; ?>
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
		<meta content="Olidia" property="og:title" />
		<meta
			content="https://www.medestore.mx/assets/img/facebook-thumbnails/olidia-facebook.png"
			property="og:image"
		/>
		<meta
			content="El confiable y efectivo estimulador de colágeno Olidia, es un tratamiento estético inyectable y biocompatible que ayuda a restaurar el volumen natural de la piel envejecida que ha perdido colágeno."
		/>
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://www.medestore.mx/olidia.php" />
		<meta property="og:image:type" content="image/png" />
		<!-- METAS TWITTER -->
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:site" content="@medestoremx" />
		<meta name="twitter:creator" content="@medestoremx" />
		<meta name="twitter:title" content="Olidia" />
		<meta
			name="twitter:description"
			content="El confiable y efectivo estimulador de colágeno Olidia, es un tratamiento estético inyectable y biocompatible que ayuda a restaurar el volumen natural de la piel envejecida que ha perdido colágeno."
		/>
		<meta
			name="twitter:image"
			content="https://www.medestore.mx/assets/img/facebook-thumbnails/olidia-facebook.png"
		/>
		<title>MedeStore | Olidia</title>
		<meta
			name="description"
			content="El confiable y efectivo estimulador de colágeno Olidia, es un tratamiento estético inyectable y biocompatible que ayuda a restaurar el volumen natural de la piel envejecida que ha perdido colágeno."
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
				<div class="ms-hero-page ms-hero-img-room color-white intro-hero-full olidia-bg section">
					<div class="intro-hero-full-content">
						<div class="container text-center">
							<div class="row">
								<div class="col-md-6 col-12 father-div">
									<div class="son-div">
										<span class="center-block mb-2 mt-2 animated zoomInDown animation-delay-7">
											<figure class="logo-product">
												<img
													src="assets/img/products/olidia/logo-olidia-white.png"
													alt="Logotipo de Olidia"
													class="img-fluid"
												/>
											</figure>
										</span>
										<h2
											id="LIPO1060-title"
											class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-7"
										>
											<strong class="">Diamond</strong><br /><strong class="">Collagen</strong>
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
												src="assets/img/products/olidia/olidia-ampolleta-01.png"
												alt="Ampolleta Olidia"
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
							<h2 class="text-center color-primary-olidia mb-2">Olidia</h2>
							<h4 class="text-center color-sub-lipo1060 mb-2 fadeInDown animation-delay-5">
								Polvo de Ácido POLI-L-LÁCTICO INYECTABLE
							</h4>
							<p class="text-center color-text-lipo1060 destacado">
								El confiable y efectivo estimulador de colágeno
								<strong class="color-primary-olidia">Olidia</strong>, es un tratamiento estético
								inyectable y biocompatible que ayuda a restaurar el volumen natural de la piel
								envejecida que ha perdido colágeno.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="center-block mt-2 animated zoomInDown text-center animation-delay-9">
								<figure>
									<img
										src="assets/img/products/olidia/olidia-ampolleta-caja.png"
										alt="Producto Olidia"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>
					</div>
					<!-- <div class="row">
          <div class="col-md-12">
            <p class="text-center color-text-lipo1060 destacado">Además, la tecnología de escaneo en movimiento con un amplio y ajustable tamaño de spot de 50x15mm permite un tratamiento del vello seguro, de alta velocidad y comodidad sin el uso de anestésicos o gel tanto para superficies grandes y pequeñas.</p>
          </div>
        </div> -->
				</div>

				<!--.section-->
				<section id="" class="section ms-hero-img-room color-white intro-hero-full bg-olidia-two">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2
									class="text-center color-sub-lipo1060 text-light mb-2 fadeInDown animation-delay-5"
								>
									Collagen is the key factor
								</h2>
								<p class="text-center color-text-lipo1060 destacado">
									El colágeno es el ingrediente principal para una piel sana y joven. A medida que
									las personas envejecen, el colágeno se pierde gradualmente desde los 20 años y su
									tasa de reducción es de 1% anual. La piel adulta disminuye la capacidad de
									producción de colágeno, para los 50 años la piel habrá perdido el 30% de este. La
									principal razón de las arrugas y plieges es la pérdida de colágeno, causando que
									la piel fina se haga flácida y se vea envejecida.
								</p>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-4 col-12">
								<figure class="text-center tecno-vacuum">
									<img
										src="assets/img/products/olidia/olidia-keyfactor01.png"
										alt="Olidia Key factor"
										class="img-fluid"
									/>
								</figure>
								<p class="text-center color-text-lipo1060 mt-2">
									Alta densidad de colágeno y elastina.
								</p>
							</div>
							<div class="col-md-4 col-12">
								<figure class="text-center tecno-vacuum">
									<img
										src="assets/img/products/olidia/olidia-keyfactor02.png"
										alt="Olidia Key factor"
										class="img-fluid"
									/>
								</figure>
								<p class="text-center color-text-lipo1060 mt-2">
									Degradación del colágeno y la elastina.
								</p>
							</div>
							<div class="col-md-4 col-12">
								<figure class="text-center tecno-vacuum">
									<img
										src="assets/img/products/olidia/olidia-keyfactor03.png"
										alt="Olidia Key factor"
										class="img-fluid"
									/>
								</figure>
								<p class="text-center color-text-lipo1060 mt-2">Falta de colágeno y elastina.</p>
							</div>
						</div>
					</div>
				</section>

				<section id="porque-olidia" class="section ms-hero-img-room color-white intro-hero-full">
					<div class="container">
						<div class="row">
							<div id="full-ultracel" class="col-md-4 text-center">
								<figure class="">
									<img
										src="assets/img/products/olidia/olidia-ampolleta-01.png"
										alt="Ampolleta Olidia"
										class="img-fluid"
									/>
								</figure>
							</div>
							<div class="col-md-8 father-div">
								<div class="son-div">
									<h3 class="text-dark mb-2 fadeInDown animation-delay-5">
										¿Por qué <span class="color-primary-olidia">Olidia?</span>
									</h3>
									<h6 class="color-primary-olidia">1. Resultados naturales</h6>
									<p class="text-dark">Los resultados se mostrarán gradualmente.</p>
									<h6 class="color-primary-olidia">2. Volumen de larga duración</h6>
									<p class="text-dark">
										El volumen generado con el propio colágeno dura más de 2 años.
									</p>
									<h6 class="color-primary-olidia">3. Tiempo de recuperación rápido</h6>
									<p class="text-dark">
										Con menos tiempo de inactividad, fácil de regresar a su rutina.
									</p>
									<h6 class="color-primary-olidia">4. Económico</h6>
									<p class="text-dark">Menos costoso que otros tratamientos quirúrgicos.</p>
									<h6 class="color-primary-olidia">5. Mejora y restauración del volumen</h6>
									<p class="text-dark">
										Mejora de las arrugas mediante la renaturalización del colágeno perdido.
									</p>
									<h6 class="color-primary-olidia">6. Seguro</h6>
									<p class="text-dark">
										Aprobado por el MDFS de Corea y con la marca CE.3). El principal ingrediente
										Ácido Poliláctico es biodegradable.
									</p>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section id="aplicacion-facial-info" class="section">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2 class="text-center color-dark mb-2">
									Otros vs <span class="color-primary-olidia">Olidia</span>
								</h2>
								<!-- <h4 class="text-center color-white text-light mb-2 fadeInDown animation-delay-5">Mecanismo del tratamiento</h4> -->
							</div>
						</div>
						<div class="row">
							<div id="aplicaciones" class="col-md-12 col-12">
								<div class="card">
									<table class="table table-responsive table-bordered text-center no-mobile">
										<tbody>
											<tr>
												<td></td>
												<td><strong class="color-primary-olidia">Olidia</strong></td>
												<td><strong>Relleno AH</strong></td>
												<td><strong>Injerto de grasa</strong></td>
											</tr>
											<tr>
												<td><strong>Quirúrgico o no quirúrgico</strong></td>
												<td>No quirúrgico</td>
												<td>No quirúrgico</td>
												<td>Quirúrgico</td>
											</tr>
											<tr>
												<td><strong>Ingredientes clave</strong></td>
												<td>10-13 minutos</td>
												<td>Alrededor de 30 minutos</td>
												<td>Alrededor de 2 horas</td>
											</tr>
											<tr>
												<td><strong>Tiempo de tratamiento</strong></td>
												<td>Enfriamiento de agua</td>
												<td>30°C</td>
												<td>45°C</td>
											</tr>
											<tr>
												<td><strong>Áreas para tratamiento</strong></td>
												<td>
													Tanto para zonas estrechas como para zonas anchas.<br />
													*Zona estrecha (pliegues nasolabiales, nariz, barbilla, frente, ceño,
													lagrimal, pómulo).<br />*Zona ancha (mejilla, sien, etc.).
												</td>
												<td>
													Principalmente para zonas estrechas (pliegues nasolabiales, nariz,
													barbilla, frente, entrecejo, lagrimal, malar).
												</td>
												<td>
													Principalmente para zonas amplias (mejilla, toda la cara incluyendo la
													sien).
												</td>
											</tr>
											<tr>
												<td><strong>Duración del efecto</strong></td>
												<td>
													Más del 80% se mantiene durante 25 meses. Después de 3-4 inyecciones
													iniciales, no hay necesidad de inyecciones adicionales durante 2-3 años.
												</td>
												<td>Desaparece durante 6-8 meses y debe repetirse el tratamiento.</td>
												<td>Desaparece rápidamente después de aproximadamente un mes.</td>
											</tr>
											<tr>
												<td><strong>Efectos secundarios</strong></td>
												<td>Necrosis(+), ceguera(+), edema(+).</td>
												<td>Necrosis(+), ceguera(+), edema(+).</td>
												<td>Edema(++), hematoma(++).</td>
											</tr>
											<tr>
												<td><strong>Función</strong></td>
												<td>Estimula la generación de colágeno (+++).</td>
												<td>Induce la generación de colágeno(-).</td>
												<td>Induce la generación de colágeno(-).</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="bs-example">
									<table
										class="table table-responsive table-bordered text-center no-desktop"
										style="vertical-align: middle"
									>
										<tbody>
											<tr>
												<th>Olidia</th>
												<th>Relleno AH</th>
												<th>Injerto de grasa</th>
											</tr>
											<tr>
												<td colspan="3">Quirúrgico o no quirúrgico</td>
											</tr>
											<tr>
												<td style="vertical-align: middle" class="info-coolite">No quirúrgico</td>
												<td>No quirúrgico</td>
												<td>Quirúrgico</td>
											</tr>
											<tr>
												<td colspan="3">Ingredientes clave</td>
											</tr>
											<tr>
												<td style="vertical-align: middle" class="info-coolite">
													Ácido Poli-L-Láctico (biodegradable)
												</td>
												<td>Ácido Hialurónico (biodegradable)</td>
												<td>Grasa autóloga</td>
											</tr>
											<tr>
												<td colspan="3">Tiempo de tratamiento</td>
											</tr>
											<tr>
												<td style="vertical-align: middle" class="info-coolite">10-13 minutos</td>
												<td>Alrededor de 30 minutos</td>
												<td>Alrededor de 2 horas</td>
											</tr>
											<tr>
												<td colspan="3">Áreas para tratamiento</td>
											</tr>
											<tr>
												<td style="vertical-align: middle" class="info-coolite">
													Tanto para zonas estrechas como para zonas anchas.<br />
													*Zona estrecha (pliegues nasolabiales, nariz, barbilla, frente, ceño,
													lagrimal, pómulo).<br />*Zona ancha (mejilla, sien, etc.).
												</td>
												<td>
													Principalmente para zonas estrechas (pliegues nasolabiales, nariz,
													barbilla, frente, entrecejo, lagrimal, malar).
												</td>
												<td>
													Principalmente para zonas amplias (mejilla, toda la cara incluyendo la
													sien).
												</td>
											</tr>
											<tr>
												<td colspan="3">Duración del efecto</td>
											</tr>
											<tr>
												<td style="vertical-align: middle" class="info-coolite">
													Más del 80% se mantiene durante 25 meses. Después de 3-4 inyecciones
													iniciales, no hay necesidad de inyecciones adicionales durante 2-3 años.
												</td>
												<td>Desaparece durante 6-8 meses y debe repetirse el tratamiento.</td>
												<td>Desaparece rápidamente después de aproximadamente un mes.</td>
											</tr>
											<tr>
												<td colspan="3">Efectos secundarios</td>
											</tr>
											<tr>
												<td style="vertical-align: middle" class="info-coolite">
													Necrosis(+), ceguera(+), edema(+).
												</td>
												<td>Necrosis(+), ceguera(+), edema(+).</td>
												<td>Edema(++), hematoma(++).</td>
											</tr>
											<tr>
												<td colspan="3">Función</td>
											</tr>
											<tr>
												<td style="vertical-align: middle" class="info-coolite">
													Estimula la generación de colágeno (+++).
												</td>
												<td>Induce la generación de colágeno(-).</td>
												<td>Induce la generación de colágeno(-).</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section id="" class="section bg-olidia-one">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<h3 class="text-center color-white mb-4">
									Regenera colágeno perdido con el estimulador de colágeno <strong>Olidia</strong>
								</h3>
							</div>
						</div>
						<div class="container">
							<div class="row mt-2">
								<div class="col-md-12">
									<p class="text-center color-white destacado">
										PLA (Ácido Poli-L-Láctico) es un material que ha sido aprobado por la FDA de
										EE.UU.<br />Después de la inyección, el PLA es metabolizado y permanece durante
										cierto tiempo, luego se descompone en H<sub>2</sub>O, CO<sub>2</sub> y
										azúcar.<br />El PLA (Ácido Poli-L-Láctico) es un polímero de ácido láctico
										afiliado que existe naturalmente en el cuerpo humano, pero que disminuye con el
										paso del tiempo.
									</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 offset-md-2 text-center">
								<figure>
									<img
										src="assets/img/products/olidia/olidia-regeneracion-colageno.png"
										alt="Regeneración de colágeno con olidia"
										class="img-fluid"
									/>
								</figure>
							</div>
						</div>
					</div>
				</section>

				<section id="ultra-delgado" class="section">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<p class="text-center color-dark destacado">
									Olidia puede combinarse para garantizar una total corrección y suavidad en la
									piel.
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-12">
								<!-- <h5 class="text-center color-secondary-velux">Alta velocidad y Flexibilidad</h5> -->

								<figure class="text-center grafica">
									<img
										src="assets/img/products/olidia/olidia-metabolismo.png"
										alt="Metabolismo Olidia"
										class="img-fluid"
									/>
								</figure>
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
									Con <strong>Olidia</strong> obtendrás los mejores resultados en Volumen facial y
									corporal.
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
																href="assets/img/casos-clinicos/olidia/olidia-caso-01.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento Olidia"
															>
																<img
																	src="assets/img/casos-clinicos/olidia/thumbs/olidia-caso-thumb-01.jpg"
																	alt="Tratamiento Olidia"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 col-12 no-mobile">
												<p>
													<strong>Volumen con Olidia</strong
													><br /><!-- <strong>Observaciones: </strong> -->
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
																href="assets/img/casos-clinicos/olidia/olidia-caso-03.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento Olidia después de un año"
															>
																<img
																	src="assets/img/casos-clinicos/olidia/thumbs/olidia-caso-thumb-03.jpg"
																	alt="Tratamiento Olidia"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Volumen con Olidia</strong
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
																href="assets/img/casos-clinicos/olidia/olidia-caso-05.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento Olidia despues de un año"
															>
																<img
																	src="assets/img/casos-clinicos/olidia/thumbs/olidia-caso-thumb-05.jpg"
																	alt="Tratamiento Olidia"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Volumen con Olidia</strong
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
																href="assets/img/casos-clinicos/olidia/olidia-caso-07.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento Olidia"
															>
																<img
																	src="assets/img/casos-clinicos/olidia/thumbs/olidia-caso-thumb-07.jpg"
																	alt="Tratamiento Olidia"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Volumen con Olidia</strong
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
																href="assets/img/casos-clinicos/olidia/olidia-caso-02.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento Olidia"
															>
																<img
																	src="assets/img/casos-clinicos/olidia/thumbs/olidia-caso-thumb-02.jpg"
																	alt="Tratamiento Olidia"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 col-12 no-mobile">
												<p>
													<strong>Volumen con Olidia</strong
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
																href="assets/img/casos-clinicos/olidia/olidia-caso-04.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento Olidia"
															>
																<img
																	src="assets/img/casos-clinicos/olidia/thumbs/olidia-caso-thumb-04.jpg"
																	alt="Tratamiento Olidia"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Volumen con Olidia</strong
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
																href="assets/img/casos-clinicos/olidia/olidia-caso-06.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento Olidia"
															>
																<img
																	src="assets/img/casos-clinicos/olidia/thumbs/olidia-caso-thumb-06.jpg"
																	alt="Tratamiento Olidia"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Volumen con Olidia</strong
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
																href="assets/img/casos-clinicos/olidia/olidia-caso-08.jpg"
																data-lightbox="gallery"
																data-title="Tratamiento Olidia"
															>
																<img
																	src="assets/img/casos-clinicos/olidia/thumbs/olidia-caso-thumb-08.jpg"
																	alt="Tratamiento Olidia"
																	class="img-fluid"
																/>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-8 no-mobile">
												<p>
													<strong>Volumen con Olidia</strong
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
