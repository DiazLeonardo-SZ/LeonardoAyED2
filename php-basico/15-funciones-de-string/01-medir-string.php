<?php 
/**
 * Funciones de string
 * 
 * @link https://www.php.net/manual/es/ref.strings.php
 * 
 * Texto de relleno
 * 
 * @link https://es.lipsum.com/
 */

$string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

echo $string;
echo "<br>";
echo "El texto de relleno tiene ".strlen($string)." carateres";

/**
 * Medir la longitud de un string en PHP
 *
 * strlen() cuenta el número de bytes, no necesariamente de caracteres.
 * Para textos con acentos o caracteres especiales (UTF-8), usa mb_strlen().
 *
 * ¡Advertencia! strlen() puede dar resultados inesperados con caracteres multibyte.
 *
 * @link https://www.php.net/manual/es/function.strlen.php
 * @link https://www.php.net/manual/es/function.mb-strlen.php
 */

$especial = "¡Hola, señor! ¿Cómo está?"; // contiene acentos y eñe

// Longitud con strlen (bytes)
echo "<br><br>Texto especial: $especial<br>";
echo "strlen: ".strlen($especial)."<br>";
echo "mb_strlen: ".mb_strlen($especial)."<br>";

// Ejemplo con cadena vacía
echo "Cadena vacía: ".strlen("")."<br>";
