<?php
/*
Resumen de operaciones y funciones comunes con arrays en PHP
*/

echo "<h3>Crear arrays</h3>";
$numeros = [1, 2, 3];
$asociativo = ["a" => 1, "b" => 2];
echo '<pre>$numeros = [1, 2, 3];
$asociativo = ["a" => 1, "b" => 2];</pre>';

echo "<h3>Recorrer arrays</h3>";
echo '<pre>foreach ($numeros as $valor) { ... }
foreach ($asociativo as $clave => $valor) { ... }</pre>';

echo "<h3>Funciones útiles</h3>";
echo '<pre>count($numeros) // Cantidad de elementos
in_array(2, $numeros) // ¿Está el valor?
array_key_exists("a", $asociativo) // ¿Existe la clave?
array_push($numeros, 4) // Agregar elemento
array_pop($numeros) // Quitar último elemento
array_merge($numeros, [4,5]) // Unir arrays
sort($numeros) // Ordenar array numérico
</pre>';

echo "<h3>Arrays multidimensionales</h3>";
echo '<pre>$matriz = [[1,2],[3,4]];
$valor = $matriz[1][0]; // 3</pre>';

echo "<h3>Superglobales</h3>";
echo '<pre>$_GET, $_POST, $_SERVER, $_ENV, $_SESSION, $_COOKIE, $_FILES, $_REQUEST, $GLOBALS</pre>'; 