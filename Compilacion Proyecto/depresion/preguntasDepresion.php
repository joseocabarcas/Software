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
            <li class="active"><a href="../controladores/cor_CerrarSesion.php">Cerrar Sesion</a></li>
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
				<h3>Depresión Geriátrica (GDS)</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<hr class="featurette-divider">
	<form name='form1' action="../controladores/cor_Depresion.php" method="post" accept-charset="utf-8" class="form" role="form">  
      	<div class="pregresp">
		  <div class="pregunta">1. ¿Esta usted basicamente satisfecho con su vida?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg1" value="1" /> Sí<br />
		    <input required type="radio" name="preg1" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">2. ¿Ha disminuido o abandonado muchos de sus intereses o actividades previas?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg2" value="1" /> Si<br />
		    <input required type="radio" name="preg2" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">3. ¿Siente que su vida esta vacia?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg3" value="1" /> Si<br />
		    <input required type="radio" name="preg3" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">4. ¿Se siente aburrido frecuentemente?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg4" value="1" /> Si<br />
		    <input required type="radio" name="preg4" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">5. ¿Esta usted de buen ánimo la mayoria del tiempo?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg5" value="1" /> Si<br />
		    <input required type="radio" name="preg5" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">6. ¿Esta preocupado o teme que algo malo le va a pasar?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg6" value="1" /> Si<br />
		    <input required type="radio" name="preg6" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">7. ¿Se siente feliz la mayor parte del tiempo?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg7" value="1" /> Si<br />
		    <input required type="radio" name="preg7" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">8. ¿Se siente con frecuencia desamparado, que no vale nada o desvalido?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg8" value="1" /> Si<br />
		    <input required type="radio" name="preg8" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">9. ¿Prefiere usted quedarse en casa en vez de salir a hacer cosas nuevas?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg9" value="1" /> Si<br />
		    <input required type="radio" name="preg9" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">10. ¿Siente usted que tiene mas problemas con su memoria que otras personas de su edad?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg10" value="1" /> Si<br />
		    <input required type="radio" name="preg10" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">11. ¿Cree usted que es maravilloso estar vivo?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg11" value="1" /> Si<br />
		    <input required type="radio" name="preg11" value="2" /> No<br />
		  </div>
		</div>


		<div class="pregresp">
		  <div class="pregunta">12. ¿Se siente inútil o despreciable como está usted actualmente?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg12" value="1" /> Si<br />
		    <input required type="radio" name="preg12" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">13. ¿Se siente lleno de energía?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg13" value="1" /> Si<br />
		    <input required type="radio" name="preg13" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">14. ¿Se encuentra sin esperanzas ante su situación actual?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg14" value="1" /> Si<br />
		    <input required type="radio" name="preg14" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">15. ¿Cree usted que las otras personas están, en generak, mejor que usted?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg15" value="1" /> Si<br />
		    <input required type="radio" name="preg15" value="2" /> No<br />
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