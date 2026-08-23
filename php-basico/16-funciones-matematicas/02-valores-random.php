<?php 
/**
 * Generar valores aleatorios en PHP
 * rand() y mt_rand() generan números pseudoaleatorios.
 * mt_rand() es más rápido y tiene mejor aleatoriedad que rand().
 *
 * ¡Advertencia! No uses estas funciones para seguridad (contraseñas, tokens, etc.). Usa random_int() o random_bytes().
 *
 * @link https://www.php.net/manual/en/function.rand.php
 * @link https://www.php.net/manual/en/function.mt-rand.php
 * @link https://www.php.net/manual/en/function.random-int.php
 */

$min = 0;
$max = 100;

echo "rand($min, $max): ".rand($min, $max)."<br>";
echo "mt_rand($min, $max): ".mt_rand($min, $max)."<br>";
// Para seguridad:
echo "random_int($min, $max): ".random_int($min, $max)."<br>";