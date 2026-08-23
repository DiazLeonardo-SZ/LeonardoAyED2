<?php 
/**
 * Separar y juntar strings con explode() e implode()
 * explode() separa un string en un array usando un separador.
 * implode() une los elementos de un array en un string con un separador.
 *
 * ¡Advertencia! Si el separador no está presente, explode() devuelve un array con el string original.
 *
 * @link https://www.php.net/manual/es/function.explode.php
 * @link https://www.php.net/manual/es/function.implode.php
 */

$explode = "Andres|Dario|Romano";
$implode = ["Andres","Dario","Romano"];

// Separar por |
var_dump(explode("|", $explode));
echo "<br><br>";
// Separar por , (no existe en el string)
var_dump(explode(",", $explode));
echo "<br><br>";
// Juntar con espacio
echo implode(" ", $implode)."<br>";
// Juntar con guión
echo implode("-", $implode)."<br>";
// ¡Cuidado! Si el array está vacío, implode devuelve una cadena vacía.
echo "Array vacío: [".implode(",", [])."]<br>";
