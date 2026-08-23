<?php 
/**
 * Ajustar la longitud de un string con wordwrap()
 * wordwrap() inserta saltos de línea cada cierto número de caracteres.
 *
 * ¡Advertencia! El salto por defecto es "\n" (no HTML). Usa "<br>" para HTML.
 *
 * @link https://www.php.net/manual/es/function.wordwrap.php
 */

$string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

// Salto de línea HTML
echo wordwrap($string, 100, "<br>");

// Salto de línea normal (no visible en HTML)
echo "<pre>".wordwrap($string, 50)."</pre>";