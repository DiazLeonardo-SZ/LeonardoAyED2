<?php 
/*
Herencia: Permite que una clase (hija) herede propiedades y métodos de otra clase (padre).
Se usa la palabra reservada 'extends'.
*/

class Gato {
	public $nombre;
	public $colorPelo;
	public $corbata = "SI";
	public function __construct($nombre="", $pelo="negro"){
		$this->nombre = $nombre;
		$this->colorPelo = $pelo;
	}
	public function maullar(){
		return "miau, miau";
	}
	public function tieneCorbata(){
		return $this->nombre." ".$this->corbata." tiene corbata y su color de pelo es ".$this->colorPelo."<br>";
	}
	public function saludo(){
		return "Hola, soy ".$this->nombre." y mi color de pelo es ".$this->colorPelo;
	}
}

// La clase hija hereda de Gato y agrega una propiedad
class OtroGato extends Gato{
	public $edad;
	// Sobrescribimos el método saludo
	public function saludo(){
		return "Hola, soy ".$this->nombre." y tengo ".$this->edad." años.";
	}
}

$cucho = new Gato("Cucho", "rosa");
$benito = new OtroGato("Benito","azul");
$benito->edad = 3;

echo $cucho->saludo()."<br>";
echo $benito->saludo()."<br>";

// Verificar la herencia
echo "El pariente de la clase Gato es ".get_parent_class("Gato")."<br>";
echo "El pariente de la clase OtroGato es ".get_parent_class("OtroGato")."<br>";
echo "¿OtroGato es subclase de Gato? ".(is_subclass_of("OtroGato", "Gato") ? "Sí" : "No")."<br>";

// Ejemplo de error: acceder a propiedad no definida
echo isset($cucho->edad) ? $cucho->edad : "Gato no tiene edad";