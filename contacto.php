<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <script src="https://kit.fontawesome.com/c4e3c39591.js" crossorigin="anonymous"></script>
  <title>Contacto</title>
</head>

<body>
  <div class="container-fluid">
    <header class="header4">

      <?php include('header2.php') ?>

      <div class="col-lg-12 col-sm-12">
        <h1 class="display-1">¡Trabajemos juntos!</h1>
        <p id="olis" class="display-4">Para más detalles sobre mi trabajo podés ver mi <a href="https://www.linkedin.com/in/eric-guzmán-a75425172/"><u>Linkedin</u></a>, descargar mi <a download href="../CV/CV.pdf"><u>CV</u></a> o mandarme un mensaje.</p>
      </div>
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

  <?php include('footer.php') ?>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>