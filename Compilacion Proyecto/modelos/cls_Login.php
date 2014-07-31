<?php
require_once("cls_Datos.php");
class cls_Login{
	
	private $user_paciente;
	private $pass_paciente;
	
	public function __construct($user_paciente,$pass_paciente)
	{
		$this->user_paciente = $user_paciente;
		$this->pass_paciente = $pass_paciente;
	}
	
	public function __destruct(){
	
	}
	
	public function get_user_paciente(){
		return $this->user_paciente;
	}
	
	
	public function get_pass_paciente(){
		return $this->pass_paciente;
	}
	
	
	public function consultar_login(){
		$encontro = false;
		$objDatos = new cls_Datos();
		$sql = "select  user_paciente, pass_paciente from pacientes where(pass_paciente='$this->pass_paciente' and user_paciente='$this->user_paciente')";
		$datos_desordenados = $objDatos->filtro($sql);
		
				if($columna = $objDatos->proximo($datos_desordenados)){
				
					
					$this->user_paciente = $columna['user_paciente'];
					$this->pass_paciente = $columna['pass_paciente'];
					$_SESSION["user_paciente"] = $columna['user_paciente'];//Se crea la sesión	usuario	
					$encontro = true;
				}
				
				$objDatos->cerrarfiltro($datos_desordenados);
				$objDatos->cerrarconexion();
				
				return $encontro;
	}

}
?>