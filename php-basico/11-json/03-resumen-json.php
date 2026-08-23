<?php
/*
Resumen de manejo de JSON en PHP
*/

echo "<h3>Funciones y operaciones comunes</h3>";
echo '<pre>json_encode($array)           // Convertir array/objeto PHP a JSON
json_decode($json, true)     // Convertir JSON a array asociativo
json_decode($json)           // Convertir JSON a objeto PHP
json_last_error()            // Verificar si hubo error al decodificar
json_last_error_msg()        // Mensaje de error de decodificación
</pre>';

echo "<h3>Ejemplo de lectura y escritura</h3>";
echo '<pre>// Escribir JSON
data = ["a" => 1, "b" => 2];
$json = json_encode($data);
file_put_contents("archivo.json", $json);

// Leer JSON
$json = file_get_contents("archivo.json");
$data = json_decode($json, true);
</pre>';

echo "<h3>Buenas prácticas</h3>";
echo '<pre>- Valida siempre el contenido y estructura del JSON antes de usarlo
- Maneja errores con json_last_error() y json_last_error_msg()
- Usa JSON_PRETTY_PRINT para archivos legibles
- No confíes en datos externos sin validarlos
</pre>'; 