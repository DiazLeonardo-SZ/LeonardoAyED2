<?php 
session_start(); 
// Este script simula un login simple. ¡No uses contraseñas planas en producción!
if (isset($_POST['submit'])) {
	// Asignar usuario y contraseña "correctos" a la sesión (solo para ejemplo)
	$_SESSION['user'] = "aromano";
	$_SESSION['pass'] = "123";
	// Comparar los datos ingresados con los almacenados en sesión
	if ( (strcmp($_SESSION['user'], $_POST['user']) == 0) && (strcmp($_SESSION['pass'], $_POST['pass']) == 0) ) {
		header('Location:inicio.php');
	} else {
		echo '<script>
		alert("Usuario o contraseña incorrecta");
		</script>';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="form.css">
	<title>login</title>
</head>
<body>
	<!--
	Este formulario simula un login. En producción, nunca guardes contraseñas en texto plano ni en la sesión.
	Siempre valida y hashea las contraseñas en el backend.
	-->
	<form action="" method="post">
		<label for="user">Usuario</label>
		<input type="text" name="user">
		<br><br>
		<label for="pass">Contraseña</label>
		<input type="password" name="pass">
		<br><br>
		<input type="submit" name="submit" value="Ingresar">
	</form>	
</body>
</html>
