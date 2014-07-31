<?php
require_once("../modelos/cls_Registro.php");
$lc_nombre_paciente=$_POST['firstname'];
$lc_apellido_paciente=$_POST['lastname'];
$lc_user_paciente=$_POST['user'];
$lc_email_paciente=$_POST['email'];
$lc_pass_paciente=$_POST['password'];
$a = $_POST['year'];
$b = $_POST['month'];
$c = $_POST['day'];
$lc_nac_paciente=$a.$b.$c;
$lc_sex_paciente=$_POST['gender'];






	$lobjRegistro = new cls_Registro($lc_nombre_paciente,$lc_apellido_paciente,$lc_user_paciente,$lc_email_paciente,$lc_pass_paciente,$lc_nac_paciente,$lc_sex_paciente);

	if($lobjRegistro->buscar()){
			header("Location: ../vistas/error.php");
	}else{
		$lobjRegistro->incluir();
		header("Location: ../vistas/login.php");
	}
	 





?>