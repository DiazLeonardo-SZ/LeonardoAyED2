<?php
/*
require es idéntico a include excepto que en caso de fallo producirá 
un error fatal y detiene el script.
require_once solo incluye el archivo si no ha sido incluido antes.
*/

echo "Hacemos require del archivo de 01-if-else.php";
echo "<br><br>";

require '01-if-else.php'; // Si el archivo no existe, el script se detiene

/* 
require_once, si el código del fichero ya ha sido incluido, 
no se volverá a incluir
*/

require_once '01-if-else.php'; // Solo se incluye una vez
require_once '02-switch.php';

// Si el archivo no existe, el script se detiene
echo "aca seguiria el codigo";
