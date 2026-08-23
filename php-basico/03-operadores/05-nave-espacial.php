<?php
/*
Operador nave espacial <=>
Devuelve:
-1 si el valor de la izquierda es menor,
0 si son iguales,
1 si el valor de la izquierda es mayor.
Útil para ordenar arrays y comparar valores.
*/

// Comparación de enteros
echo "1 <=> 1: ".(1 <=> 1)."<br>"; // 0

echo "1 <=> 2: ".(1 <=> 2)."<br>"; // -1

echo "2 <=> 1: ".(2 <=> 1)."<br>"; // 1

echo "<br>";
// Comparación de floats
echo "1.5 <=> 1.5: ".(1.5 <=> 1.5)."<br>"; // 0
echo "1.5 <=> 2.1: ".(1.5 <=> 2.1)."<br>"; // -1
echo "2.1 <=> 1.5: ".(2.1 <=> 1.5)."<br>"; // 1

echo "<br>";
// Comparación de strings
echo '"1" <=> "1": '.("1" <=> "1")."<br>"; // 0
echo '"1" <=> "2": '.("1" <=> "2")."<br>"; // -1
echo '"2" <=> "1": '.("2" <=> "1")."<br>"; // 1

echo "<br>";
// Útil para funciones de ordenamiento personalizadas
