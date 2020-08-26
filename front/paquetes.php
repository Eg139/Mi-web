<?php

// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
 
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');
include_once 'conexion.php';


$consulta = "SELECT titulo, fecha_inicio, fecha_fin, fk_pais, precio, dias, noches, itinerario FROM paquete_paquetes ORDER by idpaquete";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Paquetes</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilo.css">
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
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1>Paquetes</h1>
			<hr style="height:10px">
		</div>
	</div>

	<?php if ($resultado = $mysqli->query($consulta)) {

    /* obtener un array asociativo */
    while ($fila = $resultado->fetch_assoc()) {
    	$html = '<div class="row">
		<div class="col-md-4" style="background-color: white">
			<img src="https://www.revistaiberica.com/wp-content/uploads/2019/02/barcelona.png" style="width:375px;height:290px;">
		</div>
		<div class="col-md-6" style="background-color: white">
			<h2><strong>'. $fila["titulo"].'</strong></h2>
			<hr style="height:10px">
			<p><strong>Duración: '. $fila["dias"].' días ☼ y '. $fila["noches"].' noches ☽</strong></p>
			<p>'. utf8_encode($fila["itinerario"]).'</p>
			<hr style="height:10px">
		</div>
		<div class="col-md-12">
			<hr style="height:10px">
		</div>
		<div class="col-md-10">
			<p><i>Desde </i><strong>USD '. $fila["precio"].'</strong></p><p style="text-align: right"><button type="button">Ver más</button></p>
		</div>
		<div class="col-md-12" style= "background-color: grey">
			<p style="color: white"><i>Itinerario: Lima > Colombia</i></p>
		</div>
	</div>';
       echo $html;
    }
}

?>

	
</div>		
</body>
</html>
<!--<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>nosotros</title>
	<title>paquetes</title>
</head>
<body>
<div class="container-fluid">
<form>
		<div class="row">
			<div class="col-12">
			<div class="form-group">
				<label for="txtTitulo">Paquetes</label>
				<input type="form-group" name="txtTitulo" placeholder="titulo">
		</div>
		




		<div class="row">
			<div class="col-6">
			<div class="form-group">
				<label for="txtFechaDesde">Fecha desde</label>
				<input type="date" class="form-control" id="txtFechaDesde" placeholder="fecha-desde" 
				value="2020-12-12"
				min="2018-11-11"
				max="2019-10-10"></div>
			</div>
			<div class="col-6">
			<div class="form-group">
				<label for="txtFechaHasta">Fecha hasta</label>
				<input type="date" class="form-control" id="txtFechaHasta" placeholder="fecha-hasta"
				value="2021-01-01"
				min="2019-05-05"
				max="2020-06-06"></div>
			</div>
		</div>









		<div class="row">
			<div class="col-4">
			 <div class="form-group">
		    <label for="txtDuracion-dias">DuracionDias</label>
		    <select class="form-control" id="txtDuracionDias">
		      <option>5</option>
		      <option>8</option>
		      <option>15</option>
		      <option>22</option>
		      <option>31</option>
		    </select>
		  </div>
			<div class="row">
			<div class="col-4">
			 <div class="form-group">
		    <label for="txtDuracionNoches">DuracionNoches</label>
		    <select class="form-control" id="txtDuracionNoches">
		      <option>4</option>
		      <option>7</option>
		      <option>14</option>
		      <option>21</option>
		      <option>30</option>
		    </select>
		  </div>
		<div class="col-4">
		<div class="form-group">
			<label for="txtprecio">Precio</label>
			<input type="Precio" class="form-control" id="txtprecio" placeholder="Precio"></div>
		</div>
	</div>
		<div class="row">
			<div class="col-12">
			<div class="form-group">
 			 	<label for="exampleFormControlTextarea1">Itineriaro</label>
  				<textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10"></textarea>
			</div>
	</div>
</div>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Paises
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">España</a>
    <a class="dropdown-item" href="#">Italia</a>
    <a class="dropdown-item" href="#">Cancun</a>
  </div>
</div>

	</form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>-->
