<?php 
/*
Leer una cookie en PHP usando el array global $_COOKIE.
¡Advertencia! Las cookies pueden ser manipuladas por el usuario, nunca confíes en su contenido para datos sensibles.
*/
$cookie = null;
if (isset($_COOKIE['datos'])) {
	$cookie = explode("|", $_COOKIE['datos']);
	// Mostrar el valor de la cookie
	echo "Valor de la cookie: ".$_COOKIE['datos']."<br>";
} else {
	echo "No se encontró la cookie 'datos'.<br>";
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Cookies | Leer</title>
 <meta charset="utf-8">
</head>
 <body>
 	<?php if ($cookie): ?>
 		<h3>Hola <?php echo htmlspecialchars($cookie[1]." ".$cookie[2]) ?>!!</h3>
 	<?php endif; ?>
 	<!--
 	Advertencia: No confíes en los datos de las cookies, pueden ser modificados por el usuario.
 	-->
 </body>
</html>