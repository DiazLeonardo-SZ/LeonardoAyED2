<?php 
/*
Leer un archivo CSV usando fgetcsv().
¡Advertencia! Verifica que el archivo exista y tenga el formato correcto.
*/

$csv = "../_files/personas.csv"; // Archivo de práctica
$columns = true;

if (is_readable($csv)) {
	$file = fopen($csv, "r");
	echo "<b>Contenido del archivo CSV:</b><br>";
	while (!feof($file)) {
		$line = fgetcsv($file);
		// Excluir la primera línea (encabezado)
		if ($columns) {
			$columns = false;
			continue;
		}
		// Verificar que la línea tenga el número correcto de columnas
		if ($line && count($line) >= 5) {
			echo "Nombre completo: ".$line[0]." ".$line[1]."<br>";
			echo "Email: ".$line[2]."<br>";
			echo "Teléfono: ".$line[3]."<br>";
			echo "Dirección: ".$line[4]."<br>";
			echo "-------------<br>";
		} else if ($line) {
			echo "Línea mal formateada o incompleta.<br>";
		}
	}
	fclose($file);
} else {
	echo "No se pudo leer el archivo CSV. Verifica que exista y los permisos.<br>";
}
