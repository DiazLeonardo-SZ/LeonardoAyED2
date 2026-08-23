<?php 
/*
El operador de resolución de alcance (self, parent)
El operador doble dos puntos o scope resolution nos será de 
mucha utilidad a lo largo del desarrollo de la programación 
orientada a objetos en PHP.
self: sustituye a $this cuando llamamos propiedades o métodos estáticos.
parent: la utilizamos cuando queremos llamar desde la clase hija, 
propiedades o métodos de la clase padre.
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
		return "miau, miau ".self::$claveSecreta;
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
		$mensajePadre = parent::maullar();
		return $mensajePadre." y miau extra";
	}

}

$cucho = new Gato("Cucho", "rosa");
$benito = new OtroGato("Benito","azul");

echo $cucho->nombre." maulla asi: ".$cucho->maullar()."<br>";
echo $benito->nombre." maulla asi: ".$benito->maullar()."<br>";

// self:: es útil para acceder a constantes o métodos estáticos
// parent:: es útil para reutilizar lógica de la clase padre en la subclase
