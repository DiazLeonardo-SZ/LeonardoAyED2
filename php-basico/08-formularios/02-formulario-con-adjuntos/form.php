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
	El input type="file" permite seleccionar un archivo para enviar al servidor.
	Siempre valida el tipo y tamaño del archivo en el backend.
	-->
	<form enctype="multipart/form-data" action="script.php" method="post">
		<label for="userfile">Adjuntar archivo</label>
		<input type="file" name="userfile">
		<br><br>
		<input type="submit" name="submit" value="Enviar">
	</form>	
</body>
</html>
