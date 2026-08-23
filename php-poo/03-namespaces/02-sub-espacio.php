<?php 
/**
 * Definir sub-espacios de nombres
 * 
 * Al igual que los archivos y sus carpetas, podemos tener subespacios 
 * de nombres. Un espacio de nombres se puede definir por sus subespacios.
 * Para eso se utiliza \, en proyectos reales podriamos usar el nombre de
 * nuestra aplicacion\db o aplicacion\funciones y cosas asi. A veces es buena 
 * practica guiarnos por los nombre de las carpetas del proyecto
 */
namespace App\Form;

const NOMBRE = "Lazzy";

class MiPerro { 
	public function saludar() {
		echo "Guau, soy ".NOMBRE." de App\\Form<br>";
	}
}

function pasearAlPerro() { 
	echo "Sacando a pasear a ".NOMBRE." desde App\\Form<br>";
}

// Para usar desde fuera de este archivo:
// $perro = new \App\Form\MiPerro();
// \App\Form\pasearAlPerro();