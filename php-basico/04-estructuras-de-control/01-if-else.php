<?php 
/*
Estructura if, if-else y if-elseif-else en PHP
Permiten ejecutar bloques de código según condiciones lógicas.
*/
$var = 2; // Cambia este valor para probar otros casos

// Ejemplo solo PHP
echo "<h3>Ejemplo solo PHP</h3>";
if ($var < 5) {
    echo "<p>[1m$var es menor a 5</p>";
} else {
    echo "<p>[1m$var es mayor o igual a 5</p>";
}

// Ejemplo con elseif
echo "<h3>Ejemplo con elseif</h3>";
if ($var < 5) {
    echo "<p>$var puede ser 1,2,3 ó 4</p>";
} elseif ($var > 5) {
    echo "<p>$var puede ser 6,7,8 ...</p>";
} else {
    echo "<p>$var es 5</p>";
}

// Ejemplo recomendado para PHP embebido en HTML
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Condicionales</title>
</head>
<body>
	<h2>if else (PHP embebido en HTML)</h2>
	<p>Valor de $var: <?php echo $var; ?></p>
	<?php if ($var < 5): ?>
		<h3>$var es menor a 5</h3>
	<?php else: ?>
		<h3>$var es mayor o igual a 5</h3>
	<?php endif ?>
	<hr>
	<h2>if elseif (PHP embebido en HTML)</h2>
	<?php if ($var < 5): ?>
		<h3>$var puede ser 1,2,3 ó 4</h3>
	<?php elseif ($var > 5): ?>
		<h3>$var puede ser 6,7,8 ...</h3>
	<?php else: ?>
		<h3>$var es 5</h3>
	<?php endif ?>
</body>
</html>