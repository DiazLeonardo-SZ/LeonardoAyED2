<?php 
/**
 * Uso del operador de supresión de errores @ en PHP.
 * ¡Advertencia! No uses @ para ocultar errores importantes. Es mejor validar y manejar errores adecuadamente.
 * @link https://www.php.net/manual/es/language.operators.errorcontrol.php
 */

// Intentar abrir un archivo que no existe
$archivo = @fopen("archivo_que_no_existe.txt", "r");

if ($archivo === false) {
    echo "<b>No se pudo abrir el archivo.</b><br>";
} else {
    echo "Archivo abierto correctamente.<br>";
    fclose($archivo);
}

// ¡Advertencia! El operador @ solo debe usarse en casos muy justificados. 