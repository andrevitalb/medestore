<?php
    $hostname = "localhost";
    $username = "intracel_mluser";
    $password = "y3ll0wp4thyellow";
    $databaseName = "intracel_monalisa";
    
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);

    $errorStr = "";
    $lines = 0;
    $cont = 0;
    $arr = array();
    $queryStock = "";
    $contStock = 0;
    $resultStock = "";

    function get_Stock(){
        global $queryStock, $connect, $resultStock, $contStock;

        $queryStock = "Select stock_serie from codigos_stock order by stock_serie";
	    $resultStock = mysqli_query($connect, $queryStock);
	    $contStock = 1;
    }

	function addStock(){
		global $connect, $lines, $cont, $arr;

		$stockQuery = $_POST["stockQuery"];
		$stockQ = strtoupper($stockQuery);
		$stockQuery = $stockQ;
		$arr = explode("\n", $stockQuery);

		$lines = sizeof($arr);
		$queryNew = "";
		$cont = 0;

		for($i = 0; $i < $lines; $i++){
			$arr[$i] = trim($arr[$i]);

			// if(strlen($arr[$i]) == 9){
				$queryCheckCode = "Select stock_serie from codigos_stock where stock_serie = '$arr[$i]'";
		        $s = mysqli_query($connect, $queryCheckCode);
		        $serie = mysqli_fetch_array($s);		        

		        if(!$serie) {
		        	$queryMax = "Select MAX(stock_ID) from codigos_stock";
			        $takeMax = mysqli_query($connect, $queryMax);
			        $maxInd = mysqli_fetch_array($takeMax);

			        $maxInd[0] += 1;

		        	$queryNew = "Insert into codigos_stock (stock_ID, stock_serie) values ($maxInd[0], '$arr[$i]')";
					$resultUpdate = mysqli_query($connect, $queryNew);
					if($resultUpdate) $cont++;
		        }
		        else errorStockCode($i);
		    // }
		    // else errorStockLength($i);
		}
	}

	function stockCorrect(){
		global $cont, $lines;

		if(($cont == $lines) && ($lines > 0)) {
			echo '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>¡Éxito!</strong> '.$cont.' registros agregados con éxito.</div>';
			return 1;
		}
	}

	function errorStockCode($ind){
		global $errorStr, $arr;
		$errorStr .= '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>¡Error!</strong> Código ' . $arr[$ind] . ' ya agregado.</div>';
	}

	function errorStockLength($ind){
		global $errorStr, $arr;
		$errorStr .= '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>¡Error!</strong> Código ' . $arr[$ind] . ' debe de ser de 9 caracteres de largo. (Tiene ' . strlen($arr[$ind]) . ' caracteres).</div>';
	}

	function stockIncorrect(){
		global $cont, $lines, $errorStr;
		if(($cont != $lines) && ($lines > 0)) echo $errorStr;
	}
?>