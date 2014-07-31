<?php
require_once("../modelos/cls_Enamoramiento.php");
//1
$lc_descrip_item='¿Piensa constantemente en esa persona?';
$lc_num_item=1;
$lc_result_item=$_POST['preg1'];
$lc_id_cat=7;
$lobjEnamoramiento = new cls_Enamoramiento($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjEnamoramiento->incluir();


$contador1;
$contador2;

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}else{
	$contador2=$contador2+1;
}


//2
$lc_descrip_item='¿Desea verla?';
$lc_num_item=2;
$lc_result_item=$_POST['preg2'];
$lc_id_cat=7;
$lobjEnamoramiento = new cls_Enamoramiento($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjEnamoramiento->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}else{
	$contador2=$contador2+1;
}




//3
$lc_descrip_item='¿Le ves y sientes una emoción muy especial?';
$lc_num_item=3;
$lc_result_item=$_POST['preg3'];
$lc_id_cat=7;
$lobjEnamoramiento = new cls_Enamoramiento($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjEnamoramiento->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}else{
	$contador2=$contador2+1;
}


//4
$lc_descrip_item='¿Si no le ves la extrañas?';
$lc_num_item=4;
$lc_result_item=$_POST['preg4'];
$lc_id_cat=7;
$lobjEnamoramiento = new cls_Enamoramiento($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjEnamoramiento->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}else{
	$contador2=$contador2+1;
}


//5
$lc_descrip_item='¿Añoras a esta persona?';
$lc_num_item=5;
$lc_result_item=$_POST['preg5'];
$lc_id_cat=7;
$lobjEnamoramiento = new cls_Enamoramiento($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);

$lobjEnamoramiento->incluir();
if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}else{
	$contador2=$contador2+1;
}


//6
$lc_descrip_item='¿Dedicas un buen tiempo a fantasear, recordarle y recrear imagenes de experiencias vividas con ella, etc...?';
$lc_num_item=6;
$lc_result_item=$_POST['preg6'];
$lc_id_cat=7;
$lobjEnamoramiento = new cls_Enamoramiento($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjEnamoramiento->incluir();
if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}else{
	$contador2=$contador2+1;
}


//7
$lc_descrip_item='¿Si vas a alguna parte te gustaria que ella pudiera estar presente y compartir con ella este momento?';
$lc_num_item=7;
$lc_result_item=$_POST['preg7'];
$lc_id_cat=7;
$lobjEnamoramiento = new cls_Enamoramiento($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjEnamoramiento->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}else{
	$contador2=$contador2+1;
}


//8
$lc_descrip_item='¿Te agrada incluirla en tus planes y que a su vez te incluya en los suyos?';
$lc_num_item=8;
$lc_result_item=$_POST['preg8'];
$lc_id_cat=7;
$lobjEnamoramiento = new cls_Enamoramiento($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjEnamoramiento->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}else{
	$contador2=$contador2+1;
}


//9
$lc_descrip_item='¿Sientes que esta persona te llena especialmente, que ella es especial, que solo a ella le adjudicas ese poder de especialidad?';
$lc_num_item=9;
$lc_result_item=$_POST['preg9'];
$lc_id_cat=7;
$lobjEnamoramiento = new cls_Enamoramiento($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjEnamoramiento->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}else{
	$contador2=$contador2+1;
}


//10
$lc_descrip_item='¿Varias cosas, eventos o situaciones te recuerdan a ella?';
$lc_num_item=10;
$lc_result_item=$_POST['preg10'];
$lc_id_cat=7;
$lobjEnamoramiento = new cls_Enamoramiento($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjEnamoramiento->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}else{
	$contador2=$contador2+1;
}

//11
$lc_descrip_item='¿Sientes como una urgencia por verla?';
$lc_num_item=11;
$lc_result_item=$_POST['preg11'];
$lc_id_cat=7;
$lobjEnamoramiento = new cls_Enamoramiento($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjEnamoramiento->incluir();


if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}else{
	$contador2=$contador2+1;
}

//12
$lc_descrip_item='¿Deseas estar con esa persona la mayor parte del tiempo posible?';
$lc_num_item=12;
$lc_result_item=$_POST['preg12'];
$lc_id_cat=7;
$lobjEnamoramiento = new cls_Enamoramiento($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjEnamoramiento->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}else{
	$contador2=$contador2+1;
}


//13
$lc_descrip_item='¿El sólo hecho de saber que le verás y estaras con ella te emociona?';
$lc_num_item=13;
$lc_result_item=$_POST['preg13'];
$lc_id_cat=7;
$lobjEnamoramiento = new cls_Enamoramiento($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjEnamoramiento->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}else{
	$contador2=$contador2+1;
}


//14
$lc_descrip_item='¿Experimentas deseos de encantarle, cautivarle y sorprenderle?';
$lc_num_item=14;
$lc_result_item=$_POST['preg14'];
$lc_id_cat=7;
$lobjEnamoramiento = new cls_Enamoramiento($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjEnamoramiento->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}else{
	$contador2=$contador2+1;
}


//15
$lc_descrip_item='¿Dejas de hacer deberes importantes en tu trabajo, estudios, etc. por pensar en ella, verle o compartir con ella?';
$lc_num_item=15;
$lc_result_item=$_POST['preg15'];
$lc_id_cat=7;
$lobjEnamoramiento = new cls_Enamoramiento($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjEnamoramiento->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}else{
	$contador2=$contador2+1;
}


//16
$lc_descrip_item='¿Escribe frases, pensamientos y poemas con mas facilidad?';
$lc_num_item=16;
$lc_result_item=$_POST['preg16'];
$lc_id_cat=7;
$lobjEnamoramiento = new cls_Enamoramiento($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjEnamoramiento->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}else{
	$contador2=$contador2+1;
}


//17
$lc_descrip_item='¿Sientes incrementada tu creatividad emocional para expresar tus sentimientos?';
$lc_num_item=17;
$lc_result_item=$_POST['preg17'];
$lc_id_cat=7;
$lobjEnamoramiento = new cls_Enamoramiento($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjEnamoramiento->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}else{
	$contador2=$contador2+1;
}


//18
$lc_descrip_item='¿Buscas hacer contacto con ella de diversas formas y con la mayor frecuencia posible: por escrito, en persona, por telefono, email, etc.?';
$lc_num_item=18;
$lc_result_item=$_POST['preg18'];
$lc_id_cat=7;
$lobjEnamoramiento = new cls_Enamoramiento($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjEnamoramiento->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}else{
	$contador2=$contador2+1;
}





//los de 1
		if($contador1>$contador2){
			header("Location: ../enamoramiento/respuesta2_enamoramiento.php");
		}else{
			header("Location: ../enamoramiento/respuesta1_enamoramiento.php");
		}

	

?>