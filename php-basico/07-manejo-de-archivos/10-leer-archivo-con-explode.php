<?php 
/*
Leer un archivo delimitado usando fgets() y explode().
¡Advertencia! Verifica que el archivo exista y tenga el formato correcto.
*/

$dat = "../_files/escuelas.dat"; // Archivo de práctica
$columns = true;

if (is_readable($dat)) {
	$file = fopen($dat, "r");
	echo "<b>Contenido del archivo de escuelas:</b><br>";
	while (!feof($file)) {
		$line = fgets($file);
		$data = explode("|", $line);
		// Excluir la primera línea (encabezado)
		if ($columns) {
			$columns = false;
			continue;
		}
		// Verificar que la línea tenga el número correcto de columnas
		if ($data && count($data) >= 4) {
			echo "Escuela: ".$data[1]."<br>";
			echo "Domicilio: ".$data[2]."<br>";
			echo "Localidad: ".$data[3]."<br>";
			echo "-------------<br>";
		} else if ($line && trim($line) !== "") {
			echo "Línea mal formateada o incompleta.<br>";
		}
	}
	fclose($file);
} else {
	echo "No se pudo leer el archivo. Verifica que exista y los permisos.<br>";
}
