<?php 
/*
Uso de die() y exit() en PHP para terminar la ejecución con un mensaje de error.
¡Advertencia! No uses die/exit para manejo de errores en aplicaciones grandes, usa excepciones.
*/

// Verificar si existe el archivo antes de continuar
if(file_exists("../_files/datos1.txt")) {
	echo "El archivo sí existe<br>";
} else {
	// Terminar la ejecución con un mensaje de error
	die("No existe el archivo 'datos1.txt', usando die()<br>");
	// exit("No existe el archivo 'datos1.txt', usando exit()<br>");
}
// Este mensaje solo se muestra si no hubo error
echo "Este mensaje se despliega solo si no hay error.<br>";