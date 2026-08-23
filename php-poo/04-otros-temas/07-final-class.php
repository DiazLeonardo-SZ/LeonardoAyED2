<?php 
/**
 * Clases y métodos finales (final)
 *
 * Una clase final no puede ser heredada.
 * Un método final no puede ser sobrescrito en una subclase.
 * Útil para evitar que se modifique el comportamiento crítico de una clase o método.
 */
// Descomenta para ver el error:
// final class Gato {
//     public function ronronear(){ return "ronronear"; }
// }
class Gato{
	public function ronronear(){
		return "ronronear";
	}
	final function maullar(){
		return "miau, miau";
	}
}

// Descomenta para ver el error:
// class OtroGato extends Gato {
//     public function maullar(){ return "miauuuuu, miauuuuu"; }
// }
class OtroGato extends Gato{
/*
 	public function maullar(){
 		return "miauuuuu, miauuuuu";
	}
*/
	public function ronronear(){
		return "ron, ron, ron";
	}

}

$otro_gato = new OtroGato();

echo "Maullar: ".$otro_gato->maullar()."<br>";
echo "Ronronear: ".$otro_gato->ronronear()."<br>";

// Usar final cuando no quieres que una clase o método sea modificado por herencia.