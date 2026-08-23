<?php 
/*
La sentencia include incluye y evalúa el archivo especificado.
Si el archivo no existe, muestra un warning pero el script sigue.
include_once solo incluye el archivo si no ha sido incluido antes.
*/

echo "Incluiremos el archivo de 01-if-else.php";
echo "<br><br>";

include '01-if-else.php'; // Incluye el archivo, aunque se incluya varias veces

/* 
include_once, si el código del fichero ya ha sido incluido, 
no se volverá a incluir
*/

include_once '01-if-else.php'; // Solo se incluye una vez
include_once '02-switch.php';

// Si el archivo no existe, muestra un warning pero el script sigue
echo "aca seguiria el codigo";
