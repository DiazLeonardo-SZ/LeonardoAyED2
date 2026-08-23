<?php 
/**
 * Cambiar mayúsculas y minúsculas en strings
 * strtoupper(), strtolower(), ucwords(), ucfirst() funcionan por bytes.
 * Para UTF-8 y caracteres especiales, usa mb_strtoupper(), mb_strtolower().
 *
 * ¡Advertencia! Las funciones normales pueden fallar con tildes y eñes.
 *
 * @link https://www.php.net/manual/es/function.strtoupper.php
 * @link https://www.php.net/manual/es/function.mb-strtoupper.php
 */

$string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
$especial = "¡Hola, señor! cómo está?";

echo strtoupper($string)."<br><br>";
echo strtolower($string)."<br><br>";
echo ucwords($string)."<br><br>";
echo ucfirst($string)."<br><br>";

// Ejemplo con caracteres especiales
echo "mb_strtoupper: ".mb_strtoupper($especial)."<br>";
echo "mb_strtolower: ".mb_strtolower($especial)."<br>";

