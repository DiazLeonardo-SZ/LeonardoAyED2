<?php 
# Crear Arrays en PHP

// Array numérico vacío (forma antigua)
$array = array();
// Array numérico vacío (forma moderna)
$array1 = [];

echo "<br>Array vacío (forma antigua):<br>";
var_dump($array);
echo "<br>Array vacío (forma moderna):<br>";
var_dump($array1);

// Array numérico con índices automáticos y manuales
$array_num = [1, 2.3, "elemento", 8 => "valor", 10 => "10"];
echo "<br>Array numérico con índices:<br>";
var_dump($array_num);

// Array asociativo (índices nombrados)
$array_assoc = [
   "materia" => "bases de datos", 
   "profe" => "andres romano", 
   "dia" => "miercoles"
];
echo "<br>Array asociativo:<br>";
var_dump($array_assoc);

// Acceder a los datos de un array
// Para arrays asociativos, se usa la clave entre comillas
// Para arrays numéricos, se usa el índice

echo "<br>Acceso a elementos:<br>";
echo $array_assoc["materia"];
echo "<br>";
echo $array_num[8];
echo "<br>";
// Acceso seguro con isset
if (isset($array_assoc["no_existe"])) {
    echo $array_assoc["no_existe"];
} else {
    echo "La clave 'no_existe' no está definida en el array asociativo.";
}
