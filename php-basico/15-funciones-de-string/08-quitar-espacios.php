<?php 
/**
 * Quitar espacios y caracteres en blanco con trim(), ltrim(), rtrim()
 * trim() elimina espacios, tabulaciones y saltos de línea al inicio y final.
 * Puedes especificar otros caracteres a eliminar.
 *
 * ¡Advertencia! Útil para limpiar datos de formularios antes de validar o guardar.
 *
 * @link https://www.php.net/manual/es/function.trim.php
 */

$string = "\t  \n   Hola mundo!   \n\t";

// Mostrar el string original con <pre>
echo "<pre>Original: [$string]</pre>";
// Quitar espacios y saltos de línea
echo "<pre>trim: [".trim($string)."]</pre>";
// Quitar solo al inicio
echo "<pre>ltrim: [".ltrim($string)."]</pre>";
// Quitar solo al final
echo "<pre>rtrim: [".rtrim($string)."]</pre>";
// Quitar otros caracteres (ejemplo: !)
echo "<pre>trim (!): [".trim($string, " !\t\n")."]</pre>";