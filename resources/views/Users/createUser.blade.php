<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	  <link rel="icon" type="image/png" href="img/sa1.png" />
	<title>Create User</title>
	<style>
		.form{
			margin-top: 3%;
			margin-left: 25%;
			width: 50%;

		}

		.container{
			background-color: #DCDBDA;
			height: 500px;
			padding-top: 1%;
		}
		a{
			margin-left: 74%;
		}

	</style>
</head>
<body>
	<br>
	<div class="container">
		<div class="form">
			<h1>Registro de nuevos usuarios</h1>
			<form method="post" action="http://localhost/ecsolutions/public/save-user">
			  <div class="form-group">
			    <label for="exampleInputEmail1"><strong>Usuario</strong></label>
			    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1"><strong>Email</strong></label>
			    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1"><strong>Password</strong></label>
			    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
			  </div>

			   <div class="form-group">
			    <label for="exampleInputPassword1"><strong>Tipo de usuario</strong></label>
			    <select name="type" id="" class="form-control">
			    	<option value="">Seleccione</option>
			    	<option value="superUser">Super usuario</option>
			    	<option value="user">Usuario</option>
			    </select>
			  </div>
			
			  <button type="submit" class="btn btn-primary">Guardar</button>
			  <a href="http://ecsolutions.tonohost.com/" class="btn btn-primary">Salir</a>
		  </form>
		</div>
	</div>
</body>
</html>