<?php 
/**
 * Autoload de clases
 *
 * spl_autoload_register() permite cargar automáticamente las clases cuando se usan.
 * Esto evita tener que escribir muchos require/include manualmente.
 *
 * Estructura recomendada:
 * /clases/NombreClase.php
 *
 * class NombreClase { ... }
 */

spl_autoload_register(function($class){
	// Busca la clase en la carpeta 'classes'
	require_once './classes/'.$class.'.php';
});

$gato = new Gato();
$auto = new Auto();
$frutas = new Frutas();
$otro_gato = new OtroGato();

$auto->modelo = "Honda";
echo $auto->modelo();

// Beneficio: solo se cargan las clases que realmente se usan.
