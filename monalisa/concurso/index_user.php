<?php session_start();

    if(!isset($_SESSION['usr']) || ($_SESSION['usr'] > 1000 && $_SESSION['usr'] < 1004)) {
        header('Location: index.php');
        die();
    }
    
    include('insert.php');
    $hostname = "localhost";
    $username = "yellowus_mluser";
    $password = "y3ll0wp4thyellow";
    $databaseName = "yellowus_monalisa";

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
 
    $usr = $_SESSION['usr'];
    $queryUser = "Select usuario_nombre from usuarios where usuario_ID = $usr";
    $resultUser = mysqli_query($connect, $queryUser);
    $usuario = $usr;
    update();
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta name="theme-color" content="#fff" />
        <meta name="author" content="André Vital">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no" />
        <title>Dashboard Usuario | MONALISA</title>

        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="bower_components/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="bower_components/metisMenu/dist/metisMenu.min.css">
        <link rel="stylesheet" href="bower_components/Waves/dist/waves.min.css">
        <link rel="stylesheet" href="bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

        <link rel="stylesheet" href="js/selects/cs-select.css">
        <link rel="stylesheet" href="js/selects/cs-skin-elastic.css">

        <link rel="stylesheet" href="bower_components/DataTables/media/css/jquery.dataTables.css">
        <link rel="stylesheet" href="bower_components/datatables-tabletools/css/dataTables.tableTools.css">
        <script src="js/menu/modernizr.custom.js"></script>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/custom.css">

        <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <!--[if lt IE 9]>
        <script src="bower_components/html5shiv/dist/html5shiv.min.js"></script>
        <script src="bower_components/respondJs/dest/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!--Preloader-->
        <div id="preloader" class="preloader table-wrapper">
            <div class="table-row">
                <div class="table-cell">
                    <div class="la-ball-scale-multiple la-3x">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="main-wrapper" class="main-wrapper">
            <div class="nav-cont">
                <div id = "go_back">
                    <a href = "cerrar.php">
                        <i class="mdi mdi-arrow-left"></i>   Regresar
                    </a>
                </div>
                <ul id="gn-menu" class="navbar gn-menu-main">
                    <li>
                        <a href="index.php" class="logo">
                            <img src="img/logo.png" alt="Medestore">
                            <img src="img/icono.png" alt="Medestore">
                        </a>
                    </li>
                    <li class="container-fluid pull-right">
                        <ul class="nav navbar-right right-menu">
                            <li class="user_info">
                                <p id = "user_name">
                                    <strong><?php while($rowUser = mysqli_fetch_array($resultUser)):;?><?php echo $rowUser[0];?><?php endwhile;?></strong>
                                </p>
                                <div id = "spacer-header"></div>
                                <a href = "cerrar.php" id = "log_out" style = "padding: 0;">Cerrar Sesión</a>
                            </li>
                            <li class="user_icon">
                                <a href="#"><i class="mdi mdi-account"></i></a>
                            </li>
                        </ul>
                    </li>
                    <li class="gn-trigger">
                        <a id="menu-toggle" class="menu-toggle gn-icon gn-icon-menu"></a>
                        <nav class="gn-menu-wrapper"></nav>
                    </li>
                </ul>
            </div>

            <!-- New Code -->
            <form id="content" class="content container-fluid" action = "" method = "post">
                <div class="col-lg-12">
                    <div class="content-box box-shadow big-box">
                        <div class="row">
                            <div class="col-lg-12 sect_title">
                                <h2>Ingresar código nuevo:</h2>
                                <h3 class = "steps"><strong>Paso 1.</strong> Selecciona la versión de tu MONALISA:</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-lg-3 version_cont">
                                <a href="#" onclick = "vers_soft()">
                                    <label for="ver_soft">
                                        <div class="version_border" id = "version_soft">
                                            <div class="version_incont text-center">
                                                <p class = "ver_title">SOFT</p>
                                            </div>
                                        </div>
                                    </label>
                                </a>
                            </div>
                            <div class="col-xs-6 col-lg-3 version_cont">
                                <a href="#" onclick = "vers_mild()">
                                    <label for="ver_mild">
                                        <div class="version_border" id = "version_mild">
                                            <div class="version_incont text-center">
                                                <p class = "ver_title">MILD</p>
                                            </div>
                                        </div>
                                    </label>
                                </a>
                            </div>
                            <div class="col-xs-6 col-lg-3 version_cont">
                                <a href="#" onclick = "vers_hard()">
                                    <label for="ver_hard">
                                        <div class="version_border" id = "version_hard">
                                            <div class="version_incont text-center">
                                                <p class = "ver_title">HARD</p>
                                            </div>
                                        </div>
                                    </label>
                                </a>
                            </div>
                            <div class="col-xs-6 col-lg-3 version_cont">
                                <a href="#" onclick = "vers_ultra()">
                                    <label for="ver_ultra">
                                        <div class="version_border" id = "version_ultra">
                                            <div class="version_incont text-center">
                                                <p class = "ver_title">ULTRA</p>
                                            </div>
                                        </div>
                                    </label>
                                </a>
                            </div>
                        </div>

                        <div class="radios_vers">
                            <input type="radio" name = "version" id = "ver_soft" value = "1" required>
                            <input type="radio" name = "version" id = "ver_mild" value = "2">
                            <input type="radio" name = "version" id = "ver_hard" value = "3">
                            <input type="radio" name = "version" id = "ver_ultra" value = "4">
                        </div>

                        <div class="row form-data-holder">
                            <div class = "col-lg-11"><h3 class = "steps"><strong>Paso 2.</strong> Ingresa el código completo que aparece en el paquete y el nombre de tu vendedor:</h3></div>
                            <div class="content-form form-horizontal">
                                <div class=" col-lg-6 form-group">
                                    <label for="codigo" class="col-sm-3 control-label">Código<span id="tooltip_codigo"class = "tool_lg" data-toggle="tooltip" data-placement="right" title="<img src='img/ejemplo_codigo.png' alt='Ejemplo de código' style = 'width: 300px'>">?</span><span id="tooltip_codigo"class = "tool_sm" data-toggle="tooltip" data-placement="bottom" title="<img src='img/ejemplo_codigo.png' alt='Ejemplo de código' style = 'width: 200px'>">?</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name = "codigo" class="form-control material" id="codigo" placeholder="Código" required>
                                    </div>
                                </div>
                                <div class=" col-lg-6 form-group">
                                    <label for="seller" class="col-sm-3 control-label">Vendedor</label>
                                    <div class="col-sm-9">
                                        <input type="text" name = "seller" class="form-control material" id="seller" placeholder="Vendedor" required>
                                    </div>
                                    <input type="checkbox" name = "validateCheck" class="form-control material" id="validateCheck" placeholder="Vendedor" required>
                                </div>
                                <div class="col-lg-12">
                                    <button type = "submit" onclick = "validate()" class = "btn btn-primary">Agregar</button>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div id="notifs">
                                    <?php
                                        if(isset($_POST['validateCheck'])){
                                            add();
                                            $notif = inex();
                                            if($notif != 1){
                                                $notif = own();
                                                if($notif != 1){
                                                    $notif = other();
                                                    if($notif != 1){
                                                        $notif = correct();
                                                        if($notif != 1) $notif = incorrect();
                                                        else update();
                                                    }
                                                }
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="content container-fluid" id = "existing_table">
                <div class="col-lg-12">
                    <div class="content-box big-box">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Tus códigos:</h2>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table id="datatable" class="display">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Código</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($rowCodes = mysqli_fetch_array($resultCodes)):;?>
                                            <tr>
                                                <td><?php echo $contCodes++;?></td>
                                                <td><?php echo $rowCodes[0];?></td>
                                            </tr>
                                        <?php endwhile;?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="caption">
                                <p>* Si tienes dudas, contáctanos al +52 (449) 478 2400.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class = "footer">
                <p>
                    &copy; 2019 <b id="normal">MONALISA</b>. Todos los derechos reservados. <b><a target="_blank" href="aviso_de_privacidad.pdf" id="aviso"> Aviso de Privacidad</a></b>.<br>
                    Sitio desarrollado por <a target="_blank" href="http://yellowpath.mx/" id="yellow">Yellowpath Digital Branding</a>
                </p>
            </div>
        </div>

        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
        <script src="bower_components/Waves/dist/waves.min.js"></script>
        <script src="bower_components/moment/min/moment.min.js"></script>
        <script src="bower_components/jquery.nicescroll/jquery.nicescroll.min.js"></script>
        <script src="bower_components/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.js"></script>
        <script src="bower_components/cta/dist/cta.min.js"></script>
        <script src="js/menu/classie.js"></script>
        <script src="js/menu/gnmenu.js"></script>
        <script src="js/selects/selectFx.js"></script>
        <script src="bower_components/DataTables/media/js/jquery.dataTables.js"></script>
        <script src="bower_components/datatables.net-responsive/js/dataTables.responsive.js"></script>
        <script src="bower_components/datatables-tabletools/js/dataTables.tableTools.js"></script>
        <script src="js/common.js"></script>
        <script src="js/custom.js"></script>
        <script>
            $(function () {
                $('#datatable').DataTable({
                    displayLength: 25,
                    dom: 'T<"clear">lfrtip',
                    tableTools: {
                        "sSwfPath": "js/datatables/copy_csv_xls_pdf.swf"
                    },
                    responsive: true,
                    columnDefs: [
                        { width: '10%', targets: 0 },
                        { width: '80%', targets: 1 }
                    ]
                });

                $('[data-toggle="tooltip"]').tooltip({html: true});
            });
        </script>
    </body>
</html>