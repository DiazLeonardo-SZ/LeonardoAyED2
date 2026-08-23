<?php 
/**
 * Constantes en clases
 * Las constantes se definen con la palabra clave 'const' y se usan para valores que no cambian.
 * Se accede a ellas con el operador de resolución de ámbito (::).
 * Por convención, los nombres de constantes van en mayúsculas y con guiones bajos.
 */

class MiClase {
	const VALOR_CONSTANTE = 'valor constante';
	// Ejemplo de uso en un método
	public function mostrarConstante() {
		echo self::VALOR_CONSTANTE."<br>";
	}
}

echo MiClase::VALOR_CONSTANTE."<br>";

$nombreclase = "MiClase";
echo $nombreclase::VALOR_CONSTANTE."<br>";

$clase = new MiClase();
$clase->mostrarConstante();
echo $clase::VALOR_CONSTANTE."<br>";

// Buenas prácticas:
// - Usar nombres descriptivos y en mayúsculas: EJEMPLO_CONSTANTE
// - Usar constantes para valores que no deben cambiar nunca 