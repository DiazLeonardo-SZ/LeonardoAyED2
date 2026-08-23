<?php 
/*
Cualquier información puede ser pasada a las funciones mediante la lista de 
argumentos, la cual es una lista de expresiones delimitadas por comas. 
Los argumentos son evaluados de izquierda a derecha. PHP también permite 
el uso de arrays y del tipo especial null como valores predeterminados. El valor
predeterminado debe ser una expresión constante, no (por ejemplo) una variable,
un miembro de una clase o una llamada a una función. Cuando se emplean argumentos
predeterminados, cualquiera de ellos debería estar a la derecha de los argumentos
no predeterminados, sino dará error.
*/

# Pasar un array a función
$array = [3,"numero",10,5,"funcion"];

function verArray($array) {
	echo "Elementos del array: ";
	for ($i=0; $i < count($array); $i++) { 
		echo $array[$i]." ";
	}
	echo "<br>";
}

verArray($array);

echo "<hr>";

# Funciones con valores predeterminados
function tablaMultiplicar($numero, $multi = [1,2,3,4,5,6,7,8,9,10]) {
	echo "Tabla de multiplicar del $numero:<br>";
	for ($i=0; $i < count($multi); $i++) { 
		echo $numero." X ".$multi[$i]." = ".($numero * $multi[$i])."<br>";
	}
}

// Si la función tiene un argumento predeterminado, no es necesario pasarle un valor

tablaMultiplicar(8); 

echo "<hr>";

# Argumentos opcionales y advertencia sobre el orden
function mostrarValores($valor1, $valor2 = null) {
	echo "valor1: $valor1<br>";
	echo $valor2 != null ? "el nuevo valor2 es: $valor2<br>" : "valor2 sigue siendo null<br>";
}

mostrarValores("este es valor1");
mostrarValores("este es valor1",5);
mostrarValores("este es valor1","valor5");

echo "<hr>";

// Advertencia: Los argumentos con valor predeterminado deben ir al final de la lista de argumentos.
function ejemploCorrecto($a, $b = 2) {
	return $a + $b;
}
echo "Ejemplo correcto: ".ejemploCorrecto(3)."<br>";
