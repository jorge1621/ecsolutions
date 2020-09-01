@extends('layouts.app') 
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Error SSesion</title>
	<link rel="icon" type="image/png" href="img/sa1.png" />
</head>
<body>
	<div class="container">
		<div class="alert alert-danger" role="alert">
		  <h1 class="alert-heading">Acceso bloqueado!</h1>
		  <br>
		  <p>Disculpe para acceder a la función de registro de usuario debe estar logeado como administrador.</p>
		  <hr>
		  <p class="mb-0">Por favor inicie session como administrador y vuelva a intentarlo.</p>
		</div>
	</div>
</body>
</html>
@endsection