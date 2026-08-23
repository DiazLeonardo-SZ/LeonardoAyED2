<?php 
/**
 * La función time() devuelve la fecha/hora actual en formato UNIX (timestamp),
 * que es el número de segundos desde el 1 de enero de 1970 (UTC).
 * Puedes sumar o restar segundos para calcular fechas futuras o pasadas.
 * Es útil para cálculos de fechas y expiraciones.
 *
 * ¡Advertencia! El resultado depende de la zona horaria configurada en PHP.
 * Usa date_default_timezone_set() para establecerla si es necesario.
 *
 * @link https://www.php.net/manual/es/function.time.php
 */

// Obtener el timestamp actual
$now = time();

// Calcular el timestamp dentro de 10 días
$ten_days = $now + (60*60*24*10);

echo "Hora UNIX actual: $now<br><br>";
echo "Dentro de 10 días (timestamp): $ten_days<br>";

// Convertir el timestamp a una fecha legible
// Formato: Y-m-d H:i:s (ejemplo: 2024-03-26 16:00:00)
echo "<br>Fecha actual legible: ".date("Y-m-d H:i:s", $now)."<br>";
echo "Fecha dentro de 10 días: ".date("Y-m-d H:i:s", $ten_days)."<br>";

// ¡Consejo! Cambia la zona horaria si lo necesitas:
// date_default_timezone_set('America/Mexico_City');
