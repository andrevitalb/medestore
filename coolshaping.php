<?php
include('sellerInfo.php');
include('whatsapp-counter.php');
$equipo = "COOLshaping";
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="theme-color" content="#333">
  <!-- METAS FACEBOOK -->
  <meta content='COOLshaping.' property='og:title' />
  <meta content='http://www.medestore.mx/assets/img/facebook-thumbnails/coolshaping-facebook.png' property='og:image' />
  <meta content='El equipo más novedoso para la eliminación de grasa localizada y modelado corporal' property='og:description' />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://www.medestore.mx/coolshaping.php">
  <meta property="og:image:type" content="image/png">
  <!-- METAS TWITTER -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@medestoremx">
  <meta name="twitter:creator" content="@medestoremx">
  <meta name="twitter:title" content="COOLshaping">
  <meta name="twitter:description" content="El equipo más novedoso para la eliminación de grasa localizada y modelado corporal">
  <meta name="twitter:image" content="https://www.medestore.mx/assets/img/facebook-thumbnails/coolshaping-facebook.png">
  <title>Medestore | COOLshaping</title>
  <meta name="description" content="El equipo más novedoso para la eliminación de grasa localizada y modelado corporal.">

  <!-- Favicons -->
  <link rel="shortcut icon" href="assets/img/favicon.png?v=3">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/img/icons/icono-medestore-retina.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/img/icons/icono-medestore-iphone.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/img/icons/icono-medestore-ipad.png">
  <link rel="apple-touch-icon" href="assets/img/icons/icono-medestore.png">

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="assets/css/preload.css">
  <link rel="stylesheet" href="assets/css/plugins.css">
  <link rel="stylesheet" href="assets/css/simple-line-icons.css">
  <link rel="stylesheet" href="assets/css/fullpage.css">
  <!--<link rel="stylesheet" href="assets/css/examples.css">-->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/media.css">
  <link rel="stylesheet" href="assets/css/contact_styles.css">
  <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M48C6MP');</script>
  <!-- End Google Tag Manager -->

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-33467298-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-33467298-1');
  </script>
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2199805706970346');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2199805706970346&ev=PageView&noscript=1" />
  </noscript>
  <!-- End Facebook Pixel Code -->

  <style>
    @media(max-width: 500px) {
      #whatsapp-chat_wrapper {
        display: none;
      }
    }
  </style>
  <!-- Google reCaptcha -->
  <script src='https://www.google.com/recaptcha/api.js?render=6LffOdUZAAAAAKgU2-T8nrSuRE3RsjVHos-GKMLK'>
  </script>
  <script>
    grecaptcha.ready(function() {
      grecaptcha.execute('6LffOdUZAAAAAKgU2-T8nrSuRE3RsjVHos-GKMLK', {
          action: 'submit'
        })
        .then(function(token) {
          var recaptchaResponse = document.getElementById('recaptchaResponse');
          recaptchaResponse.value = token;
        });
    });
  </script>
</head>

