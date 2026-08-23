<?php 
/*
Para recorrer un array lo más recomendable es utilizar un ciclo llamado foreach.
foreach recorre todos los elementos del array, permitiendo acceder tanto a la clave como al valor.
*/

$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio",
"Agosto","Septiembre","Octubre","Noviembre","Diciembre");

echo "<b>Array de meses:</b><br>";
var_dump($meses);
echo "<br><br>Recorriendo con clave y valor:<br>";
foreach ($meses as $key => $value) {
    echo "Índice: $key, Valor: $value<br>";
}

echo "<br>Recorriendo solo valores:<br>";
foreach ($meses as $value) {
    echo $value."<br>";
}

// Mostrar el total de elementos
echo "<br>Total de meses: ".count($meses);