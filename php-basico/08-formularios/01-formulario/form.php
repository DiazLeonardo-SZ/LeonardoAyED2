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
	Este formulario envía datos a script.php usando el método POST.
	Cada input tiene un atributo name, que será la clave en el array $_POST en PHP.
	Es importante validar y sanear los datos en el backend para evitar problemas de seguridad.
	-->
	<form action="script.php" method="post">
		<!-- Campo de texto para el nombre -->
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre">
		<br>
		<!-- Campo de email -->
		<label for="email">Email</label>
		<input type="email" name="email">
		<br>
		<!-- Campo numérico para la edad -->
		<label for="edad">Edad</label>
		<input type="number" name="edad">
		<br>
		<!-- Radio buttons para sexo -->
		<label for="sex">M</label>
		<input type="radio" name="sex" value="M">
		<label for="sex">F</label>
		<input type="radio" name="sex" value="F">
		<br>
		<!-- Fecha de nacimiento -->
		<label for="fechaNacimiento">Fecha nacimiento</label>
		<input type="date" name="fechaNacimiento">
		<br>
		<!-- Selector de localidad -->
		<label for="localidad">Localidad</label>
		<select name="localidad">
			<option>-</option>
			<option value="1">Merlo</option>
			<option value="2">Libertad</option>
			<option value="2">Padua</option>
		</select>
		<br>
		<!-- Área de texto para mensaje -->
		<label for="messege">Mensaje</label><br>
		<textarea name="messege" rows="6"></textarea><br>
		<!-- Checkbox de acuerdo -->
		<label for="ok">Estoy de acuerdo</label>
		<input type="checkbox" name="ok" value="ok">
		<br>
		<!-- Botón de envío -->
		<input type="submit" name="submit" value="Enviar">
	</form>
	<!--
	Advertencia: Siempre valida los datos en el backend, incluso si usas validación en el frontend.
	Nunca confíes en los datos enviados por el usuario.
	-->
</body>
</html>
