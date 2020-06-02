<?php
  include($_SERVER['DOCUMENT_ROOT'].'/sellerInfo.php');
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
        <meta content='CELLMULA' property='og:title'/>
        <meta content='https://www.medestore.mx/assets/img/facebook-thumbnails/cellmula-facebook.png' property='og:image'/>
        <meta content='Nueva línea cosmética dermatológica especializada en el cuidado de la piel y el cabello.' property='og:description'/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://www.medestore.mx/cellmula/">
        <meta property="og:image:type" content="image/png">
        <meta property="fb:app_id" content="804501393314781" />
        <!-- METAS TWITTER -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@medestoremx">
        <meta name="twitter:creator" content="@medestoremx">
        <meta name="twitter:title" content="CELLMULA">
        <meta name="twitter:description" content="Nueva línea cosmética dermatológica especializada en el cuidado de la piel y el cabello.">
        <meta name="twitter:image" content="https://www.medestore.mx/assets/img/facebook-thumbnails/cellmula-facebook.png">
    <title>MedeStore | CELLMULA</title>
    <meta name="description" content="Nueva línea cosmética dermatológica especializada en el cuidado de la piel y el cabello.">
    <link rel="shortcut icon" href="../assets/img/favicon.png?v=3">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../assets/css/preload.css">
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="../assets/css/fullpage.css">
    <!--<link rel="stylesheet" href="assets/css/examples.css">-->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/media.css">
    <link rel="stylesheet" href="../assets/css/contact_styles.css">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-33467298-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-33467298-1');
    </script>
    <script>
      <?php echo "console.log($contactoEquipos[0] + $contactoConsumibles[0])";?>
    </script>
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2199805706970346');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=2199805706970346&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

    <style>
      @media(max-width: 500px){
        #whatsapp-chat_wrapper {
          display: none;
        }
      }
    </style>
  </head>
  <body>

    <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.3'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="1439383766342268"
  logged_in_greeting="¡Hola! ¿Tienes alguna duda sobre nuestros equipos? Contáctanos"
  logged_out_greeting="¡Hola! ¿Tienes alguna duda sobre nuestros equipos? Contáctanos">
