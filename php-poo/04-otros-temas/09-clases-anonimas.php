<?php 
/**
 * Clases anónimas
 *
 * Útiles para definir objetos sencillos y "desechables" en tiempo de ejecución.
 * Se usan cuando no necesitas reutilizar la clase.
 * Puedes pasar argumentos al constructor igual que en una clase normal.
 */
$perro = new class {
	public function getNombre(){
		return "Hola soy un Perro<br>";
	}
};

$gato = new class("Don Gato") {
	private $nombre;
	public function __construct($nombre){
		$this->nombre = $nombre;
	}
	public function getNombre(){
		return "Mi nombre es ".$this->nombre."<br>";
	}
};

echo $gato->getNombre();
echo $perro->getNombre();

// Útil para callbacks, pruebas rápidas o inyección de dependencias.
