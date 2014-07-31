<?php
require_once("cls_Datos.php");
class cls_Registro{
	private $nombre_paciente;
	private $apellido_paciente;
	private $user_paciente;
	private $email_paciente;
	private $pass_paciente;
	private $nac_paciente;
	private $sex_paciente;
	
	public function __construct($nombre_paciente,$apellido_paciente,$user_paciente,$email_paciente,$pass_paciente,$nac_paciente,$sex_paciente)
	{
		$this->nombre_paciente = $nombre_paciente;
		$this->apellido_paciente = $apellido_paciente;
		$this->user_paciente = $user_paciente;
		$this->email_paciente = $email_paciente;
		$this->pass_paciente = $pass_paciente;
		$this->nac_paciente = $nac_paciente;
		$this->sex_paciente = $sex_paciente;
	}

	
	
	public function __destruct(){
	
	}
	
	
	public function get_nombre_paciente(){
		return $this->nombre_paciente;
	}
	
	public function get_apellido_paciente(){
		return $this->apellido_paciente;
	}
	
	public function get_user_paciente(){
		return $this->user_paciente;
	}
	
	public function get_email_paciente(){
		return $this->email_paciente;
	}
	
	public function get_pass_paciente(){
		return $this->pass_paciente;
	}
	
	
	public function get_nac_paciente(){
		return $this->nac_paciente;
	}
	
	public function get_sex_paciente(){
		return $this->sex_paciente;
	}
	
	/*
	public function buscar(){
	$encontro = false;
	$objDatos = new clsDatos();
	$sql = "select *, date_format(fechanacimiento, '%d/%m/%Y') as fechanacimiento from tpersona where(cedula='$this->cedula')";
	$datos_desordenados = $objDatos->filtro($sql);
	
			if($columna = $objDatos->proximo($datos_desordenados)){
			
				$this->cedula = $columna['cedula'];
				$this->nombre = $columna['nombre'];
				$this->apellido = $columna['apellido'];
				$this->sexo = $columna['sexo'];
				$this->fecha_nacimiento = $columna['fechanacimiento'];
				$this->telefono = $columna['telefono'];
				$this->email = $columna['email'];
				$this->direccion = $columna['direccion'];
				$encontro = true;
			}
			
			$objDatos->cerrarfiltro($datos_desordenados);
			$objDatos->cerrarconexion();
			
			return $encontro;
	}
	
	
	public function incluir(){
		$objDatos = new clsDatos();
		$this->fecha_nacimiento = $objDatos->fechabd($this->fecha_nacimiento);
		$sql = "insert into tpersona(cedula,nombre,apellido,sexo,fechanacimiento,telefono,email,direccion) values ('$this->cedula','$this->nombre','$this->apellido','$this->sexo','$this->fecha_nacimiento','$this->telefono','$this->email','$this->direccion')";
		$objDatos->ejecutar($sql);
		$objDatos->cerrarconexion();
	}
	
	
	public function modificar(){
		$objDatos = new clsDatos();
		$sql = "update tpersona set nombre='$this->nombre', apellido='$this->apellido', sexo='$this->sexo', fechanacimiento='$this->fecha_nacimiento', telefono='$this->telefono', email='$this->email', direccion='$this->direccion' where(cedula='$this->cedula')";
		$objDatos->ejecutar($sql);
		$objDatos->cerrarconexion();
	}
	
	
	public function eliminar(){
		$objDatos = new clsDatos();
		$sql = "delete from tpersona where(cedula='$this->cedula')";
		$objDatos->ejecutar($sql);
		$objDatos->cerrarconexion();
	}
	*/
	public function incluir(){
		$objDatos = new cls_Datos();
		$sql = "insert into pacientes(nombre_paciente,apellido_paciente,user_paciente,email_paciente,pass_paciente,nac_paciente,sex_paciente) values ('$this->nombre_paciente','$this->apellido_paciente','$this->user_paciente','$this->email_paciente','$this->pass_paciente','$this->nac_paciente','$this->sex_paciente')";
		$objDatos->ejecutar($sql);
		$objDatos->cerrarconexion();
	}

	public function buscar(){
	$encontro = false;
	$objDatos = new cls_Datos();
	$sql = "select * from pacientes where(email_paciente='$this->email_paciente' or user_paciente='$this->user_paciente')";
	$datos_desordenados = $objDatos->filtro($sql);
	
			if($columna = $objDatos->proximo($datos_desordenados)){
			
				$this->nombre_paciente = $columna['nombre_paciente'];
				$this->apellido_paciente = $columna['apellido_paciente'];
				$this->user_paciente = $columna['user_paciente'];
				$this->email_paciente = $columna['email_paciente'];
				$this->pass_paciente = $columna['pass_paciente'];
				$this->nac_paciente = $columna['nac_paciente'];
				$this->sex_paciente = $columna['sex_paciente'];
				$encontro = true;
			}
			
			$objDatos->cerrarfiltro($datos_desordenados);
			$objDatos->cerrarconexion();
			
			return $encontro;
	}


	public function consultar_login(){
		$encontro = false;
		$objDatos = new cls_Datos();
		$sql = "select  user_paciente, pass_paciente from pacientes where(pass_paciente='$this->pass_paciente' or user_paciente='$this->user_paciente')";
		$datos_desordenados = $objDatos->filtro($sql);
		
				if($columna = $objDatos->proximo($datos_desordenados)){
				
					
					$this->user_paciente = $columna['user_paciente'];
					$this->pass_paciente = $columna['pass_paciente'];
					$encontro = true;
				}
				
				$objDatos->cerrarfiltro($datos_desordenados);
				$objDatos->cerrarconexion();
				
				return $encontro;
	}

}
?>