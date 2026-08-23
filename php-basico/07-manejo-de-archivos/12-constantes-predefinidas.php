<?php 
/*
Constantes predefinidas (mágicas) en PHP, de doble guion bajo.
Son útiles para depuración y metaprogramación.
__LINE__ Número de línea actual en el archivo.
__FILE__ Ruta completa y nombre del archivo. Si se usa dentro de un include, devolverá el nombre del fichero incluido.
__DIR__ Directorio del archivo. Si se utiliza dentro de un include, devolverá el directorio del archivo incluído.
__METHOD__ Nombre del método de la clase.
__FUNCTION__ Nombre de la función.
__CLASS__ Nombre de la clase.
*/
function prueba(){
	echo "Línea actual dentro de la función: " . __LINE__ . "<br>";
	echo "Nombre de la función: " . __FUNCTION__ . "<br>";
}

prueba();

echo "<br>";

echo "Línea actual fuera de la función: " . __LINE__ . "<br>";
echo "Ruta y nombre del archivo: " . __FILE__ . "<br>";
echo "Directorio del archivo: " . __DIR__ . "<br>";

echo "<br>";

class Materia {
	public function nombre() {
		echo "Nombre de la clase: " . __CLASS__ . "<br>";
		echo "Nombre del método: " . __METHOD__ . "<br>";
	}
}

(new Materia())->nombre();

echo "<br>";

// Ejemplo adicional: mostrar el nombre de la función y la línea actual
echo "Esta línea es la número " . __LINE__ . " en el archivo " . __FILE__ . "<br>";
