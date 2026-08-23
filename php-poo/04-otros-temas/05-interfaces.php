<?php 
/**
 * Interfaces
 * 
 * Las interfaces definen qué métodos debe implementar una clase, pero no su implementación.
 * Se usan para garantizar que diferentes clases tengan ciertos métodos en común.
 * Una clase puede implementar varias interfaces.
 * Los métodos de una interfaz siempre son públicos.
 * Diferencia con clases abstractas: las interfaces no pueden tener implementación, las abstractas sí.
 * Convención: el nombre de la interfaz suele empezar con 'I' o 'i'.
 * 
 */
interface iMamifero{
	public function andar();
}
interface iComunicador{
	public function comunicar();
}

class Gato implements iMamifero, iComunicador{
	public function andar(){
		return "camina";
	}
	public function comunicar(){
		return "maulla";
	}
}

class Delfin implements iMamifero, iComunicador{
	public function andar(){
		return "nada";
	}
	public function comunicar(){
		return "chilla";
	}
}

class Murcielago implements iMamifero{
	public function andar(){
		return "vuela";
	}
}

$gato = new Gato();
$delfin = new Delfin();
$murcielago = new Murcielago();

echo "El gato ".$gato->andar()." y ".$gato->comunicar()."<br>";
echo "El delfin ".$delfin->andar()." y ".$delfin->comunicar()."<br>";
echo "El murcielago ".$murcielago->andar()."<br>";

// $murcielago->comunicar(); // Error: no implementa iComunicador