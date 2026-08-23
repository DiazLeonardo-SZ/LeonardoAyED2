<?php 
/**
 * ReflectionClass: inspección de clases en tiempo de ejecución
 *
 * Permite obtener información sobre una clase: métodos, propiedades, herencia, etc.
 * Útil para depuración, frameworks, autoloaders, etc.
 */
class Gato{
	public function ronronear(){
		return "ronronear";
	}
	final function maullar(){
		return "miau, miau";
	}
}

class OtroGato extends Gato{

	public function ronronear(){
		return "ron, ron, ron";
	}

}

$info = new ReflectionClass("OtroGato");
echo "<pre>";
echo "Clase: ".$info->getName()."\n";
echo "Padre: ".$info->getParentClass()->getName()."\n";
echo "Métodos: ".implode(", ", array_map(function($m){return $m->getName();}, $info->getMethods()))."\n";
echo "Propiedades: ".implode(", ", array_map(function($p){return $p->getName();}, $info->getProperties()))."\n";
echo "</pre>";

// ReflectionClass es útil para depuración, frameworks y herramientas de análisis de código.