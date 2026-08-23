<?php 
/**
 * Iteración de objetos
 *
 * Se pueden iterar las propiedades públicas de una clase con foreach.
 * Las propiedades privadas/protegidas solo son accesibles dentro de la clase.
 * Para personalizar la iteración, se puede implementar la interfaz Iterator.
 */
class Gato implements Iterator {
	public $peso = "publico";
	private $genero = "private";
	protected $edad = "protegido";
	private $pos = 0;
	private $props = [];

	public function __construct() {
		$this->props = ["peso" => $this->peso, "genero" => $this->genero, "edad" => $this->edad];
	}
	// Iteración personalizada
	public function current() { return current($this->props); }
	public function key() { return key($this->props); }
	public function next() { next($this->props); }
	public function rewind() { reset($this->props); }
	public function valid() { return key($this->props) !== null; }

	function iterar(){
		echo "Iteración dentro de la clase<br>";
		foreach ($this as $key => $value) {
			echo $key." -> ".$value."<br>";
		}
	}
}

$gato = new Gato();
$gato->iterar();

echo "<br>Iteración fuera de la clase<br>";
foreach ($gato as $key => $value) {
	echo $key." -> ".$value."<br>";
}

// Solo se pueden iterar propiedades públicas fuera de la clase.
// Implementando Iterator, puedes controlar qué se itera.
