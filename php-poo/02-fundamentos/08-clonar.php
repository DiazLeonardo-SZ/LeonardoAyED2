<?php 
/*
Clonación de objetos:
- Usar 'clone' crea una copia independiente del objeto.
- Cambios en el objeto clonado no afectan al original.
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


	function setNombre($n="gato"){
		$this->nombre = $n;
	}

	public function getNombre() {
		return $this->nombre;
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
		return "miau, miau".self::$claveSecreta."<br>";
	}

	public function tieneCorbata() {
		return $this->nombre." ".$this->corbata."<br>";
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
		echo parent::maullar();
		return "miau, miau, miau y miau";
	}

}

$cucho = new Gato("Cucho", "rosa");
$benito = new OtroGato("Benito","azul");

$panza = clone $cucho;

$panza->setCorbata("SI");
$cucho->setCorbata("NO");

echo $panza->tieneCorbata();
echo $cucho->tieneCorbata();

$panza->setNombre("Panza");

echo $panza->tieneCorbata();
echo $cucho->tieneCorbata();

// Si solo copiamos la referencia, ambos apuntan al mismo objeto
$ref = $cucho;
$ref->setNombre("Referencia");
echo "\nDespués de cambiar la referencia:<br>";
echo "Original: ".$cucho->tieneCorbata();
echo "Referencia: ".$ref->tieneCorbata();
