<?php session_start();
    if(!isset($_SESSION['usr']) || ($_SESSION['usr'] != 1001 && $_SESSION['usr'] != 1002 && $_SESSION['usr'] != 1003)) {
        header('Location: registro-login.php');
        die();
    }

    include('export.php');
    include('new_congress.php');
    require 'connections.php';

    $usr =  $_SESSION['usr'];
    $queryUser = "Select usuario_nombre from usuarios where usuario_ID = $usr";
    $resultUser = mysqli_query($connect, $queryUser);

    $queryUsers = "Select registros_correo as 'Correo', registros_nombre as 'Nombre', registros_apellido as 'Apellido', registros_telefono as 'Teléfono', registros_especialidad as 'Especialidad', registros_estado as 'Estado' from registros order by registros_ID desc";
    $resultUsers = mysqli_query($connect, $queryUsers);
    $contUsers = 1;

    $queryCurrent = "Select C.congresos_nombre as 'Nombre Congreso', R.registros_nombre as 'Nombre', R.registros_apellido as 'Apellido', R.registros_correo as 'Correo', R.registros_telefono as 'Telefono' from asistentes as A inner join registros as R on A.asistentes_usuario = R.registros_ID inner join congresos as C on A.asistentes_congreso = C.congresos_ID where congresos_ID = (Select MAX(congresos_ID) from congresos where congresos_deshabilitado = 0) order by A.asistentes_ID desc";
    $resultCurrent = mysqli_query($connect, $queryCurrent);
    $contCurrent = 1;

    $queryCongress = "Select C.congresos_ID as ID, C.congresos_nombre as 'Nombre Congreso' from congresos as C inner join asistentes as A on A.asistentes_congreso = C.congresos_ID where C.congresos_deshabilitado = 0 group by C.congresos_nombre having COUNT(A.asistentes_congreso) > 0 order by congresos_ID desc";
    $resultCongress = mysqli_query($connect, $queryCongress);

    $queryAssist = "Select C.congresos_nombre as 'Nombre Congreso', R.registros_nombre as 'Nombre', R.registros_apellido as 'Apellido', R.registros_correo as 'Correo', R.registros_telefono as 'Teléfono', R.registros_estado as 'Estado', A.asistentes_asesor as 'Asesor de ventas', A.asistentes_producto as 'Producto de interés', A.asistentes_comentarios as 'Notas', A.asistentes_fecha_registro as 'Fecha registro' from asistentes as A inner join registros as R on A.asistentes_usuario = R.registros_ID inner join congresos as C on A.asistentes_congreso = C.congresos_ID order by C.congresos_ID desc, A.asistentes_ID desc";
    $resultAssist = mysqli_query($connect, $queryAssist);
    $contAssist = 1;

    $queryUpdCongress = "Select congresos_nombre as 'Nombre Congreso', congresos_ID as ID from congresos where congresos_deshabilitado = 0 order by congresos_ID desc";
    $resultUpdCongress = mysqli_query($connect, $queryUpdCongress);

    $queryUpdate = "Select congresos_nombre as 'Nombre Congreso', LEFT(congresos_fechaInicio, 10) as 'Fecha Inicio', LEFT(congresos_fechaFinal, 10) as 'Fecha Final', congresos_titulo as 'Título Evento', congresos_subtitulo as 'Subtítulo Evento', TRIM('#' from congresos_textColor) as 'Color título' from congresos where congresos_deshabilitado = 0 order by congresos_ID desc";
    $resultUpdate = mysqli_query($connect, $queryUpdate);

    $queryStats = "Select C.congresos_ID as ID, C.congresos_nombre as 'Nombre Congreso', LEFT(C.congresos_fechaInicio, 10) as 'Fecha Inicio', LEFT(C.congresos_fechaFinal, 10) as 'Fecha Final', COUNT(A.asistentes_ID) as 'Número de Asistentes' from asistentes as A inner join congresos as C on A.asistentes_congreso = C.congresos_ID group by C.congresos_nombre order by C.congresos_ID desc";
    $resultStats = mysqli_query($connect, $queryStats);
    $contStats = 1;

    $queryContacts = "Select contactos_nombre as Nombre, contactos_apellido as Apellido, contactos_correo as Correo, contactos_telefono as Teléfono, contactos_estado as Estado, contactos_especialidad as Especialidad, contactos_suscrito as Suscrito from contactos order by contactos_ID desc";
    $resultContacts = mysqli_query($connect2, $queryContacts);
    $contContacts = 1;

    $queryCorea = "Select contactos_nombre as Nombre, contactos_apellido as Apellido, contactos_correo as Correo, contactos_telefono as Teléfono, contactos_estado as Estado, contactos_especialidad as Especialidad, contactos_suscrito as Suscrito from contactocorea order by contactos_ID desc";
    $resultCorea = mysqli_query($connect2, $queryCorea);
    $contCorea = 1;
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
        <title>Dashboard Admin | Eventos Medestore</title>

        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="bower_components/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="bower_components/metisMenu/dist/metisMenu.min.css">
        <link rel="stylesheet" href="bower_components/Waves/dist/waves.min.css">
        <link rel="stylesheet" href="bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

        <link rel="stylesheet" href="js/selects/cs-select.css">
        <link rel="stylesheet" href="js/selects/cs-skin-elastic.css">

        <link rel="stylesheet" href="bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css">
        <link rel="stylesheet" href="bower_components/DataTables/media/css/jquery.dataTables.css">
        <link rel="stylesheet" href="bower_components/datatables-tabletools/css/dataTables.tableTools.css">
        <link rel="stylesheet" href="bower_components/sweetalert/dist/sweetalert.css">
        <link rel="stylesheet" href="bower_components/smoke/dist/css/smoke.min.css">
        <link rel="stylesheet" href="js/notifications/ns-style-growl.css">
        <link rel="stylesheet" href="js/notifications/ns-style-other.css">

        <script src="js/menu/modernizr.custom.js"></script>
        <script src="js/notifications/snap.svg-min.js"></script>

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
                        <a href="index_admin.php" class="logo">
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
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Teléfono</th>
                                        <th>Especialidad</th>
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
                      <form action="export.php" method = "post">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>Registros sorteo:</h2>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="datatable display">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre Evento</th>
                                        <th>Nombre Asistente</th>
                                        <th>Apellido Asistente</th>
                                        <th>Correo</th>
                                        <th>Teléfono</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($resultCurrent) while($rowCurrent = mysqli_fetch_array($resultCurrent)):;?>
                                        <tr>
                                            <td><?php echo $contCurrent++;?></td>
                                            <td><?php echo $rowCurrent[0];?></td>
                                            <td><?php echo $rowCurrent[1];?></td>
                                            <td><?php echo $rowCurrent[2];?></td>
                                            <td><?php echo $rowCurrent[3];?></td>
                                            <td><?php echo $rowCurrent[4];?></td>
                                        </tr>
                                    <?php endwhile;?>
                                </tbody>
                            </table>
                        </div>

                        <div id="randomGenerator" class = "row">
                            <div id="randNumbCont" class = "col-sm-12 col-md-5">
                                <div id="randCircle"><p id="randNumber"></p></div>
                            </div>
                            <div id = "randCantCont" class="col-md-7 col-md-offset-0 col-sm-10 col-sm-offset-1 caption">
                                <div>
                                    <label for="randCant" class = "col-sm-12 col-md-4">Cantidad de números a generar:</label>
                                    <div class="col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-4">
                                        <input type="number" name="randCant" id="randCant" class="form-control material">
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <button type="button" class = "btn btn-primary" id = "genRand">Generar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12" id = "randsList"><ul></ul></div>
                        </div>

                        <div class="caption text-center col-md-12">
                            <button class = "btn btn-primary" type = "submit" name = "export-current">Exportar tabla</button>
                        </div>
                      </form>
                    </div>

                    <div class="content-box big-box">
                      <form action="export.php" method = "post">
                        <div class="row">
                          <div class="col-lg-12">
                            <h2>Asistencia por evento:</h2>
                          </div>
                          <div class="col-lg-12" style = "margin-top: 15px;">
                            <select name="select_congreso" id="select_congreso" class="form-control" onchange="showAssists()">
                              <option disabled selected> - Selecciona un evento</option>
                              <?php
                                  while($rowCongress = mysqli_fetch_array($resultCongress)){
                                      echo "<option value = '$rowCongress[0]//$rowCongress[1]'>" . $rowCongress[1] . "</option>";
                                  }
                              ?>
                            </select>
                          </div>
                        </div>

                        <input type="hidden" name="eventAssistantsCongressId" id="eventAssistantsCongressId">

                        <div class="table-responsive" id = "table_assists">
                          <table class="datatable display">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Nombre Evento</th>
                                <th>Nombre Asistente</th>
                                <th>Apellido Asistente</th>
                                <th>Correo</th>
                                <th>Teléfono</th>
                                <th>Estado</th>
                                <th>Asesor de ventas</th>
                                <th>Producto de interés</th>
                                <th>Nota</th>
                                <th>Fecha registro</th>
                                <th>Hora registro</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php if($resultAssist) while($rowAssist = mysqli_fetch_array($resultAssist)):;?>
																<tr>
																	<td><?php echo $contAssist++;?></td>
																	<td><?php echo $rowAssist[0];?></td>
																	<td><?php echo $rowAssist[1];?></td>
																	<td><?php echo $rowAssist[2];?></td>
																	<td><?php echo $rowAssist[3];?></td>
																	<td><?php echo $rowAssist[4];?></td>
																	<td><?php echo $rowAssist[5];?></td>
																	<td><?php echo $rowAssist[6];?></td>
																	<td><?php echo $rowAssist[7];?></td>
																	<td><?php echo $rowAssist[8];?></td>
																	<td><?php echo date('d-m-Y', strtotime($rowAssist[9]));?></td> 
																	<td><?php echo date('H:i', strtotime($rowAssist[9]));?></td>
																</tr>
                              <?php endwhile;?>
                            </tbody>
                          </table>

                          <div class="caption text-center" style = "margin-top: 1.5rem;">
                            <button class = "btn btn-primary" type = "submit" name = "export-assist">Exportar tabla</button>
                          </div>
                        </div>
                      </form>
                    </div>

                    <div class="content-box big-box" id = "new_congress">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>Crear nuevo evento:</h2>
                            </div>
                        </div>

                        <form action = "" method = "post" enctype = "multipart/form-data">
                            <div class="row form-data-holder">
                                <div class="content-form form-horizontal">
                                    <div class="col-12 col-sm-6 col-md-4 form-group">
                                        <label for="nombre_congreso" class="col-sm-3 control-label">Nombre Evento</label>
                                        <div class="col-sm-9">
                                            <input type="text" name = "nombre_congreso" class="form-control material" id="nombre_congreso" placeholder="Nombre Evento" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 form-group">
                                        <label for="startDate" class="col-sm-3 control-label">Fecha de inicio</label>
                                        <div class="col-sm-9">
                                            <input type="date" name = "startDate" class="form-control material" id="startDate" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 form-group">
                                        <label for="endDate" class="col-sm-3 control-label">Fecha de final</label>
                                        <div class="col-sm-9">
                                            <input type="date" name = "endDate" class="form-control material" id="endDate" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 form-group">
                                        <label for="evnt_ttl" class="col-sm-3 control-label">Título Evento</label>
                                        <div class="col-sm-9">
                                            <input type="text" name = "evnt_ttl" class="form-control material" id="evnt_ttl" placeholder="Título Evento" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 form-group">
                                        <label for="evnt_subt" class="col-sm-3 control-label">Subtítulo Evento</label>
                                        <div class="col-sm-9">
                                            <input type="text" name = "evnt_subt" class="form-control material" id="evnt_subt" placeholder="Subtítulo Evento" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 form-group">
                                        <label for="ttl_color" class="col-sm-3 control-label">Color de título</label>
                                        <div class="col-xs-9 col-sm-7">
                                            <input name = "ttl_color" class="jscolor {styleElement: 'ttlColorSquare'} form-control material" id="ttl_color">
                                        </div>
                                        <div class="col-xs-3 col-sm-2 colorPicker">
                                            <div class="colorContainer"><div class = "colorSquare" id = "ttlColorSquare"></div></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 form-group">
                                        <label for="logo_congreso" class="col-sm-3 control-label">Logotipo</label>
                                        <div class="col-sm-9" style = "padding-top: 10px;">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <span class="input-group-addon btn btn-default btn-file">
                                                    <span class="fileinput-new">
                                                        <i class="fa fa-file"></i> Seleccionar archivo</span>
                                                        <span class="fileinput-exists">Cambiar</span>
                                                    <input type="file" name="logo_congreso" id="logo_congreso">
                                                </span>

                                                <div class="form-control" data-trigger="fileinput">
                                                    <span class="fileinput-filename"></span>
                                                </div>
                                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Eliminar</a>
                                            </div>
                                        </div>
                                    </div><div class="col-12 col-sm-6 col-md-4 form-group">
                                        <label for="bg_image" class="col-sm-3 control-label">Imagen de fondo</label>
                                        <div class="col-sm-9" style = "padding-top: 10px;">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <span class="input-group-addon btn btn-default btn-file">
                                                    <span class="fileinput-new">
                                                        <i class="fa fa-file"></i> Seleccionar archivo</span>
                                                        <span class="fileinput-exists">Cambiar</span>
                                                    <input type="file" name="bg_image" id="bg_image">
                                                </span>

                                                <div class="form-control" data-trigger="fileinput">
                                                    <span class="fileinput-filename"></span>
                                                </div>
                                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Eliminar</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 form-group">
                                        <label for="bg_color" class="col-sm-3 control-label">Color de fondo</label>
                                        <div class="col-xs-9 col-sm-7">
                                            <input name = "bg_color" class="jscolor {styleElement: 'bgColorSquare'} form-control material" id="bg_color">
                                        </div>
                                        <div class="col-xs-3 col-sm-2 colorPicker">
                                            <div class="colorContainer"><div class = "colorSquare" id = "bgColorSquare"></div></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-right">
                                        <button type = "submit" class = "btn btn-primary" name = "crear_congreso">Crear</button>
                                    </div>
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-6 notifClear">
                                        <?php if(isset($_POST['crear_congreso'])) addCongress(); ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="content-box big-box" id = "update_congress">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>Editar eventos:</h2>
                            </div>
                            <div class="col-lg-12" style = "margin-top: 15px;">
                                <form action = "" method = "post" enctype = "multipart/form-data">
                                    <select name="select_update" id="select_update" class="form-control" onchange="showUpdate()">
                                        <option disabled selected> - Selecciona un evento</option>
                                        <?php
                                            while($rowUpdate = mysqli_fetch_array($resultUpdCongress)){
                                                echo "<option value = '" . $rowUpdate[1] . "'>" . $rowUpdate[0] . "</option>";
                                            }
                                        ?>
                                    </select>

                                    <div class="row form-data-holder" id = "evnt_update" style = "display:none;">
                                        <div class="content-form form-horizontal">
                                            <div class="col-12 col-sm-6 col-md-4 form-group">
                                                <label for="upd_nombre" class="col-sm-3 control-label">Nombre Evento</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name = "upd_nombre" class="form-control material" id="upd_nombre" placeholder="Nombre Evento" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 form-group">
                                                <label for="upd_startDate" class="col-sm-3 control-label">Fecha de inicio</label>
                                                <div class="col-sm-9">
                                                    <input type="date" name = "upd_startDate" class="form-control material" id="upd_startDate" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 form-group">
                                                <label for="upd_endDate" class="col-sm-3 control-label">Fecha de final</label>
                                                <div class="col-sm-9">
                                                    <input type="date" name = "upd_endDate" class="form-control material" id="upd_endDate" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 form-group">
                                                <label for="upd_evnt_ttl" class="col-sm-3 control-label">Título Evento</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name = "upd_evnt_ttl" class="form-control material" id="upd_evnt_ttl" placeholder="Título Evento" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 form-group">
                                                <label for="upd_evnt_subt" class="col-sm-3 control-label">Subtítulo Evento</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name = "upd_evnt_subt" class="form-control material" id="upd_evnt_subt" placeholder="Subtítulo Evento" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 form-group">
                                                <label for="upd_ttl_color" class="col-sm-3 control-label">Color de título</label>
                                                <div class="col-xs-9 col-sm-7">
                                                    <input name = "upd_ttl_color" class="jscolor {styleElement: 'upd_ttlColorSquare'} form-control material" id="upd_ttl_color">
                                                </div>
                                                <div class="col-xs-3 col-sm-2 colorPicker">
                                                    <div class="colorContainer"><div class = "colorSquare" id = "upd_ttlColorSquare"></div></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 form-group">
                                                <label for="upd_logo_congreso" class="col-sm-3 control-label">Logotipo</label>
                                                <div class="col-sm-9" style = "padding-top: 10px;">
                                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                        <span class="input-group-addon btn btn-default btn-file">
                                                            <span class="fileinput-new">
                                                                <i class="fa fa-file"></i> Seleccionar archivo</span>
                                                                <span class="fileinput-exists">Cambiar</span>
                                                            <input type="file" name="upd_logo_congreso" id="upd_logo_congreso">
                                                        </span>

                                                        <div class="form-control" data-trigger="fileinput">
                                                            <span class="fileinput-filename"></span>
                                                        </div>
                                                        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Eliminar</a>
                                                    </div>
                                                </div>
                                            </div><div class="col-12 col-sm-6 col-md-4 form-group">
                                                <label for="upd_bg_image" class="col-sm-3 control-label">Imagen de fondo</label>
                                                <div class="col-sm-9" style = "padding-top: 10px;">
                                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                        <span class="input-group-addon btn btn-default btn-file">
                                                            <span class="fileinput-new">
                                                                <i class="fa fa-file"></i> Seleccionar archivo</span>
                                                                <span class="fileinput-exists">Cambiar</span>
                                                            <input type="file" name="upd_bg_image" id="upd_bg_image">
                                                        </span>

                                                        <div class="form-control" data-trigger="fileinput">
                                                            <span class="fileinput-filename"></span>
                                                        </div>
                                                        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Eliminar</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 form-group">
                                                <label for="upd_bg_color" class="col-sm-3 control-label">Color de fondo</label>
                                                <div class="col-xs-9 col-sm-7">
                                                    <input name = "upd_bg_color" class="jscolor {styleElement: 'upd_bgColorSquare'} form-control material" id="upd_bg_color">
                                                </div>
                                                <div class="col-xs-3 col-sm-2 colorPicker">
                                                    <div class="colorContainer"><div class = "colorSquare" id = "upd_bgColorSquare"></div></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 text-right">
                                                <button type = "submit" class = "btn btn-primary" name = "upd_congreso">Actualizar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6 notifClear">
                                    <?php if(isset($_POST['upd_congreso'])) updCongress(); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content-box big-box">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>Información de eventos:</h2>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="datatable display">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre Evento</th>
                                        <th>Fecha Inicio</th>
                                        <th>Fecha Final</th>
                                        <th>Número de Asistentes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($resultStats) while($rowStats = mysqli_fetch_array($resultStats)):;?>
                                        <tr>
                                            <td><?php echo $contStats++;?></td>
                                            <td><?php echo $rowStats[1];?></td>
                                            <td><?php echo $rowStats[2];?></td>
                                            <td><?php echo $rowStats[3];?></td>
                                            <td><?php echo $rowStats[4];?></td>
                                        </tr>
                                    <?php endwhile;?>
                                </tbody>
                            </table>
                        </div>
                        <form action="export.php" method = "post" class="col-md-12 caption text-center">
                            <button class = "btn btn-primary" type = "submit" name = "export-stats">Exportar tabla</button>
                        </form>
                    </div>

                    <div class="content-box big-box">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>Leads equipos:</h2>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="datatable display">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Correo</th>
                                        <th>Teléfono</th>
                                        <th>Estado</th>
                                        <th>Especialidad</th>
                                        <th>Suscripción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($resultContacts) while($rowContacts = mysqli_fetch_array($resultContacts)):;?>
                                        <tr>
                                            <td><?php echo $contContacts++;?></td>
                                            <td><?php echo $rowContacts[0];?></td>
                                            <td><?php echo $rowContacts[1];?></td>
                                            <td><?php echo $rowContacts[2];?></td>
                                            <td><?php echo $rowContacts[3];?></td>
                                            <td><?php echo $rowContacts[4];?></td>
                                            <td><?php echo $rowContacts[5];?></td>
                                            <td><?php if($rowContacts[6]) echo "Suscrito";else echo "No suscrito";?></td>
                                        </tr>
                                    <?php endwhile;?>
                                </tbody>
                            </table>
                        </div>
                        <form action="export.php" method = "post" class="col-md-12 caption text-center">
                            <button class = "btn btn-primary" type = "submit" name = "export-contacts">Exportar tabla</button>
                        </form>
                    </div>

                    <div class="content-box big-box">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>Leads viaje a Corea:</h2>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="datatable display">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Correo</th>
                                        <th>Teléfono</th>
                                        <th>Estado</th>
                                        <th>Especialidad</th>
                                        <th>Suscripción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($resultCorea) while($rowCorea = mysqli_fetch_array($resultCorea)):;?>
                                        <tr>
                                            <td><?php echo $contContacts++;?></td>
                                            <td><?php echo $rowCorea[0];?></td>
                                            <td><?php echo $rowCorea[1];?></td>
                                            <td><?php echo $rowCorea[2];?></td>
                                            <td><?php echo $rowCorea[3];?></td>
                                            <td><?php echo $rowCorea[4];?></td>
                                            <td><?php echo $rowCorea[5];?></td>
                                            <td><?php if($rowCorea[6]) echo "Suscrito";else echo "No suscrito";?></td>
                                        </tr>
                                    <?php endwhile;?>
                                </tbody>
                            </table>
                        </div>
                        <form action="export.php" method = "post" class="col-md-12 caption text-center">
                            <button class = "btn btn-primary" type = "submit" name = "export-corea">Exportar tabla</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class = "footer">
                <p>
                    &copy; <?php echo date('Y'); ?> <b id="normal">Medestore</b>. Todos los derechos reservados. <b><a target="_blank" href="aviso_de_privacidad.pdf" id="aviso"> Aviso de Privacidad</a></b>.<br>
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
        <script src="bower_components/DataTables/media/js/jquery.dataTables.js"></script>
        <script src="bower_components/datatables.net-responsive/js/dataTables.responsive.js"></script>
        <script src="bower_components/datatables-tabletools/js/dataTables.tableTools.js"></script>
        <script src="bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.js"></script>
        <script src="bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>

        <script src="js/menu/classie.js"></script>
        <script src="js/menu/gnmenu.js"></script>
        <script src="js/selects/selectFx.js"></script>
        <script src="js/common.js"></script>
        <script src="js/jscolor.js"></script>
        <script src="js/custom.js"></script>

        <script type="text/javascript">
            $('.fileinput').fileinput();

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

            $(document).ready(function(){
                <?php $resultUpdate = mysqli_query($connect, $queryUpdate); ?>

                $("#select_congreso").change(function(){
                    const [selectedCongressId, selectedCongressName] = $(this).children("option:selected").val().split("//");
                    $("#eventAssistantsCongressId").val(selectedCongressId)
                    $("#table_assists input[type='search']").val(selectedCongressName);
                });

                $("#select_update").change(function(){
                    var changing = $(this).children("option:selected").val();

                    <?php while($updateData = mysqli_fetch_array($resultUpdate)):;?>
                        var checkName = "<?php echo $updateData[0];?>";
                        if(checkName == changing){
                            $("#upd_nombre").val("<?php echo $updateData[0];?>");

                            <?php
                                list($startDay, $startMonth, $startYear) = explode("-", $updateData[1]);
                                $newStartDate = $startYear .'-'. $startMonth .'-'. $startDay;

                                list($endDay, $endMonth, $endYear) = explode("-", $updateData[2]);
                                $newEndDate = $endYear .'-'. $endMonth .'-'. $endDay;
                            ?>

                            $("#upd_startDate").val("<?php echo $newStartDate;?>");
                            $("#upd_endDate").val("<?php echo $newEndDate;?>");
                            $("#upd_evnt_ttl").val("<?php echo $updateData[3];?>");
                            $("#upd_evnt_subt").val("<?php echo $updateData[4];?>");
                            $("#upd_ttl_color").val("<?php echo $updateData[5];?>");
                            $("#upd_ttlColorSquare").css("background-color", "<?php echo '#'.$updateData[5];?>");                         
                        }
                    <?php endwhile;?>
                });
                
                var lim = parseInt(<?php echo $contCurrent - 1;?>);
                var num = 0;
                var numsList = "";
                var cont = 0;
                var j = 0;
                var rands = 1;
                var out = [];

                for(var k = 1; k <= lim; k++) out[k] = false;

                function randGen(maxV){
                    if(j++ >= maxV) {
                        $('#randCant').val("");
                        return;
                    }
                    dumpRands(1);
                    setTimeout(function(){
                        randGen(rands);
                    }, 8000);
                }

                function dumpRands(i) {
                    if (i > 48) return;
                    num = Math.floor(Math.random() * lim + 1);
                    $('#randNumber').html(num);
                    if(i++ == 48) {
                        if(out[num] == false){
                            out[num] = true;
                            numsList = "<li><strong>Número " + (++cont) + ": </strong>" + num + "</li>";
                            $('#randsList ul').append(numsList);
                        }
                        else i--;
                    }
                    setTimeout(function(){ 
                        dumpRands(i); 
                    }, 105);
                }

                $('#genRand').click(function(){
                    numsList = "";
                    cont = 0;
                    j = 0;
                    num = 0;
                    rands = 1;

                    if($('#randCant').val()) rands = $('#randCant').val();

                    $('#randsList ul').html("");
                    randGen(rands);
                });
            });

            var today = new Date();
            var date = today.getFullYear() + '-';

            if((today.getMonth() + 1) < 10) date += '0' + (today.getMonth() + 1) + '-';
            if(today.getDate() < 10) date += '0' + today.getDate();

            document.getElementById("startDate").setAttribute("min", date);
            document.getElementById("endDate").setAttribute("min", date);
            document.getElementById("upd_startDate").setAttribute("min", date);
            document.getElementById("upd_endDate").setAttribute("min", date);

            $("#startDate").change(function(){
                $("#endDate").attr("min", $("#startDate").val());
            });

            $("#upd_startDate").change(function(){
                $("#upd_endDate").attr("min", $("#upd_startDate").val());
            });

            function showAssists(){ document.getElementById("table_assists").style.display = "initial"; }
            function showUpdate(){ document.getElementById('evnt_update').style.display = 'initial'; }
        </script>
    </body>
</html>