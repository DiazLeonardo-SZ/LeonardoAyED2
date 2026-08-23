<?php 
/*
Una instancia es un objeto creado a partir de una clase. Cada objeto puede tener sus propios valores para las propiedades definidas en la clase.
*/

class Gato {

	public function maullar(){
		return "miau, miau";
	}

}

# Creamos las instancias

$cucho = new Gato();
$benito = new Gato();
$espanto = new Gato();

# detectar la clase de una instancia / objeto

echo "Espanto pertenece a la clase ".get_class($espanto)."<br>";

# Verificar que un objeto pertenezca a una clase

echo "Cucho ";
if (is_a($cucho,"Gato")) { // is_a() comprueba si es un objeto de esa clase
	echo "Sí es un gato"."<br>";
} else {
	echo "No es un gato"."<br>";
}

# Llamar a un metodo

echo "Cucho dice ".$cucho->maullar()."<br>";
echo "Benito dice ".$benito->maullar()."<br>";
echo "Espanto dice ".$espanto->maullar()."<br>";

# Diagrama visual en comentarios:
# Clase (molde):
#   Gato
#      |__ maullar()
#
# Objetos (instancias):
#   $cucho = new Gato();
#   $benito = new Gato();
#   $espanto = new Gato();