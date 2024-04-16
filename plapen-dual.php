<?php
include('sellerInfo.php');
include('whatsapp-counter.php');
$equipo = "Plapen Dual";
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
  <meta content='Plapen dual' property='og:title' />
  <meta content='http://www.medestore.mx/assets/img/facebook-thumbnails/plapen-facebook.png' property='og:image' />
  <meta content='Equipo de tratamientos con plasma. Atenúa arrugas y cicatrices, esteriliza la piel y combate bacterias que causan problemas a la piel.' property='og:description' />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://www.medestore.mx/plapen-dual.php">
  <meta property="og:image:type" content="image/png">
  <!-- METAS TWITTER -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@medestoremx">
  <meta name="twitter:creator" content="@medestoremx">
  <meta name="twitter:title" content="Plapen dual">
  <meta name="twitter:description" content="Equipo de tratamientos con plasma. Atenúa arrugas y cicatrices, esteriliza la piel y combate bacterias que causan problemas a la piel..">
  <meta name="twitter:image" content="https://www.medestore.mx/assets/img/facebook-thumbnails/plapen-facebook.png">
  <title>Medestore | Plapen dual</title>
  <meta name="description" content="Equipo de tratamientos con plasma. Atenúa arrugas y cicatrices, esteriliza la piel y combate bacterias que causan problemas a la piel.">

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
      <div id="home-stage" class="ms-hero-page ms-hero-video ms-hero-img-room color-white intro-hero-full plapen-bg section">
        <div class="intro-hero-full-content ">
          <div class="container text-center">
            <div class="row">
              <div class="col-md-6 father-div">
                <div class="son-div">
                  <span class="center-block mb-2 mt-2 animated zoomInDown animation-delay-7">
                    <figure class="logo-product">
                      <img src="assets/img/products/plapen/logo-Plapen-dual-white.png" alt="Logotipo de Plapen dual" class="img-fluid">
                    </figure>
                  </span>
                  <h2 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-7">Equipo de <strong>tratamiento con Plasma</strong></h2>
                  <!-- <h1 class="animated fadeInUp animation-delay-12 color-white">Multi-Tecnología
                                <span class="typed-class typed-block text-bold">Criolipólisis</span>
                              </h1> -->

                </div>
              </div>
              <div class="col-md-6">
                <div class="center-block mt-2 animated zoomInDown animation-delay-8">
                  <figure class="stage-product">
                    <img src="assets/img/products/plapen/Plapen-dual-equipo.png" alt="Equipo Plapen dual" class="img-fluid">
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
              
              <h2 class="text-center color-primary-plapen mb-2 ">Plapen dual</h2>
              <!-- <h4 class="text-center color-secondary-plapen text-light fadeInDown animation-delay-5">El revolucionario sistema de</h4> -->
              <!-- <h4 class="text-center color-secondary-coolshaping2 text-light mb-2 fadeInDown animation-delay-5">Criolipólisis + Vacuum + Led</h4> -->

              <p class="lead text-center aco fadeInDown animation-delay-6 mw-800 center-block mb-4"><strong class="color-primary-plapen">Plapen dual</strong> utiliza moléculas de aire como medio para transformarse instantáneamente en una intensa energía para influir en el enlace iónico de moléculas y átomos con el fin de producir una forma concentrada de plasma.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <figure>
                <img src="assets/img/products/plapen/pieza-de-mano-plapen02.png" alt="Pieza de mano del equipo Plapen dual" class="img-fluid">
              </figure>
            </div>
          </div>

        </div>

        <!-- <div class="container">
          <div class="row mtop30 mt-4">
            <div class="col-md-12">
              <p class="lead text-center aco fadeInDown animation-delay-6 mw-800 center-block mb-4 color-primary-coolshaping2"><strong>Criolipólisis</strong> es una nueva tecnología no invasiva, trabaja con la exposición de enfriamiento conducido, de forma selectiva y gradual, a la reducción de la grasa subcutánea en diferentes áreas del cuerpo.</p>
            </div>
          </div>
        </div> -->

      </section>



      <section id="funcionamiento-plapen" class="section ms-hero-img-room color-white intro-hero-full">
        <div class="container">
          <div class="row">
            <div id="full-ultracel" class="col-md-3 text-center">
              <figure>
                <img src="assets/img/products/plapen/Plapen-dual-equipo-full.png" alt="Equipo Plapen dual" class="img-fluid">
              </figure>
            </div>
            <div class="col-md-9 father-div">
              <div class="son-div">
                <h3 class="color-white mb-2 fadeInDown animation-delay-5">¿Por qué <strong class="color-white">Plapen dual</strong>?</h3>
                <p><strong>Plapen dual</strong> mejora la piel y enfermedades cutáneas con dos tipos de piezas de mano y 4 tipos de punta.</p>
                
                <!-- <ul>
                  <li>Esteriliza la piel</li>
                  <li>Elimina arrugas</li>
                  <li>Corrige el parpado caído</li>
                  <li>Eliminación de imperfecciones y manchas</li>
                  <li>Eliminacion de milia</li>

                </ul> -->
                <h6 class="color-white">Esteriliza la piel</h6>
                <p class="text-white">Elimina eficazmente bacterias causantes de problemas de la piel, como el acné.</p>

                <h6 class="color-white">Atenúa arrugas</h6>
                <p class="text-white">Atenúa arrugas y cicatrices causadas por el acné.</p>
                <h6 class="color-white">Corrige el párpado caído</h6>
                <p class="text-white">Efecto de sublimación en la piel sin afectar las células.</p>
                <h6 class="color-white">Eliminación de imperfecciones y manchas</h6>
                <p class="text-white">Efecto anti-pigmentación mediante la supresión de la melanina.</p>

              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="efecto-plasma" class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-center color-primary-coolshaping2 mb-2 ">Efectos del plasma</h2>
              <!-- <h4 class="text-center color-white text-light mb-2 fadeInDown animation-delay-5">Mecanismo del tratamiento</h4> -->
            </div>
          </div>

          <div class="row fus-steps mt-2">
            <div class="col-md-4">
              <div class="media">
                <div class="media-left media-middle">
                  <a href="javascript:void(0)">
                    <img class="media-object media-object-circle" src="assets/img/products/plapen/sublimacion-plapen.png" alt="..."> 
                  </a>
                </div>
                <div class="media-body">
                  <p><strong>Sublimación (Ablación)</strong></p>
                  <p>Eficaz para tratar acné y cicatrices provocando sublimación en la superficie de la piel sin afectar las células.</p>
                      
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="media">
                <div class="media-left media-middle">
                  <a href="javascript:void(0)">
                    <img class="media-object media-object-circle" src="assets/img/products/plapen/arrugas-plapen.png" alt="..."> 
                  </a>
                </div>
                <div class="media-body">
                  <p><strong>Tratamiento para arrugas</strong></p>
                  <p>No ablativo, lifting, regenerador, tratamiento de cicatrices e inflamación.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="media">
                <div class="media-left media-middle">
                  <a href="javascript:void(0)">
                    <img class="media-object media-object-circle" src="assets/img/products/plapen/tersante-plapen.png" alt="..."> 
                  </a>
                </div>
                <div class="media-body">
                  <p><strong>Efecto tonificante</strong></p>
                  <p>Anti-pigmentación mediante la supresión del pigmento de melanina y el fortalecimiento de la absorción de los cosméticos anti-pigmentación.</p>
                      
                </div>
              </div>
            </div>
          </div> <!-- row --> 
          <div class="row fus-steps mt-2">
            <div class="col-md-4">
              <div class="media">
                <div class="media-left media-middle">
                  <a href="javascript:void(0)">
                    <img class="media-object media-object-circle" src="assets/img/products/plapen/esterilizacion-plapen.png" alt="..."> 
                  </a>
                </div>
                <div class="media-body">
                  <p><strong>Esterilización</strong></p>
                  <p>Esteriliza bacterias causantes de problemas en la piel con su poder purificante.</p>
                      
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="media">
                <div class="media-left media-middle">
                  <a href="javascript:void(0)">
                    <img class="media-object media-object-circle" src="assets/img/products/plapen/transdermal-plapen.png" alt="..."> 
                  </a>
                </div>
                <div class="media-body">
                  <p><strong>Administración transdérmica de fármacos</strong></p>
                  <p>Induce una absorción asombrosa, rompiendo las moléculas de adhesión celular (CAMs) que conectan células cutáneas.</p>
                      
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="media">
                <div class="media-left media-middle">
                  <a href="javascript:void(0)">
                    <img class="media-object media-object-circle" src="assets/img/products/plapen/regeneracion-plapen.png" alt="..."> 
                  </a>
                </div>
                <div class="media-body">
                  <p><strong>Regeneración cutánea</strong></p>
                  <p>Previene el envejecimiento de la piel al estimular la regeneración de colágeno y fibroblastos.</p>
                      
                </div>
              </div>
            </div>
          </div> <!-- row --> 

        </div>
      </section>

      <section id="fus-ultracel" class="section bg-plapen-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-center color-white mb-2 ">Efecto anti-bacterial</h2>
              
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-12">
                  <h6 class="text-center color-white">Punta de alta frecuencia</h6>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <figure class="text-center">
                    <img src="assets/img/products/plapen/high-frecuency-tip01.png" alt="Punta de alta frecuencia PLapen dual" class="img-fluid">
                  </figure>
                  <!-- <h6 class="text-center color-primary-coolshaping2"><span class="no-mobile">01 |</span> Crío-enfriamiento</h6> -->
                  <p class="text-center color-white text-mobile">Pseudonas aeruginosa</p>
                  
                </div>
                <div class="col-md-6">
                  <figure class="text-center">
                    <img src="assets/img/products/plapen/high-frecuency02.png" alt="Punta de alta frecuencia PLapen dual" class="img-fluid">
                  </figure>
                  <!-- <h6 class="text-center color-primary-coolshaping2"><span class="no-mobile">01 |</span> Crío-enfriamiento</h6> -->
                  <p class="text-center color-white text-mobile">Propionibacterium acnes</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-12">
                  <h6 class="text-center color-white">Punta de Asperción</h6>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <figure class="text-center">
                    <img src="assets/img/products/plapen/jet-tip01.png" alt="Punta de chorro PLapen dual" class="img-fluid">
                  </figure>
                  <!-- <h6 class="text-center color-primary-coolshaping2"><span class="no-mobile">01 |</span> Crío-enfriamiento</h6> -->
                  <p class="text-center color-white text-mobile">Pseudonomas aeruginosa</p>
                  
                </div>
                <div class="col-md-6">
                  <figure class="text-center">
                    <img src="assets/img/products/plapen/jet-tip02.png" alt="Punta de chorro PLapen dual" class="img-fluid">
                  </figure>
                  <!-- <h6 class="text-center color-primary-coolshaping2"><span class="no-mobile">01 |</span> Crío-enfriamiento</h6> -->
                  <p class="text-center color-white text-mobile">Propionibacterium acnes</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>

      <section id="fus-ultracel" class="section ">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-center color-primary-plapen mb-2 ">Pieza de Mano tipo pluma</h2>
              <!-- <h4 class="text-center color-secondary-plapen text-light mb-2 fadeInDown animation-delay-5">Pieza de Mano tipo pluma</h4> -->

              <p class="lead text-center aco color-dark fadeInDown animation-delay-6 mw-800 center-block mb-2">Se aplica una fuerte ablación en una zona específica de la superficie de la piel para tratar las lesiones cutáneas, mientras se genera el plasma de alto voltaje a través del electrodo.</p>
            </div>
          </div>
          <div class="big-image row">
            <div class="col-md-12 text-center">
              <figure>
                <img src="assets/img/products/plapen/Plapen_dual-pen-handpiece.png" alt="Pieza de mano de pluma" class="img-fluid">
              </figure>
            </div>
          </div>
          <div class="row fus-steps mt-2">
            <div class="col-md-4">
              <h6 class="text-center color-dark">Punta bidireccional</h6>
              <figure class="text-center">
                <img src="assets/img/products/plapen/aguja-bidireccional.png" alt="Irradiación de energía con ULTRAcel" class="img-fluid">
              </figure>
              
            </div>
            <div class="xs-image col-md-4">
              
              <h6 class="color-dark"><span class="needle-type">Tipo electrodo</h6>
              <ul class="needle-list">
                <li>Eliminación de puntos.</li>
                <li>Eliminación de arrugas.</li>
                <li>Eliminación de milia y acrocordones.</li>
              </ul>
            </div>
            <div class="xs-image col-md-4">
              
              <h6 class="color-dark"><span class="round-type">Tipo redondo</h6>
              <ul class="round-list">
                <li>Procedimiento de pulverización realizado en un área amplia.</li>
                <li>Eliminación de manchas de la edad.</li>
                <li>Eliminación de cicatrices de acné</li>
                

              </ul>
            </div>

          </div>

        </div>
      </section>

      <section id="frm-ultracel" class="section bg-plapen-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-center color-white mb-2 fadeInDown animation-delay-5">Pieza de Mano Multi-tip</h2>
              <!-- <h4 class="text-center color-white text-light mb-2 fadeInDown animation-delay-5">Pieza de Mano Multiple</h4> -->

              <p class="lead text-center aco color-white fadeInDown animation-delay-6 mw-800 center-block mb-4">Se utiliza en el cuidado de la piel como un eficiente bactericida y solución osmótica contra: Estafilococo dorado, (bacteria del acné) tras generación de iones plasmáticos.</p>
            </div>
          </div>
          <div class="big-image row">
            <div class="col-md-12 text-center">
              <figure>
                <img src="assets/img/products/plapen/Plapen_dual-multi-handpiece.png" alt="Pieza de mano Multi" class="img-fluid">
              </figure>
            </div>
          </div>
          <!-- <div class="row">
            <div class="col-sm-12">
              <h4 class="text-center color-white text-light mb-2 fadeInDown animation-delay-5">Terapia en Multi-capas</h4>
            </div>
          </div> -->
          <div class="row mt-2">
            <div class="col-md-4">
              <figure class="text-center">
                <img src="assets/img/products/plapen/handpiece-multi01.png" alt="Liberación de iones de plasma Plapen dual" class="img-fluid">
              </figure>
              <h6 class="color-white text-center">Punta de Alta frecuencia</h6>
              <p class="text-center color-white">Liberación de iones de plasma.</p>
            </div>
            <div class="col-md-4">
              <figure class="text-center">
                <img src="assets/img/products/plapen/handpiece-multi02.png" alt="Liberación de iones Plapen dual" class="img-fluid">
              </figure>
              <h6 class="color-white text-center">Punta de Aspersión</h6>
              <p class="text-center color-white">Aplicable para tipos de piel divergentes, ya que el punto de micro-solidificación se crea tan pronto como se liberan los iones de plasma.</p>
            </div>
            <div class="col-md-4">
              <figure class="text-center">
                <img src="assets/img/products/plapen/handpiece-multi03.png" alt="Tratamiento de frotación con plasma Plapen dual" class="img-fluid">
              </figure>
              <h6 class="color-white text-center">Punta Fraccionada</h6>
              <p class="text-center color-white">Tratamiento de plasma sencillo por fricción que genera plasma térmico.</p>
            </div>
          </div>

        </div>
      </section>



      <div id="casos-clinicos" class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>ANTES Y <strong>DESPUÉS</strong></h2>
              <p class="destacado">Con <strong>Plapen dual</strong> obtendrás los mejores resultados en tratamientos reductivos.</p>
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
                            <a href="assets/img/casos-clinicos/plapen/CasoClinico_Plapen_1.jpg" data-lightbox="gallery" data-title="Tratamiento de Acné con Plapen dual">
                              <img src="assets/img/casos-clinicos/plapen/CasoClinico_Plapen_1-thumb.jpg" alt="Tratamiento de Acné con Plapen dual" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 col-12">
                      <p><strong>Tratamiento de acné</strong><!-- <br><strong>Observaciones: 1 sesión </strong> --></p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card">
                        <div class="card-block p-05">
                          <div class="withripple ">
                            <a href="assets/img/casos-clinicos/plapen/CasoClinico_Plapen_3.jpg" data-lightbox="gallery" data-title="Tratamiento de Acné con Plapen dual">
                              <img src="assets/img/casos-clinicos/plapen/CasoClinico_Plapen_3-thumb.jpg" alt="Tratamiento de Acné con Plapen dual" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <p><strong>Tratamiento de acné</strong><!-- <br><strong>Observaciones: 7 sesiones </strong> --></p>
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
                            <a href="assets/img/casos-clinicos/plapen/CasoClinico_Plapen_2.jpg" data-lightbox="gallery" data-title="Tratamiento de Acné con Plapen dual">
                              <img src="assets/img/casos-clinicos/plapen/CasoClinico_Plapen_2-thumb.jpg" alt="Tratamiento de Acné con Plapen dual" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <p><strong>Tratamiento de acné</strong><!-- <br><strong>Observaciones: 5 sesiones</strong> --></p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4 col-12">
                      <div class="card">
                        <div class="card-block p-05">
                          <div class="withripple ">
                            <a href="assets/img/casos-clinicos/plapen/CasoClinico_Plapen_4.jpg" data-lightbox="gallery" data-title="Tratamiento de Contorno de ojos con Plapen dual">
                              <img src="assets/img/casos-clinicos/plapen/CasoClinico_Plapen_4-thumb.jpg" alt="Tratamiento de Contorno de ojos con Plapen dual" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 no-mobile">
                      <p><strong>Contorno de ojos</strong><!-- <br><strong>Observaciones: </strong> --></p>
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
            <div class="col-md-12 titlebar">
              <h2 class="text-center color-blue-light">Videos</h2>

            </div>
          </div>
          <div class="row">
            <div class="col-md-4 offset-md-4 col-12">
              <h6>Criolipólisis</h6>
              <div class="card">
                <div data-plyr-provider="youtube" data-plyr-embed-id="p9wVBs3dObY" class="js-player"></div>
              </div>
            </div>
          </div>
        </div>
      </section> -->

      <section id="data-sheet" class="section data-sheet ms-hero-img-room color-white intro-hero-full data-sheet-cellec">
        <div class="container">
          <div class="row">
            <div class="col-md-7 col-12">
              <div class="title-data-sheet">
                <figure class="logo-product">
                  <img src="assets/img/products/plapen/logo-Plapen-dual-color.png" alt="Logotipo de Plapen dual" class="img-fluid">
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
                      <td>Plasma</td>
                    </tr>
                    
                    <tr>
                      <td><strong>Aplicadores</strong></td>
                      <td>Pieza de mano Multi-tip<br>Pieza de mano Tipo Pluma</td>
                    </tr>
                    
                    <tr>
                      <td><strong>Modo</strong></td>
                      <td>Pulso o continuo</td>
                    </tr>
                    <tr>
                      <td><strong>Puntas</strong></td>
                      <td>Punta de Alta frecuencia, Punta de aspersión, Punta Fraccional<br>Punta tipo Electrodo (0.5Ø, 30mm)</td>
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
                      <td><strong>Dimensiones</strong></td>
                      <td>442.3 x 220.5 x 357.4 (mm)</td>
                    </tr>
                    <tr>
                      <td><strong>Peso</strong></td>
                      <td>3.55 kg</td>
                    </tr>
                    <tr>
                      <td><strong>Requisitos de energía</strong></td>
                      <td>AC 100~240V / 0.5 A</td>
                    </tr>
                    <tr>
                      <td><strong>Display</strong></td>
                      <td>10.2" TFT Touch LCD</td>
                    </tr>


                  </tbody>
                </table>
              </div>
              <div class="download-brochure">
                <a href="assets/brochures/brochure-Plapen-dual.pdf" class="btn btn-raised btn-primary btn-brochure" target="_blank">DESCARGAR FOLLETO</a>
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