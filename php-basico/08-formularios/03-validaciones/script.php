<?php 
/**
 * Validación de datos de formulario en el backend con PHP
 * ¡Advertencia! Nunca confíes solo en la validación del frontend.
 * Usa expresiones regulares y funciones de PHP para validar y sanear los datos.
 * @link https://developer.mozilla.org/es/docs/Learn/Forms/Form_validation
 * @link https://www.php.net/manual/en/function.preg-match
 */

// Mostrar todos los datos recibidos
echo "<b>Datos recibidos:</b><br>";
var_dump($_POST);
echo "<hr>";

// Validar nombre
if ( (isset($_POST['nombre'])) && (!empty(trim($_POST['nombre']) ?? '')) ) {
	if ((preg_match('/^[A-Za-z ]+$/', $_POST['nombre'])) 
		&& (strlen($_POST['nombre']) >= 6) 
		&& (strlen($_POST['nombre']) <= 10)) {

		echo $_POST['nombre']." es válido <br>";

	} else {

		echo $_POST['nombre']." NO es válido <br>";

	}
} else {
	echo "El nombre es requerido, no puede estar vacío <br>";
}

// Validar edad
if ( (isset($_POST['edad'])) && (!empty(trim($_POST['edad']) ?? '')) ) {
	if ((preg_match('/^[0-9]+$/', $_POST['edad'])) 
		&& ($_POST['edad'] >= 0) 
		&& ($_POST['edad'] <= 90)) {

		echo $_POST['edad']." es válido <br>";

	} else {

		echo $_POST['edad']." NO es válido <br>";

	}
} else {
	echo "La edad es requerida y no puede estar vacía <br>";
}

echo "<hr><b>Advertencia:</b> Siempre valida y sanea los datos en el backend.<br>";
