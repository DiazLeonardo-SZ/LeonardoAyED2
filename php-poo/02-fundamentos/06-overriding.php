<?php 
/*
Sobreescribir un método en una clase
Cuando creamos una nueva clase a partir de otra, podemos 
hacer tres cosas: añadir nuevas propiedades y métodos, 
eliminarlos o modificarlos. Aquí veremos cómo sobreescribir o
modificar métodos con overriding.

Overriding (sobreescritura): Permite que una subclase redefina un método de la clase padre.
Se puede llamar al método original usando parent::
*/
class Gato {
	static public $claveSecreta = "12345";
	protected $nombre;
	private $colorPelo;
	private $corbata = "SI";

	public function __construct($nombre="", $pelo="negro") {
		$this->nombre = $nombre;
		$this->colorPelo = $pelo;
	}

	public function __set($prop, $value) {

		echo "La propiedad ".$prop." se actualizo a ".$value."<br>";
		if($prop == "corbata") {
			if($value!="SI") $value = "NO";
		}
		$this->$prop = $value;

	}
	public function __get($prop) {
		return $this->$prop;
	}

	static public function mensajeSecreto() {
		return "Hola soy el mensaje secreto!!";
	}

	public function setCorbata($c="SI") {
		if($c!="SI"){
			$corbata = "NO";
		}
		$this->corbata = $c;
	}

	public function getCorbata() {
		return $this->corbata;
	}

	public function maullar() {
		return "miau, miau";
	}

	public function tieneCorbata() {
		return $this->nombre." ".$this->corbata." tiene corbata y su color de pelo es ".$this->colorPelo."<br>";
	}

	public function saludo() {
		$cadena = "Hola, soy ".$this->nombre." y mi color de pelo es ";
		$cadena .= $this->colorPelo;
		return $cadena;
	}

}

class OtroGato extends Gato {

	public function nombreOtroGato() {
		return $this->nombre;
	}

	public function maullar(){
		$original = parent::maullar(); // Llamada al método de la clase padre
		return $original." y además miau, miau, miau";
	}

}

$cucho = new Gato("Cucho", "rosa");
$benito = new OtroGato("Benito","azul");

echo $cucho->maullar()."<br>";
echo $benito->maullar()."<br>";

// Ejemplo: la subclase puede modificar o ampliar el comportamiento del método padre
