<?php 
/*
Escribir datos en formato JSON en PHP usando json_encode(array).
¡Advertencia! Validar el contenido antes de guardar y tener cuidado con la sobreescritura de archivos.
*/

$dir = "../_files/"; // Directorio de práctica
$file = "items.json"; // Nombre del archivo

$items = [
	"nombre" => "Memoria RAM",
	"tipo" => "SODIMM",
	"modelo" => "DDR3",
	"marca" => "Kingstone",
	"caracteristicas" => [
		"producto nuevo",
		"blister sellado",
		"velocidad 1666 Mhz"
	],
	"precio" => 1200,
	"stock" => true
];

// Convertir el array a JSON
$json_str = json_encode($items, JSON_PRETTY_PRINT);
if ($json_str === false) {
    die("Error al codificar a JSON: ".json_last_error_msg()."<br>");
}

// Mostrar el JSON generado
echo "<b>JSON generado:</b><br>";
echo nl2br(htmlspecialchars($json_str))."<hr>";

// Guardar el JSON en un archivo (solo si no existe)
if (!file_exists($dir.$file)) {
    touch($dir.$file);
    chmod($dir.$file, 0777);
    $json = fopen($dir.$file, "w");
    fwrite($json, $json_str);
    fclose($json);
    echo "Archivo $file creado correctamente.<br>";
} else {
    echo "El archivo $file ya existe. No se sobreescribió.<br>";
}

// ¡Advertencia! Si necesitas actualizar el archivo, asegúrate de validar y respaldar los datos.