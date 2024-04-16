<?php
include('sellerInfo.php');
include('whatsapp-counter.php');
$equipo = "PowerShape 2";
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
  <meta content='PowerShape 2' property='og:title' />
  <meta content='http://www.medestore.mx/assets/img/facebook-thumbnails/powershape-facebook.png' property='og:image' />
  <meta content='Sistema integrado para modelado corporal y lifting facial combinado con RF bipolar, multipolar y monopolar térmico, vacuum y láser de bajo nivel' property='og:description' />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://www.medestore.mx/powershape-2.php">
  <meta property="og:image:type" content="image/png">
  <!-- METAS TWITTER -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@medestoremx">
  <meta name="twitter:creator" content="@medestoremx">
  <meta name="twitter:title" content="PowerShape 2">
  <meta name="twitter:description" content="Sistema integrado para modelado corporal y lifting facial combinado con RF bipolar, multipolar y monopolar térmico, vacuum y láser de bajo nivel">
  <meta name="twitter:image" content="https://www.medestore.mx/assets/img/facebook-thumbnails/powershape-facebook.png">
  <title>Medestore | PowerShape 2</title>
  <meta name="description" content="El mejor equipo con tecnología de Radiofrecuencia, vacuum y láser para modelado corporal y lifting facial.">

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
      <div id="home-stage" class="ms-hero-page ms-hero-video ms-hero-img-room color-white intro-hero-full powershape-bg section">
        <div class="intro-hero-full-content ">
          <div class="container text-center">
            <div class="row">
              <div class="col-md-6 father-div">
                <div class="son-div">
                  <span class="center-block mb-2 mt-2 animated zoomInDown animation-delay-7">
                    <figure class="logo-product">
                      <img src="assets/img/products/powershape/logo-powershape.png" alt="Logotipo de PowerShape 2" class="img-fluid">
                    </figure>
                  </span>
                  <h2 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-7">Sistema <br><strong>multi-funcional</strong> de modelado corporal</h2>
                  <h1 class="animated fadeInUp animation-delay-12 color-white">Tecnología
                    <span class="typed-class typed-block text-bold">de Radiofrecuencia</span>
                  </h1>
                </div>
              </div>
              <div class="col-md-6">
                <div class="center-block mt-2 animated zoomInDown animation-delay-8">
                  <figure class="stage-product">
                    <img src="assets/img/products/powershape/stage-powershape.png" alt="Equipo PowerShape" class="img-fluid">
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
              <h2 class="text-center color-primary-powershape mb-2 ">PowerShape<sub>2</sub></h2>
              <h4 class="text-center color-secondary-powershape text-light mb-2 fadeInDown animation-delay-5">Radiofrecuencia Bi-polar y Multi-polar, Vacuum y Láser de Bajo Nivel</h4>

              <p class="lead text-center aco fadeInDown animation-delay-6 mw-900 center-block mb-4"><strong>PowerShape<sub>2</sub></strong> es un sistema integrado para modelado corporal y lifting facial combinado con RF bipolar, multipolar y monopolar térmico, vacuum y láser de bajo nivel.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <figure>
                <img src="assets/img/products/powershape/disparadores-powershape.jpg" alt="Disparadores de PowerShape" class="img-fluid">
              </figure>
            </div>
          </div>
        </div>
      </section>

      <section id="funcionamiento-powershape" class="section ms-hero-img-room color-white intro-hero-full">
        <div class="container">
          <div class="row">
            <div id="full-ultracel" class="col-md-3 text-center">
              <figure>
                <img src="assets/img/products/powershape/powershape-full.png" alt="Equipo PowerShape" class="img-fluid">
              </figure>
            </div>
            <div class="col-md-9 father-div">
              <div class="son-div">
                <h3 class="text-dark mb-2 fadeInDown animation-delay-5">¿Por qué <strong class="color-primary-powershape">PowerShape<sub>2</sub></strong>?</h3>
                <h6 class="color-primary-powershape">1. Radiofrecuencia</h6>
                <p class="color-dark">Transmite energía térmica profunda en la capa dérmica, transmitiendo ondas electromagnéticas para devolver los procesos fisiológicos con resultado efectivos en el tratamiento de la celulitis, modelado corporal y regeneración de colágeno mediante radiofrecuencia bipolar y multipolar.</p>
                <h6 class="color-primary-powershape">2. Vacuum</h6>
                <p class="color-dark">Mejora la circulación sanguínea y unifica la piel para optimizar el suministro de energía.
                  El efecto de masaje facilita el drenaje linfático y así modelar el cuerpo.</p>
                <h6 class="color-primary-powershape">3. Láser de Bajo Nivel</h6>
                <p class="color-dark">Longitud de onda de luz (660nm) que licua la grasa para una fácil y eficiente eliminación, reduciendo significativamente el tamaño de las células grasas.</p>
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
                <h3 class="text-center color-primary-powershape text-light mb-2 fadeInDown animation-delay-5">VENTAJAS</h3>
                <ul class="facial-list">
                  <li>Sin Cirugía.</li>
                  <li>Resultados visibles e inmediatos.</li>
                  <li>Sin dolor.</li>
                  <li>Sin efectos secundarios.</li>
                  <li>Sin molestias.</li>
                </ul>
              </div>
            </div>
            <div id="aplicacion-facial" class="col-md-6">
              <figure>
                <img src="assets/img/products/powershape/ventajas-powershape.png" alt="Resultados con PowerShape" class="img-fluid">
              </figure>
            </div>
          </div>
        </div>
      </section>

      <section id="fus-ultracel" class="section bg-powershape">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-center color-primary-powershape mb-2 ">APLICADORES</h2>
              <h4 class="text-center color-secondary-powershape text-light mb-2 fadeInDown animation-delay-5">Pieza de mano de rodillo</h4>

              <p class="lead text-center aco color-dark fadeInDown animation-delay-6 mw-800 center-block mb-2">Rodillo de gran tamaño que estira la piel en el área a tratar para mejorar el efecto de succión.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <figure>
                <img src="assets/img/products/powershape/rodillo-manual-powershape.png" alt="Pieza de mano de rodillo de PowerShape" class="img-fluid">
              </figure>
            </div>
          </div>


        </div>
      </section>

      <section id="frm-ultracel" class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

              <h4 class="text-center color-primary-powershape text-light mb-2 fadeInDown animation-delay-5">Pieza de mano multi-polar</h4>

              <p class="lead text-center aco color-primary-powershape fadeInDown animation-delay-6 mw-800 center-block mb-4">Tecnología de radiofrecuencia Multi-Polar que emite energía enfocada y óptima a la superficie de la piel y a las capas de grasa subcutánea sin causar dolor.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <figure>
                <img src="assets/img/products/powershape/multipolar-powershape.png" alt="Pieza multipolar de PowerShape" class="img-fluid">
              </figure>
            </div>
          </div>

        </div>
      </section>

      <section id="gfr-ultracel" class="section bg-powershape">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

              <h4 class="text-center color-primary-powershape text-light mb-2 fadeInDown animation-delay-5">Pieza de mano térmica</h4>

              <p class="lead text-center aco color-dark fadeInDown animation-delay-6 mw-800 center-block mb-4">Al aplicar energía térmica con un método no ablativo, la radiofrecuencia penetra profundamente en la dermis, produciendo estimulación de colágeno sin dañar la superficie de la piel.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <figure>
                <img src="assets/img/products/powershape/termico-powershape.png" alt="Pieza de mano térmica de PowerShape" class="img-fluid">
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
              <p class="destacado">Con <strong class="color-primary-powershape">PowerShape<sub>2</sub></strong> obtendrás los mejores resultados en un menor tiempo en aplicación facial o corporal.</p>
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
                            <a href="assets/img/casos-clinicos/powershape/caso_clinico01.jpg" data-lightbox="gallery" data-title="Tratamiento en abdomen">
                              <img src="assets/img/casos-clinicos/powershape/caso_clinico01_t.jpg" alt="Tratamiento en abdomen con PowerShape" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 col-12 no-mobile">
                      <p><strong>Abdomen</strong><br><strong>Observaciones: </strong></p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card">
                        <div class="card-block p-05">
                          <div class="withripple ">
                            <a href="assets/img/casos-clinicos/powershape/caso_clinico02.jpg" data-lightbox="gallery" data-title="Tratamiento en espalda">
                              <img src="assets/img/casos-clinicos/powershape/caso_clinico02_t.jpg" alt="Tratamiento en espalda con PowerShape" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 no-mobile">
                      <p><strong>Espalda</strong><br><strong>Observaciones: </strong></p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card">
                        <div class="card-block p-05">
                          <div class="withripple ">
                            <a href="assets/img/casos-clinicos/powershape/caso_clinico03.jpg" data-lightbox="gallery" data-title="Tratamiento en abdomen">
                              <img src="assets/img/casos-clinicos/powershape/caso_clinico03_t.jpg" alt="Tratamiento en abdomen con PowerShape" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 no-mobile">
                      <p><strong>Abdomen</strong><br><strong>Observaciones: </strong></p>
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
                            <a href="assets/img/casos-clinicos/powershape/caso_clinico04.jpg" data-lightbox="gallery" data-title="Tratamiento en abdomen">
                              <img src="assets/img/casos-clinicos/powershape/caso_clinico04_t.jpg" alt="Tratamiento en abdomen con PowerShape" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 no-mobile">
                      <p><strong>Abdomen</strong><br><strong>Observaciones: </strong></p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4 col-12">
                      <div class="card">
                        <div class="card-block p-05">
                          <div class="withripple ">
                            <a href="assets/img/casos-clinicos/powershape/caso_clinico05.jpg" data-lightbox="gallery" data-title="Tratamiento en glúteos">
                              <img src="assets/img/casos-clinicos/powershape/caso_clinico05_t.jpg" alt="Tratamiento en glúteos con PowerShape" class="img-fluid">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 no-mobile">
                      <p><strong>Glúteos</strong><br><strong>Observaciones: </strong></p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4 col-12">
                      <div class="card">
                        <div class="card-block p-05">
                          <div class="withripple ">
                            <a href="assets/img/casos-clinicos/powershape/caso_clinico06.jpg" data-lightbox="gallery" data-title="Tratamiento en papada">
                              <img src="assets/img/casos-clinicos/powershape/caso_clinico06_t.jpg" alt="Tratamiento en papada con PowerShape" class="img-fluid">
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

            <div class="offset-md-4 col-md-4">
              <h6>PowerShape<sub>2</sub></h6>
              <div class="card">
                <div data-plyr-provider="youtube" data-plyr-embed-id="O53YFPbmSsc" class="js-player"></div>
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
                  <img src="assets/img/products/powershape/logo-PowerShape-color.png" alt="Logotipo de PowerShape" class="img-fluid">
                </figure>
              </div>
              <div class="data-sheet-contain">
                <div class="data-sheet-logo">

                </div>
                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th colspan="2">Especificaciones Técnicas</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><strong>Radiofrecuencia</strong></td>
                      <td>2MHz(Bi-polar, Multi-polar, Térmica)</td>
                    </tr>
                    <tr>
                      <td><strong>Espectro láser</strong></td>
                      <td>660nm</td>
                    </tr>
                    <tr>
                      <td><strong>Rango de Vacuum</strong></td>
                      <td>280mmHg</td>
                    </tr>
                    <tr>
                      <td><strong>Piezas de mano</strong></td>
                      <td>
                        <ul>
                          <li>Pieza de mano de Rodillo</li>
                          <li>Pieza de mano Multi-polar</li>
                          <li>Pieza de mano Térmica</li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><strong>Requerimientos de electricidad</strong></td>
                      <td>110V, 50/60Hz</td>
                    </tr>
                    <tr>
                      <td><strong>Pantalla</strong></td>
                      <td>LCD táctil de 10.2 pulgadas</td>
                    </tr>
                    <tr>
                      <td><strong>Dimensiones (WxDxH mm)</strong></td>
                      <td>414 x 523 x 1,230</td>
                    </tr>
                    <tr>
                      <td><strong>COFEPRIS</strong></td>
                      <td>0609E2021 SSA</td>
                    </tr>

                  </tbody>
                </table>

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
              <form id="form-equipo-powershape2" method="post" action="contact-equipment.php" class="container-fluid contactEqpmnt">
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
  <script src="assets/js/home-generic-powershape.js"></script>
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