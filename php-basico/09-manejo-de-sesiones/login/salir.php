<?php 
session_start();
// Cerrar la sesión y limpiar variables de usuario
if (isset($_SESSION['user'])) {
	session_destroy();
	unset($_SESSION['user']);
	unset($_SESSION['pass']);
}
// Redirigir al login
header('Location:login.php');
// ¡Advertencia! Siempre limpia las variables de sesión sensibles al cerrar sesión.
