<?php 
/*
PHP permite crear arreglos cuyos elementos tienen nombres en vez de números.
Esto facilita la identificación de los elementos por nombre (clave).
*/

$horario = [
   "materia" => "bases de datos", 
   "profe" => "andres romano", 
   "dia" => "miercoles",
   "horario" => "20 a 22 hs"
];

echo "<b>Array asociativo horario:</b><br>";
var_dump($horario);
echo "<br><br>Recorriendo el array asociativo:<br>";
foreach ($horario as $key => $value) {
    echo "La clave es: <b>".$key."</b> y su valor es: <b>".$value."</b><br>";
}

echo "<br>Acceso directo a un valor específico:<br>";
echo "La materia es: ".$horario["materia"]."<br>";