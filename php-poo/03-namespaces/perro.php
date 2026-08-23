<?php 
// Namespace para una raza específica de perro
namespace Animal\Perro\salchicha;

const NOMBRE = "Canelita";

function comer(){
	echo "Estoy comiendo, Canelita<br>";
}

class Pasear{
	static function paseo(){
		echo "Estoy paseando, Canelita<br>";
	}
}

// Para usar desde otro archivo:
// use Animal\Perro\salchicha\Pasear;
// Pasear::paseo();