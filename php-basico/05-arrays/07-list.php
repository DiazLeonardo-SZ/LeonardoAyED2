<?php
/*
list() se utiliza para asignar una lista de variables en una sola operación.
Solo funciona con arrays numéricos y supone que los índices empiezan en 0.
*/

$info = ['café', 'marrón', 'cafeína'];

// Enumerar todas las variables
list($bebida, $color, $energia) = $info;
echo "El $bebida es $color y la $energia lo hace especial.<br>";

// Enumerar algunas de ellas (omitimos el segundo elemento)
list($bebida, , $energia) = $info;
echo "El $bebida tiene $energia<br>";

// Ejemplo con array asociativo (no funciona como se espera)
$asociativo = ["bebida" => "té", "color" => "verde", "energia" => "teína"];
list($a, $b, $c) = $asociativo;
echo "Con array asociativo: $a, $b, $c<br>"; // Asigna los valores en orden, no por clave
