x<?php 
// Escribir en un archivo en modo escritura ('w')
// ¡Advertencia! El modo 'w' sobreescribe el archivo si ya existe.
// Verifica los permisos antes de escribir.

$dir = "../_files/"; // Directorio de práctica
$file = "datos1.txt"; // Nombre del archivo

if (is_writeable($dir.$file)) {
	// Abrir el archivo en modo escritura (sobrescribe el contenido)
	$archivo = fopen($dir.$file, "w");
	fwrite($archivo, "linea 1"."\n");
	fwrite($archivo, "linea 2"."\n");
	fwrite($archivo, "linea 3"."\n");
	fclose($archivo);
	echo "Se escribió en el archivo correctamente: $dir$file<br>";
} else {
	echo "No se puede grabar en el archivo. Verifica los permisos.<br>";
}
