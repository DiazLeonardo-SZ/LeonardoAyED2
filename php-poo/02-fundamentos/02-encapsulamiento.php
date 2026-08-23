<?php 
/*
Encapsulamiento: Permite ocultar detalles internos de la clase y controlar el acceso a sus propiedades y métodos.
Modificadores de acceso:
- public: acceso desde cualquier lugar
- protected: acceso solo desde la clase y sus hijas
- private: acceso solo desde la clase
*/

class Gato {

	protected $nombre;
	private $colorPelo;
	private $corbata = "SI";

	public function __construct($nombre="", $pelo="negro"){
		$this->nombre = $nombre;
		$this->colorPelo = $pelo;
	}

	public function maullar() {
		return "miau, miau";
	}

	public function tieneCorbata() {
		return $this->nombre." ".$this->corbata." tiene corbata y su color de pelo es ".$this->colorPelo."<br>";
	}

	public function saludo() {
		return "Hola, soy ".$this->nombre." y mi color de pelo es ".$this->colorPelo;
	}

}

class OtroGato extends Gato {

	public function nombreOtroGato() {
		return $this->nombre;
	}

}

$cucho = new Gato("Cucho", "rosa");
$benito = new OtroGato("Benito","azul");

echo $cucho->saludo()."<br>";
echo $benito->saludo()."<br>";
echo "El nombre del otro gato es: ".$benito->nombreOtroGato()."<br>";

// Ejemplo de error: acceso a propiedad privada/protegida desde fuera de la clase
// echo $cucho->colorPelo; // Error: Cannot access private property
// echo $cucho->nombre;    // Error: Cannot access protected property

// Buenas prácticas: usar getters/setters para acceder a propiedades privadas/protegidas