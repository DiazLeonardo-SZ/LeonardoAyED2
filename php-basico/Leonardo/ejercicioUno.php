<?php
/*
Ejercicio corto (para fijar esto, no hace falta que sea perfecto):

Escribí una función esPar($numero) que reciba un número y devuelva true si es par
y false si es impar. Después escribí otra función contarPares($array)
que reciba un array de números, use esPar() adentro, y devuelva cuántos números pares hay
en ese array.




*/
function esPar($num){
    if(($num % 2) == 0){
        return true;
    } else {
        return false;
    }
}

echo esPar(4) ? "Es par <br>": "Es impar <br>";


function contarPares($array){
    $contador = 0;
    foreach($array as $numero){
        if(esPar($numero)){
            ++$contador;
        }
    }
    return $contador;
}


$arreglo = [1,2,3,4];



$totalPares = contarPares($arreglo);
echo "Hay $totalPares números pares.";

?>