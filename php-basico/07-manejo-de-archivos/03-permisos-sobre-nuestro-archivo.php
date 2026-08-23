<?php 
/*
Después de crear un archivo, es posible que debas darle permisos adecuados
si lo vas a modificar desde PHP o desde fuera del programa. También puedes
especificar el propietario y grupo propietario. ¡Cuidado! Cambiar permisos,
propietario o grupo puede afectar la seguridad del sistema.
*/

$dir = "../_files/"; // Directorio de práctica
$file = "datos1.txt"; // Nombre del archivo

if (touch($dir.$file)) {
	// Dar permisos de lectura, escritura y ejecución a todos (no recomendado en producción)
	chmod($dir.$file, 0777);
	// Cambiar propietario y grupo (requiere permisos de superusuario)
	chown($dir.$file, 1000);
	chgrp($dir.$file, 1000);
	echo "Se creó el archivo y se le dieron los permisos correspondientes.<br>";
} else {
	echo "No se pudo crear el archivo. Verifica los permisos del directorio.<br>";
}

if (file_exists($dir.$file)) {
	echo "Archivo existente: $dir$file<br>";
}
