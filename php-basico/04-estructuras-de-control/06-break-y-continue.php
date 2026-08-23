<?php
/*
El comando “continue” repite el ciclo sin ejecutar las instrucciones que estén después de ésta.
Este comando funciona dentro de cualquier comando de ciclos y condicionales (if, switch,
while, do...while y for).
El comando "break" termina el ciclo y no vuelve a evaluar la expresión, terminando
definitivamente el ciclo, sin importar el valor de la expresión.
A veces es necesario salir prematuramente de un ciclo, debido a una condición excepcional.
*/

echo "<h3>Ejemplo de break</h3>";
for ($i=0; $i < 10 ; $i++) {
	echo "ciclo n°: ".$i."<br>";
	if ($i == 7) {
		echo "fin del ciclo";
		break;
	}	
}
echo "<p>Al salir del ciclo, i = $i</p>";

echo "<h3>Ejemplo de continue</h3>";
for ($i=0; $i < 10 ; $i++) {
	
	if ($i == 7) {
		continue;
	}
	echo "ciclo n°: ".$i."<br>";	
}
echo "<p>Al salir del ciclo, i = $i</p>";