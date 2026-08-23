<?php 
/*
El operador Ternario:
La expresión (expr1) ? (expr2) : (expr3) evalúa a expr2 si expr1 se evalúa
como true y a expr3 si expr1 se evalúa como false.
Es útil para asignaciones rápidas o para decidir qué mostrar.
*/

# Ejemplo para asignar un valor
$value = 10;
$resultado = $value >= 5 ? "verdadero" : "falso";
echo "¿value >= 5? ".$resultado."<br>";

# Ejemplo con una función
$resultado = is_string($value) ? "value es string" : "value no es string";
echo $resultado."<br>";

# Ejemplo anidado
$edad = 20;
$mensaje = $edad < 13 ? "Niño" : ($edad < 18 ? "Adolescente" : "Adulto");
echo "Edad: $edad, categoría: $mensaje<br>";

# Equivalente con if-else
if ($value >= 5) {
    echo "verdadero<br>"; 
} else {
    echo "falso<br>"; 
}

// El ternario es útil para expresiones simples, pero para lógica compleja es mejor usar if-else por claridad.