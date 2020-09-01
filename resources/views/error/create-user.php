<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	  <link rel="icon" type="image/png" href="img/sa1.png" />
	<title>Error</title>
</head>
<body>
	<div class="container">
		<br>
		<div class="alert alert-danger" role="alert">
		  <h4 class="alert-heading">Disculpe hubo un error en la creacion del usuario</h4>
		  <p>Quiza ya existe un registro con estas caracteristicas ó no se cumple con los requisitos.</p>
		  <br>
		  <h4>Mensaje del error</h4>
		  <p>
		  	<? echo $error; ?>
		  </p>
		  <hr>
		  <p class="mb-0">Por favor intente de nuevo el procedimiento.</p>
		  <br>
		  <a href="http://localhost/ecsolutions/public/create-user" class="btn btn-primary">Regresar</a>
		</div>
	</div>
	
</body>
</html>