</div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '804501393314781',
      cookie     : true,
      xfbml      : true,
      version    : 'v4.0'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

    <div id="ms-preload" class="ms-preload">
      <div id="status">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>
    <div class="ms-site-container">
      
      <nav class="navbar navbar-expand-md  navbar-static ms-navbar ms-navbar-white navbar-mode">
        <div class="container container-full">
          <div class="navbar-header">
            <a class="navbar-brand" href="../index.html">
              <img src="../assets/img/Logo-MedeStore-line.png" alt="Logotipo de MedeStore"> 
            </a>
          </div>
          <div class="collapse navbar-collapse" id="ms-navbar">
            <ul class="navbar-nav">
              
              <li class="nav-item dropdown dropdown-megamenu-container">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="component">Premium
                  <!--<i class="zmdi zmdi-chevron-down"></i>-->
                </a>
                <ul class="dropdown-menu dropdown-megamenu animated fadeIn animated-2x">
                  <li class="container">
                    <div class="row">
                      <div class="col-sm-6 megamenu-col">
                        <div class="megamenu-block animated fadeInLeft animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-bookmark-o"></i> Tratamientos</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="../depilacion.html">
                                <i class="fa fa-arrow-circle-right"></i> Depilación</a>
                            </li>
                            <li>
                              <a class="withripple" href="../rejuvenecimiento-facial.html">
                                <i class="fa fa-arrow-circle-right"></i> Rejuvenecimiento facial</a>
                            </li>
                            <li>
                              <a class="withripple" href="../pigmentaciones.html">
                                <i class="fa fa-arrow-circle-right"></i> Pigmentaciones</a>
                            </li>
                            <li>
                              <a class="withripple" href="../acne.html">
                                <i class="fa fa-arrow-circle-right"></i> Acné</a>
                            </li>
                            <li>
                              <a class="withripple" href="../reductivos.html">
                                <i class="fa fa-arrow-circle-right"></i> Reductivos</a>
                            </li>
                            <li>
                              <a class="withripple" href="../celulitis.html">
                                <i class="fa fa-arrow-circle-right"></i> Celulitis</a>
                            </li>
                            <li>
                              <a class="withripple" href="../estrias.html">
                                <i class="fa fa-arrow-circle-right"></i> Estrías</a>
                            </li>
                            
                          </ul>
                        </div>
                        
                      </div>
                      <div class="col-sm-6 megamenu-col">
                        <div class="megamenu-block animated fadeInLeft animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-bookmark-o"></i> Tecnología</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="../hifu.html">
                                <i class="fa fa-arrow-circle-right"></i> HIFU</a>
                            </li>
                            <li>
                              <a class="withripple" href="../radiofrecuencia.html">
                                <i class="fa fa-arrow-circle-right"></i> Radiofrecuencia</a>
                            </li>
                            <li>
                              <a class="withripple" href="../laser.html">
                                <i class="fa fa-arrow-circle-right"></i> Láser</a>
                            </li>
                            <li>
                              <a class="withripple" href="../criolipolisis.html">
                                <i class="fa fa-arrow-circle-right"></i> Criolipólisis</a>
                            </li>
                            <li>
                              <a class="withripple" href="../ipl.html">
                                <i class="fa fa-arrow-circle-right"></i> IPL</a>
                            </li>
                            
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              
              <li class="nav-item dropdown">
                <a href="index.php">MONALISA
                
                </a>
                
              </li>
              
              <li class="nav-item dropdown">
                <a href="../soporte.php" class="nav-link dropdown-toggle animated fadeIn animation-delay-10" role="button" aria-haspopup="true" aria-expanded="false" >Soporte</a>
              </li>
              
              <li class="nav-item dropdown">
                <a href="../contacto.php" class="nav-link dropdown-toggle animated fadeIn animation-delay-10" role="button" aria-haspopup="true" aria-expanded="false" >Contacto</a>
                
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
          <div class="ms-hero-page ms-hero-video ms-hero-img-room color-white intro-hero-full monalisa-bg section">
              <div class="intro-hero-full-content bottom">
                  <div class="container text-center">
                      <div class="row">
                          <div class="col-md-6">
                              <span class="center-block mb-2 mt-2 animated zoomInDown animation-delay-7">
                                  <figure class="logo-product">
                                    <img src="../assets/img/products/cellmula/logo-white-cellmula.png" alt="Logotipo de CELLMULA " class="img-fluid">
                                  </figure>
                              </span>
                              <h2 class="no-m ms-site-title color-primary-cellmula center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-7">El <strong>nuevo paradigma</strong> para el cuidado del <strong>cuero cabelludo</strong> y de <strong>la piel</strong></h2>
                              <h1 class="animated fadeInUp animation-delay-12 color-primary-monalisa"></h1>
                              <!-- <a href="https://www.medestore.mx/monalisa/concurso" class="btn btn-xlg btn-raised btn-white btn-monalisa animated fadeInUp animation-delay-12">
                        <i class="fa fa-check"></i>¡REGISTRA TUS CÓDIGOS Y <strong>GANA!</strong></a> -->
                          </div>
                          <div class="col-md-6">
                            <div class="center-block mt-2 animated zoomInDown animation-delay-8">
                                <figure class="stage-product">
                                    <img src="../assets/img/products/cellmula/cellmula-cajas.png" alt="Cajas de CELLMULA" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div><!--.section-->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center color-primary-cellmula mb-2 ">CELLMULA</h2>
                        <h4 class="text-center color-secondary-cellmula text-light mb-2 fadeInDown animation-delay-5">¡Es tiempo de reiniciar tu reloj biológico!</h4>
        
                        <p class="lead text-center aco fadeInDown animation-delay-6 mw-800 color-text-cellmula center-block mb-4"><strong>Eunsung</strong> presenta su nueva línea cosmética dermatológica especializada en la regeneración capilar para el cuero cabelludo y el cuidado de la piel.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center">
                        <figure>
                            <img src="../assets/img/products/cellmula/productos-hd-hsr.png" alt="Productos CELLMULA HD y CELLMULA HSR" class="img-fluid">
                        </figure>
                    </div>
                </div>
                
            </div>
        </section>

        <section id="funcionamiento-cellmula" class="section ms-hero-img-room color-white intro-hero-full">
            <div class="container">
                <div class="row">
                    <div id="full-ultracel" class="col-md-3 text-center">
                        <figure id="jeringa-green">
                            <img src="../assets/img/products/cellmula/epneedle.png" alt="Aplicador EPNeedle " class="img-fluid">
                        </figure>
                    </div>
                    <div class="col-md-9 father-div">
                        <div class="son-div">
                            <h3 class="text-white mb-2 fadeInDown animation-delay-5"><span>VENTAJAS</span> DE <strong>CELLMULA</strong></h3>
                            <h6 class="color-secondary-cellmula">1. CELLMULA HD Solución</h6>
                                <ul>
                                  <li>Previene la alopecia tanto para hombre como para mujer.</li>
                                  <li>Induce el crecimiento del cabello revitalizando los folículos capilares y estimulando la circulación sanguínea.</li>
                                  <li>Mejora el problema del cuero cabelludo y aumenta el grosor y la plenitud del cabello.</li>
                                </ul>
                            <h6 class="color-secondary-cellmula">2. CELLMULA HSR Solución</h6>
                            	<ul>
                                  <li>Revitaliza la piel seca y sin brillo al aumentar la proliferación celular.</li>
                                  <li>El complejo del factor de crecimiento rejuvenece la piel envejecida.</li>
                                  <li>El ácido hialurónico hidrata la piel.</li>
                                </ul>
                            <p><strong>Mayor efectividad al aplicar las soluciones con EPNeedle</strong></p>
                            
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
                          <h3 class="text-center color-primary-cellmula text-light mb-2 fadeInDown animation-delay-5">APLICACIÓN CAPILAR</h3>
                          <h3 class="text-center color-secondary-cellmula mb-2 fadeInDown animation-delay-5">CELLMULA HD Solución</h3>
                          <ul class="facial-list">
                              <li>Previene la alopecia tanto para hombre como para mujer.</li>
                              <li>Induce el crecimiento del cabello revitalizando los folículos capilares y estimulando la circulación sanguínea</li>
                              <li>Mejora el problema del cuero cabelludo y aumenta el grosor y la plenitud del cabello.</li>
                          </ul>
                      </div>
                  </div>
                  <div id="aplicacion-facial" class="col-md-6">
                      <figure>
                          <img src="../assets/img/products/cellmula/men-model-cellmula.png" alt="Aplicación Capilar CELLMULA HD Solución" class="img-fluid">
                      </figure>
                  </div>
              </div>
            </div>
        </section>

        <section id="aplicacion-corporal-info" class="section">
        <div class="container-fluid">
          <div class="row">
              <div id="aplicacion-facial" class="col-md-6">
                <figure>
                  <img src="../assets/img/products/cellmula/woman-model-cellmula.png" alt="Aplicación facial de CELLMULA HSR Solución" class="img-fluid">
                </figure>
              </div>
              <div id="aplicaciones2" class="col-md-6">
                <div id="aplica-corporal-info">
                    <h3 class="text-center color-primary-cellmula text-light mb-2 fadeInDown animation-delay-5">APLICACIÓN FACIAL</h3>
                    <h3 class="text-center color-secondary-cellmula mb-2 fadeInDown animation-delay-5">CELLMULA HSR Solución</h3>
                    <ul class="facial-list ">
                      <li>Revitaliza la piel seca y sin brillo al aumentar la proliferación celular.</li>
                      <li>El complejo del factor de crecimiento rejuvenece la piel envejecida.</li>
                      <li>El ácido hialurónico hidrata la piel.</li>
                    </ul>
                  </div>
              </div>
          
            </div>
        </div>
      	</section>

		<section id="" class="section bg1-cellmula">
            <div class="container">
                <div class="row">
                	<div class="col-md-12">
                        <h2 class="text-center color-white mb-2 "><strong>CELLMULA HD</strong> Solución</h2>
                        <h4 class="text-center color-white text-light mb-2 fadeInDown animation-delay-5">Solución de regeneración capilar para el cuero cabelludo</h4>
        
                        <p class="lead text-center aco color-dark fadeInDown animation-delay-6 mw-800 center-block mb-4">¿Cómo ayuda <strong>CELLMULA HD</strong> al crecimiento del cabello?</p>
                    </div>
                    <div class="col-md-12 text-center">
                        
                        <figure>
                      		<img src="../assets/img/products/cellmula/crecimiento-cabello-cellmula.png" alt="Crecimiento del cabello con CELLMULA HS Solución" class="img-fluid">
                    	</figure>
                    </div>
                </div>
                <div class="row detalles-big02">
                  <div class="col-md-3 text-center">
                    <h4 class="color-white">sh-Polipéptido-1 (bFGF)</h4>
                    <p class="">Estimula el proceso de fase telógena a anágena. Formación de cabello nuevo.</p>
                  </div>
                  <div class="col-md-3 text-center">
                    <h4 class="color-white">sh-Oligopéptido-2 (IGF1)</h4>
                    <p class="">Fortalece el cabello mientras estimula los folículos capilares para producir un cabello fuerte.</p>
                  </div>
                  <div class="col-md-3 text-center">
                    <h4 class="color-white">Tripéptido de Cobre-1</h4>
                    <p class="">Ayuda a fortalecer el cabello mientras estimula los folículos capilares y la circulación sanguínea para producir un cabello fuerte.</p>
                  </div>
                  <div class="col-md-3 text-center">
                    <h4 class="color-white">sh-Polipéptido-9 (VEGF)</h4>
                    <p class="">La base de los folículos fortalece el cabello, al tiempo que estimula los folículos capilares para producir un cabello fuerte.</p>
                  </div>
                </div>
                
                
            </div>
        </section>

        <section id="ergonomia-monalisa" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center color-primary-cellmula mb-2 "><strong>CELLMULA HSR</strong> Solución</h2>
                        <h4 class="text-center color-secondary-cellmula text-light mb-2 fadeInDown animation-delay-5">Solución de purificación de la piel con ácido hialurónico</h4>
        
                        <!-- <p class="lead text-center aco color-dark fadeInDown animation-delay-6 mw-800 center-block mb-4">Mayor precisión para una aplicación cómoda y segura.</p> -->
                    </div>
                </div>
                <div class="big-image row">
                  <div class="col-md-12 text-center">
                    <figure>
                      <img src="../assets/img/products/cellmula/curacion-heridas-piel-cellmula.png" alt="Mecanismo de curación de heridas con CELLMULA" class="img-fluid">
                    </figure>
                  </div>
                </div>
                <div class="row color-white detalles">
                  <div class="col-md-12 col-12 text-center">
                    <p class="lead text-center aco color-dark fadeInDown animation-delay-6 mw-800 center-block mb-4">¿Cómo ayuda CELLMULA HSR al rejuvenecimiento de la piel?</p>
                    <p class="color-dark">Los factores de crecimiento pueden proporcionar beneficios clínicos que actúan como moléculas de señalización entre las células y juegan un papel importante en la curación de heridas y el proceso de rejuvenecimiento de la piel.</p>
                    <p class="color-dark"><strong>Indicación:</strong> Piel envejecida con líneas finas y arrugas, piel de poro agrandado, piel con acné, piel seca excesiva.</p>
                  </div>
                </div>
                
                
                
                
            </div>  
        </section>

        <section id="" class="section bg3-cellmula">
            <div class="container">
                <div class="row">
                	<div class="col-md-12">
                        <h2 class="text-center color-primary-cellmula mb-2 "><strong>EPNeedle</strong></h2>
                        <h4 class="text-center color-primary-cellmula text-light mb-2 fadeInDown animation-delay-5">Sistema de aguja de electroporación.</h4>
        
                        <p class="lead text-center aco color-dark fadeInDown animation-delay-6 mw-800 center-block mb-4">La primera aplicación del mundo diseñada para la efectiva administración de medicamento.</p>
                    </div>
                    <div class="col-md-12 text-center">
                        
                        <figure>
                      		<img src="../assets/img/products/cellmula/epnedle-horizontal.png" alt="EPNeedle" class="img-fluid">
                    	</figure>
                    	<p class="text-white">Al inyectar electrodos de microaguja a una profundidad de 0-20 mm debajo de la piel, promueve una administración precisa del medicamento a todos los poros. Los electrodos de la microaguja inducen la electroporación instantáneamente para suministrar un fármaco a todos los microporos en las membranas de fibroblastos dérmicos.</p>
                    </div>
                </div>
                <div class="row detalles-big02">
                  <div class="col-md-4 text-center">
                    <h4>Microinyección automática</h4>
                    <ul>
                    	<li>1-3 niveles de velocidad de agujas - 1-5 niveles de intensidad de electroporación</li>
                    	<li>Velocidad de punción ajustable durante un tratamiento - Electroporación constante</li>
                    	<li>Profundidad de punción ajustable con precisión mecánica extrema</li>
                    	<li>Aplicación independiente disponible con aguja automática</li>
                    </ul>
                  </div>
                  <div class="col-md-4 text-center">
                    <h4>Agujas esterilizadas desechables</h4>
                    <ul>
                    	<li>Control ajustable de profundidades de penetración de aguja, hasta 2.0mm</li>
                    	<li>Acceso directo para montar y desmontar</li>
                    	<li>Empaquetado por separado</li>
                    	<li>Restricción del flujo en retroceso del medicamento en el dispositivo</li>
                    </ul>
                  </div>
                  <div class="col-md-4 text-center">
                    <h4>Microinyección automática</h4>
                    <ul>
                    	<li>Agarre sin deslizamiento</li>
                    	<li>Mango fácil de manejar tipo pluma, lo que permite procedimientos sin fatiga</li>
                    </ul>
                  </div>
                  
                </div>
                
                
            </div>
        </section>

        

        <section class="section">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                        <h2 class="text-center color-primary-cellmula mb-2">Línea especializada para uso en casa</h2>
        
                        <p class="lead text-center aco fadeInDown animation-delay-6 mw-800 center-block mb-4">Para dar continuidad al tratamiento y <strong>¡potencializar los resultados!</strong></p>
                    </div>
            </div>
            <div class="row text-center">
              <div class="col-md-4 monalisa-soft">
                
                <figure class="caja-monalisa">
                    <img src="../assets/img/products/cellmula/post-laser-true-repair-cream.png" alt="Post Laser True Repair Creme" class="img-fluid">
                </figure>
                <h4 class="color-primary-cellmula">Post Laser True Repair Cream</h4>
              </div>
              <div class="col-md-4 monalisa-mild">
                
                <figure class="caja-monalisa">
                      <img src="../assets/img/products/cellmula/wrinklear-egf-ampoule.png" alt="Wrinklear EGF Ampoule" class="img-fluid">
                </figure>
                <h4 class="color-primary-cellmula">Wrinklear EGF Ampoule</h4>
                
              </div>
              <div class="col-md-4 monalisa-hard">
                
                <figure class="caja-monalisa">
                    <img src="../assets/img/products/cellmula/post-laser-uv-shield-sun.png" alt="Post Laser UV Shiel Sun" class="img-fluid">
                </figure>
                <h4 class="color-primary-cellmula">Post Laser UV Shield Sun</h4>
                
              </div>
              
            </div>
          </div>
        </section>

        <div id="casos-clinicos" class="section">
        <div class="container">
          <div class="row">
              <div class="col-md-12">
                <h2 class="color-primary-cellmula">ANTES Y <strong>DESPUÉS</strong></h2>
                <p class="destacado">Con <strong>CELLMULA</strong> obtendrás los mejores resultados en un menor tiempo y un efecto mucho más duradero que otros</p>
              </div>
            </div><!--.row-->
            <div class="row">
              <div class="col-md-6 col-6">
                <ul class="clinic-cases-list list-unstyled">
                  <li>
                    <div class="row">
                      <div class="col-md-4 col-12">
                        <div class="card">
                          <div class="card-block p-05">
                            <div class="withripple ">
                              <a href="../assets/img/casos-clinicos/monalisa/Caso01.png" data-lightbox="gallery" data-title="Tratamiento en Surco Nasogeniano">
                                <img src="../assets/img/casos-clinicos/monalisa/Caso01-thumb.png" alt="Resultados del tratamiento en Surco Nasogeniano con CELLMULA Ácido Hialurónico" class="img-fluid">
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8 col-12 no-mobile">
                        <p><strong>Surco Nasogeniano</strong><br><strong>Observaciones: </strong></p>
                      </div>
                    </div>
                  </li>
                <li>
                  <div class="row">
                    <div class="col-md-4">
                                <div class="card">
                                  <div class="card-block p-05">
                                    <div class="withripple ">
                                      <a href="../assets/img/casos-clinicos/monalisa/Caso02.png" data-lightbox="gallery" data-title="Tratamiento en Surco Nasogeniano">
                                        <img src="../assets/img/casos-clinicos/monalisa/Caso02-thumb.png" alt="Resultados del tratamiento en Surco Nasogeniano con CELLMULA Ácido Hialurónico" class="img-fluid">
                                      </a>
                                    </div>
                                  </div>
                                </div>
                    </div>
                    <div class="col-md-8 no-mobile">
                    <p><strong>Surco Nasogeniano</strong><br><strong>Observaciones: </strong></p>
                    </div>
                    </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4">
                                <div class="card">
                                  <div class="card-block p-05">
                                    <div class="withripple ">
                                      <a href="../assets/img/casos-clinicos/monalisa/Caso03.png" data-lightbox="gallery" data-title="Tratamiento en Surco Nasogeniano">
                                        <img src="../assets/img/casos-clinicos/monalisa/Caso03-thumb.png" alt="Resultados del tratamiento en Surco Nasogeniano con CELLMULA Ácido Hialurónico" class="img-fluid">
                                      </a>
                                    </div>
                                  </div>
                                </div>
                    </div>
                    <div class="col-md-8 no-mobile">
                    <p><strong>Surco Nasogeniano</strong><br><strong>Observaciones: </strong></p>
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
                                      <a href="../assets/img/casos-clinicos/monalisa/Caso04.png" data-lightbox="gallery" data-title="Tratamiento en Surco Nasogeniano">
                                        <img src="../assets/img/casos-clinicos/monalisa/Caso04-thumb.png" alt="Resultados del tratamiento en Surco Nasogeniano con CELLMULA Ácido Hialurónico" class="img-fluid">
                                      </a>
                                    </div>
                                  </div>
                                </div>
                    </div>
                    <div class="col-md-8 no-mobile">
                    <p><strong>Surco Nasogeniano</strong><br><strong>Observaciones: </strong></p>
                    </div>
                    </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4 col-12">
                                <div class="card">
                                  <div class="card-block p-05">
                                    <div class="withripple ">
                                      <a href="../assets/img/casos-clinicos/monalisa/Caso05.png" data-lightbox="gallery" data-title="Tratamiento en Surco Nasogeniano">
                                        <img src="../assets/img/casos-clinicos/monalisa/Caso05-thumb.png" alt="Resultados del tratamiento en Surco Nasogeniano con CELLMULA Ácido Hialurónico" class="img-fluid">
                                      </a>
                                    </div>
                                  </div>
                                </div>
                    </div>
                    <div class="col-md-8 no-mobile">
                    <p><strong>Surco Nasogeniano</strong><br><strong>Observaciones: </strong></p>
                    </div>
                    </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4 col-12">
                                <div class="card">
                                  <div class="card-block p-05">
                                    <div class="withripple ">
                                      <a href="../assets/img/casos-clinicos/monalisa/Caso06.png" data-lightbox="gallery" data-title="Tratamiento en Surco Nasogeniano">
                                        <img src="../assets/img/casos-clinicos/monalisa/Caso06-thumb.png" alt="Resultados del tratamiento en Surco Nasogeniano con CELLMULA Ácido Hialurónico" class="img-fluid">
                                      </a>
                                    </div>
                                  </div>
                                </div>
                    </div>
                    <div class="col-md-8 no-mobile">
                    <p><strong>Surco Nasogeniano</strong><br><strong>Observaciones: </strong></p>
                    </div>
                    </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div><!--.section-->

      <section id="videos-section" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 titlebar">
                        <h2 class="text-center color-blue-light">Videos</h2>
              
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-6 offset-md-3 ">
                        <h6 class="small">EPNeedle para CELLMULA</h6>
                        <div class="card">
                            <div data-plyr-provider="youtube" data-plyr-embed-id="DJ2k0QBozlI" class="js-player"></div>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="row">
                    
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
                <form method="post" action="https://www.medestore.mx/contact_eqpmnt.php" class = "container-fluid contactEqpmnt">
                  <div class="row" style="display: none;">
                    <input type="text" name = "contactDpmnt" id = "contactDpmnt" value = "Ventas Consumibles">
                    <input type="text" name = "contactSubject" id = "contactSubject" value = "Interés en CELLMULA">
                    <input type="text" name = "localUrl" id = "localUrl" value = "monalisa/">
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <label for = "contactState">Estado</label>
                    </div>
                    <div class="col-sm-12">
                      <select name="contactState" id = "contactState" required>
                        <option disabled selected>Selecciona uno</option>
                        <option  value="Aguascalientes">Aguascalientes</option>
                        <option  value="Baja California">Baja California</option>
                        <option  value="Baja California Sur">Baja California Sur</option>
                        <option  value="Campeche">Campeche</option>
                        <option  value="Chiapas">Chiapas</option>
                        <option  value="Chihuahua">Chihuahua</option>
                        <option  value="Ciudad de M&eacute;xico">Ciudad de M&eacute;xico</option>
                        <option  value="Coahuila">Coahuila</option>
                        <option  value="Colima">Colima</option>
                        <option  value="Durango">Durango</option>
                        <option  value="Estado de M&eacute;xico">Estado de M&eacute;xico</option>
                        <option  value="Guanajuato">Guanajuato</option>
                        <option  value="Guerrero">Guerrero</option>
                        <option  value="Hidalgo">Hidalgo</option>
                        <option  value="Jalisco">Jalisco</option>
                        <option  value="Michoac&aacute;n">Michoac&aacute;n</option>
                        <option  value="Morelos">Morelos</option>
                        <option  value="Nayarit">Nayarit</option>
                        <option  value="Nuevo Le&oacute;n">Nuevo Le&oacute;n</option>
                        <option  value="Oaxaca">Oaxaca</option>
                        <option  value="Puebla">Puebla</option>
                        <option  value="Quer&eacute;taro">Quer&eacute;taro</option>
                        <option  value="Quintana Roo">Quintana Roo</option>
                        <option  value="San Luis Potos&iacute;">San Luis Potos&iacute;</option>
                        <option  value="Sinaloa">Sinaloa</option>
                        <option  value="Sonora">Sonora</option>
                        <option  value="Tabasco">Tabasco</option>
                        <option  value="Tamaulipas">Tamaulipas</option>
                        <option  value="Tlaxcala">Tlaxcala</option>
                        <option  value="Veracruz">Veracruz</option>
                        <option  value="Yucat&aacute;n">Yucat&aacute;n</option>
                        <option  value="Zacatecas">Zacatecas</option>
                        <option  value="Fuera de M&eacute;xico">Fuera de M&eacute;xico</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <input type="text" id="contactFName" name="contactFName" placeholder="Nombre*" required>  
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <input type="text" id="contactLName" name="contactLName" placeholder="Apellido*" required>  
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <input type="email" id="contactEmail" name="contactEmail" placeholder="Email*" required>  
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <input type="text" id="contactPhone" name="contactPhone" placeholder="Tel&eacute;fono*" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <label for = "contactSpecialty">Especialidad</label>
                    </div>
                    <div class="col-sm-12">
                      <select name="contactSpecialty" id="contactSpecialty" required>
                        <option  value="" disabled selected>Selecciona una</option>
                        <option  value="Dermatolog&iacute;a">Dermatolog&iacute;a</option>
                        <option  value="Cirug&iacute;a Pl&aacute;stica">Cirug&iacute;a Pl&aacute;stica</option>
                        <option  value="Medicina Est&eacute;tica">Medicina Est&eacute;tica</option>
                        <option  value="Cosmetolog&iacute;a">Cosmetolog&iacute;a</option>
                        <option  value="Ginecolog&iacute;a">Ginecolog&iacute;a</option>
                        <option  value="Otros">Otros</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name = "contactSubscribe" id = "contactSubscribe">
                          Sí, quiero suscribirme a la lista de MedeStore
                        </label>
                      </div>
                      <button type="submit" class="btn btn-raised btn-primary btn-lg" id="formSubmit">Enviar</button>
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
            </div><!--.row-->
            

          <div class="row">
            <div class="col-lg-4 ms-footer-col">
              <div class="ms-footbar-block">
                <h6 class="ms-footbar-title">Privacidad</h6>
                <ul class="list-unstyled ms-icon-list ">
                  <li>
                    <a href="../aviso-de-privacidad.html">
                      <i class="icon-docs"></i> Aviso de privacidad</a>
                  </li>
                  <li>
                    <a href="../politicas-de-venta.html">
                      <i class="icon-badge"></i> Políticas de venta</a>
                  </li>
                  <li>
                    <a href="../politicas-de-servicio-tecnico.html">
                      <i class="icon-settings"></i> Políticas de servicio técnico</a>
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
                  <a href="https://www.facebook.com/medestore/" class="btn-circle btn-facebook" target="_blank">
                    <i class="zmdi zmdi-facebook"></i>
                  </a>
                  <a href="https://twitter.com/Medestore_mx" class="btn-circle btn-twitter" target="_blank">
                    <i class="zmdi zmdi-twitter"></i>
                  </a>
                  <a href="https://www.youtube.com/user/MedeStore" class="btn-circle btn-youtube" target="_blank">
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
                  <img src="../assets/img/logo-medestore-white.png" alt=""> 
                </div>
                <address class="no-mb">
                  <p>
                    <i class="icon-location-pin mr-1"></i> Carr. a los Arquitos 603</p>
                  <p>
                    <i class="icon-map mr-1"></i> Jesús María, Ags. C.P. 20996</p>
                  
                  <p>
                    <a href="tel:+524494782400" ><i class="icon-phone mr-1"></i>+52 (449) 478 2400</a></p>
                  <p>
                  <p>
                    <a href="https://api.whatsapp.com/send?phone=5214494782400"><i class="zmdi zmdi-whatsapp mr-1"></i>WhatsApp</a>
                  </p>
                </address>
              </div>
              
            </div>
          </div>
        </div>
      </aside>
      <footer class="ms-footer section fp-auto-height">
        <div class="container">
          <p>MedeStore&reg; 2019. Todos los derechos reservados</p>
        </div>
      </footer>
      <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
          <i class="zmdi zmdi-long-arrow-up"></i>
        </a>
      </div>
      </div><!--.wrapper-->
      
      
      <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
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
              <img src="../assets/img/logo-medestore-white.png" alt=""> 
            </div>
          </div>
        </header>
        <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
          <li>
            <a class="link" href="#">
              <i class="icon-home"></i> Inicio</a>
          </li>
          <li class="card" role="tab" id="sch2">
            <a class="collapsed" role="button" data-toggle="collapse" href="#sc2" aria-expanded="false" aria-controls="sc2">
              <i class="icon-diamond"></i> Premium </a>
            <ul id="sc2" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch2" data-parent="#slidebar-menu">
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
            </ul>
          </li>
          <!--<li class="card" role="tab" id="sch4">
            <a class="collapsed" role="button" data-toggle="collapse" href="#sc4" aria-expanded="false" aria-controls="sc4">
              <i class="icon-star"></i> Profesional </a>
            <ul id="sc4" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch4" data-parent="#slidebar-menu">
              <li>
                <a href="#">Hyfrecator 2000</a>
              </li>
              <li>
                <a href="#">Hydra Beauty</a>
              </li>
              <li>
                <a href="#">Dr. Skin</a>
              </li>
              <li>
                <a href="#">Magic Pot</a>
              </li>
              <li>
                <a href="#">Cavi Pot</a>
              </li>
              <li>
                <a href="#">Derma Stampen</a>
              </li>
              <li>
                <a href="#">Derma Stampen WL</a>
              </li>
              <li>
                <a href="#">Centrífuga</a>
              </li>
            </ul>
          </li>-->
          <li>
            <a class="link" href="index.html">
              <i class="zmdi zmdi-view-compact"></i> CELLMULA</a>
          </li>
          <!--<li class="card" role="tab" id="sch6">
            <a class="collapsed" role="button" data-toggle="collapse" href="#sc6" aria-expanded="false" aria-controls="sc6">
              <i class="icon-tag"></i> Muebles </a>
            <ul id="sc6" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch6" data-parent="#slidebar-menu">
              <li>
                <a href="#">Camillas</a>
              </li>
              <li>
                <a href="#">Bancos</a>
              </li>
              <li>
                <a href="#">Mesas de trabajo</a>
              </li>
              
            </ul>
          </li>-->
          <!--<li>
            <a class="link" href="#">
              <i class="icon-settings"></i> Soporte</a>
          </li>
          <li>
            <a class="link" href="medestore.html">
              <i class="icon-chemistry"></i> MedeStore</a>
          </li>-->
          <li>
            <a class="link" href="../contacto.php">
              <i class="icon-envelope"></i> Contacto</a>
          </li>
        </ul>
        <div class="ms-slidebar-social ms-slidebar-block">
          <h4 class="ms-slidebar-block-title">Social Links</h4>
          <div class="ms-slidebar-social">
            <a href="https://www.facebook.com/medestore/" class="btn-circle btn-circle-raised btn-facebook">
              <i class="zmdi zmdi-facebook"></i>
              <div class="ripple-container"></div>
            </a>
            <a href="https://twitter.com/Medestore_mx" class="btn-circle btn-circle-raised btn-twitter">
              <i class="zmdi zmdi-twitter"></i>
              <div class="ripple-container"></div>
            </a>
            <a href="https://www.youtube.com/user/MedeStore" class="btn-circle btn-circle-raised btn-google">
              <i class="zmdi zmdi-youtube"></i>
              <div class="ripple-container"></div>
            </a>
            
          </div>
        </div>
      </div>
    </div>

    <div id="whatsapp-chat_wrapper" style="display: none;">
      <a href="#" id = "whatsAppChat" target = "_blank"><img src="../assets/img/whatsapp-icon.png" alt="Logo WhatsApp"></a>
    </div>

    <div class="whatsappSend" style = "display:none;">
      <form action="" id = "whatsappSend" method = "post">
        <input type="text" id = "stateSellerWA" name = "stateSellerWA">
        <button name="updateWA" id="updateWA" type="submit"></button>
      </form>
    </div>

    <script src="../assets/js/plugins.min.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/js/app.js"></script>
    <script src="../assets/js/index.js"></script>
    <script src="../assets/js/fullpage.js"></script>
    <script src="../assets/js/home-generic-ultracel.js"></script>
    <script>
       $(document).ready(function(){
          var autoScrollMobile = true;

          if($('body').width() <= 574) autoScrollMobile = false;
          else autoScrollMobile = true;

          $('#wrapper').fullpage({
              licenseKey: '667CBBF7-7C3C4F33-B8D7DA3E-D363FCA1',
              autoScrolling: autoScrollMobile
          });

       }); 
    </script>
    <script>
      var whatsAppLink, state;

      $("#contactState").change(function(){
        whatsAppLink = "https://api.whatsapp.com/send?phone=";
        state = $("#contactState").children("option:selected").val();
        if(state != 'Fuera de México'){
          switch(state){
            default:
              whatsAppLink += "<?php echo $contactoConsumibles[8];?>";
            break;
          }
          whatsAppLink += "&text=Hola,%20estoy%20visitando%20su%20página%20web%20y%20me%20interesaría%20recibir%20información%20sobre%20CELLMULA";

          $('#whatsAppChat').attr('href', whatsAppLink);
          $('#whatsapp-chat_wrapper').css('display', 'block');
          $('#formSubmit').removeAttr('disabled');
        }
        else {
          alert("Por el momento, en MedeStore sólo atendemos clientes en México, contacte con un distribuidor en su país para mayor información.");
          $('#formSubmit').attr('disabled', 'true');
          $('#whatsapp-chat_wrapper').css('display', 'none');
        }
      });

      // $('#whatsAppChat').click(function(){
      //   if(state == 'Ciudad de México' || state == 'Estado de México') $('#whatsappSend').submit();
      // });
    </script>
  </body>
</html>