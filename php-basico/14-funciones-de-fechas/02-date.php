<?php 
/**
 * La función date() devuelve la fecha/hora actual formateada según el string de formato.
 * Es muy útil para mostrar fechas en diferentes estilos y para trabajar con bases de datos.
 *
 * ¡Advertencia! El resultado depende de la zona horaria configurada en PHP.
 * Usa date_default_timezone_set() para establecerla si es necesario.
 *
 * Formatos comunes:
 *  Y = año completo (2024)
 *  m = mes (01-12)
 *  d = día (01-31)
 *  H = hora (00-23)
 *  i = minutos (00-59)
 *  s = segundos (00-59)
 *  l = nombre del día
 *  D = abreviatura del día
 *
 * Ejemplo de formato estándar MySQL: "Y-m-d H:i:s"
 *
 * @link https://www.php.net/manual/es/function.date.php
 */

// Puedes cambiar la zona horaria si lo necesitas:
// date_default_timezone_set('Europe/Madrid');

$today = date("Y-m-d H:i:s");
echo "Fecha actual (MySQL): $today<br><br>";

// date() acepta un segundo parámetro: un timestamp
$now = time();
$ten_days = $now + (60*60*24*10);
echo "Fecha dentro de 10 días: ".date("Y-m-d H:i:s", $ten_days)."<br>";

// Ejemplo de cambio de formato
echo "Fecha corta: ".date("d/m/Y", $now)."<br>";
echo "Día de la semana: ".date("l", $now)."<br>";