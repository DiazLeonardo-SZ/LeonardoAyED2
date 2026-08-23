<?php 
/*
Estructura switch en PHP
Permite comparar una variable contra varios valores posibles.
Útil para múltiples condiciones sobre el mismo valor.
*/

$day = getdate();
$wday = $day["wday"]; // Día de la semana (0=Domingo, 6=Sábado)
echo "<p>Valor de wday: $wday</p>";

switch ($wday) {
	case 0:
		echo "Hoy es Domingo";
		break;
	case 1:
		echo "Hoy es Lunes";
		break;
	case 2:
		echo "Hoy es Martes";
		break;
	case 3:
		echo "Hoy es Miércoles";
		break;
	case 4:
		echo "Hoy es Jueves";
		break;
	case 5:
		echo "Hoy es Viernes";
		break;
	case 6:
		echo "Hoy es Sábado";
		break;
	default:
		echo "No es un valor de día correcto";
		break;
}

// Ejemplo con variable personalizada
$color = "rojo";
switch ($color) {
	case "rojo":
		echo "<br>El color es rojo";
		break;
	case "azul":
		echo "<br>El color es azul";
		break;
	default:
		echo "<br>Color no reconocido";
		break;
}


