<?php 
// Renombrar un archivo en PHP usando rename()
// Si el archivo de destino existe, será sobrescrito.

$dir = "../_files/"; // Directorio de práctica
$file = "datos1.txt.bk"; // Nombre del archivo original
$nuevo = "datos_bk.txt"; // Nuevo nombre del archivo

if (rename($dir.$file, $dir.$nuevo)) {
    echo "Se renombró el archivo correctamente: $dir$file → $dir$nuevo<br>";
} else {
    echo "No se pudo renombrar el archivo. Verifica los permisos.<br>";
}