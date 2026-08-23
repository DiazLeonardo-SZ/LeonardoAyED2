<!DOCTYPE html>
<html>
<head>
	<title>Forzar tipo de dato</title>
	<meta charset="utf-8">
</head>
<body>
<?php
$div = 10/3;
print $div."<br>"; // Resultado decimal
$entero = (int) $div; // Conversión por cast a entero
print $entero."<br>";
var_dump($div); // float
print "<br>";
var_dump($entero); // int
print "<br>";
print intval(10/3)."<br>"; // Conversión usando intval
settype($div, "integer"); // Cambia el tipo de $div a integer
var_dump($div); // Ahora es int
print "<br>";
print gettype($div); // Muestra el tipo actual
?>
</body>
</html>