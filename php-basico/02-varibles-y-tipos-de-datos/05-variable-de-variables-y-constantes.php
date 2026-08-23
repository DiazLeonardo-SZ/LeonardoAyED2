<!DOCTYPE html>
<html>
<head>
	<title>Variables de variables y constantes</title>
	<meta charset="utf-8">
</head>
<body>
	<h3>Constantes</h3>
	<?php 
		// Definir una constante con define
		define("DOLAR_BLUE", 935.53);
		$pesos = 20000;
		// Usar la constante en un cálculo
		echo $pesos." $ equivalen a: ".round( ($pesos / DOLAR_BLUE), 2)." Dólares";
	?>
	<h3>Variables de variables</h3>
	<?php  
		// Una variable cuyo nombre se almacena en otra variable
		$merlo = 580806;
		$ituzaingo = 180232;
		$ciudad = "merlo";
		// ${$ciudad} accede a la variable $merlo
		echo "<p>La población de la ciudad $ciudad es de ".${$ciudad}."</p>";
		$ciudad = "ituzaingo";
		echo "<p>La población de la ciudad $ciudad es de ".${$ciudad}."</p>";
		// Las variables variables pueden ser confusas, úsalas con precaución
	?>
</body>
</html>