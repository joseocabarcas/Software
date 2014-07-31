<?php
require_once("../modelos/cls_Depresion.php");
//1
$lc_descrip_item='¿¿Esta usted basicamente satisfecho con su vida??';
$lc_num_item=1;
$lc_result_item=$_POST['preg1'];
$lc_id_cat=8;
$lobjDepresion = new cls_Depresion($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjDepresion->incluir();


$contador1;
$contador2;

if ($lc_result_item==2) {
	# code...
	$contador1=$contador1+1;
}


//2
$lc_descrip_item='¿Ha disminuido o abandonado muchos de sus intereses o actividades previas?';
$lc_num_item=2;
$lc_result_item=$_POST['preg2'];
$lc_id_cat=8;
$lobjDepresion = new cls_Depresion($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjDepresion->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}




//3
$lc_descrip_item='¿Siente que su vida esta vacia?';
$lc_num_item=3;
$lc_result_item=$_POST['preg3'];
$lc_id_cat=8;
$lobjDepresion = new cls_Depresion($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjDepresion->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}


//4
$lc_descrip_item='¿Se siente aburrido frecuentemente?';
$lc_num_item=4;
$lc_result_item=$_POST['preg4'];
$lc_id_cat=8;
$lobjDepresion = new cls_Depresion($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjDepresion->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}


//5
$lc_descrip_item='¿Esta usted de buen ánimo la mayoria del tiempo?';
$lc_num_item=5;
$lc_result_item=$_POST['preg5'];
$lc_id_cat=8;
$lobjDepresion = new cls_Depresion($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);

$lobjDepresion->incluir();
if ($lc_result_item==2) {
	# code...
	$contador1=$contador1+1;
}


//6
$lc_descrip_item='¿Esta preocupado o teme que algo malo le va a pasar?';
$lc_num_item=6;
$lc_result_item=$_POST['preg6'];
$lc_id_cat=8;
$lobjDepresion = new cls_Depresion($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjDepresion->incluir();
if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}


//7
$lc_descrip_item='¿Se siente feliz la mayor parte del tiempo?';
$lc_num_item=7;
$lc_result_item=$_POST['preg7'];
$lc_id_cat=8;
$lobjDepresion = new cls_Depresion($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjDepresion->incluir();

if ($lc_result_item==2) {
	# code...
	$contador1=$contador1+1;
}


//8
$lc_descrip_item='¿Se siente con frecuencia desamparado, que no vale nada o desvalido?';
$lc_num_item=8;
$lc_result_item=$_POST['preg8'];
$lc_id_cat=8;
$lobjDepresion = new cls_Depresion($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjDepresion->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}


//9
$lc_descrip_item='¿Prefiere usted quedarse en casa en vez de salir a hacer cosas nuevas?';
$lc_num_item=9;
$lc_result_item=$_POST['preg9'];
$lc_id_cat=8;
$lobjDepresion = new cls_Depresion($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjDepresion->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}


//10
$lc_descrip_item='¿Siente usted que tiene mas problemas con su memoria que otras personas de su edad?';
$lc_num_item=10;
$lc_result_item=$_POST['preg10'];
$lc_id_cat=8;
$lobjDepresion = new cls_Depresion($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjDepresion->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}

//11
$lc_descrip_item='¿Cree usted que es maravilloso estar vivo?';
$lc_num_item=11;
$lc_result_item=$_POST['preg11'];
$lc_id_cat=8;
$lobjDepresion = new cls_Depresion($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjDepresion->incluir();


if ($lc_result_item==2) {
	# code...
	$contador1=$contador1+1;
}

//12
$lc_descrip_item='¿Se siente inútil o despreciable como está usted actualmente?';
$lc_num_item=12;
$lc_result_item=$_POST['preg12'];
$lc_id_cat=8;
$lobjDepresion = new cls_Depresion($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjDepresion->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}


//13
$lc_descrip_item='¿Se siente lleno de energía?';
$lc_num_item=13;
$lc_result_item=$_POST['preg13'];
$lc_id_cat=8;
$lobjDepresion = new cls_Depresion($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjDepresion->incluir();

if ($lc_result_item==2) {
	# code...
	$contador1=$contador1+1;
}


//14
$lc_descrip_item='¿Se encuentra sin esperanzas ante su situación actual?';
$lc_num_item=14;
$lc_result_item=$_POST['preg14'];
$lc_id_cat=8;
$lobjDepresion = new cls_Depresion($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjDepresion->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}


//15
$lc_descrip_item='¿Cree usted que las otras personas están, en generak, mejor que usted?';
$lc_num_item=15;
$lc_result_item=$_POST['preg15'];
$lc_id_cat=8;
$lobjDepresion = new cls_Depresion($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjDepresion->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}



//los de 1
		if($contador1<=5){
			header("Location: ../depresion/respuesta1_depresion.php");
		}
		if ($contador1>=6 && $contador1<=10) {
			header("Location: ../depresion/respuesta2_depresion.php");
		}
		if($contador1>=11){
			header("Location: ../depresion/respuesta3_depresion.php");
		}

	

?>