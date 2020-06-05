<?php session_start();
    if(isset($_SESSION['usr'])) {
        if(($_SESSION['usr'] == 1001) || ($_SESSION['usr'] == 1002)) header('Location: index_admin.php');
        else if($_SESSION['usr'] == 1003) header('Location: index_yellow.php');
        else header('Location: index_user.php');
        die();
    }

    include('login.php');
    include('register.php');
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
	        <div class="ms-hero-page ms-hero-video ms-hero-img-room color-white intro-hero-full monalisa-bg section-full">
		          <div class="intro-hero-full-content bottom">
                  <div class="container text-center">
                      <div class="row">
                          <div class="col-md-5">
                              <span class="center-block mb-2 mt-2 animated zoomInDown animation-delay-7">
                                  <figure class="logo-product">
                                    <img src="../../assets/img/products/monalisa/logo-monalisa.png" alt="..." class="img-fluid">
                                  </figure>
                              </span>
                              <h2 class="no-m ms-site-title color-primary-monalisa center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-7"><strong>¡Gana con MONALISA!</strong></h2>
                              <h1 class="animated fadeInUp animation-delay-12 color-primary-monalisa">Sé uno de los <strong>3 ganadores</strong> de un <strong>Kit</strong> de <strong>10 MONALISAS</strong>.</h1>
                          </div>
                          <div class="col-md-7">
                            <div class="center-block mt-2 animated zoomInDown animation-delay-8">
                                <figure class="stage-product">
                                    <img src="../../assets/img/products/monalisa/Cajas_Monalisa-concurso.png" alt="..." class="img-fluid">
                                </figure>
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
	        </div><!--.section-->
        <!-- <section class="section">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-12">
                        
                        <h4 class="text-center color-primary-dark text-light mb-2 fadeInDown animation-delay-5"><strong>¿Cómo participo?</strong></h4>
        
                        <p class="lead text-center aco fadeInDown animation-delay-6 mw-800 center-block mb-4">Conoce las bases y participa para llevarte gratis 10 Rellenos Dérmicos del Ácido Hialurónico más puro.</p>
						            <p class="lead text-center aco fadeInDown animation-delay-6 mw-800 center-block mb-4">Solo regístrate e ingresa tus códigos. <br>¡Con esto ya estarás participando para ser uno de los ganadores!</p>
						<p class="lead text-center aco fadeInDown animation-delay-6 mw-800 center-block mb-4">Premio: 10 cajas de MONALISA con las versiones que tú elijas.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center">
                        <figure>
                            <img src="../../assets/img/products/monalisa/Why-MONALISA.png" alt="..." class="img-fluid">
                        </figure>
                    </div>
                </div>

            </div> 
        </section> -->

        <section class="section mt-6 mb-6">
        	<div class="container-fluid">
        		<div class="row">
        			<div class="col-md-12">
                        <h2 class="text-center color-primary-monalisa mb-2">¿Cómo participo?</h2>
        
                        <p class="lead text-center aco fadeInDown animation-delay-6 mw-800 center-block mb-2">Es muy fácil solo tienes que consultar las bases, regístrate e ingresa el código que se encuentra en tus empaques MONALISA.<br>¡Con esto ya estarás participando para ser uno de los ganadores!</p>
                        
                        <p class="lead text-center aco fadeInDown animation-delay-6 mw-800 center-block mb-2">El premio será de 10 cajas de MONALISA con las versiones que tú elijas.</p>
                    </div>
        		</div>
        		<div class="row text-center">
        			<div class="col-md-3 col-6 monalisa-soft">
        				<h3 class="color-soft-monalisa">SOFT</h3>
        				<figure class="">
                			<img src="../../assets/img/products/monalisa/Jeringa-Verde.png" alt="..." class="img-fluid">
                		</figure>

        				<ul class="list-unstyled">
                  			<li>200μm</li>
                  			<li>Patas de gallo.</li>
        					<li>Párpados inferiores</li>
        					<li>Líneas finas en la frente.</li>
        					<li>Líneas periorales.</li>
        				</ul>
        			</div>
        			<div class="col-md-3 col-6 monalisa-mild">
        				<h3 class="color-mild-monalisa">MILD</h3>
        				<figure class="">
                			<img src="../../assets/img/products/monalisa/Jeringa-Blanca.png" alt="..." class="img-fluid">
                		</figure>
        				<ul class="list-unstyled">
                  			<li>400μm</li>
        					<li>Arruga glabelar.</li>
        					<li>Líneas perioculares profundas.</li>
        					<li>Surcos en área temporal.</li>
        					<li>Aumento de labios.</li>
        					<li>Mejillas.</li>
        				</ul>
        			</div>
        			<div class="col-md-3 col-6 monalisa-hard">
        				<h3 class="color-hard-monalisa">HARD</h3>
        				<figure class="">
                			<img src="../../assets/img/products/monalisa/Jeringa-Rosa.png" alt="..." class="img-fluid">
                		</figure>
        				<ul class="list-unstyled">
                  			<li>600μm</li>
        					<li>Frente.</li>
        					<li>Puente nasal.</li>
        					<li>Surco Nasogeniano.</li>
                  			<li>Aumento y definición de labios intenso.</li>
        				</ul>
        			</div>
        			<div class="col-md-3 col-6 monalisa-ultra">
        				<h3 class="color-ultra-monalisa">ULTRA</h3>
        				<figure class="">
                			<img src="../../assets/img/products/monalisa/Jeringa-Morada.png" alt="..." class="img-fluid">
                		</figure>
        				<ul class="list-unstyled">
                  			<li>900μm</li>
        					<li>Frente.</li>
        					<li>Puente y aumento nasal.</li>
        					<!-- <li>Aumento nasal.</li> -->
        					<li>Surco nasogeniano profundo.</li>
                            <li>Pómulos, Mandíbula y Mentón.</li>
                            
                            
        				</ul>
        			</div>
        		</div>
        	</div>
        </section>

        <div id="login-container" class="pt-6 pb-6">
          	<div class="container ">
            	<div class="row">
                    <div class="col-md-12">
                        
                        <h2 class="text-center color-white mb-1">¡Regístrate y Gana!</h2>
                        <p class="lead text-center color-white mb-1 fadeInDown animation-delay-5">Entre más códigos registres, más oportunidades tienes de ganar.</p>
                    </div>
                </div>
            
            	<div class="row pt-1">
              		<div class="col-md-6 offset-md-3 col-12 ">
                		<div class="">
        					<div class="card color-dark shadow-6dp animated fadeIn animation-delay-7">
          
          						<ul class="nav nav-tabs nav-tabs-full nav-tabs-3 nav-tabs-transparent indicator-primary" role="tablist">
            						<li class="nav-item" role="presentation">
              							<a href="#ms-login-tab" aria-controls="ms-login-tab" role="tab" data-toggle="tab" class="nav-link withoutripple active">
                						<i class="zmdi zmdi-account"></i> Login</a>
            						</li>
            						<li class="nav-item" role="presentation">
              							<a href="#ms-register-tab" aria-controls="ms-register-tab" role="tab" data-toggle="tab" class="nav-link withoutripple">
                						<i class="zmdi zmdi-account-add"></i> Registro</a>
            						</li>
            						<li class="nav-item" role="presentation">
              							<a href="#ms-recovery-tab" aria-controls="ms-recovery-tab" role="tab" data-toggle="tab" class="nav-link withoutripple">
                						<i class="zmdi zmdi-key"></i> Recuperar</a>
            						</li>
          						</ul>
          						<div class="card-body">
            						<div class="tab-content">
              							<div role="tabpanel" class="tab-pane fade active show" id="ms-login-tab">
                							<form action = "" method = "post">
                  								<fieldset>
                    								<div class="form-group label-floating">
                      									<div class="input-group">
                        									<span class="input-group-addon">
                          										<i class="zmdi zmdi-account"></i>
                        									</span>
                        									<label class="control-label" for="ms-form-user">Email</label>
                        									<input type="text" id="ms-form-user" class="form-control" placeholder = "" name = "login_mail" required>
                    									</div>
                    									<div class="form-group label-floating">
                      										<div class="input-group">
                        										<span class="input-group-addon">
                          											<i class="zmdi zmdi-lock"></i>
                        										</span>
                        										<label class="control-label" for="ms-form-pass">Contraseña</label>
                        										<input type="password" id="ms-form-pass" class="form-control" placeholder = "" name = "login_password" required>
                    										</div>
                    										<div class="row mt-2">
                      											<div class="col-5">
                        
                      											</div>
                      											<div class="col-7">
                        											<button class="btn btn-raised btn-primary pull-right" name = "login_send" type = "submit">Login</button>
                      											</div>
                      											<?php
                          										if(isset($_POST['login_mail']) && isset($_POST['login_password'])){
                              										if(userEx() != -1){
                                  										$_SESSION['usr'] = $usuario;

                                  										if($usuario == 1001 || $usuario == 1002) echo '<meta http-equiv="refresh" content="0; url=index_admin.php">';
                                 					 					else if($usuario == 1003) echo '<meta http-equiv="refresh" content="0; url=index_yellow.php">';
                                  										else echo '<meta http-equiv="refresh" content="0; url=index_user.php">';
                              										}
                              										else echo $errorMsg;
                          										}
                      											?> 
                    										</div>
                    									</div>
                    								</div>
                  								</fieldset>
                							</form>
                
              							</div>
              							<div role="tabpanel" class="tab-pane fade" id="ms-register-tab">
                							<form id="registro-form" class="form-horizontal" action = "" method = "post">
                  								<fieldset>
                    								<div class="row form-group">
                        								<label for="inputEmail" class="col-md-4 control-label up-x">Email</label>

                        								<div class="col-md-8">
                            								<input type="email" class="form-control" id="inputEmail" placeholder="Email" name = "register_mail" required>
                        								</div>
                    								</div>
                    								<div class="row form-group">
                        								<label for="inputPassword" class="col-md-4 control-label up-x">Contraseña</label>

                        								<div class="col-md-8">
                            							<input type="password" class="form-control" id="inputPassword" placeholder="Introducir una contraseña" name = "register_password" required>
                        								</div>
                    								</div>
                    								<div class="row form-group">
                        								<label for="inputPassword2" class="col-md-4 control-label up-x">Confirmar</label>

                        								<div class="col-md-8">
                            								<input type="password" class="form-control" id="inputPassword2" placeholder="Confirmar contraseña" name = "confirm_password" required>
                        								</div>
                    								</div>
                    								<div class="row form-group">
                      									<label for="inputName" class="col-md-4 control-label up-x">Nombre</label>
                      									<div class="col-md-8">
                        									<input type="text" class="form-control" id="inputName" placeholder="Nombre completo" name = "register_name" required>
                      									</div>
                    								</div>
                    								<div class="row form-group">
                      									<label for="inputTel" class="col-md-4 control-label up-x">Teléfono</label>
                      									<div class="col-md-8">
                        									<input type="text" class="form-control" id="inputTel" placeholder="10 digitos (incluye lada)" name = "register_phone" required>
                      									</div>
                    								</div>
                    								<div class="row form-group">
                      									<label for="inputGen" class="col-md-4 control-label">Especialidad</label>
                      									<div class="col-md-8">
                        									<select id="inputSpe" class="form-control selectpicker" name = "register_specialty" required>
                                              <option  value="null" disabled selected>Selecciona una</option>
                                              <option value="Dermatologia">Dermatolog&iacute;a</option>
                                              <option value="Cirugia Plastica">Cirug&iacute;a Pl&aacute;stica</option>
                                              <option value="Medicina Estetica">Medicina Est&eacute;tica</option>
                                              <option value="Cosmetologia">Cosmetolog&iacute;a</option>
                                              <option value="Ginecologia">Ginecolog&iacute;a</option>
                                              <option value="Otros">Otros</option>
                                          </select>
                      									</div>
                    								</div>
                    
                    								<div class="row form-group">
                      									<label for="inputCiudad" class="col-md-4 control-label up-x">Ciudad</label>
                      									<div class="col-md-8">
                        									<input type="text" class="form-control" id="inputCiudad" placeholder="Ciudad" name = "register_city" required>
                      									</div>
                    								</div>
                    								<div class="row form-group">
                      									<label for="inputGen" class="col-md-4 control-label">Estado</label>
                      									<div class="col-md-8">
                        									<select id="inputState" class="form-control selectpicker" name = "register_state">
                                              <option value="Fuera de Mexico">Fuera de M&eacute;xico</option>
                                              <option value="Aguascalientes">Aguascalientes</option>
                                              <option value="Baja California">Baja California</option>
                                              <option value="Baja California Sur">Baja California Sur</option>
                                              <option value="Campeche">Campeche</option>
                                              <option value="Chiapas">Chiapas</option>
                                              <option value="Chihuahua">Chihuahua</option>
                                              <option value="Ciudad de Mexico">Ciudad de M&eacute;xico</option>
                                              <option value="Coahuila">Coahuila</option>
                                              <option value="Colima">Colima</option>
                                              <option value="Durango">Durango</option>
                                              <option value="Estado de Mexico">Estado de M&eacute;xico</option>
                                              <option value="Guanajuato">Guanajuato</option>
                                              <option value="Guerrero">Guerrero</option>
                                              <option value="Hidalgo">Hidalgo</option>
                                              <option value="Jalisco">Jalisco</option>
                                              <option value="Michoacan">Michoac&aacute;n</option>
                                              <option value="Morelos">Morelos</option>
                                              <option value="Nayarit">Nayarit</option>
                                              <option value="Nuevo Leon">Nuevo Le&oacute;n</option>
                                              <option value="Oaxaca">Oaxaca</option>
                                              <option value="Puebla">Puebla</option>
                                              <option value="Queretaro">Quer&eacute;taro</option>
                                              <option value="Quintana Roo">Quintana Roo</option>
                                              <option value="San Luis Potosi">San Luis Potos&iacute;</option>
                                              <option value="Sinaloa">Sinaloa</option>
                                              <option value="Sonora">Sonora</option>
                                              <option value="Tabasco">Tabasco</option>
                                              <option value="Tamaulipas">Tamaulipas</option>
                                              <option value="Tlaxcala">Tlaxcala</option>
                                              <option value="Veracruz">Veracruz</option>
                                              <option value="Yucatan">Yucat&aacute;n</option>
                                              <option value="Zacatecas">Zacatecas</option>
                                          </select>
                      									</div>
                    								</div>
                    								<div class="row ">
                      									<div class="col">
                        									<button class="btn btn-raised btn-primary btn-block">Registrar ahora</button>
                      									</div>
                      									<?php
                                          if(isset($_POST['register_mail']) && isset($_POST['register_password']) && isset($_POST['confirm_password']) && isset($_POST['register_name']) && isset($_POST['register_phone']) && isset($_POST['register_specialty']) && isset($_POST['register_city']) && isset($_POST['register_state'])){
                                            $u_ID = userReg();
                                            if($u_ID != -1){
                                                $_SESSION['usr'] = $u_ID;
                                                echo '<meta http-equiv="refresh" content="0; url=index_user.php">';
                                            }
                                            else echo $errorMsg;
                                          }
                                        ?>
                    								</div>
                  								</fieldset>
                							</form>
              							</div>
              							<div role="tabpanel" class="tab-pane fade" id="ms-recovery-tab">
                							<form action="pwd_reset.php" method="post">
                  								<fieldset>
                    								<div class="form-group label-floating">
                      									<div class="input-group">
                        									<span class="input-group-addon">
                          										<i class="zmdi zmdi-email"></i>
                        									</span>
                        									<label class="control-label" for="ms-form-email-recovery">Email</label>
                        									<input type="email" id="ms-form-email-recovery" class="form-control" placeholder = "" name = "reset_mail">
                      									</div>
                    								</div>
                    								<button class="btn btn-raised btn-block btn-primary" type = "submit">Enviar contraseña</button>
                  								</fieldset>
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
        
        <section id="bases-sorteo" class="bg-monalisa ms-hero-img-room color-white intro-hero-full">
            <div class="container ">
            	<div class="row">
            		<div class="col-md-12 ">
                        <div class="">
            			    <h3 class="text-center text-white mb-2 fadeInDown animation-delay-5 mt-6"><span>Bases y Condiciones</span> del <strong>sorteo</strong></h3>
                            <h5 class="text-white mb-2 fadeInDown animation-delay-5">Para participar en la dinámica, se deben conocer y cumplir los siguientes requisitos:</h5>
            			    <ul class="bases-sorteo">
                                <li>La presente dinámica está dirigida solo a profesionales de la salud.</li>
								<li>Para participar deberás ser mayor de 18 años, residir en la república Mexicana y haber adquirido y cubierto el costo total del producto que registres.</li>
								<li>No puedes participar a través de otras personas.</li>
								<li>Los códigos pueden registrarse una sola vez, teniendo como fecha límite el último día del presente mes.</li>
								<li>Solo participarán los códigos registrados exitosamente a través de este sitio Web.</li>
								<li>Los códigos ganadores se seleccionarán de manera aleatoria, entre más registros se hagan por persona, más posibilidades hay de resultar ganador.</li>
								<li>Los ganadores se darán a conocer a través de la fanpage de <a href="https://www.facebook.com/MonalisaAcidoHialuronico" target="_blank">MONALISA</a>, así como las instrucciones para la entrega del premio.</li>
								<li>Solo será válido un premio por persona.</li>
								<li>En caso de resultar ganador deberás seguir las instrucciones para la entrega del premio, estas se darán a través de la fanpage de <a href="https://www.facebook.com/MonalisaAcidoHialuronico" target="_blank">MONALISA</a> y/o por correo electrónico.</li>
								<li>Se puede elegir la combinación de las versiones de MONALISA que se desee, siempre y cuando no excedan el contenido del Kit, el cual consiste en 10 piezas.</li>
								<li>MONALISA se reserva el derecho de descalificar participantes.</li>
								<li>El ganador tendrá que acreditar su mayoría de edad con una identificación oficial, y un documento oficial que avale ser profesional de la salud. Si resulta ser menor de edad o no ser profesional de la salud, perderá el premio.</li>
								<li>Se recomienda guardar la tapa superior de la caja de MONALISA que contiene el código de barras para cualquier aclaración que pueda presentarse.</li>
								<li>En caso de irregularidades, es posible que se pida el recibo o más información de la compra.</li>
								<li>MONALISA puede cancelar el concurso en cualquier momento sin previo aviso.</li>
								<li>En cada publicación de las dinámicas habrá una descripción que indicará qué se estará regalando, así como las fechas e instrucciones para participar y el número de ganadores.</li>
                                      
                                      
                            </ul>
                                  
                            <p><strong>NOTA:</strong> Los gastos de envío corren por parte de MedeStore.</p>
                        </div>
            		</div>
            	</div>
            </div>
        </section>
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