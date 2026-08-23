<?php 
/**
 * Leer y decodificar un archivo JSON en PHP
 * Usar json_decode(string) para convertir JSON a objeto o array PHP.
 * ¡Advertencia! Valida el contenido y maneja errores de formato.
 * @link https://www.php.net/manual/es/ref.json.php
 */

$dir = "../_files/"; // Directorio de práctica
$file = "usuarios.json"; // Nombre del archivo

// Leer el archivo JSON y manejar errores
$json_str = @file_get_contents($dir.$file);
if ($json_str === false) {
    die("No se pudo leer el archivo JSON.<br>");
}

// Decodificar como objeto
$json_obj = json_decode($json_str);
// Decodificar como array asociativo
$json_arr = json_decode($json_str, JSON_OBJECT_AS_ARRAY);

if (json_last_error() !== JSON_ERROR_NONE) {
    die("Error al decodificar JSON: ".json_last_error_msg()."<br>");
}

// Mostrar el objeto y el array
echo "<b>Objeto JSON:</b><br>";
var_dump($json_obj);
echo "<br><b>Array JSON:</b><br>";
var_dump($json_arr);
echo "<hr>";

// Acceder a datos del objeto
if (is_array($json_obj) || is_object($json_obj)) {
    echo "<h3>Acceder a datos de json_obj</h3>";
    for ($i=0; $i < count($json_obj); $i++) { 
        echo "Nombre: ".$json_obj[$i]->nombre."<br>";
        echo "Apellidos: ".$json_obj[$i]->apellidos."<br>";
        echo "Edad: ".$json_obj[$i]->edad."<br>";
        echo "Municipio: ".$json_obj[$i]->ubicacion->municipio."<br>";
        echo "Localidad: ".$json_obj[$i]->ubicacion->localidad."<br>";
        echo "Calle: ".$json_obj[$i]->ubicacion->calle."<br>";
        echo $json_obj[$i]->alta ? "Alta: activado<br>" : "Alta: desactivado<br>";
        echo "<br>";
    }
}

/*
// Acceder a datos del array asociativo
if (is_array($json_arr)) {
    echo "<h3>Acceder a datos de json_arr</h3>";
    for ($i=0; $i < count($json_arr); $i++) { 
        $keys = array_keys($json_arr[$i]);
        for ($j=0; $j < count($keys); $j++) {
            if ($keys[$j] == "alta") {
                echo $json_arr[$i][$keys[$j]] ? ucfirst($keys[$j]).": activado<br>" : ucfirst($keys[$j]).": desactivado<br>";
                continue;
            }
            if (is_array($json_arr[$i][$keys[$j]])) {
                echo ucfirst($keys[$j]).": <br>";
                $keys_k = array_keys($json_arr[$i][$keys[$j]]);
                for ($k=0; $k < count($keys_k); $k++) { 
                    echo "&emsp;".ucfirst($keys_k[$k]).": ".$json_arr[$i][$keys[$j]][$keys_k[$k]]."<br>";
                }
                continue;
            }
            echo ucfirst($keys[$j]).": ".$json_arr[$i][$keys[$j]]."<br>";
        }
        echo "<br>";
    }
}
*/

// ¡Advertencia! Valida siempre el contenido y estructura del JSON antes de usarlo en producción.