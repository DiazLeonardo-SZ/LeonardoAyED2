<?php 
/**
 * Reemplazar partes de un string con str_replace()
 * str_replace() reemplaza todas las coincidencias encontradas.
 * Puedes buscar y reemplazar múltiples valores usando arrays.
 *
 * ¡Advertencia! El reemplazo es global y sensible a mayúsculas/minúsculas.
 *
 * @link https://www.php.net/manual/es/function.str-replace.php
 */

$string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

$buscar = "in";
$reemplazar = "IN";

// Reemplazo simple
echo $string;
echo "<br><br>";
echo str_replace($buscar, $reemplazar, $string)."<br><br>";

// Reemplazo múltiple
$buscar_array = ["Lorem", "elit", "magna"];
$reemplazar_array = ["LOREM", "ELIT", "MAGNA"];
echo str_replace($buscar_array, $reemplazar_array, $string)."<br><br>";

// Uso en validaciones: eliminar caracteres no deseados
echo str_replace([".", ","], "", $string)."<br>";
