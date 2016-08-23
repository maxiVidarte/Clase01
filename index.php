<html>
<head>
	<title></title>
</head>
<body>
<h1> hola mundo</h1>
<?php

$nombre = "maximiliano";
//echo '<h2>hola php soy $nombre</h2>';//con comillas simples lo que hace te pone el nombre de la variable. 
//echo "<H2>hola php soy $nombre</H2>";//con comillas dobles lo que hace pone el contenido de la variable.
//echo "<h2>hola php soy </h2>".$nombre; //con esto concateno de otra forma el texto 
//echo "hola php soy $nombre<Br>";//con este sigo la linea anterior


#con las siguientes lineas consigo hacer un random 10 veces
$veces = 10;
$contadorArray[]=0;

for ($i=0; $i < $veces; $i++)
{ 
//otra opcion del random es: $numero = rand().<br>;
$numero = rand(0,100);
switch ($numero) {
	case '0':
	$contadorArray[0]++;
		break;
	case '1':
	$contadorArray[1]++;
		break;
	case '2':
	$contadorArray[2]++;
		break;
	case '3':
	$contadorArray[3]++;
		break;
	case '4':
	$contadorArray[4]++;
		break;
	case '5':
	$contadorArray[5]++;
		break;
	case '6':
	$contadorArray[6]++;
		break;
	case '7':
	if(($contadorArray[7]*100/$veces)>5)
		{
			$i--;
			continue;
		}
		else
		{
		$contadorArray[7]++;			
		}
		break;
	case '8':
	$contadorArray[8]++;
		break;
	case '9':
	$contadorArray[9]++;
		break;
	default:
		# code...
		break;
}
//echo "<h5>mi numero random es : $numero</h5>";	
}
$porcentaje =$contadorArray[0]*100/$veces;
echo "<h4>El 0 aparecio $contadorArray[0] veces</h4>";
echo "<h4>En promedio serian</h4> $porcentaje %</h4>";
$porcentaje =$contadorArray[1]*100/$veces;
echo "<h4>El 1 aparecio $contadorArray[1] veces</h4>";
echo "<h4>En promedio serian</h4> $porcentaje %</h4>";
$porcentaje =$contadorArray[2]*100/$veces;
echo "<h4>El 2 aparecio $contadorArray[2] veces</h4>";
echo "<h4>En promedio serian</h4> $porcentaje %</h4>";
$porcentaje =$contadorArray[3]*100/$veces;
echo "<h4>El 3 aparecio $contador3 veces</h4>";
echo "<h4>En promedio serian</h4> $porcentaje %</h4>";
$porcentaje =$contadorArray[4]*100/$veces;
echo "<h4>El 4 aparecio $contador4 veces</h4>";
echo "<h4>En promedio serian</h4> $porcentaje %</h4>";
$porcentaje =$contadorArray[5]*100/$veces;
echo "<h4>El 5 aparecio $contador5 veces</h4>";
echo "<h4>En promedio serian</h4> $porcentaje %</h4>";
$porcentaje =$contadorArray[6]*100/$veces;
echo "<h4>El 6 aparecio $contador6 veces</h4>";
echo "<h4>En promedio serian</h4> $porcentaje %</h4>";
$porcentaje =$contadorArray[7]*100/$veces;
echo "<h4>El 7 aparecio $contador7 veces</h4>";
echo "<h4>En promedio serian</h4> $porcentaje %</h4>";
$porcentaje =$contadorArray[8]*100/$veces;
echo "<h4>El 8 aparecio $contador8 veces</h4>";
echo "<h4>En promedio serian</h4> $porcentaje %</h4>";
$porcentaje =$contadorArray[9]*100/$veces;
echo "<h4>El 9 aparecio $contador9 veces</h4>";
echo "<h4>En promedio serian</h4> $porcentaje %</h4>";
?>
</body>
</html>