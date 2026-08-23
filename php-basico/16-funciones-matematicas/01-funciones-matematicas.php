<?php 
/**
 * Funciones matemáticas básicas en PHP
 * PHP ofrece muchas funciones para redondeo, potencias, raíces, valores absolutos, etc.
 *
 * ¡Advertencia! La precisión de los números flotantes puede variar según el sistema.
 *
 * @link https://www.php.net/manual/en/ref.math.php
 */

$valor = 11 / 2;
echo "Valor original: $valor<br>";

echo "round() redondea al entero más cercano: ".round($valor)."<br>";
echo "floor() redondea hacia abajo: ".floor($valor)."<br>";
echo "ceil() redondea hacia arriba: ".ceil($valor)."<br>";

echo "abs(-5) valor absoluto: ".abs(-5)."<br>";
echo "pow(2, 3) potencia: ".pow(2, 3)."<br>";
echo "sqrt(16) raíz cuadrada: ".sqrt(16)."<br>";
echo "min(3, 7, 1, 9): ".min(3, 7, 1, 9)."<br>";
echo "max(3, 7, 1, 9): ".max(3, 7, 1, 9)."<br>";

// ¡Consejo! Consulta la documentación para más funciones matemáticas avanzadas.
