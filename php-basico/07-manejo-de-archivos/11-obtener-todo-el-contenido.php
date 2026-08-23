<?php 
/*
Obtener todo el contenido de un archivo usando file_get_contents().
¡Advertencia! No usar con archivos muy grandes, ya que carga todo en memoria.
*/
$dat = "../_files/escuelas.dat"; // Archivo de práctica

if (is_readable($dat)) {
    $data = file_get_contents($dat);
    echo "<b>Contenido completo del archivo:</b><br>";
    echo nl2br(htmlspecialchars($data));
} else {
    echo "No se pudo leer el archivo. Verifica que exista y los permisos.<br>";
}
