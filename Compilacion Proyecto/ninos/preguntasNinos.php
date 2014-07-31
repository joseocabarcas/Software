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
    <link href="../css/psicopatologia.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/formulario_pregunta.css" rel="stylesheet">
    <link href="../css/boton_finalizar.css" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="../img/icono.ico" type="image/x-icon" rel="shortcut icon" />
   
</head>
<body>
	<!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../vistas/inicio.php">PhyLine.</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../controladores/cor_CerrarSesion.php">Sig up</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div><!-- Fixed navbar-->

    <!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>Sintomas para niños.</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<hr class="featurette-divider">
	<form name='form1' action="../controladores/cor_Ninos.php" method="post" accept-charset="utf-8" class="form" role="form">  
      	<div class="pregresp">
		  <div class="pregunta">1. ¿El lenguaje del niño(a) es anormal en alguna forma?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg1" value="1" /> Sí<br />
		    <input required type="radio" name="preg1" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">2. ¿El niño(a) duerme mal?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg2" value="1" /> Si<br />
		    <input required type="radio" name="preg2" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">3. ¿Ha tenido el niño(a) en algunas ocasiones convulsiones o caidas al suelo sin razon?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg3" value="1" /> Si<br />
		    <input required type="radio" name="preg3" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">4. ¿Sufre el niño(a) de dolores frecuentes de cabeza?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg4" value="1" /> Si<br />
		    <input required type="radio" name="preg4" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">5. ¿El niño(a) ha huido de la casa frecuentemente?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg5" value="1" /> Si<br />
		    <input required type="radio" name="preg5" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">6. ¿Ha robado cosas de la casa?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg6" value="1" /> Si<br />
		    <input required type="radio" name="preg6" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">7. ¿Se asusta o se pone nervioso(a) sin razon?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg7" value="1" /> Si<br />
		    <input required type="radio" name="preg7" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">8. ¿Parece como retardado(a) o lento(a) para aprender?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg8" value="1" /> Si<br />
		    <input required type="radio" name="preg8" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">9. ¿El (la) niño(a) casi nunca juega con otros niños(as)?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg9" value="1" /> Si<br />
		    <input required type="radio" name="preg9" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">10. ¿El niño(a) se orina o defeca en la ropa?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg10" value="1" /> Si<br />
		    <input required type="radio" name="preg10" value="2" /> No<br />
		  </div>
		</div>

		<hr class="featurette-divider">
		
		<button name='btnguardar'  type="submit" class="btn btn-info btn-circle btn-xl" style="Position:Relative; left:40%; top:60%"><i class="glyphicon glyphicon-ok"></i></button>

		
		<hr class="featurette-divider">
	</form>
		
		


    <!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <div id="footerwrap">
	 	<div class="container">
		 	<div class="row">
		 		<div class="col-lg-4">
		 			<h4>Elaborado por FastSoft</h4>
		 			<div class="hline-w"></div>
		 			<p>&copy; CopyRight UniSimon,<br/>
                                                    +57 3218461698, <br/>
                                                    Malambo, Colombia.</p>
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Social Links</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 				<a href="#"><i class="fa fa-dribbble"></i></a>
		 				<a href="https://www.facebook.com/jcabarcasguti"><i class="fa fa-facebook"></i></a>
		 				<a href="https://twitter.com/joseomar94"><i class="fa fa-twitter"></i></a>
		 				<a href=""><i class="fa fa-instagram"></i></a>
		 				<a href="#"><i class="fa fa-tumblr"></i></a>
		 			</p>
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Acerca de PhyLine</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 				Sistema encargado de la evaluación de test psicológicos.<br/>
		 				Barranquilla, Colombia,<br/>
		 			</p>
		 		</div>
		 	
		 	</div><! --/row -->
	 	</div><! --/container -->
	 </div><! --/footerwrap -->
</body>
</html>