<body>

  <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M48C6MP"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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
      <div id="home-stage" class="ms-hero-page ms-hero-video ms-hero-img-room color-white intro-hero-full coolshaping-bg section">
        <div class="intro-hero-full-content ">
          <div class="container text-center">
            <div class="row">
              <div class="col-md-6 father-div">
                <div class="son-div">
                  <span class="center-block mb-2 mt-2 animated zoomInDown animation-delay-7">
                    <figure class="logo-product">
                      <img src="assets/img/products/coolshaping/logo_header.png" alt="Logotipo de COOLshaping" class="img-fluid">
                    </figure>
                  </span>
                  <h2 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-7">Lo más novedoso para la <strong>eliminación</strong> de grasa localizada</h2>
                  <h1 class="animated fadeInUp animation-delay-12 color-white">Multi-Tecnología
                    <span class="typed-class typed-block text-bold">Criolipólisis</span>
                  </h1>

                </div>
              </div>
              <div class="col-md-6">
                <div class="center-block mt-2 animated zoomInDown animation-delay-8">
                  <figure class="stage-product">
                    <img src="assets/img/products/coolshaping/stage-coolshaping.png" alt="Equipo COOLshaping" class="img-fluid">
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
              <h2 class="text-center color-primary-coolshaping mb-2 ">COOLshaping</h2>
              <h4 class="text-center color-secondary-coolshaping text-light mb-2 fadeInDown animation-delay-5">Criolipólisis + Vacuum + Led</h4>

              <p class="lead text-center aco fadeInDown animation-delay-6 mw-800 center-block mb-4"><strong>COOLshaping&trade;</strong> es la solución más avanzada para reducir medidas al combinar tres tecnologías en un solo equipo.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <figure>
                <img src="assets/img/products/coolshaping/pieza-de-mano-coolshaping.png" alt="Pieza de mano del equipo COOLshaping" class="img-fluid">
              </figure>
            </div>
          </div>

        </div>

        <div class="container">
          <div class="row mtop30 mt-4">
            <div class="col-md-12">
              <p class="lead text-center aco fadeInDown animation-delay-6 mw-800 center-block mb-4 color-primary-coolshaping">El sistema utiliza <strong>Crío-energía</strong> durante el tratamiento en combinación con Vacuum terapia y Led que mejoran los efectos del tratamiento logrando mejores resultados.</p>
            </div>
          </div>
        </div>

      </section>



      <section id="funcionamiento-coolshaping" class="section ms-hero-img-room color-white intro-hero-full">
        <div class="container">
          <div class="row">
            <div id="full-ultracel" class="col-md-3 text-center">
              <figure>
                <img src="assets/img/products/coolshaping/full-coolshaping.png" alt="Equipo COOLshaping" class="img-fluid">
              </figure>
            </div>
            <div class="col-md-9 father-div">
              <div class="son-div">
                <h3 class="text-white mb-2 fadeInDown animation-delay-5">¿Por qué <strong class="color-secondary-coolshaping">COOLshaping™</strong>?</h3>
                <h6 class="color-secondary-coolshaping">1. Sistema totalmente automatizado</h6>
                <p class="text-white"><strong>COOLshaping</strong> se encarga de tu paciente mientras tu personal atiende otras labores.</p>

                <h6 class="color-secondary-coolshaping">2. Mejores resultados en menos tiempo</h6>
                <p class="text-white">Utiliza una o las dos piezas de mano incluidas para tratar dos áreas al mismo tiempo.</p>
                <h6 class="color-secondary-coolshaping">3. Estable y seguro</h6>
                <p class="text-white">Emite Crío-energía de forma óptima para la reducción local de las células de grasa y modelado corporal, además de que mantiene una temperatura estable durante todo el tratamiento.</p>
                <h6 class="color-secondary-coolshaping">4. Excelente rentabilidad</h6>
                <p class="text-white">No necesita personal para su operación y además el material y mantenimiento requerido es mínimo.</p>
                <h6 class="color-secondary-coolshaping">5. Multitecnología</h6>
                <p class="text-white">Adicional a la Criolipólisis, la Vacuum y el sistema Led generan mejores resultados.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="fus-ultracel" class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-center color-primary-coolshaping mb-2 ">APLICADORES</h2>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3 ">
              <figure class="text-center">
                <img src="assets/img/products/coolshaping/aplicador-mini.png" alt="Aplicador mini de COOLshaping" class="img-fluid">
              </figure>
              <h6 class="text-center color-primary-coolshaping"><span>Mini (Papada)</h6>
              <p class="text-center color-secondary-coolshaping">(Opcionales)</p>

              <p class="text-center color-dark text-mobile">5cm x 8cm x 11cm</p>
            </div>
            <div class="col-md-3 ">
              <figure class="text-center">
                <img src="assets/img/products/coolshaping/aplicador-chico.png" alt="Aplicador chico de COOLshaping" class="img-fluid">
              </figure>
              <h6 class="text-center color-primary-coolshaping"><span>Chicas</h6>
              <p class="text-center color-secondary-coolshaping">(Opcionales)</p>

              <p class="text-center color-dark text-mobile">10cm x 14cm x 11cm</p>
            </div>
            <div class="col-md-3 ">
              <figure class="text-center">
                <img src="assets/img/products/coolshaping/aplicador-mediano.png" alt="Aplicador mediano de COOLshaping" class="img-fluid">
              </figure>
              <h6 class="text-center color-primary-coolshaping"><span>Medianas</h6>
              <p class="text-center color-secondary-coolshaping">(Incluidas)</p>
              <p class="text-center color-dark text-mobile">11cm x 19cm x 14cm</p>
            </div>
            <div class="col-md-3 ">
              <figure class="text-center">
                <img src="assets/img/products/coolshaping/aplicador-grande.png" alt="Aplicador grande de COOLshaping" class="img-fluid">
              </figure>
              <h6 class="text-center color-primary-coolshaping"><span>Grandes</h6>
              <p class="text-center color-secondary-coolshaping">(Opcionales)</p>
              <p class="text-center color-dark text-mobile">12cm x 22cm x 14cm</p>
            </div>
          </div>
        </div>
      </section>

      <section id="aplicacion-facial-info" class="section">
        <div class="container-fluid">
          <div class="row">
            <div id="aplicaciones" class="col-md-6">
              <div id="aplica-facial-info">
                <h3 class="text-center color-primary-coolshaping text-light mb-2 fadeInDown animation-delay-5">APLICACIÓN CORPORAL</h3>
                <ul class="facial-list">
                  <li>Reduce eficazmente las células de grasa.</li>
                  <li>Ayuda a la reducción de la celulitis.</li>
                  <li>Modelado corporal.</li>
                  <li>Reafirma la piel.</li>
                  <li>Eliminación de grasa localizada</li>
                </ul>
              </div>
            </div>
            <div id="aplicacion-facial" class="col-md-6">
              <figure>
                <img src="assets/img/products/coolshaping/aplicacion-coolshaping.png" alt="Resultados de modelado corporal con COOLshaping" class="img-fluid">
              </figure>
            </div>
          </div>
        </div>
      </section>

      <section id="fus-ultracel" class="section bg-coolshaping">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-center color-primary-coolshaping mb-2 ">CRIOLIPÓLISIS</h2>
              <h4 class="text-center color-white text-light mb-2 fadeInDown animation-delay-5">¿Cómo funciona?</h4>


            </div>
          </div>

          <div class="row fus-steps mt-2">
            <div class="xs-image col-md-3">
              <figure class="text-center">
                <img src="assets/img/products/coolshaping/crioenfriamiento-coolshaping.png" alt="Crío-enfriamineto con COOLshaping" class="img-fluid">
              </figure>
              <h6 class="text-center color-primary-coolshaping"><span class="no-mobile">01 |</span> Crío-enfriamiento</h6>
              <p class="text-center color-white text-mobile">Colocamos la pieza de mano en el área a tratar. Comenzamos el Crío-enfriamiento para alcanzar la
                temperatura objetivo.</p>
            </div>
            <div class="xs-image col-md-3">
              <figure class="text-center">
                <img src="assets/img/products/coolshaping/crioreaccion-coolshaping.png" alt="Crío-reaccion con COOLshaping" class="img-fluid">
              </figure>
              <h6 class="text-center color-primary-coolshaping"><span class="no-mobile">02 |</span> Crío-reacción</h6>
              <p class="text-center color-white text-mobile">Las células de grasa en el área comienzan a responder con Crío-cristalización.</p>
            </div>
            <div class="xs-image col-md-3">
              <figure class="text-center">
                <img src="assets/img/products/coolshaping/metabolico-coolshaping.png" alt="Proceso metabólico con COOLshaping" class="img-fluid">
              </figure>
              <h6 class="text-center color-primary-coolshaping"><span class="no-mobile">03 |</span> Proceso metabólico (30 días)</h6>
              <p class="text-center color-white text-mobile">Posteriormente, las células de grasa alcanzan una muerte biológica y son removidas del organismo por medio del proceso metabólico natural.</p>
            </div>
            <div class="xs-image col-md-3">
              <figure class="text-center">
                <img src="assets/img/products/coolshaping/eliminacion-coolshaping.png" alt="Proceso de celulas eliminadas con COOLshaping" class="img-fluid">
              </figure>
              <h6 class="text-center color-primary-coolshaping"><span class="no-mobile">04 |</span> Células eliminadas (90 días)</h6>
              <p class="text-center color-white text-mobile">Las células de grasa son eliminadas.</p>
            </div>

          </div>

        </div>
      </section>



      <div id="casos-clinicos" class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>ANTES Y <strong>DESPUÉS</strong></h2>
              <p class="destacado">Con <strong>COOLshaping</strong> obtendrás los mejores resultados en tratamientos reductivos.</p>
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
                          <div class="withripple ">
                            <a href="assets/img/casos-clinicos/coolshaping/caso_0.jpg" data-lightbox="gallery" data-title="Tratamiento en espalda alta y baja">
                              <img src="assets/img/casos-clinicos/coolshaping/caso_0_t.jpg" alt="Tratamiento en espalda alta y baja con COOLshaping" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 col-12 no-mobile">
                      <p><strong>Espalda alta y baja</strong><br><strong>Observaciones: </strong>Resultados 8 semanas después del primer tratamiento</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card">
                        <div class="card-block p-05">
                          <div class="withripple ">
                            <a href="assets/img/casos-clinicos/coolshaping/caso_2.jpg" data-lightbox="gallery" data-title="Tratamiento en abdomen y espalda baja">
                              <img src="assets/img/casos-clinicos/coolshaping/caso_2_t.jpg" alt="Tratamiento en abdomen y espalda baja con COOLshaping" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 no-mobile">
                      <p><strong>Abdomen y espalda baja</strong><br><strong>Observaciones: </strong>Resultados 12 semanas después del primer tratamiento</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card">
                        <div class="card-block p-05">
                          <div class="withripple ">
                            <a href="assets/img/casos-clinicos/coolshaping/caso_4.jpg" data-lightbox="gallery" data-title="Tratamiento en muslos y chaparreras">
                              <img src="assets/img/casos-clinicos/coolshaping/caso_4_t.jpg" alt="Tratamiento en muslos y chaparreras con COOLshaping" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 no-mobile">
                      <p><strong>Muslos y chaparreras</strong><br><strong>Observaciones: </strong>Resultados 8 semanas después del primer tratamiento</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card">
                        <div class="card-block p-05">
                          <div class="withripple ">
                            <a href="assets/img/casos-clinicos/coolshaping/caso_6.jpg" data-lightbox="gallery" data-title="Tratamiento en abdomen">
                              <img src="assets/img/casos-clinicos/coolshaping/caso_6_t.jpg" alt="Tratamiento en abdomen con COOLshaping" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 no-mobile">
                      <p><strong>Abdomen</strong><br><strong>Observaciones: </strong>Resultados 8 semanas después del primer tratamiento</p>
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
                          <div class="withripple ">
                            <a href="assets/img/casos-clinicos/coolshaping/caso_1.jpg" data-lightbox="gallery" data-title="Tratamiento en abdomen">
                              <img src="assets/img/casos-clinicos/coolshaping/caso_1_t.jpg" alt="Tratamiento en abdomen con COOLshaping" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 no-mobile">
                      <p><strong>Abdomen</strong><br><strong>Observaciones: </strong>Resultados 8 semanas después del primer tratamiento</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4 col-12">
                      <div class="card">
                        <div class="card-block p-05">
                          <div class="withripple ">
                            <a href="assets/img/casos-clinicos/coolshaping/caso_3.jpg" data-lightbox="gallery" data-title="Tratamiento en abdomen">
                              <img src="assets/img/casos-clinicos/coolshaping/caso_3_t.jpg" alt="Tratamiento en abdomen con COOLshaping" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 no-mobile">
                      <p><strong>Abdomen</strong><br><strong>Observaciones: </strong>Resultados 10 semanas después del primer tratamiento</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4 col-12">
                      <div class="card">
                        <div class="card-block p-05">
                          <div class="withripple ">
                            <a href="assets/img/casos-clinicos/coolshaping/caso_5.jpg" data-lightbox="gallery" data-title="Tratamiento en espalda">
                              <img src="assets/img/casos-clinicos/coolshaping/caso_5_t.jpg" alt="Tratamiento en espalda con COOLshaping" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 no-mobile">
                      <p><strong>Espalda</strong><br><strong>Observaciones: </strong>Resultados 8 semanas después del primer tratamiento</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4 col-12">
                      <div class="card">
                        <div class="card-block p-05">
                          <div class="withripple ">
                            <a href="assets/img/casos-clinicos/coolshaping/caso_7.jpg" data-lightbox="gallery" data-title="Tratamiento en abdomen">
                              <img src="assets/img/casos-clinicos/coolshaping/caso_7_t.jpg" alt="Tratamiento en abdomen con COOLshaping" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 no-mobile">
                      <p><strong>Abdomen</strong><br><strong>Observaciones: </strong>Resultados 8 semanas después del primer tratamiento</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
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
            <div class="col-md-4 offset-md-2 col-12">
              <h6>Criolipólisis</h6>
              <div class="card">
                <div data-plyr-provider="youtube" data-plyr-embed-id="i8OefuQ1Sog" class="js-player"></div>
              </div>


            </div>

            <div class="col-md-4 col-12">
              <h6>Promocional</h6>
              <div class="card">
                <div data-plyr-provider="youtube" data-plyr-embed-id="ZdXmroYJbV8" class="js-player"></div>
              </div>


            </div>


          </div>
        </div>
      </section>

      <section id="data-sheet" class="section data-sheet ms-hero-img-room color-white intro-hero-full data-sheet-cellec">
        <div class="container">
          <div class="row">
            <div class="col-md-7 col-12">
              <div class="title-data-sheet">
                <figure class="logo-product">
                  <img src="assets/img/products/coolshaping/logo_coolshaping.png" alt="Logotipo de COOLshaping" class="img-fluid">
                </figure>
              </div>
              <div class="data-sheet-contain">
                <div class="data-sheet-logo">

                </div>
                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th colspan="2">Especificaciones técnicas</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td><strong>Tipo de emisión</strong></td>
                      <td>Criolipólisis | Vacuumterapia | Led</td>
                    </tr>
                    <tr>
                      <td><strong>Aplicadores incluidos</strong></td>
                      <td>2 piezas de mano medianas de 11cm x 19cm x 14cm</td>
                    </tr>
                    <tr>
                      <td><strong>Aplicadores opcionales</strong></td>
                      <td>Pieza de mano grande de 12cm x 22cm x 14cm, <br>Pieza de mano chica de 10cm x 14cm x 11cm, <br>Pieza de mano mini de 5cm x 8cm x 11cm</td>
                    </tr>
                    <tr>
                      <td><strong>Tipos de pulso</strong></td>
                      <td>Pulso continuo 3 diferentes modos pulsados</td>
                    </tr>
                    <tr>
                      <td><strong>Temperatura de críolipólisis</strong></td>
                      <td>De -10º a 5ºC</td>
                    </tr>
                    <tr>
                      <td><strong>Timer</strong></td>
                      <td>De 1 a 90 minutos. 50 minutos recomendado</td>
                    </tr>
                    <tr>
                      <td><strong>Niveles de Vacuum</strong></td>
                      <td>10 niveles</td>
                    </tr>

                  </tbody>
                </table>
                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th colspan="2">Especificaciones generales</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><strong>Pantalla</strong></td>
                      <td>LCD táctil a color de 10.2"</td>
                    </tr>
                    <tr>
                      <td><strong>Peso</strong></td>
                      <td>60 Kg</td>
                    </tr>
                    <tr>
                      <td><strong>Dimensiones</strong></td>
                      <td>106 cm x 38 cm x 44 cm</td>
                    </tr>
                    <tr>
                      <td><strong>Requerimientos de electricidad</strong></td>
                      <td>110V, 50/60 Hz, 600 W, 4 A</td>
                    </tr>
                    <tr>
                      <td><strong>COFEPRIS</strong></td>
                      <td>Registro Sanitario No. 1628E2019 SSA</td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <div class="download-brochure">
                <a href="assets/brochures/brochure-COOLshaping.pdf" class="btn btn-raised btn-primary btn-brochure" target="_blank">DESCARGAR FOLLETO</a>
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
              <form method="post" action="contact-equipment.php" class="container-fluid contactEqpmnt">
                <div class="row" style="display: none;">
                  <input type="text" name="department" id="contactDpmnt" value="Ventas Equipos">
                  <input type="text" name="subject" id="contactSubject" value="Interés en <?php echo $equipo; ?>">
                  <input type="text" name="whatsAppLink" id="whatsAppLink">
                  <input type="text" name = "localUrl" id = "localUrl" value = "<?php echo strtolower(str_replace(' ', '-', $equipo));?>.php">
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
                    <input type="text" id="firstName" name="firstName" placeholder="Nombre*" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <input type="text" id="lastName" name="lastName" placeholder="Apellido*" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <input type="email" id="contactEmail" name="email" placeholder="Email*" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <input type="text" id="contactPhone" name="phone" placeholder="Tel&eacute;fono*" required>
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
                      <option value="Cirug&iacute;a Pl&aacute;stica">Cirug&iacute;a Pl&aacute;stica</option>
                      <option value="Medicina Est&eacute;tica">Medicina Est&eacute;tica</option>
                      <option value="Cosmetolog&iacute;a">Cosmetolog&iacute;a</option>
                      <option value="Ginecolog&iacute;a">Ginecolog&iacute;a</option>
                      <option value="Cirug&iacute;a Cosm&eacute;tica">Cirug&iacute;a Cosm&eacute;tica</option>
                      <option value="Otros">Otros</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="subscribe" id="contactSubscribe">
                        Sí, quiero suscribirme a la lista de Medestore
                      </label>
                    </div>
                    <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                    <button type="submit" class="btn btn-raised btn-primary btn-lg" id="formSubmit">Enviar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <?php include('footer.php'); ?>

      <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
          <i class="zmdi zmdi-long-arrow-up"></i>
        </a>
      </div>
    </div>
    <!--.wrapper-->


    <div class="btn-back-top">
      <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
        <i class="zmdi zmdi-long-arrow-up"></i>
      </a>
    </div>
  </div>
  <!-- ms-site-container -->
  <?php include('menu_left.php'); ?>

  <div id="whatsapp-chat_wrapper" style="display: none;">
    <form method="post" action="whatsapp-counter.php">
      <input type="hidden" name="whatsAppCounterLink" id="whatsAppCounterLink">
      <button type="submit" id="whatsAppChat" target="_blank">
        <img src="assets/img/whatsapp-icon.png" alt="Logo WhatsApp">
      </button>
    </form>
  </div>

  <script src="assets/js/plugins.min.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/js/app.js"></script>
  <script src="assets/js/index.js"></script>
  <script src="assets/js/fullpage.js"></script>
    <script src="https://kit.fontawesome.com/13d6b37258.js" crossorigin="anonymous"></script>
  <script src="assets/js/home-generic-coolshaping.js"></script>
  <script>
    $(document).ready(function() {
      var autoScrollMobile = true;

      if ($('body').width() <= 574) autoScrollMobile = false;
      else autoScrollMobile = true;

      $('#wrapper').fullpage({
        licenseKey: '667CBBF7-7C3C4F33-B8D7DA3E-D363FCA1',
        autoScrolling: autoScrollMobile
      });

    });
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