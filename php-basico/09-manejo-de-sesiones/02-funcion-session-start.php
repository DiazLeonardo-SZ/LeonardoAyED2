<?php 
session_start();

// Mostrar el contenido actual de la sesión
var_dump($_SESSION);

// Verificar si la sesión está activa y el usuario tiene rol 2
if ( (!empty($_SESSION)) && (isset($_SESSION['rol']) && $_SESSION['rol'] == 2) ) {
	echo "<br>ID: ".$_SESSION['id'];
	echo "<br>Rol: ".$_SESSION['rol'];
	echo "<br>Usuario: ".$_SESSION['user'];
	echo "<br><h1 style='color:green'>Hola usuario autorizado</h1>";
} else {
	// Si no hay sesión o el rol no es 2, acceso denegado
	echo "<h1 style='color:red'>Acceso no autorizado</h1>";
}

// ¡Advertencia! No guardes contraseñas en texto plano en la sesión y nunca las muestres.
