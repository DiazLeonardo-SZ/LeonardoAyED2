<?php 
# Borrar un archivo en PHP usando unlink().
# ¡Advertencia! Esta operación es irreversible.

$dir = "../_files/"; // Directorio de práctica
$file = "datos.txt"; // Nombre del archivo

// Borrar el archivo
if (file_exists($dir.$file)) {
    unlink($dir.$file);
    // Comprobar si se borró
    if (!file_exists($dir.$file)) {
        echo "El archivo fue borrado correctamente: $dir$file<br>";
    } else {
        echo "No se pudo borrar el archivo.<br>";
    }
} else {
    echo "El archivo no existe, nada que borrar.<br>";
}
