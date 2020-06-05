<?php session_start();

    if(!isset($_SESSION['usr']) || ($_SESSION['usr'] > 1002)) {
        header('Location: index.php');
        die();
    }

    include('export.php');
    include('clear.php');
    $hostname = "localhost";
    $username = "intracel_mluser";
    $password = "y3ll0wp4thyellow";
    $databaseName = "intracel_monalisa";

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);

    $usr =  $_SESSION['usr'];
    $queryUser = "Select usuario_nombre from usuarios where usuario_ID = $usr";
    $resultUser = mysqli_query($connect, $queryUser);

    $queryUsers = "Select usuario_mail as 'Correo', usuario_nombre as 'Nombre Completo', usuario_telefono as 'Teléfono', usuario_especialidad as 'Especialidad', usuario_ciudad as 'Ciudad', usuario_estado as 'Estado' from usuarios order by usuario_nombre";
    $resultUsers = mysqli_query($connect, $queryUsers);
    $contUsers = 1;

    $queryCodes = "Select R.registrado_version as 'Versión', S.stock_serie as 'Código', U.usuario_nombre as 'Usuario', U.usuario_mail as 'Correo', registrado_vendedor as 'Vendedor', registrado_fecha as 'Fecha' from codigos_registrados as R inner join usuarios as U on R.registrado_usuario = U.usuario_ID inner join codigos_stock as S on R.registrado_serie = S.stock_ID order by registrado_ID";
    $resultCodes = mysqli_query($connect, $queryCodes);
    $contCodes = 1;

    $queryStock = "Select stock_serie from codigos_stock order by stock_serie";
    $resultStock = mysqli_query($connect, $queryStock);
    $contStock = 1;
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
        <title>Dashboard Yellowpath | MONALISA</title>

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
        <div id="main-wrapper" class="main-wrapper">
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

            <div class="content container-fluid" id = "content">
                <div class="col-lg-12">
                    <div class="content-box big-box">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>Usuarios registrados:</h2>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="datatable display">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Correo</th>
                                        <th>Nombre Completo</th>
                                        <th>Teléfono</th>
                                        <th>Especialidad</th>
                                        <th>Ciudad</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($rowUsers = mysqli_fetch_array($resultUsers)):;?>
                                        <tr>
                                            <td><?php echo $contUsers++;?></td>
                                            <td><?php echo $rowUsers[0];?></td>
                                            <td><?php echo $rowUsers[1];?></td>
                                            <td><?php echo $rowUsers[2];?></td>
                                            <td><?php echo $rowUsers[3];?></td>
                                            <td><?php echo $rowUsers[4];?></td>
                                            <td><?php echo $rowUsers[5];?></td>
                                        </tr>
                                    <?php endwhile;?>
                                </tbody>
                            </table>
                        </div>

                        <form action="export.php" method = "post" class="caption text-center">
                            <button class = "btn btn-primary" type = "submit" name = "export-users">Exportar tabla</button>
                        </form>
                    </div>


                    <div class="content-box big-box">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>Códigos registrados:</h2>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="datatable display">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Versión</th>
                                        <th>Código</th>
                                        <th>Usuario</th>
                                        <th>Correo</th>
                                        <th>Vendedor</th>
                                        <th>Fecha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($rowCodes = mysqli_fetch_array($resultCodes)):;?>
                                        <tr>
                                            <td><?php echo $contCodes++;?></td>
                                            <td><?php echo $rowCodes[0];?></td>
                                            <td><?php echo $rowCodes[1];?></td>
                                            <td><?php echo $rowCodes[2];?></td>
                                            <td><?php echo $rowCodes[3];?></td>
                                            <td><?php echo $rowCodes[4];?></td>
                                            <td><?php echo $rowCodes[5];?></td>
                                        </tr>
                                    <?php endwhile;?>
                                </tbody>
                            </table>
                        </div>

                        <form action="" method = "post" class="col-sm-6 col-md-6 caption text-right">
                            <input type="checkbox" id = "confirmClear" name = "confirmClear" style = "display: none;" required>
                            <button class="btn btn-primary" type = "submit" name = "clear-codes" id="clear-codes" onclick="if(confirm('Este botón eliminará todos los códigos visibles a usuarios. ¿Estás seguro que deseas continuar?')) document.getElementById('confirmClear').checked = true; else document.getElementById('confirmClear').checked = false;">Reiniciar sorteo</button>
                        </form>
                        <form action="export.php" method = "post" class="col-sm-6 col-md-6 caption text-left">
                            <button class = "btn btn-primary" type = "submit" name = "export-codes">Exportar tabla</button>
                        </form>
                        
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 notifClear">
                            <?php 
                                if(isset($_POST["clear-codes"])) {
                                    clearCodes();
                                    echo $notifClear; 
                                }
                            ?>
                        </div>
                    </div>

                    <div class="content-box big-box">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>Códigos en Stock:</h2>
                            </div>
                        </div>

                        <div class="col-lg-1"></div>

                        <div class="col-lg-10">
                            <div class="table-responsive">
                                <table class="datatable display">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Código</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($rowStock = mysqli_fetch_array($resultStock)):;?>
                                            <tr>
                                                <td><?php echo $contStock++;?></td>
                                                <td><?php echo $rowStock[0];?></td>
                                            </tr>
                                        <?php endwhile;?>
                                    </tbody>
                                </table>
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
            function Confirm() {
                var $content =  "<div class='dialog-ovelay'>" +
                "<div class='dialog'><header>" +
                " <h3>Confirmar reinicio</h3> " +
                "<i class='fa fa-close closeClear'></i>" +
                "</header>" +
                "<div class='dialog-msg'>" +
                " <p>Este botón eliminará los registros visibles a todos los usuarios. ¿Estás seguro que deseas continuar?</p> " +
                "</div>" +
                "<footer>" +
                "<div class='controls'>" +
                " <button class='btn btn-primary doAction'>Confirmar</button> " +
                " <button class='btn btn-light cancelAction'>Cancelar</button> " +
                "</div>" +
                "</footer>" +
                "</div>" +
                "</div>";
                $('body').prepend($content);

                $('.doAction').click(function () {
                    $('#confirmClear').prop('checked', true);
                    $(this).parents('.dialog-ovelay').fadeOut(500, function () {
                        $(this).remove();
                    });
                });

                $('.cancelAction, .closeClear').click(function () {
                    $(this).parents('.dialog-ovelay').fadeOut(500, function () {
                        $(this).remove();
                    });
                });
            }

            $('#clear-codes').click(function () {
                Confirm();
            });

            $(function () {
                $('.datatable').DataTable({
                    "language": {
                        "lengthMenu": 'Mostrar <select>'+
                        '<option value="10">10</option>'+
                        '<option value="25">25</option>'+
                        '<option value="50">50</option>'+
                        '<option value="100">100</option>'+
                        '<option value="250">250</option>'+
                        '<option value="500">500</option>'+
                        '</select> entradas'
                    },
                    displayLength: 10,
                    dom: 'T<"clear">lfrtip',
                    tableTools: {
                        "sSwfPath": "js/datatables/copy_csv_xls_pdf.swf"
                    },
                    responsive: true
                });
            });
        </script>
    </body>
</html>