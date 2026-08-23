<?php 
/**
 * Crear un archivo en PHP usando touch().
 * Es importante tener permisos de escritura en el directorio.
 * Si el archivo ya existe, touch() actualiza su fecha de modificación.
 * @link https://www.php.net/manual/en/ref.filesystem.php
 */

$dir = "../_files/"; // Directorio de práctica
$file = "datos.txt"; // Nombre del archivo

// Crear el archivo
touch($dir.$file);

// Comprobar si se creó el archivo
if (file_exists($dir.$file)) {
    echo "El archivo se creó correctamente: $dir$file<br>";
} else {
    echo "No se pudo crear el archivo. Verifica los permisos del directorio.<br>";
}

