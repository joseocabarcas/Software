<?php
session_start();
?>
<?php
require_once("../modelos/cls_Login.php");
$lc_user_paciente=$_POST['user'];
$lc_pass_paciente=$_POST['password'];



$lobjRegistro = new cls_Login($lc_user_paciente,$lc_pass_paciente);

if($lobjRegistro->consultar_login()){
		header("Location: ../vistas/inicio.php");
}
else{
	header("Location: ../vistas/errorLogin.php");
}

?>