<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>formulario</title>
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar sticky-top navbar-dark bg-danger">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <div class="navbar-nav mr-auto">
      <a class="nav-item nav-link active" href="index.php">Inicio</a>
      <a class="nav-item nav-link" href="Nosotros.php">Nosotros</a>
      <a class="nav-item nav-link" href="paquetes.php">Paquetes</a>
      <a class="nav-item nav-link" href="contacto.php">Contacto</a>
    </div>
    <div>
    	<a href="https://www.facebook.com/" class="btn btn-primary">F</a>
    	<a href="https://www.youtube.com" class="btn btn-danger">Y</a>
    </div>
</div>
</nav>
<h1 class="display-4">Contacto</h1>
	<div class="container-fluid"> 
	<p>para poder contestar sus consultas rogamos completar el siguiente cuadro con todos los datos requeridos.
	muchas gracias</p>
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
	<form>
		<div class="panel-heading">
			<div class="panel-title" style="margin-bottom: 5px;background-color: lightblue; border:1px ; font-size: 40px;color: white;height: 50px">Datos de contacto</div>
		</div>
		<div class="row">
			<div class="col-3">
			<div class="form-group">
				<label for="txtName">Nombre</label>
				<input type="name" class="form-control" id="txtName" placeholder="Nombre"></div>
			</div>
			<div class="col-3">
			<div class="form-group">
				<label for="txtapellido">Apellido</label>
				<input type="Phone" class="form-control" id="txtapellido" placeholder="Apellido"></div>
			</div>
			<div class="col-6">
			<div class="form-group">
				<label for="txtemail">Email</label>
				<input type="email" class="form-control" id="txtemail" placeholder="Enter email"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
		<div class="form-group">
			<label for="txtPais">Pais</label>
			<input type="pais" class="form-control" id="txtPais" placeholder="Pais"></div>
		</div>
		<div class="col-6">
		<div class="form-group">
			<label for="txtTelefono">Telefono</label>
			<input type="telefono" class="form-control" id="txtTelefono" placeholder="Telefono"></div>
		</div>
	</div>
		<div class="row">
			<div class="col-12">
		<div class="form-group">
			<label for="txtConsultas">Consultas</label>
			<textarea cols="50" id="txtConsultas" placeholder="Consultas" class="form-control"></textarea>
		</div>
	</div>
	<div class="row">
	<div class="btn-group">
		<button type="submit" class="btn btn-danger">Enviar</button>
	</div>
	</div>
	</div>
	</form>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>