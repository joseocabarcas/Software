<?php
require_once("cls_Datos.php");
class cls_Sexual{
	private $descrip_item;
	private $num_item;
	private $result_item;
	private $id_cat;


	
	
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


	
	
	
	public function incluir(){
		$objDatos = new cls_Datos();
		$sql = "insert into item_valoracion(descrip_item,num_item,result_item,id_cat) values ('$this->descrip_item','$this->num_item','$this->result_item','$this->id_cat')";
		$objDatos->ejecutar($sql);
		$objDatos->cerrarconexion();
	}


	


	

	
}
?>