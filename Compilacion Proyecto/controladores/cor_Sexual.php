<?php
require_once("../modelos/cls_Sexual.php");
//1
$lc_descrip_item='¿Como califica usted su CONFIANZA de lograr y mantener una erección?';
$lc_num_item=1;
$lc_result_item=$_POST['preg1'];
$lc_id_cat=6;
$lobjSexual = new cls_Sexual($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjSexual->incluir();


$sumador;


$sumador=$sumador+$lc_result_item;



//2
$lc_descrip_item='¿Cuando tuvo errecciones con estimulación sexual, ¿que tan FRECUENTE fueron lo suficientemente firmes para la penetración?';
$lc_num_item=2;
$lc_result_item=$_POST['preg2'];
$lc_id_cat=6;
$lobjSexual = new cls_Sexual($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjSexual->incluir();


$sumador=$sumador+$lc_result_item;




//3
$lc_descrip_item='¿Durante la relacion sexual, ¿que tan FRECUENTE tuvo usted la capacidad de mantener su erección despues de la penetración?';
$lc_num_item=3;
$lc_result_item=$_POST['preg3'];
$lc_id_cat=6;
$lobjSexual = new cls_Sexual($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjSexual->incluir();


$sumador=$sumador+$lc_result_item;



//4
$lc_descrip_item='Durante la relación sexual, ¿que tan DIFICIL fue mantener su erección para terminarla';
$lc_num_item=4;
$lc_result_item=$_POST['preg4'];
$lc_id_cat=6;
$lobjSexual = new cls_Sexual($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjSexual->incluir();



$sumador=$sumador+$lc_result_item;



//5
$lc_descrip_item='Cuando intentó tener relación sexual, ¿que tan FRECUENTE fue satisfactoria para usted';
$lc_num_item=5;
$lc_result_item=$_POST['preg5'];
$lc_id_cat=6;
$lobjSexual = new cls_Sexual($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjSexual->incluir();

$sumador=$sumador+$lc_result_item;






//los de 1
		if($sumador<=21){
			header("Location: ../sexual/respuesta2_sexual.php");
		}else{
			header("Location: ../sexual/respuesta2_sexual.php");
		}
		
	

?>