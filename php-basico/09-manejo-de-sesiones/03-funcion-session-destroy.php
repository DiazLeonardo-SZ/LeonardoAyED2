<?php 
session_start();

// Si existe la variable de sesión 'id', destruir la sesión y limpiar variables
if (isset($_SESSION['id'])) {
	session_destroy(); // Destruye la sesión
	unset($_SESSION['id']);
	unset($_SESSION['rol']);
	unset($_SESSION['user']);
	unset($_SESSION['pass']);
}

echo "Se cerró la sesión<br>";

// Mostrar el contenido actual de la sesión (debería estar vacío)
var_dump($_SESSION);

// ¡Advertencia! Siempre limpia las variables de sesión sensibles.