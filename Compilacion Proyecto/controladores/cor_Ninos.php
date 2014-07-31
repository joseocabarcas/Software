<?php
require_once("../modelos/cls_Ninos.php");
//1
$lc_descrip_item='¿¿El lenguaje del niño(a) es anormal en alguna forma??';
$lc_num_item=1;
$lc_result_item=$_POST['preg1'];
$lc_id_cat=5;
$lobjNinos = new cls_Ninos($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjNinos->incluir();


$contador1;

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}


//2
$lc_descrip_item='¿El niño(a) duerme mal?';
$lc_num_item=2;
$lc_result_item=$_POST['preg2'];
$lc_id_cat=5;
$lobjNinos = new cls_Ninos($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjNinos->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}



//3
$lc_descrip_item='¿Ha tenido el niño(a) en algunas ocasiones convulsiones o caidas al suelo sin razon?';
$lc_num_item=3;
$lc_result_item=$_POST['preg3'];
$lc_id_cat=5;
$lobjNinos = new cls_Ninos($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjNinos->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}


//4
$lc_descrip_item='¿Sufre el niño(a) de dolores frecuentes de cabeza?';
$lc_num_item=4;
$lc_result_item=$_POST['preg4'];
$lc_id_cat=5;
$lobjNinos = new cls_Ninos($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjNinos->incluir();


if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}


//5
$lc_descrip_item='¿El niño(a) ha huido de la casa frecuentemente?';
$lc_num_item=5;
$lc_result_item=$_POST['preg5'];
$lc_id_cat=5;
$lobjNinos = new cls_Ninos($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);

$lobjNinos->incluir();
if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}


//6
$lc_descrip_item='¿Ha robado cosas de la casa?';
$lc_num_item=6;
$lc_result_item=$_POST['preg6'];
$lc_id_cat=5;
$lobjNinos = new cls_Ninos($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjNinos->incluir();
if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}

//7
$lc_descrip_item='¿Se asusta o se pone nervioso(a) sin razon?';
$lc_num_item=7;
$lc_result_item=$_POST['preg7'];
$lc_id_cat=5;
$lobjNinos = new cls_Ninos($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjNinos->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}

//8
$lc_descrip_item='¿Parece como retardado(a) o lento(a) para aprender?';
$lc_num_item=8;
$lc_result_item=$_POST['preg8'];
$lc_id_cat=5;
$lobjNinos = new cls_Ninos($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjNinos->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}

//9
$lc_descrip_item='¿El (la) niño(a) casi nunca juega con otros niños(as)?';
$lc_num_item=9;
$lc_result_item=$_POST['preg9'];
$lc_id_cat=5;
$lobjNinos = new cls_Ninos($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjNinos->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}

//10
$lc_descrip_item='¿El niño(a) se orina o defeca en la ropa?';
$lc_num_item=10;
$lc_result_item=$_POST['preg10'];
$lc_id_cat=5;
$lobjNinos = new cls_Ninos($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjNinos->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}


//los de 1
		if($contador1>=1){
			header("Location: ../ninos/respuesta2_ninos.php");
		}
		if($contador1==0){
			header("Location: ../ninos/respuesta1_ninos.php");
		}
		
	

?>