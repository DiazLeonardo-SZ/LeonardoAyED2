<?php 
/**
 * Llamado de los espacios de nombres
 * 
 * El manejo de los espacios de nombres es muy similar al uso 
 * de un sistema de archivos de un disco duro. 
 * 
 * Llamar al archivo con una ruta absoluta.
 * Llamar al archivo con una ruta relativa.
 * Llamar al archivo sin ninguna ruta.
 * 
 * Nombre no cualificado (no ponemos una ruta)
 * Nombre cualificado (ruta relativa)
 * Nombre completamente cualificado (ruta absoluta)
 * Global (no pertenece a ningún espacio de nombre)
 */
namespace Animal\Perro;
include "perro.php";

const NOMBRE = "Perro";

function comer(){
	echo "Estoy comiendo, perro<br>";
}
class Pasear{
	static function paseo(){
		echo "Estoy paseando, perro<br>";
	}
}

// Nombre no cualificado (dentro del mismo namespace)
comer();
Pasear::paseo();
echo NOMBRE."<br>";
echo "<hr>";
// Nombre cualificado (subnamespace)
salchicha\comer();
salchicha\Pasear::paseo();
echo salchicha\NOMBRE."<br>";
echo "<hr>";
// Nombre completamente cualificado (desde la raíz)
\Animal\Perro\salchicha\comer();
\Animal\Perro\salchicha\Pasear::paseo();
echo \Animal\Perro\salchicha\NOMBRE."<br>";

// Resumen:
// - No cualificado: comer()
// - Cualificado: salchicha\comer()
// - Completamente cualificado: \Animal\Perro\salchicha\comer()
