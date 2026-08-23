<?php 
/** 
 * Podemos crear nuestras propias funciones a las que se 
 * les llama "funciones de usuario". No siempre reciben 
 * parámetros y no siempre es necesario aclarar qué 
 * devuelve. El nombre de la función debe dar
 * un indicio de qué realiza o devuelve. Como buena práctica 
 * se utiliza camelCase en su nombre.
 * 
 * @link https://www.php.net/manual/es/language.functions.php
 */

$persona = "Andres Romano"; // $persona es variable de contexto global

// Declarar una función sin parámetros
function saludar() {
	echo "<p>Esta función sirve para saludar.</p>";
}
// Ejecutar la función
saludar();

echo "<hr>";

// Declarar una función con parámetro
function saludoPersonalizado($nombre) { // $nombre es variable de contexto local
	echo "<p>Esta función saluda a, ".$nombre."</p>";
}

saludoPersonalizado($persona);

echo "<hr>";

/*
El alcance de las variables es según su contexto, y pueden ser global o local.
global: se puede utilizar en todo el script, se puede pasar como parámetro a una función
local: son variables a las que solo se accede dentro de la función
Para acceder a una variable de contexto global dentro de una función, y esta variable 
no fue pasada por parámetros, se debe utilizar $GLOBALS['variable']
*/
$persona2 = "Romano Andres";

function segundoSaludo($local) {
	echo "<p>Variable local: ".$local."</p>";
	echo "<p>Variable global: ".$GLOBALS['persona']."</p>";
}

segundoSaludo($persona2);

echo "<hr>";

// Ejemplo de buena práctica de nombres de funciones
function calcularAreaRectangulo($base, $altura) {
	return $base * $altura;
}
$area = calcularAreaRectangulo(5, 3);
echo "El área de un rectángulo de base 5 y altura 3 es: $area<br>";