<?php 
// Agregar información a un archivo en modo append ('a')
// Si el archivo no existe, se crea automáticamente.
// Verifica los permisos antes de escribir.

$dir = "../_files/"; // Directorio de práctica
$file = "datos1.txt"; // Nombre del archivo

/* 
 abrir el archivo modo escritura "a" se utiliza para agregar 
 informacion al final del archivo
*/

if (is_writeable($dir.$file)) {

	$archivo = fopen($dir.$file, "a");

	fwrite($archivo, "linea 4"."\n");
	fwrite($archivo, "linea 5"."\n");
	fwrite($archivo, "linea 6"."\n");

	fclose($archivo);

	echo "Se agregó información al archivo correctamente: $dir$file<br>";

} else {

	echo "No se puede grabar en el archivo. Verifica los permisos.<br>";

}
