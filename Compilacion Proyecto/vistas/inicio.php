<?php
session_start();

if(!isset($_SESSION['user_paciente'])){
header("location: ../vistas/login.php");
}
//echo "Bievenido al Sistema : ".$_SESSION["user_paciente"];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PHYLINE </title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="../css/main.css" rel="stylesheet">
    <link href="../img/icono.ico" type="image/x-icon" rel="shortcut icon" />
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</head>
<body>
    <!-- Static navbar -->
            <div class="navbar navbar-inverse navbar-static-top">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="inicio.php">PhyLine</a>
                </div>
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a> <?php echo $_SESSION["user_paciente"]; ?> </a></li>
                    <li><a href="../controladores/cor_CerrarSesion.php">Cerrar Sesion</a></li>
                  </ul>
                </div><!--/.nav-collapse -->
              </div>
            </div>
            <!-- Static navbar -->



                    <!-- Carousel
            ================================================== -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active ">
                  <img src="../img/saludmental.png" alt="phyline">
                  <div class="container">
                    <div class="carousel-caption">
                        <h3>Salud Mental</h3>
                        <p>Descubre el estado de tu salud mental</p>
                      <p><a class="btn btn-lg btn-primary" href="../saludmental/indexSaludmental.php" role="button">Ver mas..</a></p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img src="../img/saludsexual.png" alt="phyline1">
                  <div class="container">
                    <div class="carousel-caption">
                        <h3>Salud sexual masculina</h3>
                        <p>Descubre problemas en la salud sexual masculina</p>
                      <p><a class="btn btn-lg btn-primary" href="../sexual/indexSexual.php" role="button">Ver mas..</a></p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img src="../img/depresion.png" alt="phyline2">
                  <div class="container">
                    <div class="carousel-caption">
                        <h3>Depresión Gereatrica</h3>
                        <p>Descubre posibles problemas de depresión</p>
                      <p><a class="btn btn-lg btn-primary" href="../depresion/indexDepresion.php" role="button">Ver mas..</a></p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img src="../img/psicopatologia.png" alt="phyline3">
                  <div class="container">
                    <div class="carousel-caption">
                        <h3>Psicopatologia</h3>
                        <p>Descubre posibles alteraciones psicopatologicas</p>
                      <p><a class="btn btn-lg btn-primary" href="../psicopatologia/indexPsicopatologia.php" role="button">Ver mas..</a></p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img src="../img/enamoramiento.png" alt="phyline4">
                  <div class="container">
                    <div class="carousel-caption">
                        <h3>Enamoramiento</h3>
                        <p>Descubre si estas enamorado</p>
                      <p><a class="btn btn-lg btn-primary" href="../enamoramiento/indexEnamoramiento.php" role="button">Ver mas..</a></p>
                    </div>
                  </div>
                </div>
                <div class="item ">
                  <img src="../img/ninos.png" alt="phyline5">
                  <div class="container">
                    <div class="carousel-caption">
                        <h3>Sintomas en niños</h3>
                        <p>Descubre posibles sintomas psicologicos en la niñez</p>
                      <p><a class="btn btn-lg btn-primary" href="../ninos/indexNinos.php" role="button">Ver mas..</a></p>
                    </div>
                  </div>
                </div>
              </div>
              <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div><!-- /.carousel -->
           

            <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">PhyLine. <span class="text-muted">Tu solucion.</span></h2>
              <p class="lead">Sistema encargado de la evaluación de test psicológicos.</p>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-responsive" src="../img/test.png" alt="Generic placeholder image">
            </div>
          </div>

          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-5">
              <img class="featurette-image img-responsive" src="../img/personalidad.png" alt="Generic placeholder image">
            </div>
            <div class="col-md-7">
              <h2 class="featurette-heading">Nuestro sistema.</h2>
              <p class="lead">Nuestro software va a brindar un mayor ahorro de tiempo en cuanto 
                                                a la aplicación de test se refiere, ya que este va a permitir autoevaluar el test 
                                                para al final obtener unos resultados preliminares 
                                                que mostraran en detalle la evaluación del test.</p>
            </div>
          </div>


      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

            




            <!-- +++++ Footer Section +++++ -->

            <div id="footer">
                    <div class="container">
                        

                            <div class="row">
                                    <div class="col-lg-4">
                                            <h4>Elaborado por FastSoft</h4>
                                            <p>
                                                   &copy; CopyRight UniSimon,<br/>
                                                    +57 3218461698, <br/>
                                                    Malambo, Colombia.
                                            </p>
                                    </div><!-- /col-lg-4 -->

                                    <div class="col-lg-4">
                                            <h4>Paginas</h4>
                                            <p>
                                                    <a href="https://www.facebook.com/jcabarcasguti">Facebook</a><br/>
                                                    <a href="https://twitter.com/joseomar94">Twitter</a>
                                            </p>
                                    </div><!-- /col-lg-4 -->

                                    <div class="col-lg-4">
                                            <h4>Acerca de PhyLine</h4>
                                            <p>Sistema encargado de la evaluación de test psicológicos.</p>
                                    </div><!-- /col-lg-4 -->

                            </div>

                    </div>
            </div>




    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/bootstrap.min.js"></script>
    
</body>
</html>