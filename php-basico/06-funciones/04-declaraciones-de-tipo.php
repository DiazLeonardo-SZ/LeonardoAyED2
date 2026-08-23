<?php 
/*
Las declaraciones de tipo permiten a las funciones requerir que los
parámetros sean de cierto tipo durante una llamada. Si el valor dado
es de un tipo incorrecto, se generará un error. También se puede 
especificar qué valor devuelve. Para que esto funcione se debe activar
una configuración de php: declare(strict_types=1);
*/
declare(strict_types=1);

// Declarar tipo de parámetro
function recibirParametro(string $name) {
	echo "Parámetro recibido: $name<br>";
}
recibirParametro("Andres");
// recibirParametro(123); // Esto generaría un error de tipo

echo "<hr>";

// Declarar tipo de retorno
function suma($n1, $n2):int {
	return $n1+$n2;
}
echo "Resultado de suma(10,5): ".suma(10,5)."<br>";
// echo suma(10, "5"); // Esto generaría un error de tipo

echo "<hr>";

// Declarar tipo de retorno con clases
class Gato{}
class Perro{}
function regresaGato(): Gato {
	// return new Perro; // Esto generaría un error de tipo
	return new Gato;
}
$g = regresaGato();
echo "Tipo de objeto retornado: ".get_class($g)."<br>";
