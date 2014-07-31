<?php
require_once("cls_Datos.php");
class cls_Patologia{
	private $descrip_item;
	private $num_item;
	private $result_item;
	private $id_cat;


	private $Conteo=0;
	private $id_categoria;
	private $Conteo2=0;
	private $id_categoria2;
	private $Conteo3=0;
	private $id_categoria3;
	private $Conteo4=0;
	private $id_categoria4;
	
	public function __construct($descrip_item,$num_item,$result_item,$id_cat)
	{
		$this->descrip_item = $descrip_item;
		$this->num_item = $num_item;
		$this->result_item = $result_item;
		$this->id_cat = $id_cat;
	}
	
	public function __destruct(){
	
	}
	
	
	public function get_descrip_item(){
		return $this->descrip_item;
	}
	
	public function get_num_item(){
		return $this->num_item;
	}
	
	public function get_result_item(){
		return $this->result_item;
	}
	
	public function get_id_cat(){
		return $this->id_cat;
	}





	public function get_conteo(){
		return $this->Conteo;
	}
	
	public function get_id_categoria(){
		return $this->id_categoria;
	}
	public function get_conteo2(){
		return $this->Conteo2;
	}
	
	public function get_id_categoria2(){
		return $this->id_categoria2;
	}
	public function get_conteo3(){
		return $this->Conteo3;
	}
	
	public function get_id_categoria3(){
		return $this->id_categoria3;
	}
	public function get_conteo4(){
		return $this->Conteo4;
	}
	
	public function get_id_categoria4(){
		return $this->id_categoria4;
	}
	
	
	
	public function incluir(){
		$objDatos = new cls_Datos();
		$sql = "insert into item_valoracion(descrip_item,num_item,result_item,id_cat) values ('$this->descrip_item','$this->num_item','$this->result_item','$this->id_cat')";
		$objDatos->ejecutar($sql);
		$objDatos->cerrarconexion();
	}


	public function contar(){
		
		$objDatos = new cls_Datos();
		$sql = "select COUNT(*) Conteo, i.id_cat
				FROM item_valoracion i INNER JOIN categoria_preguntas c ON i.id_cat=c.id_cat
				WHERE result_item=1
				GROUP BY i.id_cat";
		$datos_desordenados = $objDatos->filtro($sql);
	
			while($columna = $objDatos->proximo($datos_desordenados)){
			
				$this->Conteo = $columna['Conteo'];
				$this->id_categoria = $columna['id_cat'];

				$this->Conteo2 = $columna['Conteo'];
				$this->id_categoria2 = $columna['id_cat'];

				$this->Conteo3 = $columna['Conteo'];
				$this->id_categoria3 = $columna['id_cat'];

				$this->Conteo4 = $columna['Conteo'];
				$this->id_categoria4 = $columna['id_cat'];
				
			}
			
			$objDatos->cerrarfiltro($datos_desordenados);
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
				$this->pass2_paciente = $columna['pass2_paciente'];
				$this->nac_paciente = $columna['nac_paciente'];
				$this->sex_paciente = $columna['sex_paciente'];
				$encontro = true;
			}
			
			$objDatos->cerrarfiltro($datos_desordenados);
			$objDatos->cerrarconexion();
			
			return $encontro;
	}

	
}
?>