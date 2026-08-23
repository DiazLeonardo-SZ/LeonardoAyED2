<?php 
/**
 * Manejo de excepciones en PHP con try, throw y catch.
 * ¡Advertencia! Usa excepciones para manejar errores en aplicaciones grandes.
 * @link https://www.php.net/manual/es/class.exception
 */

	function suma($n1, $n2) {
		$suma = $n1 + $n2;
		if ($suma > 10) {
			// Lanzar una excepción si la suma es mayor a 10
			throw new Exception("La suma debe ser menor o igual a 10");
		}
		return $suma;
	}

	try {
		$resultado = suma(31,5);
		echo "Si ves este mensaje, la suma es válida: $resultado<br>";
	} catch (Exception $e) {
		// Capturar y mostrar el mensaje de la excepción
		echo "<b>Ocurrió una excepción:</b> ".$e->getMessage()."<br>";
	}

	// ¡Advertencia! Siempre maneja las excepciones para evitar que el script termine abruptamente.