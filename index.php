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
		<div class="text-center">
				<h2> ¿Qué transacción desea realizar? </h2>
				<a type="button" class="btn btn-dark ms-1 mb-3 mt-3" href="deposito.php">Deposito</a>
				<a type="button" class="btn btn-dark ms-3 mb-3 mt-3" href="retiro.php">Retiro</a>
		</div>
	</body>
</html>
<?php