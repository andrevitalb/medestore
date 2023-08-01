<?php
    include('connections.php');

    $queryNew = "";

    function addCongress() {
        global $connect, $queryNew;

        $nombre = $_POST["nombre_congreso"];
        $startDate = $_POST["startDate"];
        $endDate = $_POST["endDate"];
        $bgColor = $_POST["bg_color"];
        $ttlColor = $_POST["ttl_color"];
        $evnt_ttl = $_POST["evnt_ttl"];
        $evnt_subt = $_POST["evnt_subt"];
        $uploadOk = 1;
        $bgChange = 0;
        $bg = "";

        $queryMaxId = "Select MAX(congresos_ID) from congresos";
        $maxId = mysqli_fetch_array(mysqli_query($connect, $queryMaxId))[0];
        $newId = $maxId + 1;

        $fechaInicio = explode("-", $startDate);
        $startDate = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00";

        $fechaFin = explode("-", $endDate);
        $endDate = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0] . " 23:59";

        $queryNew = "Insert into congresos (congresos_ID, congresos_nombre, congresos_fechaInicio, congresos_fechaFinal";

        if($_FILES['bg_image']['size'] > 0 || $bgColor != "FFFFFF") $queryNew .= ", congresos_background";
        if($ttlColor != "FFFFFF") $queryNew .= ", congresos_textColor";
        if($_FILES['logo_congreso']['size'] > 0) $queryNew .= ", congresos_logo";

        $queryNew .= ", congresos_titulo, congresos_subtitulo) values ($newId, '$nombre', '$startDate', '$endDate'";

        if($_FILES['bg_image']['size'] > 0) {
            $bgChange = 1;
            $target_dirBg = "img/custom-img/bg/";
            $bgFileName = $target_dirBg . basename($_FILES["bg_image"]["name"]);
            $bgFileType = strtolower(pathinfo($bgFileName,PATHINFO_EXTENSION));
            $bgFileName = "bg-congreso_" . $newId . "." . $bgFileType;
            $target_Bg = $target_dirBg . $bgFileName;
            $bg = $target_Bg;

            $check = getimagesize($_FILES["bg_image"]["tmp_name"]);
            if($check !== false)  $uploadOk = 1;
            else $uploadOk = 0;

            if ($uploadOk == 0) echo "Ocurrió un error, tu archivo no se pudo subir.";
            else  move_uploaded_file($_FILES["bg_image"]["tmp_name"], $target_Bg);
        }
        else if($bgColor != "FFFFFF") {
            $bgChange = 1;
            $bg = "#$bgColor";
        }

        if($bgChange == 1) $queryNew .= ", '$bg'";

        if($ttlColor != "FFFFFF") $queryNew .= ", '#$ttlColor'";

        $uploadOk = 1;

        if($_FILES['logo_congreso']['size'] > 0) {
            $target_dirLogo = "img/custom-img/logo/";
            $logoFileName = $target_dirLogo . basename($_FILES["logo_congreso"]["name"]);
            $logoFileType = strtolower(pathinfo($logoFileName,PATHINFO_EXTENSION));
            $logoFileName = "logo-congreso_" . $newId . "." . $logoFileType;
            $target_Logo = $target_dirLogo . $logoFileName;
            $logo = $target_Logo;

            $check = getimagesize($_FILES["logo_congreso"]["tmp_name"]);
            if($check !== false)  $uploadOk = 1;
            else $uploadOk = 0;

            if ($uploadOk == 0) echo "Ocurrió un error, tu archivo no se pudo subir.";
            else if (move_uploaded_file($_FILES["logo_congreso"]["tmp_name"], $target_Logo)) $queryNew .= ", '$logo'";
        }

        $queryNew .= ", '$evnt_ttl','$evnt_subt')";

        $resultUpdate = mysqli_query($connect, $queryNew);

        if($resultUpdate) echo '<div class="alert alert-success alert-dismissible" role="alert" id = "add_correct"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>¡Éxito!</strong> Evento creado satisfactoriamente.</div>';
        else echo '<div class="alert alert-danger alert-dismissible" role="alert" id = "add_error"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>¡Error!</strong> Ocurrió un problema, vuelve a intentarlo más tarde.</div>';
    }

    function updCongress() {
        global $connect, $queryNew;

        $nombre = $_POST["upd_nombre"];
        $startDate = $_POST["upd_startDate"];
        $endDate = $_POST["upd_endDate"];
        $evnt_ttl = $_POST["upd_evnt_ttl"];
        $evnt_subt = $_POST["upd_evnt_subt"];
        $ttlColor = $_POST["upd_ttl_color"];
        $bgColor = $_POST["upd_bg_color"];
        $selectedId = $_POST["select_update"];
        $uploadOk = 1;
        $bgChange = 0;
        $bg = "";

        $fechaInicio = explode("-", $startDate);
        $startDate = $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00";

        $fechaFin = explode("-", $endDate);
        $endDate = $fechaFin[2] . "-" . $fechaFin[1] . "-" . $fechaFin[0] . " 23:59";

        $queryNew = "Update congresos set congresos_nombre = '$nombre', congresos_fechaInicio = '$startDate', congresos_fechaFinal = '$endDate'";

        if($_FILES['upd_bg_image']['size'] > 0 || $bgColor != "FFFFFF") {
            if($_FILES['upd_bg_image']['size'] > 0) {
                $bgChange = 1;
                $target_dirBg = "img/custom-img/bg/";
                $bgFileName = $target_dirBg . basename($_FILES["upd_bg_image"]["name"]);
                $bgFileType = strtolower(pathinfo($bgFileName,PATHINFO_EXTENSION));
                $bgFileName = "bg-congreso_" . $selectedId . "." . $bgFileType;
                $target_Bg = $target_dirBg . $bgFileName;
                $bg = $target_Bg;

                $check = getimagesize($_FILES["upd_bg_image"]["tmp_name"]);
                if($check !== false)  $uploadOk = 1;
                else $uploadOk = 0;

                if ($uploadOk == 0) echo "Ocurrió un error, tu archivo no se pudo subir.";
                else  move_uploaded_file($_FILES["upd_bg_image"]["tmp_name"], $target_Bg);
            }
            else if($bgColor != "FFFFFF") {
                $bgChange = 1;
                $bg = "#$bgColor";
            }

            if($bgChange == 1) $queryNew .= ", congresos_background =  '$bg'";
        }
        
        $queryNew .= ", congresos_textColor = '#$ttlColor'";

        if($_FILES['upd_logo_congreso']['size'] > 0) {
            $target_dirLogo = "img/custom-img/logo/";
            $logoFileName = $target_dirLogo . basename($_FILES["upd_logo_congreso"]["name"]);
            $logoFileType = strtolower(pathinfo($logoFileName,PATHINFO_EXTENSION));
            $logoFileName = "logo-congreso_" . $selectedId . "." . $logoFileType;
            $target_Logo = $target_dirLogo . $logoFileName;
            $logo = $target_Logo;

            $check = getimagesize($_FILES["upd_logo_congreso"]["tmp_name"]);
            if($check !== false)  $uploadOk = 1;
            else $uploadOk = 0;

            if ($uploadOk == 0) echo "Ocurrió un error, tu archivo no se pudo subir.";
            else if (move_uploaded_file($_FILES["upd_logo_congreso"]["tmp_name"], $target_Logo)) $queryNew .= ", congresos_logo =  '$logo'";
        }

        $queryNew .= ", congresos_titulo = '$evnt_ttl', congresos_subtitulo = '$evnt_subt' where congresos_ID = $selectedId";

        $uploadOk = 1;

        $resultUpdate = mysqli_query($connect, $queryNew);

        if($resultUpdate) echo '<div class="alert alert-success alert-dismissible" role="alert" id = "add_correct"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>¡Éxito!</strong> Evento actualizado satisfactoriamente.</div>';
        else echo '<div class="alert alert-danger alert-dismissible" role="alert" id = "add_error"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>¡Error!</strong> Ocurrió un problema, vuelve a intentarlo más tarde.</div>';
    }
?>