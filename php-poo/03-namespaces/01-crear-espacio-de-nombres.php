<?php 
/**
 * Introducción a los espacios de nombres (namespace)
 *
 * Los namespaces permiten agrupar clases, funciones y constantes bajo un mismo "apellido" para evitar conflictos de nombres.
 * Ejemplo de conflicto: dos clases con el mismo nombre en diferentes librerías.
 *
 * Analogia: Es como tener carpetas con archivos que se llaman igual, pero en rutas diferentes.
 *
 * Los namespaces se definen con la palabra reservada 'namespace' al inicio del archivo.
 *
 * Nota: Los nombres de los espacios de nombres PHP y php están reservados para el lenguaje.
 */
namespace Perro;

const NOMBRE = "Lazzy";

class MiPerro { 
	public function saludar() {
		echo "Guau, soy ".NOMBRE."<br>";
	}
}

function pasearAlPerro() { 
	echo "Sacando a pasear a ".NOMBRE."<br>";
}

// Ejemplo de conflicto resuelto con namespaces:
// Archivo 1:
// namespace Perro; class Mascota {}
// Archivo 2:
// namespace Gato; class Mascota {}
// Así puedes tener Perro\Mascota y Gato\Mascota sin conflicto.

// Para usar desde fuera de este archivo:
// $perro = new \Perro\MiPerro();
// \Perro\pasearAlPerro();