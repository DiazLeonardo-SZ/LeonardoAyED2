<?php
/*
Operador de fusión de null (??)
Devuelve su primer operando si existe y no es NULL; de lo contrario devuelve su segundo operando.
No emite aviso si el valor del lado izquierdo no existe, útil para claves de arrays y formularios.
*/

$val = null;
$var = "var";
// Si $val es null, muestra $var
echo $val ?? $var; // Muestra: var

echo "<br>";

// Uso típico en formularios: obtener usuario de GET, POST o valor por defecto
$usuario = $_GET["usuario"] ?? $_POST["usuario"] ?? "Anonimo"; // Si no existe, muestra Anonimo
echo $usuario;
echo "<br>";

// Fusión de múltiples variables
$foo = null;
$baz = 1;
$qux = 2;
// Muestra el primer valor no null: $baz
// $bar no está definido, no da error

echo $foo ?? $bar ?? $baz ?? $qux; // Muestra: 1
