<?php 
/**
 * La función strtotime() convierte una cadena de texto (en inglés) a un timestamp UNIX.
 * Permite interpretar frases como "+1 day", "next Monday", etc.
 *
 * ¡Advertencia! Usa formatos claros y preferentemente en inglés para evitar ambigüedades.
 *
 * @link https://www.php.net/manual/es/function.strtotime.php
 */

// Ejemplos de uso y conversión a fecha legible
$now = strtotime("now");
echo "$now Ahora: ".date("Y-m-d H:i:s", $now)."<br>";

$plus1 = strtotime("+1 day");
echo "$plus1 un día más: ".date("Y-m-d H:i:s", $plus1)."<br>";

$plusweek = strtotime("+1 week");
echo "$plusweek una semana más: ".date("Y-m-d H:i:s", $plusweek)."<br>";

$complex = strtotime("+1 week 2 days 4 hours 2 seconds");
echo "$complex una semana, 2 días, 4hr, 2s más: ".date("Y-m-d H:i:s", $complex)."<br>";

$nextThu = strtotime("next Thursday");
echo "$nextThu próximo jueves: ".date("Y-m-d H:i:s", $nextThu)."<br>";

$lastMon = strtotime("last Monday");
echo "$lastMon el lunes pasado: ".date("Y-m-d H:i:s", $lastMon)."<br>";

// ¡Consejo! Usa strtotime para comparar fechas, sumar/restar días, etc.