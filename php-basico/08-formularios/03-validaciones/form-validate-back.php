<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="form.css">
	<title>Formulario</title>
</head>
<body>
	<!--
	Este formulario envía datos a script.php para ser validados en el backend.
	Siempre valida los datos en el backend, incluso si usas validación en el frontend.
	-->
	<form action="script.php" method="post">
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre">
		<br><br>
		<label for="edad">Edad</label>
		<input type="number" name="edad">
		<br><br>
		<input type="submit" value="Enviar">
	</form>	
</body>
</html>
