<?php
/*
Ciclo while en PHP
Primero evalúa la condición, si es verdadera ejecuta el bloque, repite hasta que sea falsa.
*/
$contador = 1;
$veces = 10;
$x = true;

echo "<h3>Primer ciclo while</h3>";
while ($contador <= $veces) {
	echo "contador = ".$contador;
	echo "<br>";
	$contador ++;
}
echo "<p>Al salir del ciclo, contador = $contador</p>";

echo "<h3>Segundo ciclo while</h3>";
while ($x) {
	$contador ++;
	if ($contador == 15) {
		echo "contador = ".$contador;
		echo "<br>";
		$x = false;
	}
}
echo "<p>Al salir del ciclo, contador = $contador, x = ".($x ? 'true' : 'false')."</p>";

// Mostrar valores finales
echo "<hr>Valores finales:<br>";
var_dump($contador);
echo "<br>";
var_dump($veces);
echo "<br>";
var_dump($x);