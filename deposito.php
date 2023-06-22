<?php
    require_once('transaccion.php');
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<title></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">	
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	
	</head>
	<body>
		<h1 class="text-center mb-3">Deposito Bancario</h1>
			<form class="w-25 mx-auto">
				<h2>Información de la cuenta:</h2><br>
				N° de Cuenta:<input type="number" name="cuenta" id="cuenta" class="form-control" required="">
				Monto:<input type="number" name="monto" id="monto" class="form-control" required="">
				Cantidad a Depositar:<input type="number" name="cantidad" id="cantidad" class="form-control">

				<input type="submit" name="deposito" value="Calcular" class="btn btn-dark ms-5 mb-3 mt-3">
				<a type="button" name="index" class="btn btn-dark ms-5 mb-3 mt-3" href="index.php">Regresar</a>
			</form>

			<?php
			    if (isset($_REQUEST["deposito"])) {
			    	$cuenta = $_REQUEST["cuenta"];
			    	$monto = $_REQUEST["monto"];
			    	$cantidad = $_REQUEST["cantidad"];
			    	$obj = new Transaccion($cuenta, $monto, $cantidad);
			    	$obj->deposito();
			    }
			?>
		</div>
	</body>
</html>