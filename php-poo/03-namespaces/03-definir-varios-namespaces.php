<?php 
/**
 * Definir varios espacios de nombres en un archivo
 *
 * Puedes definir varios namespaces en un solo archivo usando llaves.
 * No es recomendable en proyectos grandes: lo ideal es un archivo por namespace.
 */

namespace Perro {
	const NOMBRE = "Lazzy";
	class Comer {
		public static function info() { echo "Comiendo perro<br>"; }
	}
	function pasear() { echo "Paseando perro<br>"; }
}

namespace Gato {
	const NOMBRE = "Garfield";
	class Comer {
		public static function info() { echo "Comiendo gato<br>"; }
	}
	function pasear() { echo "Paseando gato<br>"; }
}

// Para usar desde fuera de este archivo:
// \Perro\Comer::info();
// \Gato\Comer::info();
// \Perro\pasear();
// \Gato\pasear();