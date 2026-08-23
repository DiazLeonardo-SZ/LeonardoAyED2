<?php 
/**
 * Extraer una parte de un string con substr() y mb_substr()
 * substr() trabaja por bytes, mb_substr() por caracteres (UTF-8).
 *
 * ¡Advertencia! substr() puede cortar caracteres especiales si no usas UTF-8.
 *
 * @link https://www.php.net/manual/es/function.substr.php
 * @link https://www.php.net/manual/es/function.mb-substr.php
 */

$string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
$especial = "¡Hola, señor! ¿Cómo está?";

// Texto completo
echo $string;
echo "<br><br>";
// Los primeros 20 caracteres
echo "substr: ".substr($string, 0, 20)."<br>";
// Todo el texto menos los últimos 20 caracteres
echo "substr: ".substr($string, 0, -20)."<br>";
// Los últimos 20 caracteres
echo "substr: ".substr($string, -20, 20)."<br>";

// Ejemplo con caracteres especiales
echo "mb_substr (acentos): ".mb_substr($especial, 0, 10)."<br>";