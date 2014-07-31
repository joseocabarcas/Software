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
				<h3>Psicopatologia.</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<hr class="featurette-divider">
	<form name='form1' action="../controladores/cor_Patologia.php" method="post" accept-charset="utf-8" class="form" role="form">  
      	<div class="pregresp">
		  <div class="pregunta">1. ¿Tiene frecuentes dolores de cabeza?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg1" value="1" /> Sí<br />
		    <input required type="radio" name="preg1" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">2. ¿Tiene mal apetito?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg2" value="1" /> Si<br />
		    <input required type="radio" name="preg2" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">3. ¿Duerme mal?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg3" value="1" /> Si<br />
		    <input required type="radio" name="preg3" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">4. ¿Se asusta con facilidad?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg4" value="1" /> Si<br />
		    <input required type="radio" name="preg4" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">5. ¿Sufre de temblor de manos?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg5" value="1" /> Si<br />
		    <input required type="radio" name="preg5" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">6. ¿Se siente nervioso, tenso o aburrido?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg6" value="1" /> Si<br />
		    <input required type="radio" name="preg6" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">7. ¿Sufre de mala digestion?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg7" value="1" /> Si<br />
		    <input required type="radio" name="preg7" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">8. ¿No puede pensar con claridad?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg8" value="1" /> Si<br />
		    <input required type="radio" name="preg8" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">9. ¿Se siente triste?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg9" value="1" /> Si<br />
		    <input required type="radio" name="preg9" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">10. ¿LLora usted con mucha frecuencia?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg10" value="1" /> Si<br />
		    <input required type="radio" name="preg10" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">11. ¿Tiene dificultad en disfrutar sus actividades diarias?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg11" value="1" /> Si<br />
		    <input required type="radio" name="preg11" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">12. ¿Tiene dificultad para tomar decisiones?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg12" value="1" /> Si<br />
		    <input required type="radio" name="preg12" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">13. ¿Tiene dificultad en hacer su trabajo?(¿Sufre usted con su trabajo?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg13" value="1" /> Si<br />
		    <input required type="radio" name="preg13" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">14. ¿Es incapaz de desempeñar un papel util en su vida?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg14" value="1" /> Si<br />
		    <input required type="radio" name="preg14" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">15. ¿Ha perdido interes en las cosas?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg15" value="1" /> Si<br />
		    <input required type="radio" name="preg15" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">16. ¿Siente que usted es una persona inutil?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg16" value="1" /> Si<br />
		    <input required type="radio" name="preg16" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">17. ¿Ha tenido la idea de acabar con su vida?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg17" value="1" /> Si<br />
		    <input required type="radio" name="preg17" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">18. ¿Se siente cansado todo el tiempo?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg18" value="1" /> Si<br />
		    <input required type="radio" name="preg18" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">19. ¿Tiene sensaciones desagradables en su estomago?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg19" value="1" /> Si<br />
		    <input required type="radio" name="preg19" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">20. ¿Se cansa con facilidad?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg20" value="1" /> Si<br />
		    <input required type="radio" name="preg20" value="2" /> No<br />
		  </div>
		</div>
		<hr class="featurette-divider">

		<div class="pregresp">
		  <div class="pregunta">21. ¿Siente usted que alguien ha tratado de herirlo en alguna forma?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg21" value="1" /> Si<br />
		    <input required type="radio" name="preg21" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">22. ¿Es usted una persona mucho mas importante de lo que piensan los demas?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg22" value="1" /> Si<br />
		    <input required type="radio" name="preg22" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">23. ¿Ha notado interferencias o algo raro en su pensamiento?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg23" value="1" /> Si<br />
		    <input required type="radio" name="preg23" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">24. ¿Oye voces sin saber de donde vienen o que otras personas no pueden oir?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg24" value="1" /> Si<br />
		    <input required type="radio" name="preg24" value="2" /> No<br />
		  </div>
		</div>
		<hr class="featurette-divider">

		<div class="pregresp">
		  <div class="pregunta">25. ¿Ha tenido convulsiones, ataques o caidas al suelo, con movimientos de brazos y piernas; con mordedura de la lengua o perdida del conocimiento?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg25" value="1" /> Si<br />
		    <input required type="radio" name="preg25" value="2" /> No<br />
		  </div>
		</div>

		<hr class="featurette-divider">

		<div class="pregresp">
		  <div class="pregunta">26. ¿Alguna vez le ha parecido a su familia, sus amigos, su medico o a su sacerdote que usted estaba bebiendo demasiado licor?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg26" value="1" /> Si<br />
		    <input required type="radio" name="preg26" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">27. ¿Alguna vez ha querido dejar de beber, pero no ha podido?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg27" value="1" /> Si<br />
		    <input required type="radio" name="preg27" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">28. ¿Ha tenido alguna vez dificultades en el trabajo (o estudio) a causa de la bebida, como beber en el trabajo o en el colegio, o faltar a ellos?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg28" value="1" /> Si<br />
		    <input required type="radio" name="preg28" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">29. ¿Ha estado en riñas o la han detenido estando borracho?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg29" value="1" /> Si<br />
		    <input required type="radio" name="preg29" value="2" /> No<br />
		  </div>
		</div>

		<div class="pregresp">
		  <div class="pregunta">30. ¿Le ha parecido alguna vez que usted bebia demasiado?<br />
		  </div>
		  <div class="respuestas">
		    <input required type="radio" name="preg30" value="1" /> Si<br />
		    <input required type="radio" name="preg30" value="2" /> No<br />
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