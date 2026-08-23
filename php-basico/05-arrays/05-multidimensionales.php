<?php
/*
Podemos combinar arreglos con índices numéricos o asociativos.
Un array multidimensional es un array que contiene otros arrays.
*/

$ciudades = array(
	["México","CDMX","Guadalajara","Monterrey"],
	["España","Madrid","Barcelona","Bilbao"],
	["Colombia","Bogotá","Bucaramanga","Medellin"],
	["Perú","Lima","Cuzco","Arequipa", "Chiclayo", "Ayacucho"]
);

echo "<b>Array multidimensional de ciudades:</b><br>";
var_dump($ciudades);
echo "<br><br>Recorriendo el array multidimensional:<br>";
for($i = 0; $i < count($ciudades); $i++){
	print "<ul>";
	for($j=0; $j < count($ciudades[$i]); $j++){
		print "<li>".$ciudades[$i][$j]."</li>";
	}
	print "</ul>";
}

echo "<br>Acceso directo a un valor específico:<br>";
echo "La ciudad principal de Colombia es: ".$ciudades[2][1]."<br>";