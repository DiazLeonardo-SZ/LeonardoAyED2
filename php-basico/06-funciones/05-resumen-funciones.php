<?php
/*
Resumen de funciones en PHP
*/

echo "<h3>Declarar una función</h3>";
echo '<pre>function saludar() {
    echo "Hola";
}</pre>';


echo "<h3>Función con parámetros</h3>";
echo '<pre>function sumar($a, $b) {
    return $a + $b;
}
$resultado = sumar(2, 3); // 5</pre>';


echo "<h3>Parámetros con valor predeterminado</h3>";
echo '<pre>function saludar($nombre = "Mundo") {
    echo "Hola $nombre";
}
saludar(); // Hola Mundo
saludar("Andrés"); // Hola Andrés</pre>';


echo "<h3>Devolver valores</h3>";
echo '<pre>function obtenerArray() {
    return [1,2,3];
}
$a = obtenerArray();</pre>';


echo "<h3>Declaraciones de tipo</h3>";
echo '<pre>function sumar(int $a, int $b): int {
    return $a + $b;
}</pre>'; 