<?php 
/**
 * Ejemplo de procesamiento de formulario con PHP
 * El array $_POST toma el nombre de sus índices de los atributos name="" del input correspondiente
 * ¡Advertencia! Siempre valida y sanea los datos recibidos antes de usarlos.
 */

// Mostrar todos los datos recibidos
echo "<b>Datos recibidos:</b><br>";
var_dump($_POST);
echo "<hr>";

// Ejemplo de acceso y validación básica
if (isset($_POST['nombre']) && trim($_POST['nombre']) !== '') {
    $nombre = htmlspecialchars($_POST['nombre']);
    echo "Nombre: $nombre<br>";
} else {
    echo "El nombre es requerido.<br>";
}

if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $email = $_POST['email'];
    echo "Email: $email<br>";
} else {
    echo "El email no es válido.<br>";
}

// ... (agregar validaciones para los demás campos según necesidad)
