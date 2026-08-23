<?php 
/**
 * Rasgos (Traits) para herencia múltiple
 *
 * PHP no permite herencia múltiple de clases, pero los traits permiten reutilizar métodos en varias clases.
 * Si dos traits tienen métodos con el mismo nombre, se debe resolver el conflicto usando insteadof y as.
 */
interface Animal {
	function nacer();
	function crecer();
	function reproducir();
	function morir();
}

trait Oviparo {
	private $huevos;
	public function getHuevos(){ return $this->huevos; }
	public function reproducir(){ return "pone huevos"; }
}
trait Viviparo {
	public function reproducir(){ return "pare crías"; }
}

abstract class Vertebrado implements Animal {
	private $huesos;

	public function getHuesos(){ return $this->huesos; }
	public function nacer(){}
	public function crecer(){}
	public function reproducir(){}
	public function morir(){}
}

abstract class Invertebrado implements Animal {
	use Oviparo;
	private $hemocianina;

	public function getHemocianina(){ return $this->hemocianina; }
	public function nacer(){}
	public function crecer(){}
	public function reproducir(){}
	public function morir(){}
}

class Molusco extends Invertebrado {
	private $radula;
	public function getRadula(){ return $this->radula; }
}

class Reptil extends Vertebrado {
	use Oviparo, Viviparo {
		Oviparo::reproducir insteadof Viviparo;
		Viviparo::reproducir as reproducirViviparo;
	}
	private $escamas;
	public function getEscamas(){ return $this->escamas; }
}

class Tortuga extends Reptil {}
class Pulpo extends Molusco {}

$reptil = new Reptil();
echo $reptil->reproducir()."<br>"; // pone huevos
// Acceso al método del trait Viviparo renombrado
// echo $reptil->reproducirViviparo(); // pare crías

// Los traits permiten compartir métodos entre clases sin herencia múltiple real.
