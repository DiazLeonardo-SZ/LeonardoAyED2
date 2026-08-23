<?php 
/**
 * La función getdate() devuelve un array asociativo con información detallada
 * de la fecha y hora actual (o de un timestamp dado).
 *
 * Campos principales del array:
 *  ["seconds"]  => segundos (0-59)
 *  ["minutes"]  => minutos (0-59)
 *  ["hours"]    => horas (0-23)
 *  ["mday"]     => día del mes (1-31)
 *  ["wday"]     => día de la semana (0=Domingo)
 *  ["mon"]      => mes (1-12)
 *  ["year"]     => año (ej. 2024)
 *  ["yday"]     => día del año (0-365)
 *  ["weekday"]  => nombre del día (en inglés)
 *  ["month"]    => nombre del mes (en inglés)
 *  [0]           => timestamp UNIX
 *
 * ¡Advertencia! Los nombres de los días y meses están en inglés por defecto.
 *
 * @link https://www.php.net/manual/es/function.getdate.php
 */

$date = getdate();

// Mostrar el array completo
echo '<pre>'; print_r($date); echo '</pre>';

// Acceder a campos específicos
echo "Hoy es: ".$date["weekday"].", ".$date["mday"]." de ".$date["month"]." de ".$date["year"]."<br>";
echo "Hora actual: ".$date["hours"].":".$date["minutes"].":".$date["seconds"]."<br>";