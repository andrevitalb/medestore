<?php
  include('register.php');
  include('connections.php');

  $currDate = new DateTime(date("d-m-Y H:i", time()));
  $sDate = new DateTime($startDate[0]);
  $eDate = new DateTime($endDate[0]);

  $custom = "Select congresos_background, congresos_textColor, congresos_logo, congresos_nombre, congresos_titulo, congresos_subtitulo from congresos where congresos_ID = $eventId";
  $cust = mysqli_query($connect, $custom);
  $props = mysqli_fetch_array($cust);

  if(strlen($props[0]) > 7) $bg = ".back-event { background-image: url($props[0]) !important; }";
  else $bg = ".back-event { background-color: $props[0] !important; background-image: none !important; }";

  if($props[2] == NULL) $logo = 0;
  else $logo = 1;
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>MedeStore | Registro</title>

    <!-- Medestore Assets -->
    <link rel="shortcut icon" href="../../assets/img/favicon.png?v=3">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../../assets/css/preload.css">
    <link rel="stylesheet" href="../../assets/css/plugins.css">
    <link rel="stylesheet" href="../../assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../assets/css/fullpage.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/media.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Custom Assets -->
    <link rel="stylesheet" href="bower_components/sweetalert/dist/sweetalert.css">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <style>
      <?php echo $bg.'.main_ttl { color:'.$props[1].' !important;}'?>
    </style>
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
            <figure class="">
              <img src="../../assets/img/Logo-MedeStore-line.png" alt="" class="img-fluid" style = "margin-top: 3px">
            </figure>
          </div>

        </div>
        <!-- container -->
      </nav>

      <div id="wrapper" class="back-event">


      <div class="container-name-event" >
        <div class="container">
          <div class="text-center">
            <h2 class="no-m ms-site-title color-white center-block ms-site-title-lg-soporte animated zoomInDown animation-delay-5 main_ttl"><?php echo $props[4];?></h2>
            <h6 class="no-m ms-site-title color-white center-block ms-site-title-lg-soporte animated zoomInDown animation-delay-5 main_ttl" style="font-size: 30px;"><?php echo $props[5];?></h6>

          </div>
        </div>
      </div>

      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-lg-10">
            <div class="card card-hero card-soporte animated fadeInUp animation-delay-7">
              <div class="card-body">
                <figure style="width: 300px; margin: 0px auto;">
                  <?php
                    if($logo == 1) echo '<img src="'.$props[2].'" alt="" class="img-fluid">';
                    else echo '<h6 class="animated zoomInDown animation-delay-5" style="font-size: 30px;font-weight: 400;">'.$props[3].'</h6>'
                  ?>
                </figure>
                <h1 class="color-primary text-center"></h1>
                <form class="form-horizontal custom-form" method = "post">
                  <fieldset>
                    <div class="form-group row">
                      <label for="register_fname" class="col-md-3 control-label">Nombre</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="register_fname" placeholder="Nombre" name = "register_fname" required tabindex="1"> </div>
                    </div>
                    <div class="form-group row">
                      <label for="register_lname" class="col-md-3 control-label">Apellido</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="register_lname" name = "register_lname" placeholder="Apellido" required tabindex="2"></div>
                    </div>
                    <div class="form-group row">
                      <label for="register_mail" class="col-md-3 control-label">Email</label>
                      <div class="col-md-9">
                        <input type="email" class="form-control" id="register_mail" name = "register_mail" placeholder="Email" required tabindex="3"> </div>
                    </div>
                    <div class="form-group row">
                      <label for="register_phone" class="col-md-3 control-label">Teléfono</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="register_phone" name = "register_phone" placeholder="Teléfono" tabindex="4"> </div>
                    </div>
                    <div class="form-group row">
                      <label for="register_specialty" class="col-md-3 control-label">Especialidad</label>
                      <div class="col-md-9">
                        <select id="inputEsp" class="form-control selectpicker" data-live-search="true" data-dropup-auto="false" name = "register_specialty" required tabindex="5">
                          <option  value="" disabled selected>Selecciona una</option>
                          <option  value="Dermatología">Dermatología</option>
                          <option  value="Cirugía Plástica">Cirugía Plástica</option>
                          <option  value="Medicina Estética">Medicina Estética</option>
                          <option  value="Cosmetología">Cosmetología</option>
                          <option  value="Ginecología">Ginecología</option>
                          <option  value="Otros">Otros</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="register_state" class="col-md-3 control-label">Provincia</label>
                      <div class="col-md-9">
                        <select id="inputState" class="form-control selectpicker" data-live-search="true" data-dropup-auto="false" name = "register_state" required tabindex="6">
                          <!-- <option  value="Buenos Aires">Buenos Aires</option>
                          <option  value="Catamarca">Catamarca</option>
                          <option  value="Chaco">Chaco</option>
                          <option  value="Chabut">Chabut</option>
                          <option  value="Córdoba">Córdoba</option>
                          <option  value="Corrientes">Corrientes</option>
                          <option  value="Entre Ríos">Entre Ríos</option>
                          <option  value="Formosa">Formosa</option>
                          <option  value="Jujuy">Jujuy</option>
                          <option  value="La Pampa">La Pampa</option>
                          <option  value="La Rioja">La Rioja</option>
                          <option  value="Mendoza">Mendoza</option>
                          <option  value="Misiones">Misiones</option>
                          <option  value="Neuquén">Neuquén</option>
                          <option  value="Río Negro">Río Negro</option>
                          <option  value="Salta">Salta</option>
                          <option  value="San Juan">San Juan</option>
                          <option  value="San Luis">San Luis</option>
                          <option  value="Santa Cruz">Santa Cruz</option>
                          <option  value="Santa Fe">Santa Fe</option>
                          <option  value="Santiago del Estero">Santiago del Estero</option>
                          <option  value="Tierra de Fuego">Tierra de Fuego, Antártida e Islas del Atlántico Sur</option>
                          <option  value="Tucumán">Tucumán</option>  -->
                          <option  value="Fuera de México">Fuera de México</option>
                          <option  value="Aguascalientes">Aguascalientes</option>
                          <option  value="Baja California">Baja California</option>
                          <option  value="Baja California Sur">Baja California Sur</option>
                          <option  value="Campeche">Campeche</option>
                          <option  value="Chiapas">Chiapas</option>
                          <option  value="Chihuahua">Chihuahua</option>
                          <option  value="CDMX">CDMX</option>
                          <option  value="Coahuila">Coahuila</option>
                          <option  value="Colima">Colima</option>
                          <option  value="Durango">Durango</option>
                          <option  value="Estado de México">Estado de México</option>
                          <option  value="Guanajuato">Guanajuato</option>
                          <option  value="Guerrero">Guerrero</option>
                          <option  value="Hidalgo">Hidalgo</option>
                          <option  value="Jalisco">Jalisco</option>
                          <option  value="Michoacán">Michoacán</option>
                          <option  value="Morelos">Morelos</option>
                          <option  value="Nayarit">Nayarit</option>
                          <option  value="Nuevo León">Nuevo León</option>
                          <option  value="Oaxaca">Oaxaca</option>
                          <option  value="Puebla">Puebla</option>
                          <option  value="Querétaro">Quer&étaro</option>
                          <option  value="Quintana Roo">Quintana Roo</option>
                          <option  value="San Luis Potosí">San Luis Potosí</option>
                          <option  value="Sinaloa">Sinaloa</option>
                          <option  value="Sonora">Sonora</option>
                          <option  value="Tabasco">Tabasco</option>
                          <option  value="Tamaulipas">Tamaulipas</option>
                          <option  value="Tlaxcala">Tlaxcala</option>
                          <option  value="Veracruz">Veracruz</option>
                          <option  value="Yucatán">Yucatán</option>
                          <option  value="Zacatecas">Zacatecas</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="register_seller" class="col-md-3 control-label">Asesor de ventas</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="register_seller" name = "register_seller" placeholder="Asesor de ventas" tabindex="7"></div>
                    </div>
                    <div class="form-group row">
                      <label for="register_product" class="col-md-3 control-label">Producto de interés</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="register_product" name = "register_product" placeholder="Producto de interés" tabindex="8"></div>
                    </div>
                    <div class="form-group row">
                      <label for="register_comments" class="col-md-3 control-label">Notas</label>
                      <div class="col-md-9">
                        <textarea name="register_comments" id="register_comments" class="form-control" placeholder="Ingresa notas" tabindex="9"></textarea>
                    </div>
                  </fieldset>
                  <p style="color:#000; font-size: 18px; text-align: center;"><!-- <strong>Nota:</strong>  El ganador se dará a conocer el 30 de enero en una transmisión en vivo en las redes oficiales de MedeStore, Biodiet y Kliniken. Se contactará al ganador por WhatsApp y este deberá enviar una fotografía del gafete con su nombre, para comprobar su asistencia al evento.--></p>
                  <button class="btn btn-raised btn-primary btn-block" type = "submit" name = "reg_user" tabindex="10">REGISTRARME AHORA
                    <i class="zmdi zmdi-long-arrow-right no-mr ml-1"></i>
                  </button>
                </form>
                <div class="text-center mt-4">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- container -->




        <aside class="ms-footbar section fp-auto-height">
        <div class="container">




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
          <p>MedeStore&reg; <?php echo date('Y'); ?>. Todos los derechos reservados</p>
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
            <a class="link" href="../../monalisa/index.html">
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
    <script src="bower_components/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../../assets/js/plugins.min.js"></script>
    <script src="../../assets/js/app.min.js"></script>
    <script src="../../assets/js/app.js"></script>
    <!-- <script src="assets/js/index.js"></script> -->
    <script src="../../assets/js/portfolio.js"></script>
    <!-- <script>
        $(document).ready(function(){
        $('#wrapper').fullpage();
        });
    </script> -->
    <?php
      if(($currDate < $sDate) || ($currDate > $eDate)) echo '<script>swal("¡Error!", "Este evento ya no está disponible para registro.", "error");</script>';

      if(isset($_POST["reg_user"])) userReg();
    ?>
    <script type="text/javascript">
        function mySubscribeSuccess( form )
        {
            document.forms['5253405f'].action='send-form-product.php';
            document.forms['5253405f'].submit();
        }
    </script>

  </body>
</html>