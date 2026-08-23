<?php 
/*
Métodos mágicos __get y __set:
- __set() se ejecuta al escribir datos sobre propiedades inaccesibles o no declaradas.
- __get() se ejecuta al leer datos de propiedades inaccesibles o no declaradas.
No reemplazan a los getters/setters tradicionales, pero pueden ser útiles para manejar propiedades dinámicas.
*/
class Gato {

	protected $nombre;
	private $colorPelo;
	private $corbata = "SI";
	private $datosExtra = [];

	public function __construct($nombre="", $pelo="negro") {
		$this->nombre = $nombre;
		$this->colorPelo = $pelo;
	}

	public function __set($prop, $value) {
		echo "La propiedad $prop se actualizó a $value<br>";
		$this->datosExtra[$prop] = $value;
	}

	public function __get($prop){
		if (array_key_exists($prop, $this->datosExtra)) {
			return $this->datosExtra[$prop];
		}
		return null; 
	}

/*	function __set($prop, $value) {

		echo "La propiedad ".$prop." se actualizo a ".$value."<br>";
		if($prop == "corbata"){
			if($value!="SI") $value = "NO";
		}
		$this->$prop = $value;

	}
		
	function __get($prop){
		return $this->$prop;
	}
*/ 
	function setCorbata($c="SI"){
		if($c!="SI"){
			$corbata = "NO";
		}
		$this->corbata = $c;
	}
	function getCorbata(){
		return $this->corbata;
	}

	function maullar() {
		return "miau, miau";
	}

	function tieneCorbata() {
		return $this->nombre." ".$this->corbata." tiene corbata y su color de pelo es ".$this->colorPelo."<br>";
	}

	function saludo() {
		return "Hola, soy $this->nombre y mi color de pelo es $this->colorPelo";
	}

}

class OtroGato extends Gato {

	function nombreOtroGato() {
		return $this->nombre;
	}

}

$cucho = new Gato("Cucho", "rosa");
$benito = new OtroGato("Benito","azul");

echo $cucho->saludo()."<br>";
echo $benito->saludo()."<br>";
echo "El nombre del otro gato es: ".$benito->nombreOtroGato()."<br>";

//$cucho->setCorbata("NO");

$cucho->corbata = "NO";

echo $cucho->tieneCorbata();
echo $benito->tieneCorbata();

// Usando __set y __get para una propiedad no declarada
$cucho->edad = 5; // __set

echo "Edad de Cucho: ".$cucho->edad."<br>"; // __get
