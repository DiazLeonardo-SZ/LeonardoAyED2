<?php 
/**
 * Manejo de errores en PHP
 * Por omisión, PHP puede mostrar errores en pantalla con archivo, número de línea y mensaje.
 * En producción, es recomendable desactivar la visualización de errores para evitar exponer información sensible.
 * Puedes habilitar los errores en desarrollo con:
 *   ini_set('display_errors', 1);
 *   error_reporting(E_ALL);
 * @link https://www.php.net/manual/es/function.error-reporting
 * @link https://www.php.net/manual/es/function.ini-set
 */

// Habilitar errores (solo en desarrollo)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Ejemplo de error para mostrar la utilidad de la configuración
echo $variable_no_definida; // Esto generará un Notice

// ¡Advertencia! No muestres errores en producción. Usa logs para registrar errores.