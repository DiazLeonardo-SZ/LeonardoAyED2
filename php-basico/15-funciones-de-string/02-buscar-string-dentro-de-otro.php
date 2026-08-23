<?php 
/**
 * Buscar un string dentro de otro con strstr() y stristr()
 * strstr() es sensible a mayúsculas/minúsculas, stristr() no lo es.
 * Ambas devuelven el resto del string desde la coincidencia encontrada.
 *
 * ¡Advertencia! Para saber si existe la cadena, compara el resultado con false.
 *
 * @link https://www.php.net/manual/es/function.strstr.php
 * @link https://www.php.net/manual/es/function.stristr.php
 */

$donde = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

$que_busco = "aliquip ex ea commodo";
$que_busco_M = "ALIQUIP EX EA COMMODO";

// Sensible a mayúsculas/minúsculas
echo "strstr (sensible): ".strstr($donde, $que_busco)."<br>";
echo "strstr (mayúsculas, sin coincidencia): ".var_export(strstr($donde, $que_busco_M), true)."<br>";
// Insensible a mayúsculas/minúsculas
echo "stristr (insensible): ".stristr($donde, $que_busco_M)."<br>";

// Comparación con strpos para solo saber si existe
if (strstr($donde, $que_busco) !== false) {
    echo "La cadena fue encontrada.<br>";
} else {
    echo "No se encontró la cadena.<br>";
}