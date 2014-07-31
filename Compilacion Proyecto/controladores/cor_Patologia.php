<?php
require_once("../modelos/cls_Patologia.php");
//1
$lc_descrip_item='¿Tiene frecuentes dolores de cabeza?';
$lc_num_item=1;
$lc_result_item=$_POST['preg1'];
$lc_id_cat=1;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();


$contador1;
$contador2;
$contador3;
$contador4;
if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}


//2
$lc_descrip_item='¿Tiene mal apetito?';
$lc_num_item=2;
$lc_result_item=$_POST['preg2'];
$lc_id_cat=1;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}



//3
$lc_descrip_item='¿Duerme mal?';
$lc_num_item=3;
$lc_result_item=$_POST['preg3'];
$lc_id_cat=1;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}


//4
$lc_descrip_item='¿Se asusta con facilidad?';
$lc_num_item=4;
$lc_result_item=$_POST['preg4'];
$lc_id_cat=1;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();


if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}


//5
$lc_descrip_item='¿Sufre de temblor de manos?';
$lc_num_item=5;
$lc_result_item=$_POST['preg5'];
$lc_id_cat=1;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);

$lobjPatologia->incluir();
if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}


//6
$lc_descrip_item='¿Se siente nervioso, tenso o aburrido?';
$lc_num_item=6;
$lc_result_item=$_POST['preg6'];
$lc_id_cat=1;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();
if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}

//7
$lc_descrip_item='¿Sufre de mala digestion?';
$lc_num_item=7;
$lc_result_item=$_POST['preg7'];
$lc_id_cat=1;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}

//8
$lc_descrip_item='¿No puede pensar con claridad?';
$lc_num_item=8;
$lc_result_item=$_POST['preg8'];
$lc_id_cat=1;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}

//9
$lc_descrip_item='¿Se siente triste?';
$lc_num_item=9;
$lc_result_item=$_POST['preg9'];
$lc_id_cat=1;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}

//10
$lc_descrip_item='¿LLora usted con mucha frecuencia?';
$lc_num_item=10;
$lc_result_item=$_POST['preg10'];
$lc_id_cat=1;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}
//11
$lc_descrip_item='¿Tiene dificultad en disfrutar sus actividades diarias?';
$lc_num_item=11;
$lc_result_item=$_POST['preg11'];
$lc_id_cat=1;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();


if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}
//12
$lc_descrip_item='¿Tiene dificultad para tomar decisiones?';
$lc_num_item=12;
$lc_result_item=$_POST['preg12'];
$lc_id_cat=1;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}

//13
$lc_descrip_item='¿Tiene dificultad en hacer su trabajo?(¿Sufre usted con su trabajo?';
$lc_num_item=13;
$lc_result_item=$_POST['preg13'];
$lc_id_cat=1;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}

//14
$lc_descrip_item='¿Es incapaz de desempeñar un papel util en su vida?';
$lc_num_item=14;
$lc_result_item=$_POST['preg14'];
$lc_id_cat=1;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}

//15
$lc_descrip_item='¿Ha perdido interes en las cosas?';
$lc_num_item=15;
$lc_result_item=$_POST['preg15'];
$lc_id_cat=1;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}

//16
$lc_descrip_item='¿Siente que usted es una persona inutil?';
$lc_num_item=16;
$lc_result_item=$_POST['preg16'];
$lc_id_cat=1;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}

//17
$lc_descrip_item='¿Ha tenido la idea de acabar con su vida?';
$lc_num_item=17;
$lc_result_item=$_POST['preg17'];
$lc_id_cat=1;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}

//18
$lc_descrip_item='¿Se siente cansado todo el tiempo?';
$lc_num_item=18;
$lc_result_item=$_POST['preg18'];
$lc_id_cat=1;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}

//19
$lc_descrip_item='¿Tiene sensaciones desagradables en su estomago?';
$lc_num_item=19;
$lc_result_item=$_POST['preg19'];
$lc_id_cat=1;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}

//20
$lc_descrip_item='¿Se cansa con facilidad?';
$lc_num_item=20;
$lc_result_item=$_POST['preg20'];
$lc_id_cat=1;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador1=$contador1+1;
}
//21
$lc_descrip_item='¿Siente usted que alguien ha tratado de herirlo en alguna forma?';
$lc_num_item=21;
$lc_result_item=$_POST['preg21'];
$lc_id_cat=2;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador2=$contador2+1;
}

//22
$lc_descrip_item='¿Es usted una persona mucho mas importante de lo que piensan los demas?';
$lc_num_item=22;
$lc_result_item=$_POST['preg22'];
$lc_id_cat=2;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();


