<?php
    $hostname = "localhost";
    $username = "intracel_mluser";
    $password = "y3ll0wp4thyellow";
    $databaseName = "intracel_controlContacto";

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    mysqli_set_charset ($connect, "utf8");

    $custom = "Select contacto_num from contadores where contacto_nombre = 'cdmx'";
    $cust = mysqli_query($connect, $custom);
    $props = mysqli_fetch_array($cust);
    $cdmx = "cdmx-".$props[0];

    $custom = "Select contacto_num from contadores where contacto_nombre = 'edmx'";
    $cust = mysqli_query($connect, $custom);
    $props = mysqli_fetch_array($cust);
    $edmx = "edmx-".$props[0];

    $contacto = array(
        "cdmx-1"=>array("nombre"=>"Israel Estrada Guevara", "phone"=>"5215551054351", "email"=>"ml.cmx1@medestore.mx"),
        "cdmx-2"=>array("nombre"=>"Jorge Omar Ávila", "phone"=>"5215533357545", "email"=>"ml.cmx2@medestore.mx"),
        "edmx-1"=>array("nombre"=>"Israel Estrada Guevara", "phone"=>"5215551054351", "email"=>"ml.mex1@medestore.mx"),
        "edmx-2"=>array("nombre"=>"Jorge Omar Ávila", "phone"=>"5215533357545", "email"=>"ml.mex2@medestore.mx")
    );
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="theme-color" content="#333">
        <meta name="author" content="André Vital">
        <meta name="description" content="Mándanos un mensaje y en breve uno de nuestros asesores se pondrá en contacto contigo. Será un placer atenderte.">

        <title>MedeStore | Contacto</title>
        <link rel="shortcut icon" href="assets/img/favicon.ico">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="assets/css/preload.css">
        <link rel="stylesheet" href="assets/css/plugins.css">
        <link rel="stylesheet" href="assets/css/simple-line-icons.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media.css">
        <link rel="stylesheet" href="assets/css/contact_styles.css">
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
        <noscript>
            <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2199805706970346&ev=PageView&noscript=1"/>
        </noscript>
    </head>
    <body id="contacto-page">
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
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <div class="fb-customerchat" attribution=setup_tool page_id="1439383766342268" logged_in_greeting="¡Hola! ¿Tienes alguna duda sobre nuestros equipos? Contáctanos" logged_out_greeting="¡Hola! ¿Tienes alguna duda sobre nuestros equipos? Contáctanos"></div>

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
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/Logo-MedeStore-line.png" alt="">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="ms-navbar">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown dropdown-megamenu-container">
                                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="component">Premium</a>
                                <ul class="dropdown-menu dropdown-megamenu animated fadeIn animated-2x">
                                    <li class="container">
                                        <div class="row">
                                            <div class="col-sm-6 megamenu-col">
                                                <div class="megamenu-block animated fadeInLeft animated-2x">
                                                    <h3 class="megamenu-block-title"><i class="fa fa-bookmark-o"></i> Tratamientos</h3>

                                                    <ul class="megamenu-block-list">
                                                        <li>
                                                            <a class="withripple" href="depilacion.html"><i class="fa fa-arrow-circle-right"></i> Depilación</a>
                                                        </li>
                                                        <li>
                                                            <a class="withripple" href="rejuvenecimiento-facial.html"><i class="fa fa-arrow-circle-right"></i> Rejuvenecimiento facial</a>
                                                        </li>
                                                        <li>
                                                            <a class="withripple" href="pigmentaciones.html"><i class="fa fa-arrow-circle-right"></i> Pigmentaciones</a>
                                                        </li>
                                                        <li>
                                                            <a class="withripple" href="acne.html"><i class="fa fa-arrow-circle-right"></i> Acné</a>
                                                        </li>
                                                        <li>
                                                            <a class="withripple" href="reductivos.html"><i class="fa fa-arrow-circle-right"></i> Reductivos</a>
                                                        </li>
                                                        <li>
                                                            <a class="withripple" href="celulitis.html"><i class="fa fa-arrow-circle-right"></i> Celulitis</a>
                                                        </li>
                                                        <li>
                                                            <a class="withripple" href="estrias.html"><i class="fa fa-arrow-circle-right"></i> Estrías</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 megamenu-col">
                                                <div class="megamenu-block animated fadeInLeft animated-2x">
                                                    <h3 class="megamenu-block-title"><i class="fa fa-bookmark-o"></i> Tecnología</h3>

                                                    <ul class="megamenu-block-list">
                                                        <li>
                                                            <a class="withripple" href="hifu.html"><i class="fa fa-arrow-circle-right"></i> HIFU</a>
                                                        </li>
                                                        <li>
                                                            <a class="withripple" href="radiofrecuencia.html"><i class="fa fa-arrow-circle-right"></i> Radiofrecuencia</a>
                                                        </li>
                                                        <li>
                                                            <a class="withripple" href="laser.html"><i class="fa fa-arrow-circle-right"></i> Láser</a>
                                                        </li>
                                                        <li>
                                                            <a class="withripple" href="criolipolisis.html"><i class="fa fa-arrow-circle-right"></i> Criolipólisis</a>
                                                        </li>
                                                        <li>
                                                            <a class="withripple" href="ipl.html"><i class="fa fa-arrow-circle-right"></i> IPL</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="monalisa/index.html">MONALISA</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="contacto.html" class="nav-link dropdown-toggle animated fadeIn animation-delay-10" role="button" aria-haspopup="true" aria-expanded="false" >Contacto</a>
                            </li>
                        </ul>
                    </div>
                    <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu">
                        <i class="zmdi zmdi-menu"></i>
                    </a>
                </div>
            </nav>

        <div id="wrapper">
            <div id="contact-container" class="">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-center color-primary-medestore mb-2 mt-4">MEDESTORE</h3>
                            <p class="lead text-center color-dark aco fadeInDown animation-delay-6 mw-800 center-block mb-2">
                                Envía un mensaje a nuestro <strong>Departamento de Ventas</strong> o al <strong>Departamento de Soporte Técnico</strong> y en breve uno de nuetros especialistas se pondrá en contacto contigo.
                            </p>
                        </div>
                    </div>

                    <div class="row pt-2 pb-6" id ="main_contact-select">
                        <div class="col-12 col-md-4">
                            <a class = "contact_dpmtCards" id = "btn-ventas">
                                <div class="card">
                                    <div class="card-body overflow-hidden text-center">
                                        <span class="ms-icon ms-icon-circle ms-icon-xlg mb-2"><i class="zmdi zmdi-local-offer"></i></span>
                                        <h5>VENTAS</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-4">
                            <a class = "contact_dpmtCards" id = "btn-servicio_tecnico">
                                <div class="card">
                                    <div class="card-body overflow-hidden text-center">
                                        <span class="ms-icon ms-icon-circle ms-icon-xlg mb-2"><i class="zmdi zmdi-laptop-mac"></i></span>
                                        <h5>SERVICIO TÉCNICO</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-4">
                            <a class = "contact_dpmtCards"  id = "btn-servicio_cliente">
                                <div class="card">
                                    <div class="card-body overflow-hidden text-center">
                                        <span class="ms-icon ms-icon-circle ms-icon-xlg mb-2"><i class="zmdi zmdi-account"></i></span>
                                        <h5>SERVICIO AL CLIENTE</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row justify-content-center" id="ventas-select" style = "display: none;">
                        <div class="col-10 col-md-3">
                            <a href="#" class = "contact_dpmtCards" id ="btn-ventas_equipo">
                                <div class="card">
                                    <div class="card-body overflow-hidden text-center">
                                        <span class="ms-icon ms-icon-circle ms-icon-xlg mb-2"><i class="fas fa-award"></i></span>
                                        <h5>EQUIPOS</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-10 col-md-3">
                            <a href="#" class = "contact_dpmtCards" id ="btn-ventas_consumibles">
                                <div class="card">
                                    <div class="card-body overflow-hidden text-center">
                                        <span class="ms-icon ms-icon-circle ms-icon-xlg mb-2"><i class="fas fa-syringe"></i></span>
                                        <h5>CONSUMIBLES</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row pt-4" id = "state-container" style = "display:none;">
                        <div class="col-12">
                            <div id="contact-div" class="card">
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-10">
                                            <label for="state_selection" class = "control-label">¿De qué estado eres?</label>
                                            <select id="state_selection"
                                            name="state_selection" class="form-control selectpicker" data-live-search="true" data-dropup-auto="false">
                                                <option disabled selected>Selecciona una opción</option>
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
                                    <div class="row justify-content-center" id = "eqpmt-container" style = "display:none;">
                                        <div class="col-10 pt-4">
                                            <label for="device_select" class = "control-label">¿Qué equipo te interesa?</label>
                                            <select id="device_select" name="device_select" class="form-control selectpicker" data-live-search="true" data-dropup-auto="false">
                                                <option disabled selected>Selecciona una opción</option>
                                                <option value="Cellec V">Cellec V</option>
                                                <option value="Clearlight">Clearlight</option>
                                                <option value="COOLshaping">COOLshaping</option>
                                                <option value="Edge ONE">Edge ONE</option>
                                                <option value="LIPOcel">LIPOcel</option>
                                                <option value="LIPO1060 TM">LIPO1060 TM</option>
                                                <option value="Power Shape 2">Power Shape 2</option>
                                                <option value="SmoothCool Hybrid">SmoothCool Hybrid</option>
                                                <option value="TRI-BEAM Premium">TRI-BEAM Premium</option>
                                                <option value="ULTRAcel">ULTRAcel</option>
                                                <option value="ULTRAcel Q+">ULTRAcel Q+</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center" id = "consum-container" style = "display:none;">
                                        <div class="col-10 pt-4">
                                            <label for="consum_select" class = "control-label">¿Qué consumible te interesa?</label>
                                            <select id="consum_select" name="consum_select" class="form-control selectpicker" data-live-search="true" data-dropup-auto="false">
                                                <option disabled selected>Selecciona una opción</option>
                                                <option value="MONALISA">MONALISA</option>
                                                <option value="MONALISA Skin">MONALISA Skin</option>
                                                <option value="DUO Cánula">DUO Cánula</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row pt-4" id = "general-form" style = "display:none;">
                                        <div class="col-md-7">
                                            <form action="contact_general.php" method="post" role="form" class="form-horizontal">
                                                <fieldset class="container">
                                                    <div class="form-group row">
                                                        <label for="contactFname" autocomplete="false" class="col-lg-3 control-label">Nombre</label>
                                                        <div class="col-lg-9">
                                                            <input type="text" class="form-control" id="contactFname" name="contactFname" placeholder="Nombre" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="contactLname" autocomplete="false" class="col-lg-3 control-label">Apellido</label>
                                                        <div class="col-lg-9">
                                                            <input type="text" class="form-control" id="contactLname" name="contactLname" placeholder="Apellido" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" id = "subjectField" style = "display:none;">
                                                        <label for="contactSubject" autocomplete="false" class="col-lg-3 control-label">Asunto</label>
                                                        <div class="col-lg-9">
                                                            <input type="text" class="form-control" id="contactSubject" name="contactSubject" placeholder="Asunto" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="contactEmail" autocomplete="false" class="col-lg-3 control-label">Email</label>
                                                        <div class="col-lg-9">
                                                            <input type="email" class="form-control" id="contactEmail" name="contactEmail" placeholder="Correo electrónico válido" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="contactTelefono" autocomplete="false" class="col-lg-3 control-label">Teléfono</label>
                                                        <div class="col-lg-9">
                                                            <input type="text" class="form-control" id="contactTelefono" name="contactTelefono" placeholder="Incluir lada" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="contactSpeciality" class="col-lg-3 control-label">Especialidad</label>
                                                        <div class="col-lg-9">
                                                            <select id="contactSpeciality" name = "contactSpeciality" class="form-control selectpicker" data-live-search="true" data-dropup-auto="false"required>
                                                                <option disabled selected>Selecciona una</option>
                                                                <option value="Dermatología">Dermatología</option>
                                                                <option value="Cirugía Plástica">Cirugía Plástica</option>
                                                                <option value="Medicina Estética">Medicina Estética</option>
                                                                <option value="Cosmetología">Cosmetología</option>
                                                                <option value="Ginecología">Ginecología</option>
                                                                <option value="Otros">Otros</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="contactMessage" class="col-lg-3 control-label">Mensaje</label>
                                                        <div class="col-lg-9">
                                                            <textarea class="form-control" rows="3" id="contactMessage" name="contactMessage" placeholder="Su mensaje..."></textarea>
                                                        </div>
                                                    </div>
                                                    <input type="text" id="sellerName" name="sellerName" required style = "display: none;">
                                                    <input type="email" id="sellerEmail" name="sellerEmail" required style = "display: none;">
                                                    <input type="text" id="dpmtSection" name="dpmtSection" required style = "display: none;">
                                                    <input type="text" id="selectedState" name="selectedState" required style = "display: none;">
                                                    <div class="form-group row justify-content-center">
                                                        <div class="col-12 col-lg-5">
                                                            <button type="submit" class="btn btn-raised btn-primary" style = "width:100%">Enviar</button>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>

                                        <div class="col-md-5" id = "cInfo">
                                            <h6 class="subtitle" id = "cInfoTitle"></h6>
                                            <h6 class="subtitle" id = "cInfoSeller"></h6>
                                            <p id = "cInfoPhone"></p>
                                            <p id = "cInfoWhatsapp"></p>
                                            <div class="pt-6" id = "cInfoHQ" style = "display:none;">
                                                <h6 class="subtitle" id = "cInfoTitleHQ">Contacto Oficinas Centrales</h6>
                                                <p id = "cInfoPhoneHQ">
                                                    <a href="tel:+524494782400" class="text-dark"><i class="color-royal-light zmdi zmdi-phone mr-1"></i>(449) 478 2400</a>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="whatsappSend" style = "display:none;">
                                            <form action="contact_whatsapp.php" id = "whatsappSend" method = "post">
                                                <input type="text" id = "nameSellerWA" name = "nameSellerWA">
                                                <input type="email" id = "emailSellerWA" name = "emailSellerWA">
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-info card-code" style = "display:none;">
                                    <div class="card-header card-code-header" role="tab" id="codeHead2">
                                        <h4 class="panel-title card-code-title">
                                            <a class="collapsed withripple" role="button" data-toggle="collapse" href="#code2" aria-expanded="false" aria-controls="code2"><i class="zmdi zmdi-map"></i> VER MAPA</a>
                                        </h4>
                                    </div>
                                    <div id="code2" class="card-collapse collapse" role="tabpanel" aria-labelledby="codeHead2">
                                        <div class="card-code-block">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3700.7173633863717!2d-102.3677056787268!3d21.945414462874446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfeba07ff28950573!2sMedestore!5e0!3m2!1ses-419!2smx!4v1549002860806" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <aside class="ms-footbar section fp-auto-height">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 ms-footer-col">
                                <div class="ms-footbar-block">
                                    <h6 class="ms-footbar-title">Privacidad</h6>
                                    <ul class="list-unstyled ms-icon-list ">
                                        <li>
                                            <a href="aviso-de-privacidad.html">
                                                <i class="icon-docs"></i> Aviso de privacidad
                                            </a>
                                        </li>
                                        <li>
                                            <a href="politicas-de-venta.html">
                                                <i class="icon-badge"></i> Políticas de venta
                                            </a>
                                        </li>
                                        <li>
                                            <a href="politicas-de-servicio-tecnico.html">
                                                <i class="icon-settings"></i> Políticas de servicio técnico
                                            </a>
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
                                        <img src="assets/img/logo-medestore-white.png" alt="">
                                    </div>
                                    <address class="no-mb">
                                        <p><i class="icon-location-pin mr-1"></i> Carr. a los Arquitos 603</p>
                                        <p><i class="icon-map mr-1"></i> Jesús María, Ags. C.P. 20996</p>
                                        <p><a href="tel:+524494782400" ><i class="icon-phone mr-1"></i>+52 (449) 478 2400</a></p>
                                        <p><a target = "_blank" href="https://api.whatsapp.com/send?phone=5214494782400"><i class="zmdi zmdi-whatsapp mr-1"></i>WhatsApp</a></p>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>

                <footer class="ms-footer section fp-auto-height">
                    <div class="container"><p>MedeStore&reg; <?php echo date('Y') ?>. Todos los derechos reservados</p></div>
                </footer>

                <div class="btn-back-top">
                    <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised "><i class="zmdi zmdi-long-arrow-up"></i></a>
                </div>
            </div>
            <div class="btn-back-top">
                <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised "><i class="zmdi zmdi-long-arrow-up"></i></a>
            </div>
        </div>

        <div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar">
            <div class="sb-slidebar-container">
                <header class="ms-slidebar-header">
                    <div class="ms-slidebar-title">
                        <div class="ms-slidebar-t">
                            <img src="assets/img/logo-medestore-white.png" alt="">
                        </div>
                    </div>
                </header>
                <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
                    <li>
                        <a class="link" href="#"><i class="icon-home"></i> Inicio</a>
                    </li>
                    <li class="card" role="tab" id="sch2">
                        <a class="collapsed" role="button" data-toggle="collapse" href="#sc2" aria-expanded="false" aria-controls="sc2"><i class="icon-diamond"></i> Premium</a>
                        <ul id="sc2" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch2" data-parent="#slidebar-menu">
                            <li><a href="depilacion.html">Depilación</a></li>
                            <li><a href="rejuvenecimiento-facial.html">Rejuvenecimiento facial</a></li>
                            <li><a href="pigmentaciones.html">Pigmentaciones</a></li>
                            <li><a href="acne.html">Acné</a></li>
                            <li><a href="reductivos.html">Reductivos</a></li>
                            <li><a href="celulitis.html">Celulitis</a></li>
                            <li><a href="estrias.html">Estrías</a></li>
                            <li><a href="hifu.html">HIFU</a></li>
                            <li><a href="radiofrecuencia.html">Radiofrecuencia</a></li>
                            <li><a href="laser.html">Láser</a></li>
                            <li><a href="criolipolisis.html">Criolipólisis</a></li>
                            <li><a href="ipl.html">IPL</a></li>
                        </ul>
                    </li>
                    <li><a class="link" href="monalisa/index.html"><i class="zmdi zmdi-view-compact"></i> MONALISA</a></li>
                    <li><a class="link" href="contacto.html"><i class="icon-envelope"></i> Contacto</a></li>
                </ul>
                <div class="ms-slidebar-social ms-slidebar-block">
                    <h4 class="ms-slidebar-block-title">Social Links</h4>
                    <div class="ms-slidebar-social">
                        <a href="https://www.facebook.com/medestore/" class="btn-circle btn-circle-raised btn-facebook">
                            <i class="zmdi zmdi-facebook"></i>
                            <div class="ripple-container"></div>
                        </a>
                        <a href="https://www.instagram.com/medestoremx/" class="btn-circle btn-circle-raised btn-instagram">
                            <i class="zmdi zmdi-instagram"></i>
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

        <script src="assets/js/plugins.min.js"></script>
        <script src="assets/js/app.min.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/index.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/home-generic-7.js"></script>
        <script>
            var dpmt = 0;
            var sales = 0;
            var state = "";
            var eqmpt = "";
            var consum = "";

            $("#main_contact-select .contact_dpmtCards").click(function(){
                $(this).children(".card").addClass("selectedOpt");
                var id = $(this).attr('id');
                $("#main_contact-select .contact_dpmtCards:not(#"+id+")").children(".card").removeClass("selectedOpt");
            });

            $("#ventas-select .contact_dpmtCards").click(function(){
                $(this).children(".card").addClass("selectedOpt");
                var id = $(this).attr('id');
                $("#ventas-select .contact_dpmtCards:not(#"+id+")").children(".card").removeClass("selectedOpt");
            });

            $("#btn-ventas").click(function(){
                dpmt = 1;
                $("#ventas-select").css("display", "flex");
                $("#state-container").css("display", "none");
                $("#subjectField").css("display", "none");
                $("#cInfoTitle").html("Departamento de Ventas");
                $("#cInfoHQ").css("display", "block");
                $("#dpmtSection").val("Ventas");
            });

            $("#btn-servicio_tecnico").click(function(){
                dpmt = 2;
                sales = 0;
                $("#ventas-select").css("display", "none");
                $("#ventas-select .contact_dpmtCards .card").removeClass("selectedOpt");
                $("#eqpmt-container").css("display", "none");
                $("#consum-container").css("display", "none");
                $("#state-container").css("display", "initial");
                $("#subjectField").css("display", "flex");
                $("#cInfoTitle").html("Departamento de Servicio Técnico");
                $("#cInfoSeller").html("");
                $("#cInfoPhone").html('<a href="tel:+524494782442" class="text-dark"><i class="color-royal-light zmdi zmdi-phone mr-1"></i>(449) 478 2442</a>');
                $("#cInfoWhatsapp").html('<i class="color-whatsapp zmdi zmdi-whatsapp mr-1"></i><a target = "_blank" href="https://api.whatsapp.com/send?phone=5214491961355" class="text-dark">WhatsApp</a>');
                $("#cInfoHQ").css("display", "none");
                $("#sellerName, #nameSellerWA").val("Servicio Técnico");
                $("#sellerEmail, #emailSellerWA").val("soporte.servicio.tecnico@medestore.odoo.com");
                $("#contactSubject").val("");
                $("#dpmtSection").val("Servicio Técnico");

                if(state != "") $("#general-form").css("display", "flex");
            });

            $("#btn-servicio_cliente").click(function(){
                dpmt = 3;
                sales = 0;
                $("#ventas-select").css("display", "none");
                $("#ventas-select .contact_dpmtCards .card").removeClass("selectedOpt");
                $("#eqpmt-container").css("display", "none");
                $("#consum-container").css("display", "none");
                $("#state-container").css("display", "initial");
                $("#subjectField").css("display", "flex");
                $("#cInfoTitle").html("Departamento de Servicio al Cliente");
                $("#cInfoSeller").html("");
                $("#cInfoPhone").html('<a href="tel:+524494782400" class="text-dark"><i class="color-royal-light zmdi zmdi-phone mr-1"></i>(449) 478 2400</a>');
                $("#cInfoWhatsapp").html('<i class="color-whatsapp zmdi zmdi-whatsapp mr-1"></i><a target = "_blank" href="https://api.whatsapp.com/send?phone=5214492255144" class="text-dark">WhatsApp</a>');
                $("#cInfoHQ").css("display", "none");
                $("#sellerName, #nameSellerWA").val("Servicio al Cliente");
                $("#sellerEmail, #emailSellerWA").val("servicio.cliente@medestore.odoo.com");
                $("#contactSubject").val("");
                $("#dpmtSection").val("Servicio al Cliente");

                if(state != "") $("#general-form").css("display", "flex");
            });

            $("#btn-ventas_equipo").click(function(){
                sales = 1;
                $("#state-container").css("display", "initial");
                $("#dpmtSection").val("Ventas Equipos");
                if(state != "") {
                    $("#eqpmt-container").css("display", "flex");
                    $("#consum-container").css("display", "none");
                    $("#general-form").css("display", "none");
                }
            });

            $("#btn-ventas_consumibles").click(function(){
                sales = 2;
                $("#state-container").css("display", "initial");
                $("#dpmtSection").val("Ventas Consumibles");
                if(state != "") {
                    $("#eqpmt-container").css("display", "none");
                    $("#consum-container").css("display", "flex");
                    $("#general-form").css("display", "none");
                }
            });

            $(document).ready(function(){
                $.fn.changeInfo = function() {
                    switch(sales){
                        case 1:
                            switch(state){
                                case 'Aguascalientes':
                                case 'Baja California Sur':
                                case 'Guanajuato':
                                case 'Michoacán':
                                case 'Nayarit':
                                case 'Nuevo León':
                                case 'Quintana Roo':
                                case 'San Luis Potosí':
                                    $("#cInfoSeller").html("Alan Adair Fernández Pérez");
                                    $("#sellerName, #nameSellerWA").val("Alan Adair Fernández Pérez");
                                    $("#cInfoPhone").html('');
                                    $("#cInfoWhatsapp").html('<i class="color-whatsapp zmdi zmdi-whatsapp mr-1"></i><a target = "_blank" href="https://api.whatsapp.com/send?phone=5214491923991&text=Hola,%20me%20gustaria%20recibir%20información" class="text-dark">WhatsApp</a>');
                                    $("#sellerEmail, #emailSellerWA").val("alan.fernandez@medestore.mx");
                                    $("#cInfoHQ").css("display", "block");
                                break;
                                case 'Baja California':
                                case 'Coahuila':
                                case 'Jalisco':
                                case 'Sinaloa':
                                case 'Zacatecas':
                                    $("#cInfoSeller").html("Claudia Ivette Malacara Jiménez");
                                    $("#sellerName, #nameSellerWA").val("Claudia Ivette Malacara Jiménez");
                                    $("#cInfoPhone").html('');
                                    $("#cInfoWhatsapp").html('<i class="color-whatsapp zmdi zmdi-whatsapp mr-1"></i><a target = "_blank" href="https://api.whatsapp.com/send?phone=5214492255144&text=Hola,%20me%20gustaria%20recibir%20información" class="text-dark">WhatsApp</a>');
                                    $("#sellerEmail, #emailSellerWA").val("claudia.malacara@medestore.mx");
                                    $("#cInfoHQ").css("display", "block");
                                break;
                                case 'Campeche':
                                case 'Chihuahua':
                                case 'Colima':
                                case 'Durango':
                                case 'Sonora':
                                case 'Tamaulipas':
                                case 'Tlaxcala':
                                    $("#cInfoSeller").html("Daniel Ortega Arellano");
                                    $("#sellerName, #nameSellerWA").val("Daniel Ortega Arellano");
                                    $("#cInfoPhone").html('');
                                    $("#cInfoWhatsapp").html('<i class="color-whatsapp zmdi zmdi-whatsapp mr-1"></i><a target = "_blank" href="https://api.whatsapp.com/send?phone=5214494782400&text=Hola,%20me%20gustaria%20recibir%20información" class="text-dark">WhatsApp</a>');
                                    $("#sellerEmail, #emailSellerWA").val("daniel.ortega@medestore.mx");
                                    $("#cInfoHQ").css("display", "block");
                                break;
                                case 'Chiapas':
                                case 'Ciudad de México':
                                case 'Guerrero':
                                case 'Hidalgo':
                                case 'Estado de México':
                                case 'Morelos':
                                case 'Oaxaca':
                                case 'Puebla':
                                case 'Querétaro':
                                case 'Tabasco':
                                case 'Veracruz':
                                case 'Yucatán':
                                    $("#cInfoSeller").html("<?php echo $contacto["mich-1"]["nombre"];?>");
                                    $("#sellerName, #nameSellerWA").val("<?php echo $contacto["mich-1"]["nombre"];?>");
                                    $("#cInfoPhone").html('');
                                    $("#cInfoWhatsapp").html('<i class="color-whatsapp zmdi zmdi-whatsapp mr-1"></i><a target = "_blank" href="https://api.whatsapp.com/send?phone=<?php echo $contacto["mich-1"]["phone"];?>&text=Hola,%20me%20gustaria%20recibir%20información" class="text-dark">WhatsApp</a>');
                                    $("#sellerEmail, #emailSellerWA").val("<?php echo $contacto["mich-1"]["email"];?>");
                                    $("#cInfoHQ").css("display", "block");
                                break;
                            }
                        break;
                        case 2:
                            switch(state){
                                case 'Aguascalientes':$("#sellerEmail, #emailSellerWA").val("ml.agu1@medestore.mx");break;
                                case 'Baja California':$("#sellerEmail, #emailSellerWA").val("ml.bcn1@medestore.mx");break;
                                case 'Baja California Sur':$("#sellerEmail, #emailSellerWA").val("ml.bcs1@medestore.mx");break;
                                case 'Campeche':$("#sellerEmail, #emailSellerWA").val("ml.cam1@medestore.mx");break;
                                case 'Chiapas':$("#sellerEmail, #emailSellerWA").val("ml.chp1@medestore.mx");break;
                                case 'Chihuahua':$("#sellerEmail, #emailSellerWA").val("ml.chh1@medestore.mx");break;
                                case 'Ciudad de México':$("#sellerEmail, #emailSellerWA").val("<?php echo $contacto[$cdmx]["email"];?>");break;
                                case 'Coahuila':$("#sellerEmail, #emailSellerWA").val("ml.coa1@medestore.mx");break;
                                case 'Colima':$("#sellerEmail, #emailSellerWA").val("ml.col1@medestore.mx");break;
                                case 'Durango':$("#sellerEmail, #emailSellerWA").val("ml.dur1@medestore.mx");break;
                                case 'Guanajuato':$("#sellerEmail, #emailSellerWA").val("ml.gua1@medestore.mx");break;
                                case 'Guerrero':$("#sellerEmail, #emailSellerWA").val("ml.gro1@medestore.mx");break;
                                case 'Hidalgo':$("#sellerEmail, #emailSellerWA").val("ml.hid1@medestore.mx");break;
                                case 'Jalisco':$("#sellerEmail, #emailSellerWA").val("ml.jal1@medestore.mx");break;
                                case 'Estado de México':$("#sellerEmail, #emailSellerWA").val("<?php echo $contacto[$edmx]["email"];?>");break;
                                case 'Michoacán':$("#sellerEmail, #emailSellerWA").val("ml.mic1@medestore.mx");break;
                                case 'Morelos':$("#sellerEmail, #emailSellerWA").val("ml.mor1@medestore.mx");break;
                                case 'Nayarit':$("#sellerEmail, #emailSellerWA").val("ml.nay1@medestore.mx");break;
                                case 'Nuevo León':$("#sellerEmail, #emailSellerWA").val("ml.nle1@medestore.mx");break;
                                case 'Oaxaca':$("#sellerEmail, #emailSellerWA").val("ml.oax1@medestore.mx");break;
                                case 'Puebla':$("#sellerEmail, #emailSellerWA").val("ml.pue1@medestore.mx");break;
                                case 'Querétaro':$("#sellerEmail, #emailSellerWA").val("ml.que1@medestore.mx");break;
                                case 'Quintana Roo':$("#sellerEmail, #emailSellerWA").val("ml.roo1@medestore.mx");break;
                                case 'San Luis Potosí':$("#sellerEmail, #emailSellerWA").val("ml.slp1@medestore.mx");break;
                                case 'Sinaloa':$("#sellerEmail, #emailSellerWA").val("ml.sin1@medestore.mx");break;
                                case 'Sonora':$("#sellerEmail, #emailSellerWA").val("ml.son1@medestore.mx");break;
                                case 'Tabasco':$("#sellerEmail, #emailSellerWA").val("ml.tab1@medestore.mx");break;
                                case 'Tamaulipas':$("#sellerEmail, #emailSellerWA").val("ml.tam1@medestore.mx");break;
                                case 'Tlaxcala':$("#sellerEmail, #emailSellerWA").val("ml.tla1@medestore.mx");break;
                                case 'Veracruz':$("#sellerEmail, #emailSellerWA").val("ml.ver1@medestore.mx");break;
                                case 'Yucatán':$("#sellerEmail, #emailSellerWA").val("ml.yuc1@medestore.mx");break;
                                case 'Zacatecas':$("#sellerEmail, #emailSellerWA").val("ml.zac1@medestore.mx");break;
                                default:$("#sellerEmail, #emailSellerWA").val("contacto@medestore.mx");break;
                            }

                            switch(state){
                                case 'Aguascalientes':
                                case 'Guanajuato':
                                case 'San Luis Potosí':
                                    $("#cInfoSeller").html("Kliniken");
                                    $("#sellerName, #nameSellerWA").val("Kliniken");
                                    $("#cInfoPhone").html('');
                                    $("#cInfoWhatsapp").html('<i class="color-whatsapp zmdi zmdi-whatsapp mr-1"></i><a target = "_blank" href="https://api.whatsapp.com/send?phone=5214491923991&text=Hola,%20me%20gustaria%20recibir%20información" class="text-dark">WhatsApp</a>');
                                    $("#cInfoHQ").css("display", "block");
                                break;
                                case 'Baja California':
                                    $("#cInfoSeller").html("Silvia Fematt");
                                    $("#sellerName, #nameSellerWA").val("Silvia Fematt");
                                    $("#cInfoPhone").html('');
                                    $("#cInfoWhatsapp").html('<i class="color-whatsapp zmdi zmdi-whatsapp mr-1"></i><a target = "_blank" href="https://api.whatsapp.com/send?phone=5216643270533&text=Hola,%20me%20gustaria%20recibir%20información" class="text-dark">WhatsApp</a>');
                                    $("#cInfoHQ").css("display", "block");
                                break;
                                case 'Baja California Sur':
                                    $("#cInfoSeller").html("María del Socorro Drew Bastida");
                                    $("#sellerName, #nameSellerWA").val("María del Socorro Drew Bastida");
                                    $("#cInfoPhone").html('');
                                    $("#cInfoWhatsapp").html('<i class="color-whatsapp zmdi zmdi-whatsapp mr-1"></i><a target = "_blank" href="https://api.whatsapp.com/send?phone=5216241545589&text=Hola,%20me%20gustaria%20recibir%20información" class="text-dark">WhatsApp</a>');
                                    $("#cInfoHQ").css("display", "block");
                                break;
                                case 'Ciudad de México':
                                    $("#cInfoSeller").html("<?php echo $contacto[$cdmx]["nombre"];?>");
                                    $("#sellerName, #nameSellerWA").val("<?php echo $contacto[$cdmx]["nombre"];?>");
                                    $("#cInfoPhone").html('');
                                    $("#cInfoWhatsapp").html('<i class="color-whatsapp zmdi zmdi-whatsapp mr-1"></i><a target = "_blank" href="https://api.whatsapp.com/send?phone=<?php echo $contacto[$cdmx]["phone"];?>&text=Hola,%20me%20gustaria%20recibir%20información" class="text-dark">WhatsApp</a>');
                                    $("#cInfoHQ").css("display", "block");
                                break;
                                case 'Chihuahua':
                                    $("#cInfoSeller").html("Angela Julieta Porras Figueroa");
                                    $("#sellerName, #nameSellerWA").val("Angela Julieta Porras Figueroa");
                                    $("#cInfoPhone").html('');
                                    $("#cInfoWhatsapp").html('<i class="color-whatsapp zmdi zmdi-whatsapp mr-1"></i><a target = "_blank" href="https://api.whatsapp.com/send?phone=5216143617266&text=Hola,%20me%20gustaria%20recibir%20información" class="text-dark">WhatsApp</a>');
                                    $("#cInfoHQ").css("display", "block");
                                break;
                                case 'Coahuila':
                                case 'Durango':
                                case 'Nuevo León':
                                case 'Tamaulipas':
                                    $("#cInfoSeller").html("Lura Medical");
                                    $("#sellerName, #nameSellerWA").val("Lura Medical");
                                    $("#cInfoPhone").html('');
                                    $("#cInfoWhatsapp").html('<i class="color-whatsapp zmdi zmdi-whatsapp mr-1"></i><a target = "_blank" href="https://api.whatsapp.com/send?phone=5218120021246&text=Hola,%20me%20gustaria%20recibir%20información" class="text-dark">WhatsApp</a>');
                                    $("#cInfoHQ").css("display", "block");
                                break;
                                case 'Colima':
                                case 'Michoacán':
                                case 'Nayarit':
                                    $("#cInfoSeller").html("Medical Aesthetic Devices");
                                    $("#sellerName, #nameSellerWA").val("Medical Aesthetic Devices");
                                    $("#cInfoPhone").html('');
                                    $("#cInfoWhatsapp").html('<i class="color-whatsapp zmdi zmdi-whatsapp mr-1"></i><a target = "_blank" href="https://api.whatsapp.com/send?phone=5213335960295&text=Hola,%20me%20gustaria%20recibir%20información" class="text-dark">WhatsApp</a>');
                                    $("#cInfoHQ").css("display", "block");
                                break;
                                case 'Hidalgo':
                                    $("#cInfoSeller").html("<?php echo $contacto["cdmx-2"]["nombre"];?>");
                                    $("#sellerName, #nameSellerWA").val("<?php echo $contacto["cdmx-2"]["nombre"];?>");
                                    $("#cInfoPhone").html('');
                                    $("#cInfoWhatsapp").html('<i class="color-whatsapp zmdi zmdi-whatsapp mr-1"></i><a target = "_blank" href="https://api.whatsapp.com/send?phone=<?php echo $contacto["cdmx-2"]["phone"];?>&text=Hola,%20me%20gustaria%20recibir%20información" class="text-dark">WhatsApp</a>');
                                    $("#cInfoHQ").css("display", "block");
                                break;
                                case 'Jalisco':
                                    $("#cInfoSeller").html("Rocío Alhelí López Morales");
                                    $("#sellerName, #nameSellerWA").val("Rocío Alhelí López Morales");
                                    $("#cInfoPhone").html('');
                                    $("#cInfoWhatsapp").html('<i class="color-whatsapp zmdi zmdi-whatsapp mr-1"></i><a target = "_blank" href="https://api.whatsapp.com/send?phone=5213318956852&text=Hola,%20me%20gustaria%20recibir%20información" class="text-dark">WhatsApp</a>');
                                    $("#cInfoHQ").css("display", "block");
                                break;
                                case 'Estado de México':
                                    $("#cInfoSeller").html("<?php echo $contacto[$edmx]["nombre"];?>");
                                    $("#sellerName, #nameSellerWA").val("<?php echo $contacto[$edmx]["nombre"];?>");
                                    $("#cInfoPhone").html('');
                                    $("#cInfoWhatsapp").html('<i class="color-whatsapp zmdi zmdi-whatsapp mr-1"></i><a target = "_blank" href="https://api.whatsapp.com/send?phone=<?php echo $contacto[$edmx]["phone"];?>&text=Hola,%20me%20gustaria%20recibir%20información" class="text-dark">WhatsApp</a>');
                                    $("#cInfoHQ").css("display", "block");
                                break;
                                case 'Sonora':
                                    $("#cInfoSeller").html("María Guadalupe Padilla Padilla");
                                    $("#sellerName, #nameSellerWA").val("María Guadalupe Padilla Padilla");
                                    $("#cInfoPhone").html('');
                                    $("#cInfoWhatsapp").html('<i class="color-whatsapp zmdi zmdi-whatsapp mr-1"></i><a target = "_blank" href="https://api.whatsapp.com/send?phone=5216621030924&text=Hola,%20me%20gustaria%20recibir%20información" class="text-dark">WhatsApp</a>');
                                    $("#cInfoHQ").css("display", "block");
                                break;
                                case 'Zacatecas':
                                    $("#cInfoSeller").html("<?php echo $contacto["cdmx-2"]["nombre"];?>");
                                    $("#sellerName, #nameSellerWA").val("<?php echo $contacto["cdmx-2"]["nombre"];?>");
                                    $("#cInfoPhone").html('');
                                    $("#cInfoWhatsapp").html('<i class="color-whatsapp zmdi zmdi-whatsapp mr-1"></i><a target = "_blank" href="https://api.whatsapp.com/send?phone=<?php echo $contacto["cdmx-2"]["phone"];?>&text=Hola,%20me%20gustaria%20recibir%20información" class="text-dark">WhatsApp</a>');
                                    $("#cInfoHQ").css("display", "block");
                                break;
                                default:
                                    $("#cInfoSeller").html("Medestore");
                                    $("#sellerName, #nameSellerWA").val("Medestore");
                                    $("#cInfoPhone").html('<a href="tel:+524494782400" class="text-dark"><i class="color-royal-light zmdi zmdi-phone mr-1"></i>(449) 478 2400</a>');
                                    $("#cInfoWhatsapp").html('<i class="color-whatsapp zmdi zmdi-whatsapp mr-1"></i><a target = "_blank" href="https://api.whatsapp.com/send?phone=5216241545589&text=Hola,%20me%20gustaria%20recibir%20información" class="text-dark">WhatsApp</a>');
                                    $("#cInfoHQ").css("display", "none");
                                break;
                            }
                        break;
                    }
                }
            });

            $("#state_selection").change(function(){
                state = $("#state_selection").children("option:selected").val();
                $("#selectedState").val(state);
                if(state != 'Fuera de México'){
                    switch(sales){
                        case 1:
                            $("#eqpmt-container").css("display", "flex");
                            $("#consum-container").css("display", "none");
                            $.fn.changeInfo();
                        break;
                        case 2:
                            $("#eqpmt-container").css("display", "none");
                            $("#consum-container").css("display", "flex");
                            $.fn.changeInfo();
                        break;
                        default:
                            $("#eqpmt-container").css("display", "none");
                            $("#consum-container").css("display", "none");
                            $("#general-form").css("display", "flex");
                        break;
                    }
                }
                else alert("Por el momento, en MedeStore sólo atendemos clientes en México, contacte con un distribuidor en su país para mayor información.");
            });

            $("#device_select").change(function(){
                eqmpt = $(this).children("option:selected").val();
                $("#general-form").css("display", "flex");
                $("#contactSubject").val("Interés en " + eqmpt);

                $.fn.changeInfo();
            });

            $("#consum_select").change(function(){
                consum = $(this).children("option:selected").val();
                $("#general-form").css("display", "flex");
                $("#contactSubject").val("Interés en " + consum);

                $.fn.changeInfo();
            });

            $("#cInfoWhatsapp").click(function(){
                var dept = $("#dpmtSection").val();
                if(dept == "Ventas Equipos" || dept == "Ventas Consumibles") $("#whatsappSend").submit();
            });

        </script>
    </body>
</html>
