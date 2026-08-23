<?php
/*
Operadores lógicos:
$a and $b   And (y)             true si tanto $a como $b son true.
$a or $b    Or (o inclusivo)    true si cualquiera de $a o $b es true.
$a xor $b   Xor (o exclusivo)   true si $a o $b es true, pero no ambos.
!$a         Not (no)            true si $a no es true.
$a && $b    And (y)             true si tanto $a como $b son true.
$a || $b    Or (o inclusivo)    true si cualquiera de $a o $b es true.
*/

$dinero = true;
$tiempo = false;

// OR inclusivo
echo "OR: ";
echo ($dinero || $tiempo) ? "Voy al cine<br>" : "Me quedo en casa<br>";

// AND
echo "AND: ";
echo ($dinero && $tiempo) ? "Voy al cine<br>" : "Me quedo en casa<br>";

// XOR
echo "XOR: ";
echo ($dinero xor $tiempo) ? "Voy al cine<br>" : "Me quedo en casa<br>";

// NOT
echo "NOT dinero: ";
echo (!$dinero) ? "No tengo dinero<br>" : "Tengo dinero<br>";
