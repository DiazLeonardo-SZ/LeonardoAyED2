<?php 
// Copiar un archivo en PHP usando copy()
// ¡Advertencia! Si el archivo de destino existe, será sobrescrito.

$dir = "../_files/"; // Directorio de práctica
$file = "datos1.txt"; // Nombre del archivo
$bkp = "datos1.txt.bk"; // Nombre del archivo de backup

/*
 Copiar un archivo para poder hacer, como por ejemplo, un BKP.
 utilizamos un if para poder informar si se copio o no.
*/

if (copy($dir.$file, $dir.$bkp)) {
	echo "Se copió el archivo correctamente: $dir$file → $dir$bkp<br>";
} else {
	echo "No se pudo copiar el archivo. Verifica los permisos.<br>";
}