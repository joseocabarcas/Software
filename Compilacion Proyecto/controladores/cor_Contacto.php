<?php
require_once("../modelos/cls_Contacto.php");
$name=$_POST['name'];
$email=$_POST['email'];
$opcion=$_POST['option'];
$message=$_POST['message'];







	$lobjRegistro = new cls_Registro($name,$email,$opcion,$message);

	
		$lobjRegistro->incluir();
		header("Location: ../vistas/about.php");
	
	 





?>