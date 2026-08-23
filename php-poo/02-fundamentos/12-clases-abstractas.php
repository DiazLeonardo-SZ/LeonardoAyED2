<?php 
/**
 * Clases Abstractas:
 * - No pueden ser instanciadas directamente.
 * - Se usan como base para otras clases.
 * - Pueden tener métodos abstractos (sin implementación) y métodos normales.
 *
 * ¿Cuándo usar clases abstractas?
 * - Cuando quieres compartir código base y forzar la implementación de ciertos métodos en las subclases.
 * ¿Cuándo usar interfaces?
 * - Cuando solo quieres forzar la existencia de ciertos métodos, sin compartir código base.
 */

abstract class Mamifero{
//Metodo Abstracto
	abstract public function saludo();
//Método no-abstracto
	public function maullar(){
		return "miau, miau";
	}
}
class Gato extends Mamifero{

	public function saludo(){
		return "Hola Mundo";
	}
	
}
// $mam = new Mamifero(); // Error: Cannot instantiate abstract class
$gato = new Gato();
echo "saludo ".$gato->saludo()."<br>";
echo "Maullar ".$gato->maullar()."<br>";