<?php
// Namespace con varias clases, funciones y constantes
namespace Animales\Mamiferos;

class Perro{
	function __construct(){
		echo "Hola, soy un perro<br>";
	}
}

class Gato{
	function __construct(){
		echo "Hola, soy un gato<br>";
	}
}

function ladrar(){ echo "Guau, guau<br>"; }

function maullar(){ echo "Miau, miau<br>"; }

const PERRO = "Lazzy";

const GATO = "Gardfield";

// Para usar desde otro archivo:
// use Animales\Mamiferos\Perro;
// use function Animales\Mamiferos\ladrar;
// use const Animales\Mamiferos\PERRO;
// $perro = new Perro();
// ladrar();
// echo PERRO;
