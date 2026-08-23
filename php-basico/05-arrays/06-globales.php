<?php
/**
 * Varias variables predefinidas en PHP son "superglobales", lo que 
 * significa que están disponibles en todos los ámbitos de un script.
 * 
 * Las variables globales son:
 * $_SESSION, $_COOKIE, $_ENV, $_FILES, $_GET, $_POST, $_REQUEST, $_SERVER, $GLOBALS
 * El arreglo $GLOBALS nos permite utilizar una variable en cualquier parte del programa.
 * @link https://www.php.net/manual/en/language.variables.superglobals.php
 */

// Ejemplo de uso de $_SERVER
// ¡Cuidado! No mostrar información sensible en producción

echo "<b>Algunas variables de \\$_SERVER:</b><br>";
echo $_SERVER["PHP_SELF"]."<br>";
echo $_SERVER["SERVER_NAME"]."<br>";
echo $_SERVER["HTTP_HOST"]."<br>";
echo $_SERVER["SCRIPT_NAME"]."<br>";
echo $_SERVER["HTTP_USER_AGENT"]."<br>";

// Ejemplo de uso de $_GET y $_POST
echo "<br><b>Ejemplo de uso de \\$_GET:</b><br>";
if (isset($_GET["nombre"])) {
    echo "Hola, ".htmlspecialchars($_GET["nombre"])."<br>";
} else {
    echo "No se recibió el parámetro 'nombre' por GET.<br>";
}

// Ejemplo de uso de $_ENV
echo "<br><b>Variables de entorno (\\$_ENV):</b><br>";
foreach ($_ENV as $key => $value) {
    echo $key."=".$value."<br>";
}