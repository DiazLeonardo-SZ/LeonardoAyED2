<?php 
/**
 * Características dinámicas de los namespaces
 *
 * Puedes usar variables para acceder dinámicamente a clases, funciones y constantes en namespaces.
 * Esto es útil para cargar clases o funciones según el contexto o configuración.
 */
namespace miNamespace;

class miClase{
	function __construct(){
		echo "Hola desde la funcion constructora<br>";
	}
}

function miFuncion(){
	echo "Hola desde la función<br>";
}

const miConstante = "Hola<br>";

// Acceso dinámico:
$a = "\\miNamespace\\miClase"; // Nombre completamente cualificado
$clase = new $a; // Crea una instancia de miNamespace\miClase

$b = "\\miNamespace\\miFuncion";
$b(); // Llama a miNamespace\miFuncion

echo constant("\\miNamespace\\miConstante"); // Accede a la constante

// Útil para cargar clases o funciones según el contexto