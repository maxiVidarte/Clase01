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
$contador0 =0;
$contador1 = 0;
$contador2 = 0;
$contador3 = 0;
$contador4 = 0;
$contador5 = 0;
$contador6 = 0;
$contador7 = 0;
$contador8 = 0;
$contador9 = 0;

for ($i=0; $i < $veces; $i++)
{ 
//otra opcion del random es: $numero = rand().<br>;
$numero = rand(0,100);
switch ($numero) {
	case '0':
	$contador0++;
		break;
	case '1':
	$contador1++;
		break;
	case '2':
	$contador2++;
		break;
	case '3':
	$contador3++;
		break;
	case '4':
	$contador4++;
		break;
	case '5':
	$contador5++;
		break;
	case '6':
	$contador6++;
		break;
	case '7':
	if(($contador7*100/$veces)>5)
		{
			$i--;
			continue;
		}
		else
		{
		$contador7++;			
		}
		break;
	case '8':
	$contador8++;
		break;
	case '9':
	$contador9++;
		break;
	default:
		# code...
		break;
}
//echo "<h5>mi numero random es : $numero</h5>";	
}
$porcentaje =$contador0*100/$veces;
echo "<h4>El 0 aparecio $contador0 veces</h4>";
echo "<h4>En promedio serian</h4> $porcentaje %</h4>";
$porcentaje =$contador1*100/$veces;
echo "<h4>El 1 aparecio $contador1 veces</h4>";
echo "<h4>En promedio serian</h4> $porcentaje %</h4>";
$porcentaje =$contador2*100/$veces;
echo "<h4>El 2 aparecio $contador2 veces</h4>";
echo "<h4>En promedio serian</h4> $porcentaje %</h4>";
$porcentaje =$contador3*100/$veces;
echo "<h4>El 3 aparecio $contador3 veces</h4>";
echo "<h4>En promedio serian</h4> $porcentaje %</h4>";
$porcentaje =$contador4*100/$veces;
echo "<h4>El 4 aparecio $contador4 veces</h4>";
echo "<h4>En promedio serian</h4> $porcentaje %</h4>";
$porcentaje =$contador5*100/$veces;
echo "<h4>El 5 aparecio $contador5 veces</h4>";
echo "<h4>En promedio serian</h4> $porcentaje %</h4>";
$porcentaje =$contador6*100/$veces;
echo "<h4>El 6 aparecio $contador6 veces</h4>";
echo "<h4>En promedio serian</h4> $porcentaje %</h4>";
$porcentaje =$contador7*100/$veces;
echo "<h4>El 7 aparecio $contador7 veces</h4>";
echo "<h4>En promedio serian</h4> $porcentaje %</h4>";
$porcentaje =$contador8*100/$veces;
echo "<h4>El 8 aparecio $contador8 veces</h4>";
echo "<h4>En promedio serian</h4> $porcentaje %</h4>";
$porcentaje =$contador9*100/$veces;
echo "<h4>El 9 aparecio $contador9 veces</h4>";
echo "<h4>En promedio serian</h4> $porcentaje %</h4>";
?>
</body>
</html>