<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <script src="https://kit.fontawesome.com/c4e3c39591.js" crossorigin="anonymous"></script>
  <title>Sobre Mi</title>
</head>

<body class="sobremi">
  <div class="container-fluid">
    <header class="header2">
      <?php include('header.php')
      ?>
      <div class="row">
        <div class="col-lg-8">
          <h1 class="display-2"><strong>Sobre Mi</strong></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-sm-6">
          <p class="descri">Soy un joven al que le encanta la informatica, tanto el hardware como el software, aunque prefiero principalmente programar tambien tengo conocimientos sobre partes fisicas y como repararlas, actualmente estoy inscrito en la utn para cursar la TECNICATURA UNIVERSITARIA EN PROGRAMACIÓN</p>
          <div class="col-lg-6 col-sm-4">
            <a download href="../CV/CV.pdf"><button class="btn btn-lg btn-block btn-dark">Descargar CV</button></a>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <img src="imagenes/pre.jpeg" style="border-radius: 300px; width: 400px; height: 400px;">
        </div>
      </div>
    </header>


    <div id="habilidades" class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-12">
          <div class="jumbotron bg-white">
            <div class="row">
              <div class="col-3">
                <i class="fas fa-code"></i>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <h3>Lenguajes de programacion</h3>
                <p>PHP, Laravel, HTML, CSS, Bootstrap, Javascript, jQuery, React.js, MySQL/MariaDB</p>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-6 col-sm-12">
          <div class="jumbotron bg-white">
            <div class="row">
              <div class="col-3">
                <i class="fas fa-laptop"></i>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <h3>Software</h3>
                <p>Git, Heidi SQL, Sublime Text, XAMPP, Word, Excel, Power Point, Streamlabs OBS</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 col-sm-12">
          <div class="jumbotron bg-white">
            <div class="row">
              <div class="col-3">
                <i class="far fa-comment-dots"></i>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <h3>Idiomas</h3>
                <p>Ingles - Basico <br>Español - Nativo</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-sm-12">
          <div class="jumbotron bg-white">
            <div class="row">
              <div class="col-3">
                <i class="fas fa-puzzle-piece"></i>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <h3>Hobbies</h3>
                <p>Programar, Servicio tecnico de PC, Ajedrez y Videojuegos</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('experiencia.php') ?>

  <?php include('footer.php') ?>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>