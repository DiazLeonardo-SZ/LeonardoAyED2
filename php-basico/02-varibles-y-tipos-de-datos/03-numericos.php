<?php
# Variables numéricas en PHP

$entero = 12345678; // Entero positivo
var_dump($entero);
echo "<br>";

$negativo = -12345678; // Entero negativo
var_dump($negativo);
echo "<br>";

$float = 123.45678; // Número decimal (float)
var_dump($float);
echo "<br>";

# Notación octal: en PHP 8+ se recomienda usar 0o para octal
$octal = 0o12345; // octal (0-7)
var_dump($octal);
echo "<br>";

# Notación hexadecimal
$hexadecimal = 0xFFAADD; // hexadecimal (0-9, a-f)
var_dump($hexadecimal);
echo "<br>";

# Notación binaria
$binario = 0b1010101; // binario (0-1)
var_dump($binario);
echo "<br>";

# Funciones numéricas básicas
$numero = -15.7;
echo "Valor absoluto: ".abs($numero)."<br>";
echo "Redondeo: ".round($float, 2)."<br>";
echo "Máximo: ".max($entero, $float, $hexadecimal)."<br>";
echo "Mínimo: ".min($entero, $float, $hexadecimal)."<br>";

