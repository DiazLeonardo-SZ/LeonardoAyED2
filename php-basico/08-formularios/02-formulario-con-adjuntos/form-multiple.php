<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="form.css">
	<title>Form + adjunto</title>
</head>
<body>
	<!--
	El atributo enctype="multipart/form-data" es necesario para subir archivos.
	El input type="file" con atributo multiple permite seleccionar varios archivos.
	Siempre valida el tipo y tamaño de cada archivo en el backend.
	-->
	<form enctype="multipart/form-data" action="scriptMultiple.php" method="post">
		<label for="userfile">Adjuntar archivos</label>
		<input type="file" name="userfile[]" multiple>
		<br><br>
		<input type="submit" name="submit" value="Enviar">
	</form>	
</body>
</html>
