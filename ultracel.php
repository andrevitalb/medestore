<?php
include('sellerInfo.php');
include('whatsapp-counter.php');
$equipo = "ULTRAcel";
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
  <meta content='ULTRAcel' property='og:title' />
  <meta content='https://www.medestore.mx/assets/img/facebook-thumbnails/ultracel-facebook.png' property='og:image' />
  <meta content='El primer y único sistema que integra las tres mejores tecnologías para el tratamiento de la piel. HIFU, Radiofrecuencia y Radiofrecuencia fraccionada. Terapia integral para la piel.' />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.medestore.mx/ultracel.php">
  <meta property="og:image:type" content="image/png">
  <!-- METAS TWITTER -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@medestoremx">
  <meta name="twitter:creator" content="@medestoremx">
  <meta name="twitter:title" content="UlTRAcel">
  <meta name="twitter:description" content="El primer y único sistema que integra las tres mejores tecnologías para el tratamiento de la piel. HIFU, Radiofrecuencia y Radiofrecuencia fraccionada.">
  <meta name="twitter:image" content="https://www.medestore.mx/assets/img/facebook-thumbnails/ultracel-facebook.png">
  <title>Medestore | ULTRAcel</title>
  <meta name="description" content="El primer y único sistema que integra las tres mejores tecnologías para el tratamiento de la piel. HIFU, Radiofrecuencia y Radiofrecuencia fraccionada.">

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
      <div id="home-stage" class="ms-hero-page ms-hero-video ms-hero-img-room color-white intro-hero-full ultracel-bg section">
        <div class="intro-hero-full-content ">
          <div class="container text-center">
            <div class="row">
              <div class="col-md-6 father-div">
                <div class="son-div">
                  <span class="center-block mb-2 mt-2 animated zoomInDown animation-delay-7">
                    <figure class="logo-product">
                      <img src="assets/img/products/ultracel/logo-ulracel.png" alt="Logotipo ULTRAcel" class="img-fluid">
                    </figure>
                  </span>
                  <h2 class="no-m ms-site-title color-primary-ultracel center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-7">Tres en uno. <br><strong>¡Terapia que penetra en todas las capas!</strong></h2>
                  <h1 class="animated fadeInUp animation-delay-12 color-primary-ultracel">Tecnología
                    <span class="typed-class typed-block text-bold">HIFU</span>
                  </h1>
                </div>
              </div>
              <div class="col-md-6">
                <div class="center-block mt-2 animated zoomInDown animation-delay-8">
                  <figure class="stage-product">
                    <img src="assets/img/products/ultracel/ultracel-stage.png" alt="Equipo ULTRAcel" class="img-fluid">
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
              <h2 class="text-center color-primary-ultracel mb-2 ">ULTRAcel</h2>
              <h4 class="text-center color-primary-dark text-light mb-2 fadeInDown animation-delay-5">Terapia integral para la piel</h4>

              <p class="lead text-center aco fadeInDown animation-delay-6 mw-800 center-block mb-4"><strong>ULTRAcel</strong> es el primer y único sistema que integra las tres mejores tecnologías para el tratamiento de la piel.</p>
            </div>
          </div>

        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4 ">
              <figure>
                <img src="assets/img/products/ultracel/disparador-ultracel03.png" alt="Pieza de mano HIFU de ULTRAcel" class="img-fluid">
              </figure>
            </div>
            <div class="col-md-4 ">
              <figure>
                <img src="assets/img/products/ultracel/disparador-ultracel01.png" alt="Pieza de mano de Radiofrecuencia Fraccionada con Micro-agujas de ULTRAcel" class="img-fluid">
              </figure>
            </div>
            <div class="col-md-4 ">
              <figure>
                <img src="assets/img/products/ultracel/disparador-ultracel02.png" alt="Pieza de mano de Radiofrecuencia Fraccionada Superficial de ULTRAcel" class="img-fluid">
              </figure>
            </div>

          </div>
        </div>
        <div class="container">
          <div class="row mtop30 mt-4">
            <div class="col-md-12">
              <p class="lead text-center aco fadeInDown animation-delay-6 mw-800 center-block mb-4 color-primary-ultracel">Esta combinación de tecnologías permite gran variedad de tratamientos de forma rápida y efectiva con resultados inigualables.</p>
            </div>
          </div>
        </div>

      </section>

      <!--<section id="funcionamiento-ultracel" class="section ms-hero-img-room color-white intro-hero-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center text-dark mb-2 fadeInDown animation-delay-5">¿CÓMO FUNCIONA <span class="color-primary-ultracel_q">ULTRAcel™ HIFU</span>?</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <figure>
                            <img src="assets/img/products/ultracel/funcionamiento-ultracel-01.png" alt="..." class="img-fluid">
                        </figure>
                        <p class="text-dark text-mobile"><strong class="color-primary-ultracel_q">1.</strong> El ultrasonido focalizado de alta intensidad se emite a 3.0/4.5 mm con forma fraccionaria.</p>
                    </div>
                    <div class="col-md-4">
                        <figure>
                            <img src="assets/img/products/ultracel/funcionamiento-ultracel-02.png" alt="..." class="img-fluid">
                        </figure>
                        <p class="text-dark text-mobile"><strong class="color-primary-ultracel_q">2.</strong> Provoca daño térmico en estructuras profundas como el tejido conectivo, SMAS, tejido fibroso de capa gruesa, capa dérmica, dermis, capa límite subcutánea</p>
                    </div>
                    <div class="col-md-4">
                        <figure>
                            <img src="assets/img/products/ultracel/funcionamiento-ultracel-03.png" alt="..." class="img-fluid">
                        </figure>
                       <p class="text-dark text-mobile"><strong class="color-primary-ultracel_q">3.</strong> Tensado gradual de la piel y efecto de lifting durante varios meses a través de la cicatrización.</p>
                    </div>
                </div>
            </div>
        </section>-->

      <section id="funcionamiento-ultracel" class="section ms-hero-img-room color-white intro-hero-full">
        <div class="container">
          <div class="row">
            <div id="" class="col-md-3 text-center">
              <figure>
                <img src="assets/img/products/ultracel/completo-ultracel.png" alt="Equipo ULTRAcel" class="img-fluid">
              </figure>
            </div>
            <div class="col-md-9 father-div">
              <div class="son-div">
                <h3 class="text-dark mb-2 fadeInDown animation-delay-5">¿Por qué <span class="color-primary-ultracel_q">ULTRAcel™ HIFU</span>?</h3>
                <h6 class="color-primary-ultracel">1. Transductores con potencia elevada</h6>
                <ul class="list-mobile text-dark">
                  <li>Crea una zona de coagulación de tamaño adecuado a la profundidad deseada.</li>
                  <li>Crea una zona de coagulación de más de 60 ºC en la piel mediante potencia elevada.</li>
                  <li>Aplicación de hasta 3.0J de energía.</li>
                </ul>
                <h6 class="color-primary-ultracel">2. Permite el uso de cartuchos con calidad confiable</h6>
                <ul class="list-mobile text-dark">
                  <li>Los cartuchos se prueban con simulaciones de tejido.</li>
                  <li>Resultados clínicos confiables obtenidos con cartuchos de alta calidad.</li>

                </ul>
                <h6 class="color-primary-ultracel">3. Pieza de mano fácil de usar</h6>
                <ul class="list-mobile text-dark">
                  <li>La pieza de mano está diseñada verticalmente.</li>
                  <li>Campo de visión y manejo seguro durante un procedimiento.</li>
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
                <h3 class="text-center color-primary-ultracel_q text-light mb-2 fadeInDown animation-delay-5">APLICACIÓN FACIAL</h3>
                <ul class="facial-list">
                  <li>Elimina la flacidez facial.</li>
                  <li>Elimina arrugas y líneas de expresión.</li>
                  <li>Combate el acné activo</li>
                  <li>Elimina cicatrices de acné.</li>
                </ul>
              </div>
            </div>
            <div id="aplicacion-facial" class="col-md-6">
              <figure>
                <img src="assets/img/products/ultracel/aplicacion-facial-ultracel.png" alt="Aplicación facial con ULTRAcel" class="img-fluid">
              </figure>
            </div>
          </div>
        </div>
      </section>

      <section id="fus-ultracel" class="section bg-ultra">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-center color-white mb-2 ">FUS / HIFU</h2>
              <h4 class="text-center color-white text-light mb-2 fadeInDown animation-delay-5">Ultrasonido Focalizado de Alta Intensidad</h4>

              <p class="lead text-center aco color-white fadeInDown animation-delay-6 mw-800 center-block mb-2">La tecnología FUS (HIFU) de ULTRAcel emite ultrasonido de alta intensidad en las capas de grasa y SMAS, por medio de dos tipos de puntas: 3.0mm y 4.5mm, ambas a 7MHz.</p>
            </div>
          </div>
          <div class="big-image row">
            <div class="col-md-12 text-center">
              <figure>
                <img src="assets/img/products/ultracel/fus-techno-hand.png" alt="Pieza de mano FUS / HIFU de ULTRAcel " class="img-fluid">
              </figure>
            </div>
          </div>
          <div class="row fus-steps mt-2">
            <div class="xs-image col-md-4">
              <figure class="text-center">
                <img src="assets/img/products/ultracel/fus-irradiacion.png" alt="Irradiación de energía con ULTRAcel" class="img-fluid">
              </figure>
              <h6 class="text-center color-white"><span class="no-mobile">01 |</span> Irradiación</h6>
              <p class="text-center color-white text-mobile">La energía FUS es irradiada en varios pasos a profundidades de 3.0 o 4.5mm.</p>
            </div>
            <div class="xs-image col-md-4">
              <figure class="text-center">
                <img src="assets/img/products/ultracel/fus-coagulacion.png" alt="Coagulación con ULTRAcel" class="img-fluid">
              </figure>
              <h6 class="text-center color-white"><span class="no-mobile">02 |</span> Coagulación</h6>
              <p class="text-center color-white text-mobile">El SMAS a una profundidad de 4.5mm es coagulado por las emisiones de ultrasonido focalizado de alta intensidad.</p>
            </div>
            <div class="xs-image col-md-4">
              <figure class="text-center">
                <img src="assets/img/products/ultracel/fus-regeneracion.png" alt="Efecto lifting con ULTRAcel" class="img-fluid">
              </figure>
              <h6 class="text-center color-white"><span class="no-mobile">03 |</span> Regeneración</h6>
              <p class="text-center color-white text-mobile">La piel se regenera y se logra un efecto lifting gracias a la generación de nuevo colágeno y elastina.</p>
            </div>

          </div>

        </div>
      </section>

      <section id="frm-ultracel" class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-center color-primary-ultracel mb-2 ">FRM</h2>
              <h4 class="text-center color-primary-ultracel text-light mb-2 fadeInDown animation-delay-5">Radiofrecuencia Fraccionada con Micro-agujas</h4>

              <p class="lead text-center aco color-primary-ultracel fadeInDown animation-delay-6 mw-800 center-block mb-4">Técnica única para tratar el área objetivo (dermis) por medio de la penetración de micro-electrodos de diseño especial que no dañan la epidermis.</p>
            </div>
          </div>
          <div class="big-image row">
            <div class="col-md-12 text-center">
              <figure>
                <img src="assets/img/products/ultracel/frm-techno-hand.png" alt="Pieza de mano FRM de ULTRAcel" class="img-fluid">
              </figure>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <h4 class="text-center color-white text-light mb-2 fadeInDown animation-delay-5">Terapia en Multi-capas</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <figure class="text-center">
                <img src="assets/img/products/ultracel/ssr-superficial.png" alt="Rejuvenecimiento y regeneración de la epidermis con ULTRAcel" class="img-fluid">
              </figure>
              <h6 class="text-center color-primary-ultracel">01 | SRR Superficial</h6>
              <p class="text-center color-primary-ultracel no-mobile">Modalidad para rejuvenecimiento y regeneración de la epidermis.</p>
            </div>
            <div class="col-md-4">
              <figure class="text-center">
                <img src="assets/img/products/ultracel/frm-monopolar.png" alt="Modo Monopolar de UlTRAcel" class="img-fluid">
              </figure>
              <h6 class="text-center color-primary-ultracel">02 | FRM Monopolar</h6>
              <p class="text-center color-primary-ultracel no-mobile">Modalidad con sistema ERS (Energy Reward System) por medición de impedancia, provee un área de acción mayor que el modo Bipolar.</p>
            </div>
            <div class="col-md-4">
              <figure class="text-center">
                <img src="assets/img/products/ultracel/frm-bipolar.png" alt="FRM Bipolar de ULTRAcel" class="img-fluid">
              </figure>
              <h6 class="text-center color-primary-ultracel">03 | FRM Bipolar</h6>
              <p class="text-center color-primary-ultracel no-mobile">Modalidad que concentra la energía de radiofrecuencia en el área objetivo.</p>
            </div>
          </div>

        </div>
      </section>

      <section id="gfr-ultracel" class="section bg-ultra">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-center color-white mb-2 ">GFR</h2>
              <h4 class="text-center color-white text-light mb-2 fadeInDown animation-delay-5">Radiofrecuencia Fraccionada Superficial</h4>

              <p class="lead text-center aco color-white fadeInDown animation-delay-6 mw-800 center-block mb-4">La modalidad GFR crea una cuadrícula térmica en la epidermis y una zona de calor uniforme en la dermis superficial durante la emisión de Radiofrecuencia.</p>
            </div>
          </div>
          <div class="big-image row">
            <div class="col-md-12 text-center">
              <figure>
                <img src="assets/img/products/ultracel/gfr-techno-hand.png" alt="Pieza de mano GFR de ULTRAcel" class="img-fluid">
              </figure>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">

              <p class="lead text-center aco color-white fadeInDown animation-delay-6 center-block mt-2 mb-4">El sistema GFR incluye un generador de 6MHz que conduce radiofrecuencia a través de puntas sofisticadas. La punta GFR enfoca su energía solo en el área que cubre. El calentamiento por medio de GFR crea una cuadrícula térmica en la epidermis y una zona de calor uniforme en la dermis superficial.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <figure>
                <img src="assets/img/products/ultracel/gfr-piel.png" alt="Efecto de calor em ña epidermis con ULTRAcel" class="img-fluid">
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
              <p class="destacado">Con <strong>ULTRAcel</strong> obtendrás los mejores resultados en un menor tiempo en aplicación facial o corporal.</p>
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
                            <a href="assets/img/casos-clinicos/ultracel/caso01_ultracel.png" data-lightbox="gallery" data-title="Tratamiento en mejillas">
                              <img src="assets/img/casos-clinicos/ultracel/caso01_ultracel-thumb.png" alt="Tratamiento en mejillas con ULTRAcel" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 col-12 no-mobile">
                      <p><strong>Mejillas</strong><br><strong>Observaciones: </strong></p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card">
                        <div class="card-block p-05">
                          <div class="withripple ">
                            <a href="assets/img/casos-clinicos/ultracel/caso02_ultracel.png" data-lightbox="gallery" data-title="Tratamiento en cuello">
                              <img src="assets/img/casos-clinicos/ultracel/caso02_ultracel-thumb.png" alt="Tratamiento en cuello con ULTRAcel" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 no-mobile">
                      <p><strong>Cuello</strong><br><strong>Observaciones: </strong></p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card">
                        <div class="card-block p-05">
                          <div class="withripple ">
                            <a href="assets/img/casos-clinicos/ultracel/caso03_ultracel.png" data-lightbox="gallery" data-title="Tratamiento en cuello">
                              <img src="assets/img/casos-clinicos/ultracel/caso03_ultracel-thumb.png" alt="Tratamiento en cuello con ultracel" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 no-mobile">
                      <p><strong>Cuello</strong><br><strong>Observaciones: </strong></p>
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
                            <a href="assets/img/casos-clinicos/ultracel/caso04_ultracel.png" data-lightbox="gallery" data-title="Tratamiento en pliegue nasolabial">
                              <img src="assets/img/casos-clinicos/ultracel/caso04_ultracel-thumb.png" alt="Tratamiento en pliegue nasolabial con ULTRAcel" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 no-mobile">
                      <p><strong>Pliegue nasolabial</strong><br><strong>Observaciones: </strong></p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4 col-12">
                      <div class="card">
                        <div class="card-block p-05">
                          <div class="withripple ">
                            <a href="assets/img/casos-clinicos/ultracel/caso05_ultracel.png" data-lightbox="gallery" data-title="Tratamiento en marcas de acné">
                              <img src="assets/img/casos-clinicos/ultracel/caso05_ultracel-thumb.png" alt="Tratamiento en marcas de acné con ULTRAcel" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 no-mobile">
                      <p><strong>Marcas de acné</strong><br><strong>Observaciones: </strong></p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4 col-12">
                      <div class="card">
                        <div class="card-block p-05">
                          <div class="withripple ">
                            <a href="assets/img/casos-clinicos/ultracel/caso06_ultracel.png" data-lightbox="gallery" data-title="Tratamiento en papada">
                              <img src="assets/img/casos-clinicos/ultracel/caso06_ultracel-thumb.png" alt="Tratamiento en papada con ULTRAcel" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 no-mobile">
                      <p><strong>Papada</strong><br><strong>Observaciones: </strong></p>
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
            <div class="col-md-4 ">
              <h6>GFR</h6>
              <div class="card">
                <div data-plyr-provider="youtube" data-plyr-embed-id="34drHeV7eFw" class="js-player"></div>
              </div>


            </div>
            <div class="col-md-4 ">
              <h6>FUS</h6>
              <div class="card">
                <div data-plyr-provider="youtube" data-plyr-embed-id="3830HAcDim8" class="js-player"></div>
              </div>



            </div>
            <div class="col-md-4 ">
              <h6 class="">FRM</h6>
              <div class="card">
                <div data-plyr-provider="youtube" data-plyr-embed-id="rLvsHfA2gkw" class="js-player"></div>
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
                  <img src="assets/img/products/ultracel/logo-ulracel.png" alt="Logotipo ULTRAcel" class="img-fluid">
                </figure>
              </div>
              <div class="data-sheet-contain">
                <div class="data-sheet-logo">

                </div>
                <table class="table table-responsive ">
                  <thead>
                    <tr>
                      <th colspan="3">Especificaciones Técnicas</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td rowspan="7" valign="middle" class="row-span border-end"><strong>FRM</strong></td>
                      <td><strong>Energía aplicada</strong></td>
                      <td>6MHz RF</td>
                    </tr>
                    <tr>
                      <td><strong>Tipo de Radio Frecuencia</strong></td>
                      <td>Bipolar, Monopolar</td>
                    </tr>
                    <tr>
                      <td><strong>Máximo poder de salida</strong></td>
                      <td>40.5 Watts</td>
                    </tr>
                    <tr>
                      <td><strong>Control de profundidad</strong></td>
                      <td>0.5mm, 0.8mm, 1.5mm, 2.0mm</td>
                    </tr>

                    <tr class="border-end">
                      <td><strong>Tipos de agujas</strong></td>
                      <td>FRM, SRR, SRT<sup>TM</sup> </td>
                    </tr>

                  </tbody>
                </table>

                <table class="table table-responsive ">
                  <thead>
                    <tr>
                      <th colspan="3"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td rowspan="4" valign="middle" class="row-span border-end"><strong>GFR</strong></td>
                      <td><strong>Energía aplicada</strong></td>
                      <td>6MHz RF</td>
                    </tr>
                    <tr>
                      <td><strong>Tipo de Radio Frecuencia</strong></td>
                      <td>Monopolar</td>
                    </tr>
                    <tr>
                      <td><strong>Máximo poder de salida</strong></td>
                      <td>136 Watts</td>
                    </tr>

                    <tr class="border-end">
                      <td><strong>Tipos de aguja</strong></td>
                      <td>15 x 15mm, 7 x 7mm</td>
                    </tr>


                  </tbody>
                </table>

                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th colspan="3"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td rowspan="6" valign="middle" class="row-span border-end"><strong>HIFU</strong></td>
                      <td><strong>Frecuencia</strong></td>
                      <td>7MHz</td>
                    </tr>
                    <tr>
                      <td><strong>Máximo poder de salida</strong></td>
                      <td>3J/cm<sup>2</sup></td>
                    </tr>

                    <tr>
                      <td><strong>Cartucho</strong></td>
                      <td>UQ1.5, UQS2.0, UQ3.0 y UQ4.5mm</td>
                    </tr>
                    <tr>
                      <td><strong>Espaciado</strong></td>
                      <td>1 ~ 2mm(0.1mm/step)</td>
                    </tr>
                    <tr class="border-end">
                      <td><strong>Longitud</strong></td>
                      <td>5 ~ 25mm(5mm/step)</td>
                    </tr>
                  </tbody>
                </table>
                <table class="table table-responsive ">
                  <thead>
                    <tr>
                      <th colspan="2">Especificaciones del sistema</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><strong>Peso</strong></td>
                      <td>40.5 kg</td>
                    </tr>
                    <tr>
                      <td><strong>Dimensiones</strong></td>
                      <td>982.8mm(H) X 375mm(W) X 408.3mm(L)</td>
                    </tr>
                    <tr>
                      <td><strong>COFEPRIS</strong></td>
                      <td>Registro Sanitario No. 2739E2018 SSA</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="download-brochure">
                <a href="assets/brochures/brochure-ULTRAcel.pdf" class="btn btn-raised btn-primary btn-brochure" target="_blank">DESCARGAR FOLLETO</a>
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
                  <input type="text" name="localUrl" id="localUrl" value="<?php echo strtolower(str_replace(' ', '-', $equipo)); ?>.php">
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
                        Sí, quiero suscribirme a la lista de MedeStore
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
  <script src="assets/js/home-generic-ultracel.js"></script>
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