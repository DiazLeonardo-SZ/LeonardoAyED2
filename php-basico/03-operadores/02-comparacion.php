<?php 
/*
Operadores de comparación:
$a == $b   Igual, TRUE si $a es igual a $b después de la manipulación de tipos.
$a === $b  Idéntico, TRUE si $a es igual a $b, y son del mismo tipo.
$a != $b   Diferente, TRUE si $a no es igual a $b después de la manipulación de tipos.
$a <> $b   Diferente, TRUE si $a no es igual a $b después de la manipulación de tipos.
$a !== $b  No idéntico, TRUE si $a no es igual a $b, o si no son del mismo tipo.
$a < $b    Menor que, TRUE si $a es estrictamente menor que $b.
$a > $b    Mayor que, TRUE si $a es estrictamente mayor que $b.
$a <= $b   Menor o igual que, TRUE si $a es menor o igual que $b.
$a >= $b   Mayor o igual que, TRUE si $a es mayor o igual que $b.
*/

$a = 18;
$b = 18.1;

// == Igual
var_dump($a == $b); // false
// === Idéntico
var_dump($a === $b); // false
// != Diferente
var_dump($a != $b); // true
// <> Diferente
var_dump($a <> $b); // true
// !== No idéntico
var_dump($a !== $b); // true
// < Menor que
var_dump($a < $b); // true
// > Mayor que
var_dump($a > $b); // false
// <= Menor o igual que
var_dump($a <= $b); // true
// >= Mayor o igual que
var_dump($a >= $b); // false

// Explicación de un caso práctico
if($a !== $b){
    echo "\$a !== \$b: la condición es verdadera<br>";
} else {
    echo "\$a !== \$b: la condición es falsa<br>";
}