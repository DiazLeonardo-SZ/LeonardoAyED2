<?php 
// Abrir y leer un archivo línea por línea en modo lectura ('r')
// Verifica los permisos antes de leer.

$dir = "../_files/"; // Directorio de práctica
$file = "datos1.txt"; // Nombre del archivo

if (is_readable($dir.$file)) {
	# abrir el archivo modo solo lectura

	$archivo = fopen($dir.$file, "r");
	echo "<b>Contenido del archivo $file:</b><br>";
	while (!feof($archivo)) {
		$line = fgets($archivo);
		echo htmlspecialchars($line)."<br>";
	}
	
	fclose($archivo);

} else {
	echo "No se pudo leer el archivo. Verifica los permisos.<br>";
}
