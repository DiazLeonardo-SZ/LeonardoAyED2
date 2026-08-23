<?php
/*
Resumen de estructuras de control en PHP
*/

echo "<h3>Condicional if-else</h3>";
$a = 5;
echo ($a > 3) ? 'Mayor que 3<br>' : 'No es mayor que 3<br>';


echo "<h3>Condicional switch</h3>";
$color = 'azul';
switch ($color) {
    case 'rojo':
        echo 'Color rojo<br>';
        break;
    case 'azul':
        echo 'Color azul<br>';
        break;
    default:
        echo 'Otro color<br>';
}

echo "<h3>Ciclo while</h3>";
$i = 1;
while ($i <= 3) {
    echo $i.' ';
    $i++;
}
echo '<br>';

echo "<h3>Ciclo do-while</h3>";
$j = 1;
do {
    echo $j.' ';
    $j++;
} while ($j <= 3);
echo '<br>';

echo "<h3>Ciclo for</h3>";
for ($k = 1; $k <= 3; $k++) {
    echo $k.' ';
}
echo '<br>';

echo "<h3>break y continue</h3>";
for ($m = 1; $m <= 5; $m++) {
    if ($m == 3) continue;
    if ($m == 5) break;
    echo $m.' ';
}
echo '<br>';

echo "<h3>include y require</h3>";
echo 'include "archivo.php"; // Incluye un archivo<br>';
echo 'require "archivo.php"; // Incluye un archivo, detiene el script si falla<br>'; 