if ($lc_result_item==1) {
	# code...
	$contador2=$contador2+1;
}
//23
$lc_descrip_item='¿Ha notado interferencias o algo raro en su pensamiento?';
$lc_num_item=23;
$lc_result_item=$_POST['preg23'];
$lc_id_cat=2;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador2=$contador2+1;
}

//24
$lc_descrip_item='¿Oye voces sin saber de donde vienen o que otras personas no pueden oir?';
$lc_num_item=24;
$lc_result_item=$_POST['preg24'];
$lc_id_cat=2;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador2=$contador2+1;
}
//25
$lc_descrip_item='¿Ha tenido convulsiones, ataques o caidas al suelo, con movimientos de brazos y piernas; con mordedura de la lengua o perdida del conocimiento?';
$lc_num_item=25;
$lc_result_item=$_POST['preg25'];
$lc_id_cat=3;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador3=$contador3+1;
}

//26
$lc_descrip_item='¿Alguna vez le ha parecido a su familia, sus amigos, su medico o a su sacerdote que usted estaba bebiendo demasiado licor?';
$lc_num_item=26;
$lc_result_item=$_POST['preg26'];
$lc_id_cat=4;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador4=$contador4+1;
}

//27
$lc_descrip_item='¿Alguna vez ha querido dejar de beber, pero no ha podido?';
$lc_num_item=27;
$lc_result_item=$_POST['preg27'];
$lc_id_cat=4;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador4=$contador4+1;
}

//28
$lc_descrip_item='¿Ha tenido alguna vez dificultades en el trabajo (o estudio) a causa de la bebida, como beber en el trabajo o en el colegio, o faltar a ellos?';
$lc_num_item=28;
$lc_result_item=$_POST['preg28'];
$lc_id_cat=4;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador4=$contador4+1;
}

//29
$lc_descrip_item='¿Ha estado en riñas o la han detenido estando borracho?';
$lc_num_item=29;
$lc_result_item=$_POST['preg29'];
$lc_id_cat=4;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador4=$contador4+1;
}

//30
$lc_descrip_item='¿Le ha parecido alguna vez que usted bebia demasiado?';
$lc_num_item=30;
$lc_result_item=$_POST['preg30'];
$lc_id_cat=4;
$lobjPatologia = new cls_Patologia($lc_descrip_item,$lc_num_item,$lc_result_item,$lc_id_cat);
$lobjPatologia->incluir();

if ($lc_result_item==1) {
	# code...
	$contador4=$contador4+1;
}


//los de 1
		if($contador1>=11){
			header("Location: ../psicopatologia/respuesta2_psicpatologia.php");
		}
		if($contador2>=1){
			header("Location: ../psicopatologia/respuesta3_psicpatologia.php");
		}
		if($contador3>=1){
			header("Location: ../psicopatologia/respuesta4_psicpatologia.php");
		}
		if($contador4>=1){
			header("Location: ../psicopatologia/respuesta5_psicpatologia.php");
		}
//los de 2
		if($contador1>=11 && $contador2>=1){
			header("Location: ../psicopatologia/respuesta6_psicpatologia.php");
		}

		if($contador1>=11 && $contador3>=1){
			header("Location: ../psicopatologia/respuesta7_psicpatologia.php");
		}

		if($contador1>=11 && $contador4>=1){
			header("Location: ../psicopatologia/respuesta8_psicpatologia.php");
		}
//los de 2
		if($contador2>=1 && $contador3>=1){
			header("Location: ../psicopatologia/respuesta9_psicpatologia.php");
		}
		if($contador2>=1 && $contador4>=1){
			header("Location: ../psicopatologia/respuesta10_psicpatologia.php");
		}

//los de 3
		if($contador3>=1 && $contador4>=1){
			header("Location: ../psicopatologia/respuesta11_psicpatologia.php");
		}
//los de 1 -3
		if($contador1>=11 && $contador2>=1 && $contador3>=1){
			header("Location: ../psicopatologia/respuesta12_psicpatologia.php");
		}
		if($contador1>=11 && $contador2>=1 && $contador4>=1){
			header("Location: ../psicopatologia/respuesta13_psicpatologia.php");
		}
		if($contador1>=11 && $contador3>=1 && $contador4>=1){
			header("Location: ../psicopatologia/respuesta14_psicpatologia.php");
		}
//los de 2 -4
		if($contador2>=1 && $contador3>=1 && $contador4>=1){
			header("Location: ../psicopatologia/respuesta15_psicpatologia.php");
		}
// los 4
		if($contador1>=11 && $contador2>=1 && $contador3>=1 && $contador4>=1){
			header("Location: ../psicopatologia/respuesta16_psicpatologia.php");
		}
		if ($contador1<11 && $contador2==0 && $contador3==0 && $contador4==0) {
			# code...
			header("Location: ../psicopatologia/respuesta1_psicpatologia.php");
		}
	

?>