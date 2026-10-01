<?php

/* leerNotas() — tiene que abrir notas.txt, leer todas las líneas, y devolver un array
con cada línea (usando trim() para sacarle el \n sobrante a cada una).

Acordate del "dedo" que se mueve con fgets() + feof() que vimos antes —
la diferencia con lo que ya hiciste es que en vez de echo de cada línea,
la vas guardando en un array (podés usar [] para agregar un elemento al final
$array[] = $elemento;). */

function leerNotas(){

$direc = "data/notas.txt";
$file = fopen($direc, "r");
$notas = [];

while (($linea = fgets($file)) !== false) {
    $notas[] = trim($linea);
}

fclose($file);
return $notas;

}


$notas = leerNotas();
print_r($notas);

