<?php
/*
Ciclo do-while en PHP
Primero ejecuta el bloque, luego evalúa la condición. El bloque se ejecuta al menos una vez.
*/
$contador = 1;
$veces = 10;
$x = true;

echo "<h3>Primer ciclo do-while</h3>";
do {
	echo "contador = ".$contador;
	echo "<br>";
	$contador ++;
} while ($contador <= $veces);
echo "<p>Al salir del ciclo, contador = $contador</p>";

echo "<h3>Segundo ciclo do-while</h3>";
do {
	echo "contador = ".$contador;
	echo "<br>";
	$x = false;
} while ($x);
echo "<p>Al salir del ciclo, contador = $contador, x = ".($x ? 'true' : 'false')."</p>";
