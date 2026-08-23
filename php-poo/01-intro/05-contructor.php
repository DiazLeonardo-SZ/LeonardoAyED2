<?php 
/*
El constructor es un método especial que se ejecuta automáticamente al crear un objeto. Se usa para inicializar propiedades o ejecutar acciones al construir el objeto.
*/

class Gato {
	public $nombre;
	public $colorPelo;
	public $corbata = "SI";
	
	// Método constructor: se llama automáticamente al crear el objeto
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
		$cadena = "Hola, me llamo ".$this->nombre." y mi color de pelo es ";
		$cadena .= $this->colorPelo;
		return $cadena;
	}
}
// Crear instancias
$cucho = new Gato("Cucho","rosa");
echo $cucho->nombre." dice ".$cucho->maullar()."<br>";
echo $cucho->tieneCorbata();
echo $cucho->saludo();

// Si no pasamos argumentos, se usan los valores por defecto
$defaultGato = new Gato();
echo "<br>Nombre: ".$defaultGato->nombre." | Color: ".$defaultGato->colorPelo;