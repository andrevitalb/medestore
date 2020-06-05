<?php
    $hostname = "localhost";
    $username = "yellowus_mluser";
    $password = "y3ll0wp4thyellow";
    $databaseName = "yellowus_monalisa";

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    date_default_timezone_set('America/Mexico_City');

    $usuario = "";
    $ver = "";
    $codigo = "";
    $seller = "";
    $version = "";
    $serie = "";
    $taken = "";
    $resultUpdate = "";
    $resultCodes = "";
    $resultUser = "";
    $contCodes = 1; 

    function update(){
        global $usuario, $connect, $resultCodes;

        $queryCodes = "Select stock_serie as 'Código' from codigos_stock as S inner join codigos_registrados as R on S.stock_ID = R.registrado_serie where S.stock_taken = $usuario and R.registrado_visible = TRUE order by R.registrado_fecha";
        $resultCodes = mysqli_query($connect, $queryCodes);
    }

    function add(){
        global $ver, $codigo, $seller, $version;
        $ver = $_POST['version'];
        $codigo = $_POST['codigo'];
        $codigo = strtoupper($codigo);
        $seller = $_POST['seller'];

        switch($ver) {
            case 1: $version = "SOFT"; break;
            case 2: $version = "MILD"; break;
            case 3: $version = "HARD"; break;
            case 4: $version = "ULTRA"; break;
        } 
    }

    function inex() {
        global $serie, $connect, $codigo;

        $queryCheckCode = "Select stock_ID from codigos_stock where stock_serie = '$codigo'";
        $s = mysqli_query($connect, $queryCheckCode);
        $serie = mysqli_fetch_array($s);

        if(!$serie) {
            echo '<div class="alert alert-danger alert-dismissible" role="alert" id = "add_inex"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>¡Error!</strong> Código inexistente, favor de corregir.</div>';
            return 1;
        }
    }

    function own(){
        global $taken, $usuario, $connect, $serie;

        $queryTaken = "Select stock_taken from codigos_stock where stock_ID = $serie[0]";
        $takenCheck = mysqli_query($connect, $queryTaken);
        $taken = mysqli_fetch_array($takenCheck);

        if($taken[0] == $usuario) {
            echo '<div class="alert alert-warning alert-dismissible" role="alert" id = "add_own"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>¡Error!</strong> Este código ya está en tu lista, intenta con otro código.</div>';
            return 1;
        }
    }

    function other(){
        global $taken, $serie, $connect;

        $queryTaken = "Select stock_taken from codigos_stock where stock_ID = $serie[0]";
        $takenCheck = mysqli_query($connect, $queryTaken);
        $taken = mysqli_fetch_array($takenCheck);

        if($taken[0] != -1) {
            echo '<div class="alert alert-warning alert-dismissible" role="alert" id = "add_other"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>¡Error!</strong> Este código ya fue ingresado por otro usuario, intenta con otro código.</div>';
            return 1;
        }
    }

    function correct(){
        global $connect, $usuario, $serie, $version, $seller, $resultUpdate;

        $updateTaken = "Update codigos_stock set stock_taken = $usuario where stock_ID = $serie[0]";
        $takeCode =  mysqli_query($connect, $updateTaken);

        $queryMax = "Select MAX(registrado_ID) from codigos_registrados";
        $takeMax = mysqli_query($connect, $queryMax);
        $maxInd = mysqli_fetch_array($takeMax);

        $maxInd[0] += 1;

        $queryNew = "Insert into codigos_registrados (registrado_ID, registrado_version, registrado_serie, registrado_usuario, registrado_vendedor, registrado_fecha) values ($maxInd[0], '$version', $serie[0], $usuario, '$seller',  '";
        $queryNew .= date('d-m-Y H:i', time());
        $queryNew .= "')";

        $resultUpdate = mysqli_query($connect, $queryNew);

        if($resultUpdate) {
            echo '<div class="alert alert-success alert-dismissible" role="alert" id = "add_correct"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>¡Éxito!</strong> Código agregado satisfactoriamente.</div>';
            return 1;
        }
    }

    function incorrect(){
        global $resultUpdate;

        if(!$resultUpdate) {
            echo '<div class="alert alert-danger alert-dismissible" role="alert" id = "add_error"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>¡Error!</strong> Ocurrió un problema, vuelve a intentarlo más tarde.</div>';
            return 1;
        }
    }
?>