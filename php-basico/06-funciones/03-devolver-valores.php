<?php 
/*
Los valores son devueltos usando la sentencia opcional return. 
Se puede devolver cualquier tipo, incluidos arrays y objetos. 
Esto causa que la función finalice su ejecución inmediatamente 
y pase el control de nuevo a la línea desde la que fue llamada.
*/

# Devolver un string
function verMensaje() {
	return "Mensaje de return";
}
echo "Resultado de verMensaje(): ".verMensaje()."<br><br>";

# Devolver un booleano
function trueOrFalse($numero) {
	return $numero > 0 ? true : false;
}

$num = -5;
echo "¿$num es positivo? ".(trueOrFalse($num) ? "Sí" : "No")."<br>";

$num = 10;
echo "¿$num es positivo? ".(trueOrFalse($num) ? "Sí" : "No")."<br>";

# Devolver un array
function obtenerPares($max) {
	$pares = [];
	for ($i = 0; $i <= $max; $i++) {
		if ($i % 2 == 0) {
			$pares[] = $i;
		}
	}
	return $pares;
}
$pares = obtenerPares(10);
echo "<br>Pares hasta 10: ";
print_r($pares);
