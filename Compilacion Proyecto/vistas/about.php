<!DOCTYPE html>
<html>
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

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="../img/icono.ico" type="image/x-icon" rel="shortcut icon" />
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
                  <a class="navbar-brand" href="index.php">PhyLine</a>
                </div>
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="registro.php">Registrarse</a></li>
                    <li><a href="login.php">Iniciar Sesion</a></li>
                  </ul>
                </div><!--/.nav-collapse -->
              </div>
            </div>
            <!-- Static navbar -->


       	<!-- +++++ Welcome Section +++++ -->
	<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">
					<h1>Acerca de PhyLine!</h1>
					<p>Nuestra pagina consiste en que nuestro sistema realice distintos tipos de test con el fin de evaluar de manera detallada los distintos rasgos de personalidad, intelecto, comportamiento, etc.
						Basado en una recopilación de muchos test psicológicos muy interesantes los cuales nos sirven para poder hacer un análisis especifico de la persona, ya que en el mundo no existen dos personas que sean psicológicamente idénticas. La personalidad, el carácter, el temperamento o el modo de ser de alguien es siempre difícil de definir, y es que la personalidad se compone de múltiples factores que, en ocasiones, ni nosotros mismos conocemos.
					</p>
				
				</div><!-- /col-lg-8 -->
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /ww -->
	
	
			<!-- +++++ Information Section +++++ -->
			
			<div class="container pt">
				<div class="row mt centered">	
					<div class="col-lg-6">
						<span class="glyphicon glyphicon-flag"></span>
						<p>Nuestra Misión es posicionarnos como una entidad confiable, dedicada al diseño y evaluacion de instrumentos psicologicos en el campo de las TIC, basándonos en un alto margen de calidad.</p>
					</div>
					
					<div class="col-lg-6">
						<span class="glyphicon glyphicon-filter"></span>
						<p>Nuestra Visión es que PhyLine en el 2015 sea un sistema de alta calidad y robustes, que le facilite a las entidades de salud un mejor aprovechamiento de las TIC en el campo en el que se desenvuelven.
						</p>
					</div>
				</div><!-- /row -->
				
				
			</div><!-- /container -->
        <hr class="featurette-divider">



        <!-- Jumbotron de contacto-->

            <div class="jumbotron jumbotron-sm">
				    <div class="container">
				        <div class="row">
				            <div class="col-sm-12 col-lg-12">
				                <h1 class="h1">
				                    Contactenos <small>Es importante su opinion</small></h1>
				            </div>
				        </div>
				    </div>
				</div>
				<div class="container">
				    <div class="row">
				        <div class="col-md-8">
				            <div class="well well-sm">
				                <form name='form1' action="../controladores/cor_Contacto.php" method="post" accept-charset="utf-8">
				                <div class="row">
				                    <div class="col-md-6">
				                        <div class="form-group">
				                            <label for="name">
				                                Name</label>
				                            <input name="name" type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
				                        </div>
				                        <div class="form-group">
				                            <label for="email">
				                                Email Address</label>
				                            <div class="input-group">
				                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
				                                </span>
				                                <input name="email" type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
				                        </div>
				                        <div class="form-group">
				                            <label for="subject">
				                                Subject</label>
				                            <select name="option" id="subject" name="subject" class="form-control" required="required">
				                                <option value="na" selected="">Seleccione una opción:</option>
				                                <option value="service">Servicio al cliente</option>
				                                <option value="suggestions">Sugerencias</option>
				                                <option value="product">Soporte tecnico</option>
				                            </select>
				                        </div>
				                    </div>
				                    <div class="col-md-6">
				                        <div class="form-group">
				                            <label for="name">
				                                Message</label>
				                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
				                                placeholder="Message"></textarea>
				                        </div>
				                    </div>
				                    <div class="col-md-12">
				                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
				                            Send Message</button>
				                    </div>
				                </div>
				                </form>
				            </div>
				        </div>
				        <div class="col-md-4">
				            <form>
				            <legend><span class="glyphicon glyphicon-globe"></span> Nuestras Oficinas</legend>
				            <address>
				                <strong>PhyLine, Inc.</strong><br>
				                Calle 10A , Cra 3a-36<br>
				                Bellavista, Malambo<br>
				                <abbr title="Phone">
				                    P:</abbr>
				                (+57) 376-88-96
				            </address>
				            <address>
				                <strong>Correo electronico</strong><br>
				                <a href="mailto:#">jose.omar94@hotmail.com</a>
				            </address>
				            </form>
				        </div>
				    </div>
				</div>


			<hr class="featurette-divider">






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