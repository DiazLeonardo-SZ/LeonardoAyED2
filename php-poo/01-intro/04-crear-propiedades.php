<?php 
/*
Las propiedades son variables que pertenecen a una clase. Cada objeto puede tener valores diferentes para sus propiedades.
*/

class Gato {
	# propiedades
	public $nombre;
	public $colorPelo;
	public $corbata = "SI"; // Valor por defecto

	# metodos
	public function maullar(){
		return "miau, miau";
	}

	public function tieneCorbata(){
		// $this se refiere al objeto actual
		return $this->nombre." ".$this->corbata." tiene corbata y su color de pelo es ".$this->colorPelo."<br>";
	}

}
# instancias
$cucho = new Gato();

# Poblar las propiedades
$cucho->nombre = "Cucho";
$cucho->colorPelo = "rosa";
$cucho->corbata = "NO";

echo $cucho->nombre." dice ".$cucho->maullar()."<br>";
echo $cucho->tieneCorbata();

// ¿Qué pasa si no asignamos una propiedad?
$benito = new Gato();
echo "<br>Nombre de Benito: ".$benito->nombre; // Será null
