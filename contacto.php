<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <script src="https://kit.fontawesome.com/c4e3c39591.js" crossorigin="anonymous"></script>
	<title>Contacto</title>
</head>
<body >
<div class="container-fluid">
  <header class="header4">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="#"></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse mod" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="sobremi.php">Sobre Mi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="portfolio.php">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="contacto.php">Contacto</a>
          </li>
        </ul>
      </div>
  </nav>
  <div class="col-lg-12 col-sm-12">
  <h1 class="display-1">¡Trabajemos juntos!</h1>
  <p id="olis" class="display-4">Para más detalles sobre mi trabajo podés ver mi <a href="https://www.linkedin.com/in/eric-guzmán-a75425172/"><u>Linkedin</u></a>, descargar mi <a download href="../CV/CV.pdf"><u>CV</u></a> o mandarme un mensaje.</p></div>
  </header>
</div>
<div class="container">
<form id="contact-form" name="contact-form" action="correo.php" method="POST">
    <div class="row">
      <div class="col-lg-6 col-sm-12">
      <div class="form-group">
        <input type="text" class="form-control border-dark border-top-0 border-left-0 border-right-0 border-bottom" id="nombre" placeholder="Nombre" name="nombre" required=""></div>
      </div>
      <div class="col-lg-6 col-sm-12">
      <div class="form-group">
        <input type="email" class="form-control border-dark border-top-0 border-left-0 border-right-0 border-bottom" id="email" placeholder="Enter email" name="email" required=""></div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-sm-12">
      <div class="form-group">
        <input type="text" class="form-control border-dark border-top-0 border-left-0 border-right-0 border-bottom" id="asunto" placeholder="Asunto" name="asunto" required=""></div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-sm-12">
    <div class="form-group">
      <textarea cols="300" id="mensaje" placeholder="Mensaje" class="form-control border-dark border-top-0 border-left-0 border-right-0 border-bottom" name="mensaje" required=""></textarea>
    </div>
  </div>
  </div>
  <div class="row">
    <div class="col-lg-5 col-sm-5"></div>
  <div class="col-lg-2 col-sm-3">
    <button type="submit" class="btn btn-lg btn-block btn-primary" name="enviar">Enviar</button>
  </div>
  <div class="col-md-5 col-sm-5"></div>
  </div>
  </div>
  </form>

<footer>
  <div class="jumbotron-fluid bg-white">
  <div class="row">
    <div class="col-lg-3 col-sm-12">
      <h2>Eric Guzmán<br>2019</h2>
    </div>
    <div class="col-lg-6 ">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <a href="https://web.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"> 
          <a href="https://www.facebook.com/eric.guzman.3150"><i class="fab fa-facebook"></i></a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <a href="https://www.instagram.com/eric.guzman00/"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <a href="https://www.linkedin.com/in/eric-guzmán-a75425172/"><i class="fab fa-linkedin"></i></a>
     </div>
   </div>
      </div>
    <div class=" col-lg-3 col-sm-12">
      <h2>Patrocinado por<br>
      <a href="https://depcsuite.com/">DePC Suite</a></h2>
    </div>
  </div>
</div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>