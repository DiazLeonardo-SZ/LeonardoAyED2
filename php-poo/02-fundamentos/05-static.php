<?php 
/*
Propiedades y métodos estáticos:
- Se definen con la palabra clave 'static'.
- Se accede a ellos con :: sin crear una instancia.
- Son compartidos por todas las instancias de la clase.
*/
class Gato {
	public static $claveSecreta = "12345";
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
		return "Hola, soy $this->nombre";
	}

}

class OtroGato extends Gato {

	public function nombreOtroGato() {
		return $this->nombre;
	}

}

// Acceso a propiedades y métodos estáticos
// No es necesario crear una instancia

echo "La clave secreta es: ".Gato::$claveSecreta."<br>";
echo "La frase secreta es: ".Gato::mensajeSecreto()."<br>";

// Acceso a métodos de instancia (requiere objeto)
$cucho = new Gato("Cucho");
echo $cucho->saludo()."<br>";

// Ejemplo: cambiar la propiedad estática afecta a todas las instancias
Gato::$claveSecreta = "nuevaClave";
$benito = new Gato("Benito");
echo "Clave secreta para Benito: ".$benito::$claveSecreta."<br>";
