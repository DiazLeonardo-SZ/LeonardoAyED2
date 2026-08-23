<?php
# Introducción a variables y tipos de datos en PHP

# Declaración de variables
# En PHP, las variables comienzan con el símbolo $ y pueden contener letras, 
# números y guiones bajos, pero no pueden comenzar con un número.
$valor1; // Variable declarada pero no inicializada
# $1valor; // Esto da error: no puede comenzar con un número

# Variables numéricas
$entero = 1; // Tipo entero (int)
$decimal = "2.3"; // Tipo string, aunque parece un número
var_dump($decimal); // Muestra que es string
$decimal = 2.3; // Tipo decimal (float)
var_dump($decimal); // Ahora es float

print $entero."<br>";
print $decimal . "<br>";

# Variables tipo string
# Los strings pueden ir entre comillas simples o dobles
$string = 'cadena de texto' . " repetido";
echo $string."<br>";
echo $string." ".$decimal."<br>";

# Variables booleanas
$verdadero = true;
$falso = false;
var_dump($verdadero); // bool(true)
echo "<br>";
var_dump($falso); // bool(false)

# Arrays
# Un array es una colección de valores. Puede ser numérico o asociativo.
$array = array(); // Array vacío (forma antigua)
$array1 = []; // Array vacío (forma moderna)
echo "<br>";
var_dump($array);
echo "<br>";
var_dump($array1);

# Array numérico: índices numéricos
$array_num = [1, 2.3, "elemento", 8 => "valor", 10 => "10"];
echo "<br>";
var_dump($array_num);

# Array asociativo: índices nombrados
$array_assoc = [
   "materia" => "bases de datos", 
   "profe" => "andres romano", 
   "dia" => "miercoles"
];
echo "<br>";
var_dump($array_assoc);

# Acceso a los datos de un array
# Para arrays asociativos, se usa la clave entre comillas
# Para arrays numéricos, se usa el índice

echo "<br>";
echo $array_assoc["materia"];
echo "<br>";
echo $array_num[8];
