<?php 
/**
 * Ejemplo de manejador de errores personalizado en PHP con set_error_handler.
 * ¡Advertencia! Los manejadores personalizados pueden ayudar a registrar errores, pero no reemplazan el manejo de excepciones.
 * @link https://www.php.net/manual/es/function.set-error-handler.php
 */

// Definir el manejador personalizado
function miManejadorErrores($errno, $errstr, $errfile, $errline) {
    echo "<b>Error capturado:</b> [$errno] $errstr en $errfile línea $errline<br>";
    // Aquí podrías registrar el error en un archivo de log
    // ¡Advertencia! No muestres detalles de errores en producción
}

// Establecer el manejador personalizado
set_error_handler("miManejadorErrores");

// Provocar un error para probar el manejador
$valor = 10 / 0; // Warning: División por cero

// ¡Advertencia! Usa manejadores personalizados para registrar errores, no para ocultarlos. 