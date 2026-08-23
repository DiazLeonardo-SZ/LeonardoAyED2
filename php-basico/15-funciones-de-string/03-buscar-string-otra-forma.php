<?php 
/**
 * Buscar la posición de un string dentro de otro con strpos() y stripos()
 * strpos() es sensible a mayúsculas/minúsculas, stripos() no lo es.
 * Devuelven la posición numérica de la primera coincidencia o false si no existe.
 *
 * ¡Advertencia! Usa comparación estricta (=== false) para evitar errores.
 *
 * @link https://www.php.net/manual/es/function.strpos.php
 * @link https://www.php.net/manual/es/function.stripos.php
 */

$donde = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

$que_busco = "aliquip ex ea commodo";
$que_busco_M = "ALIQUIP EX EA COMMODO";
$otro = "Andres";

// Sensible a mayúsculas/minúsculas
echo "strpos: ".var_export(strpos($donde, $que_busco), true)."<br>";
// Insensible a mayúsculas/minúsculas
echo "stripos: ".var_export(stripos($donde, $que_busco_M), true)."<br>";
// Búsqueda no encontrada
echo "stripos (no encontrado): ".var_export(stripos($donde, $otro), true)."<br>";

// Ejemplo de uso correcto en condicional
if (stripos($donde, $otro) === false) {
    echo "No se encontró el string (comparación estricta).<br>";
} else {
    echo "Se encontró el string.<br>";
}

// ¡Cuidado! Si usas solo if (stripos(...)), el resultado 0 (posición inicial) se evalúa como false.

echo strlen("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ");
echo "<br>";