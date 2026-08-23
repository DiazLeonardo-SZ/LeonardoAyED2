<?php
# Operadores aritméticos y de asignación en PHP

$a = 6;
echo "-
Exponente y signo:
";
echo -$a ** 3; // El doble * significa exponente, el signo afecta el resultado
// Resultado: -216

echo "<br>";
echo $a ** 3; // Exponente positivo
// Resultado: 216

echo "<br>";

# Ejemplo de precedencia de operadores
$a = 30;
$a = $a + 5 / 2 * 10 - 5; // Primero división y multiplicación, luego suma y resta
// $a = 30 + ((5 / 2) * 10) - 5 = 30 + 25 - 5 = 50

echo "Precedencia: $a<br>";

# Operadores de asignación compuesta
echo "Asignación compuesta:<br>";
$a += 10; // $a = $a + 10
// $a ahora es 60

echo "$a<br>";
$a /= 2; // $a = $a / 2
// $a ahora es 30

echo "$a<br>";
$a *= 1.5; // $a = $a * 1.5
// $a ahora es 45

echo "$a<br>";

# Incrementos y decrementos
echo "Incrementos y decrementos:<br>";
$a = 10;
echo $a++; // Imprime 10, luego $a es 11

echo " ($a tras post-incremento)<br>";
echo $a--; // Imprime 11, luego $a es 10

echo " ($a tras post-decremento)<br>";

# Pre-incremento y pre-decremento
echo ++$a; // $a es 11 antes de imprimir

echo " ($a tras pre-incremento)<br>";
echo --$a; // $a es 10 antes de imprimir

echo " ($a tras pre-decremento)<br>";
