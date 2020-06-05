<?php session_start();
    if(isset($_SESSION['usr'])) {
        if(($_SESSION['usr'] == 1001) || ($_SESSION['usr'] == 1002)) header('Location: index_admin.php');
        else if($_SESSION['usr'] == 1003) header('Location: index_yellow.php');
        else header('Location: index_user.php');
        die();
    }

    include('eventos-login.php');
    include('monalisa-login.php');
?>
<!DOCTYPE html>
<html id="landing-sorteo" lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>MedeStore | Registro de códigos MONALISA</title>
    <meta name="description" content="El ácido hialurónico más puro y seguro del mercado para la eliminación de marcas de la piel causadas por la edad.">
    <meta name = "author" content = "André Vital">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/img/favicon.png?v=3">

    <!-- Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- General -->
    <link rel="stylesheet" href="../../assets/css/preload.css">
    <link rel="stylesheet" href="../../assets/css/plugins.css">
    <link rel="stylesheet" href="../../assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../assets/css/fullpage.css">
    <!--<link rel="stylesheet" href="assets/css/examples.css">-->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/media.css">
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
      .nav.nav-tabs li a.active { background-color: transparent !important; }
      .form-group label.control-label { padding: 12px 0 0; }
    </style>
  </head>
  <body>
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
            <a class="navbar-brand" href="../../index.html">
              <img src="../../assets/img/Logo-MedeStore-line.png" alt=""> 
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
                              <a class="withripple" href="../../depilacion.html">
                                <i class="fa fa-arrow-circle-right"></i> Depilación</a>
                            </li>
                            <li>
                              <a class="withripple" href="../../rejuvenecimiento-facial.html">
                                <i class="fa fa-arrow-circle-right"></i> Rejuvenecimiento facial</a>
                            </li>
                            <li>
                              <a class="withripple" href="../../pigmentaciones.html">
                                <i class="fa fa-arrow-circle-right"></i> Pigmentaciones</a>
                            </li>
                            <li>
                              <a class="withripple" href="../../acne.html">
                                <i class="fa fa-arrow-circle-right"></i> Acné</a>
                            </li>
                            <li>
                              <a class="withripple" href="../../reductivos.html">
                                <i class="fa fa-arrow-circle-right"></i> Reductivos</a>
                            </li>
                            <li>
                              <a class="withripple" href="../../celulitis.html">
                                <i class="fa fa-arrow-circle-right"></i> Celulitis</a>
                            </li>
                            <li>
                              <a class="withripple" href="../../estrias.html">
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
                              <a class="withripple" href="../../hifu.html">
                                <i class="fa fa-arrow-circle-right"></i> HIFU</a>
                            </li>
                            <li>
                              <a class="withripple" href="../../radiofrecuencia.html">
                                <i class="fa fa-arrow-circle-right"></i> Radiofrecuencia</a>
                            </li>
                            <li>
                              <a class="withripple" href="../../laser.html">
                                <i class="fa fa-arrow-circle-right"></i> Láser</a>
                            </li>
                            <li>
                              <a class="withripple" href="../../criolipolisis.html">
                                <i class="fa fa-arrow-circle-right"></i> Criolipólisis</a>
                            </li>
                            <li>
                              <a class="withripple" href="../../ipl.html">
                                <i class="fa fa-arrow-circle-right"></i> IPL</a>
                            </li>
                            
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <!--<li class="nav-item dropdown dropdown-megamenu-container">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="component">Profesional
                </a>
                <ul class="dropdown-menu dropdown-megamenu animated fadeIn animated-2x">
                  <li class="container">
                    <div class="row">
                      <div class="col-sm-4 megamenu-col">
                        <div class="megamenu-block animated fadeInLeft animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-bookmark-o"></i> ConMed</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="#">
                                <i class="fa fa-arrow-circle-right"></i> Hyfrecator 2000</a>
                            </li>
                          </ul>
                        </div>
                        <div class="megamenu-block animated fadeInLeft animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-bookmark-o"></i> Eunsung</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="#">
                                <i class="fa fa-arrow-circle-right"></i> Hydra Beauty</a>
                            </li>
                            <li>
                              <a class="withripple" href="#">
                                <i class="fa fa-arrow-circle-right"></i> Dr. skin</a>
                            </li>
                            <li>
                              <a class="withripple" href="#">
                                <i class="fa fa-arrow-circle-right"></i> Magic Pot</a>
                            </li>
                            <li>
                              <a class="withripple" href="#">
                                <i class="fa fa-arrow-circle-right"></i> Cavi Pot
                                
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-sm-4 megamenu-col">
                        <div class="megamenu-block animated fadeInLeft animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-bookmark-o"></i> MedeStore</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="#">
                                <i class="fa fa-arrow-circle-right"></i> Derma Stampen</a>
                            </li>
                            <li>
                              <a class="withripple" href="#">
                                <i class="fa fa-arrow-circle-right"></i> Derma Stampen WL</a>
                            </li>
                            <li>
                              <a class="withripple" href="#">
                                <i class="fa fa-arrow-circle-right"></i> Centrífuga</a>
                            </li>
                            <li>
                              <a class="withripple" href="#">
                                <i class="fa fa-arrow-circle-right"></i> Dermoabrasión</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-sm-4 megamenu-col">
                        <div class="megamenu-block animated fadeInRight animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-bookmark-o"></i> Anti Aging MS</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="#">
                                <i class="fa fa-arrow-circle-right"></i> Carboxy Pen</a>
                            </li>
                            
                          </ul>
                        </div>
                        <div class="megamenu-block animated fadeInRight animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-bookmark-o"></i> Chungwoo</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="#">
                                <i class="fa fa-arrow-circle-right"></i> Digisonic</a>
                            </li>
                            <li>
                              <a class="withripple" href="#">
                                <i class="fa fa-arrow-circle-right"></i> Rafos Mini</a>
                            </li>
                            <li>
                              <a class="withripple" href="#">
                                <i class="fa fa-arrow-circle-right"></i> Speed Slim II</a>
                            </li>
                            <li>
                              <a class="withripple" href="#">
                                <i class="fa fa-arrow-circle-right"></i> Symphony</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      
                    </div>
                  </li>
                </ul>
              </li>-->
              <li class="nav-item dropdown">
                <a href="../index.html">MONALISA
                <!--<a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="blog">Monalisa-->
                  <!--<i class="zmdi zmdi-chevron-down"></i>-->
                </a>
                <!--<ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="fa fa-arrow-circle-right"></i> Ventajas</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="fa fa-arrow-circle-right"></i> Características</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="fa fa-arrow-circle-right"></i> Versiones y aplicaciones</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="fa fa-arrow-circle-right"></i> Video-demostraciones</a>
                  </li>
                  
                </ul>-->
              </li>
              <!--<li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-8" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="portfolio">Muebles
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="fa fa-arrow-circle-right"></i> Camillas</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="fa fa-arrow-circle-right"></i> Bancos</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="fa fa-arrow-circle-right"></i> Mesas de trabajo</a>
                  </li>
                </ul>
              </li>-->
              
              <li class="nav-item dropdown">
                <a href="../../contacto.html" class="nav-link dropdown-toggle animated fadeIn animation-delay-10" role="button" aria-haspopup="true" aria-expanded="false" >Contacto</a>
                
              </li>
              <!--<li class="nav-item dropdown">
                <a href="#" >Soporte</a>
              </li>-->
            </ul>
          </div>
          <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu">
            <i class="zmdi zmdi-menu"></i>
          </a>
        </div>
        <!-- container -->
      </nav>
      
      <div id="wrapper">
        <div class="ms-hero-img-soporte ">
        <div class="container">
          <div class="text-center">
            <h2 class="no-m ms-site-title color-white center-block ms-site-title-lg-soporte mt-6 animated zoomInDown animation-delay-5"><strong>LogIn </strong>MedeStore</h2>
          </div>
        </div>
      </div>
      
      <div class="container">
        
        <div class="row justify-content-md-center">
          <div class="col-lg-6"> 
        					<div class="card card-hero card-soporte color-dark shadow-6dp animated fadeInUp animation-delay-7" style = "margin-top: -150px !important;">
          
          						<ul class="nav nav-tabs nav-tabs-full nav-tabs-2 nav-tabs-transparent indicator-primary" role="tablist">
            						<li class="nav-item" role="presentation">
              							<a href="#ms-login-tab" aria-controls="ms-login-tab" role="tab" data-toggle="tab" class="nav-link withoutripple active">
                						<i class="zmdi zmdi-account"></i> MONALISA</a>
            						</li>
            						<li class="nav-item" role="presentation">
              							<a href="#ms-register-tab" aria-controls="ms-register-tab" role="tab" data-toggle="tab" class="nav-link withoutripple">
                						<i class="zmdi zmdi-account"></i> Eventos</a>
            						</li>
          						</ul>
          						<div class="card-body">
            						<div class="tab-content">
              							<div role="tabpanel" class="tab-pane fade active show" id="ms-login-tab">
                							<form action = "" method = "post">
                								<fieldset>
                                  <div class="form-group row">
                                    <label for="mona_email" class="col-md-3 control-label">Usuario</label>
                                    <div class="col-md-9">
                                      <input type="text" class="form-control" id="mona_email" placeholder="Usuario" name = "mona_email" required>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="mona_pass" class="col-md-3 control-label">Contraseña</label>
                                    <div class="col-md-9">
                                      <input type="password" class="form-control" id="mona_pass" placeholder="Contraseña" name = "mona_pass" required>
                                    </div>
                                  </div>
                								</fieldset>
                                <div class="row">
                                    <button class="btn btn-raised btn-primary btn-block" name = "mona_login" type = "submit">Login
                                      <i class="zmdi zmdi-long-arrow-right no-mr ml-1"></i>
                                    </button>
                                    <?php
                                      if(isset($_POST['mona_email']) && isset($_POST['mona_pass'])){
                                          if(userMonaEx() != -1){
                                              $_SESSION['usr'] = $usuarioMona;

                                              if($usuarioMona == 1001 || $usuarioMona == 1002) echo '<meta http-equiv="refresh" content="0; url=../monalisa/concurso/index_admin.php">';
                                            else if($usuarioMona == 1003) echo '<meta http-equiv="refresh" content="0; url=../monalisa/concurso/index_yellow.php">';
                                          }
                                          else echo $errorMsgMona;
                                      }
                                    ?> 
                                </div>
                							</form>
              							</div>
              							<div role="tabpanel" class="tab-pane fade" id="ms-register-tab">
                							<form action = "" method = "post">
                                <fieldset>
                                    <div class="form-group row">
                                      <label for="eventos_email" class="col-md-3 control-label">Usuario</label>
                                      <div class="col-md-9">
                                        <input type="text" class="form-control" id="eventos_email" placeholder="Usuario" name = "eventos_email" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="eventos_pass" class="col-md-3 control-label">Contraseña</label>
                                      <div class="col-md-9">
                                        <input type="password" class="form-control" id="eventos_pass" placeholder="Contraseña" name = "eventos_pass" required>
                                      </div>
                                    </div>
                                </fieldset>
                                <div class="row">
                                    <button class="btn btn-raised btn-primary btn-block" name = "mona_login" type = "submit">Login
                                      <i class="zmdi zmdi-long-arrow-right no-mr ml-1"></i>
                                    </button>
                                    <?php
                                      if(isset($_POST['eventos_email']) && isset($_POST['eventos_pass'])){
                                          if(userEvEx() != -1){
                                              $_SESSION['usr'] = $usuarioEv;

                                              if($usuarioEv == 1001 || $usuarioEv == 1002 || $usuarioEv == 1003) echo '<meta http-equiv="refresh" content="0; url=../eventos/registro/index_admin.php">';
                                          }
                                          else echo $errorMsgEv;
                                      }
                                    ?> 
                                </div>
                              </form>
              							</div>
            						</div>
          						</div>
        					</div>
      					</div>
              		</div>
            	</div><!--/row-->
             	<p class="text-center color-white mb-2 fadeInDown animation-delay-5">Si tienes dudas, contáctanos al +52 (449) 478 2400</p>
          	</div>
          
	    </div><!--.section-->
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
                    <a href="../../aviso-de-privacidad.html">
                      <i class="icon-docs"></i> Aviso de privacidad</a>
                  </li>
                  <li>
                    <a href="../../politicas-de-venta.html">
                      <i class="icon-badge"></i> Políticas de venta</a>
                  </li>
                  <li>
                    <a href="../../politicas-de-servicio-tecnico.html">
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
                  <img src="../../assets/img/logo-medestore-white.png" alt=""> 
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
                    <a href="https://api.whatsapp.com/send?phone=5214491732054"><i class="zmdi zmdi-whatsapp mr-1"></i>WhatsApp</a>
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
              <img src="../../assets/img/logo-medestore-white.png" alt=""> 
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
                <a href="../../depilacion.html">Depilación</a>
              </li>
              <li>
                <a href="../../rejuvenecimiento-facial.html">Rejuvenecimiento facial</a>
              </li>
              <li>
                <a href="../../pigmentaciones.html">Pigmentaciones</a>
              </li>
              <li>
                <a href="../../acne.html">Acné</a>
              </li>
              <li>
                <a href="../../reductivos.html">Reductivos</a>
              </li>
              <li>
                <a href="../../celulitis.html">Celulitis</a>
              </li>
              <li>
                <a href="../../estrias.html">Estrías</a>
              </li>
              
              <li>
                <a href="../../hifu.html">HIFU</a>
              </li>
              <li>
                <a href="../../radiofrecuencia.html">Radiofrecuencia</a>
              </li>
              <li>
                <a href="../../laser.html">Láser</a>
              </li>
              <li>
                <a href="../../criolipolisis.html">Criolipólisis</a>
              </li>
              <li>
                <a href="../../ipl.html">IPL</a>
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
            <a class="link" href="../index.html">
              <i class="zmdi zmdi-view-compact"></i> MONALISA</a>
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
            <a class="link" href="../../contacto.html">
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
    <script src="../../assets/js/plugins.min.js"></script>
    <script src="../../assets/js/app.min.js"></script>
    <script src="../../assets/js/app.js"></script>
    <script src="../../assets/js/index.js"></script>
    <script src="../../assets/js/fullpage.js"></script>
    <script src="../../assets/js/home-generic-ultracel.js"></script>
    <!-- <script>
        $(document).ready(function(){
        $('#wrapper').fullpage();
        });
    </script> -->
    <script type="text/javascript">
        function mySubscribeSuccess( form )
        {
            document.forms['5253405f'].action='send-form-product.php';
            document.forms['5253405f'].submit();
        }
    </script>

  </body>
</html>