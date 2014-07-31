<?php
require_once("../modelos/cls_Saludmental.php");
//1
$lc_descrip_item='¿Viste de manera extravagante?';
$lc_num_item=1;
$lc_result_item=$_POST['preg1'];
$lc_id_cat=11;
$lobjSaludmental = new cls_Saludmental($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjSaludmental->incluir();


$sumador;


$sumador=$sumador+$lc_result_item;



//2
$lc_descrip_item='¿Rehúye la limpieza?';
$lc_num_item=2;
$lc_result_item=$_POST['preg2'];
$lc_id_cat=11;
$lobjSaludmental = new cls_Saludmental($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjSaludmental->incluir();


$sumador=$sumador+$lc_result_item;




//3
$lc_descrip_item='¿Asume posturas corporales rígidas?';
$lc_num_item=3;
$lc_result_item=$_POST['preg3'];
$lc_id_cat=11;
$lobjSaludmental = new cls_Saludmental($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjSaludmental->incluir();


$sumador=$sumador+$lc_result_item;



//4
$lc_descrip_item='Sabe el día, mes y año en que se encuentra';
$lc_num_item=4;
$lc_result_item=$_POST['preg4'];
$lc_id_cat=12;
$lobjSaludmental = new cls_Saludmental($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjSaludmental->incluir();



$sumador=$sumador+$lc_result_item;



//5
$lc_descrip_item='Sabe en donde vive: qué Ciudad, cuál barrio y dirección';
$lc_num_item=5;
$lc_result_item=$_POST['preg5'];
$lc_id_cat=12;
$lobjSaludmental = new cls_Saludmental($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjSaludmental->incluir();

$sumador=$sumador+$lc_result_item;




//6
$lc_descrip_item='Piensa que es dominado por fuerzas extrañas';
$lc_num_item=5;
$lc_result_item=$_POST['preg5'];
$lc_id_cat=13;
$lobjSaludmental = new cls_Saludmental($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjSaludmental->incluir();

$sumador=$sumador+$lc_result_item;



//7
$lc_descrip_item='Ve cosas y/o fantasmas que para otras personas no existen en realidad';
$lc_num_item=5;
$lc_result_item=$_POST['preg5'];
$lc_id_cat=14;
$lobjSaludmental = new cls_Saludmental($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjSaludmental->incluir();

$sumador=$sumador+$lc_result_item;




//8
$lc_descrip_item='Cambia rápidamente de alegría a tristeza sin ninguna explicación';
$lc_num_item=5;
$lc_result_item=$_POST['preg5'];
$lc_id_cat=15;
$lobjSaludmental = new cls_Saludmental($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjSaludmental->incluir();

$sumador=$sumador+$lc_result_item;




//9
$lc_descrip_item='Se siente rechazado';
$lc_num_item=5;
$lc_result_item=$_POST['preg5'];
$lc_id_cat=16;
$lobjSaludmental = new cls_Saludmental($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjSaludmental->incluir();

$sumador=$sumador+$lc_result_item;




//10
$lc_descrip_item='Presenta pánico';
$lc_num_item=5;
$lc_result_item=$_POST['preg5'];
$lc_id_cat=16;
$lobjSaludmental = new cls_Saludmental($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjSaludmental->incluir();

$sumador=$sumador+$lc_result_item;




//11
$lc_descrip_item='No duerme o duerme mucho';
$lc_num_item=5;
$lc_result_item=$_POST['preg5'];
$lc_id_cat=17;
$lobjSaludmental = new cls_Saludmental($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjSaludmental->incluir();

$sumador=$sumador+$lc_result_item;




//12
$lc_descrip_item='Tiene terrores nocturnos o pesadillas';
$lc_num_item=5;
$lc_result_item=$_POST['preg5'];
$lc_id_cat=17;
$lobjSaludmental = new cls_Saludmental($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjSaludmental->incluir();

$sumador=$sumador+$lc_result_item;




//13
$lc_descrip_item='Se distrae cuando le están hablando';
$lc_num_item=5;
$lc_result_item=$_POST['preg5'];
$lc_id_cat=18;
$lobjSaludmental = new cls_Saludmental($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjSaludmental->incluir();

$sumador=$sumador+$lc_result_item;




//14
$lc_descrip_item='Se le olvidan las cosas diariamente y aunque se esfuerza, no las puede recordar.';
$lc_num_item=5;
$lc_result_item=$_POST['preg5'];
$lc_id_cat=19;
$lobjSaludmental = new cls_Saludmental($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjSaludmental->incluir();

$sumador=$sumador+$lc_result_item;



//15
$lc_descrip_item='Escucha voces que  otras personas no pueden escuchar';
$lc_num_item=5;
$lc_result_item=$_POST['preg5'];
$lc_id_cat=20;
$lobjSaludmental = new cls_Saludmental($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjSaludmental->incluir();

$sumador=$sumador+$lc_result_item;



//16
$lc_descrip_item='Siento que me tocan y no sé si ciertas sensaciones físicas que tengo';
$lc_num_item=5;
$lc_result_item=$_POST['preg5'];
$lc_id_cat=21;
$lobjSaludmental = new cls_Saludmental($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjSaludmental->incluir();

$sumador=$sumador+$lc_result_item;






//los de 1
		if($sumador>=47 && $sumador<=64){
			header("Location: ../saludmental/respuesta1_saludmental.php");
		}

		if ($sumador>=35 && $sumador<=46) {
			# code...
			header("Location: ../saludmental/respuesta2_saludmental.php");
		}

		if ($sumador>=23 && $sumador<=34) {
			# code...
			header("Location: ../saludmental/respuesta3_saludmental.php");
		}

		if ($sumador>=16 && $sumador<=22) {
			# code...
			header("Location: ../saludmental/respuesta4_saludmental.php");
		}
		
	

?>