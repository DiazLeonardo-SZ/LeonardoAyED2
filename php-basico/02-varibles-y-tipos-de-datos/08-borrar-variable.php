<!DOCTYPE html>
<html>
<head>
	<title>Borrar variable</title>
	<meta charset="utf-8">
</head>
<body>
<?php
$entero = 10;
var_dump($entero); // Muestra el valor y tipo de la variable
unset($entero); // Elimina la variable
var_dump($entero); // Ahora la variable no está definida
?>
</body>
</html>