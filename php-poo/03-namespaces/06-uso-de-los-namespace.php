<?php 
/**
 * Uso de los espacios de nombres: el comando use
 * 
 * El comando "use" permite importar clases, funciones y constantes de un namespace externo, y asignarles un alias si se desea.
 * Puedes agrupar varias importaciones en una sola línea.
 */
require "use.php";
/*
use Animales\Mamiferos\{ Perro as MiPerro, Gato };
use function Animales\Mamiferos\{ladrar as ladrido, maullar};
use const Animales\Mamiferos\{PERRO as DOG, GATO as CAT };
*/

// Importar clases, funciones y constantes con alias
use Animales\Mamiferos\Perro as MiPerro;
use Animales\Mamiferos\Gato;
use function Animales\Mamiferos\ladrar as ladrido;
use function Animales\Mamiferos\maullar;
use const Animales\Mamiferos\PERRO as DOG;
use const Animales\Mamiferos\GATO;

echo "<h2>Clases del espacio de nombres</h2>";

$perro = new MiPerro;
$gato = new Gato;

$class = '\\Animales\\Mamiferos\\Gato';

if (class_exists($class)) {
	echo "GATO class existe";
}

echo "<h2>Funciones del espacio de nombres</h2>";

ladrido();
maullar();

echo "<h2>Constantes del espacio de nombres</h2>";

echo DOG."<br>";
echo GATO."<br>";
