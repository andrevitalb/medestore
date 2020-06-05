<?php
    $hostname = "localhost";
    $username = "yellowus_mluser";
    $password = "y3ll0wp4thyellow";
    $databaseName = "yellowus_monalisa";

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);

    $notifClear = "";

    function clearCodes(){
    	global $notifClear;
		$queryClear = "Update codigos_registrados set registrado_visible = FALSE where registrado_ID >= 1";
    	$resultClear = mysqli_query($connect, $queryUsers);

    	if($resultClear) {
    		$notifClear = '<div class="alert alert-success alert-dismissible" role="alert" id = "add_correct"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>¡Éxito!</strong> Códigos reiniciados satisfactoriamente.</div>';
    	}
    	else {
    		$notifClear = '<div class="alert alert-warning alert-dismissible" role="alert" id = "add_other"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>¡Error!</strong> Algo ocurrió, por favor vuelve a intentarlo.</div>';
    	} 
	}
?>