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
	Este formulario utiliza validaciones HTML5:
	- pattern: define una expresión regular que debe cumplir el valor.
	- minlength, maxlength: longitud mínima y máxima.
	- required: campo obligatorio.
	Advertencia: La validación del lado del cliente puede ser modificada por el usuario.
	Siempre valida los datos en el backend.
	-->
	<form action="" method="post">
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" pattern="[A-Za-z ]+" minlength="6" maxlength="50" required>
		<br>
		<label for="email">Email</label>
		<input type="email" name="email" required>
		<br>
		<label for="edad">Edad</label>
		<input type="number" name="edad" min="8" max="90" pattern="[0-9]+" required>
		<br>
		<label for="sex">M</label>
		<input type="radio" name="sex" value="M" required>
		<label for="sex">F</label>
		<input type="radio" name="sex" value="F" required>
		<br>
		<label for="fechaNacimiento">Fecha nacimiento</label>
		<input type="date" name="fechaNacimiento" required>
		<br>
		<label for="localidad">Localidad</label>
		<select name="localidad">
			<option>-</option>
			<option value="1">Merlo</option>
			<option value="2">Libertad</option>
			<option value="2">Padua</option>
		</select>
		<br>		
		<label for="messege">Mensaje</label><br>
		<textarea name="messege" rows="6"></textarea><br>
		<label for="item">item 1</label>
		<input type="checkbox" name="item[]" value="1">
		<br>
		<label for="item">item 2</label>
		<input type="checkbox" name="item[]" value="2">
		<br>
		<label for="item">item 3</label>
		<input type="checkbox" name="item[]" value="3">
		<br><br>
		<label for="userfile">Adjuntar archivo</label>
		<input type="file" name="userfile" accept=".pdf, .png">
		<br><br>
		<input type="submit" name="submit" value="Enviar">
	</form>	
</body>
</html>
