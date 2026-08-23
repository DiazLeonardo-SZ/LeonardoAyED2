<?php 
/*
Ciclo for en PHP
Permite repetir un bloque de código un número determinado de veces.
*/
$veces = 10;
$array = [2,4,"rojo","amarillo", "color" => "verde",10];

echo "<h3>Primer ciclo for</h3>";
for ($i=0; $i < $veces ; $i++) { 
	echo "ciclo n°: ".$i;
	echo "<br>";
}
echo "<p>Al salir del ciclo, i = $i</p>";

echo "<h3>Recorriendo un array con for</h3>";
for ($i=0; $i < count($array) ; $i++) { 
	echo "Elemento $i: ".$array[$i];
	echo "<br>";
}
echo "<p>Al salir del ciclo, i = $i</p>";