<?php
require_once("cls_Datos.php");
class cls_Registro{
	
	private $name;
	private $email;
	private $opcion;
	private $message;
	
	
	public function __construct($name,$email,$opcion,$message)
	{
		$this->name = $name;
		$this->email = $email;
		$this->opcion = $opcion;
		$this->message = $message;
		
	}

	
	
	public function __destruct(){
	
	}
	
	
	public function get_name(){
		return $this->name;
	}
	
	public function get_email(){
		return $this->email;
	}
	
	public function get_opcion(){
		return $this->opcion;
	}
	
	public function get_message(){
		return $this->message;
	}
	
	
	
	
	public function incluir(){
		$objDatos = new cls_Datos();
		$sql = "insert into contactos(name,email,opcion,message) values ('$this->name','$this->email','$this->opcion','$this->message')";
		$objDatos->ejecutar($sql);
		$objDatos->cerrarconexion();
	}

	



}
?>