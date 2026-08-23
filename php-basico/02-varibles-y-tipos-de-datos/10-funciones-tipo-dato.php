<?php
// Funciones útiles para cada tipo de dato en PHP

// String
$texto = "Hola PHP";
echo "Longitud: ".strlen($texto)."<br>";
echo "Mayúsculas: ".strtoupper($texto)."<br>";
echo "Minúsculas: ".strtolower($texto)."<br>";
echo "Reemplazo: ".str_replace("PHP", "Mundo", $texto)."<br>";

// Números
$numero = -8.5;
echo "Valor absoluto: ".abs($numero)."<br>";
echo "Redondeo: ".round($numero)."<br>";
echo "Máximo: ".max(1, 5, 3)."<br>";
echo "Mínimo: ".min(1, 5, 3)."<br>";

// Booleanos
$bool = true;
echo "Booleano como string: ".($bool ? 'true' : 'false')."<br>";

// Arrays
$array = [1, 2, 3, 4];
echo "Cantidad de elementos: ".count($array)."<br>";
echo "¿Está 3 en el array?: ".(in_array(3, $array) ? 'Sí' : 'No')."<br>";
echo "Elementos separados por coma: ".implode(", ", $array)."<br>"; 