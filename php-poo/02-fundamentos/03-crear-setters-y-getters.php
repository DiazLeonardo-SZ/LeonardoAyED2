<?php 
/*
Otra herramienta que nos permitirá manejar el encapsulamiento de 
nuestras clases es realizar las funciones "getters" y "setters".
Estas son requeridas para que el usuario no acceda directamente 
a nuestras propiedades
*/
class Gato {

	protected $nombre;
	private $colorPelo;
	private $corbata = "SI";

	public function __construct($nombre="", $pelo="negro"){
		$this->nombre = $nombre;
		$this->colorPelo = $pelo;
	}

	public function setCorbata($c="SI"){
		if($c!="SI" && $c!="NO"){
			$c = "NO"; // Solo permitimos SI o NO
		}
		$this->corbata = $c;
	}
	public function getCorbata(){
		return $this->corbata;
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

$cucho->setCorbata("NO");
$benito->setCorbata("colorada"); // Se corregirá a NO

echo "Cucho corbata: ".$cucho->getCorbata()."<br>";
echo "Benito corbata: ".$benito->getCorbata()."<br>";

// Acceso directo a propiedades privadas/protegidas está prohibido y es mala práctica
// $benito->corbata = "colorada"; // Error en PHP 8.2+