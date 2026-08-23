<?php 
/**
 * En este archivo se explican algunas funciones de array
 * para tener en cuenta, el link pertenece a la documentacion
 * oficial de PHP donde pueden consultar todas las funciones
 * de array.
 * 
 * @link https://www.php.net/manual/es/ref.array.php
 */

$array = [1, 2.3, "elemento", 8 => "valor", 10 => "10"];
$array1 = ["a" => "andres", "d" => "dario"];

# Buscar por un valor exacto en todo el arreglo, con in_array().

echo "in_array()<br>";
echo in_array(2.3, $array) ? "el valor 2.3 existe" : "el valor 2.3 NO existe";
echo "<br>";
echo in_array("2.3", $array, true) ? "el valor '2.3' existe (comparación estricta)" : "el valor '2.3' NO existe (comparación estricta)";
echo "<br>";
echo in_array("elemento", $array) ? "el valor 'elemento' existe" : "el valor 'elemento' NO existe";
echo "<br><br>";

# Combinar dos o más arrays con array_merge()

echo "array_merge()<br>";
$array2 = array_merge($array1,$array);
echo "Resultado de array_merge:<br>";
var_dump($array2);
echo "<br><br>";

# Agregar elementos a un array con array_push()

echo "array_push()<br>";
array_push($array1, "papas");
$array1["b"] = "batatas";
echo "Resultado de array_push y asignación:<br>";
var_dump($array1);
echo "<br><br>";

# Verificar que exista un indice (key)

echo "array_key_exists()<br>";
echo array_key_exists("b", $array1) ? "la key 'b' existe" : "la key 'b' NO existe";
echo "<br><br>";

# Eliminar el último elemento con array_pop()
echo "array_pop()<br>";
$ultimo = array_pop($array1);
echo "Elemento eliminado: $ultimo<br>";
var_dump($array1);
echo "<br><br>";

# Ordenar un array numérico con sort()
echo "sort()<br>";
$numeros = [5, 2, 8, 1];
sort($numeros);
echo "Array ordenado: ";
var_dump($numeros);
echo "<br>";
