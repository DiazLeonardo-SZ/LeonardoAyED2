<?php 
session_start();
// Proteger la página: redirigir si no hay usuario en sesión
if (!isset($_SESSION['user'])) {
	header('Location:login.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>inicio</title>
</head>
<body>
	<!--
	Esta página solo es accesible si hay un usuario en sesión.
	Nunca muestres información sensible en el frontend.
	-->
	<h3>Bienvenido usuario: <?php echo htmlspecialchars($_SESSION['user']) ?></h3>
	<a href="salir.php">Salir</a>
</body>
</html>