<?php
/**
 * Este ejemplo consulta una Base de Datos llamada argentina
 * que tiene datos de las provincias, municipios y localidades, 
 * y solo instanciamos el select2, luego con ajax se van a llenar
 * con datos otros select al seleccionar datos del anterior
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./_files/select2.min.css">
	<script src="./_files/jquery.min.js"></script>
	<script src="./_files/select2.min.js"></script>
	<title>Select2</title>
</head>
<body>	
	<h4>Ejemplo utilizando Select2, con datos que llegan desde una base de datos, y luego con AJAX y JQeury se rellenan los demas selects cada vez que se seleccion un item del anterior</h4>
	<label for="provincia">Provincias</label>
	<select name="provincia" id="provincia">
	</select>
	<br><br>
	<label for="departamento">Departamentos</label>
	<select name="departamento" id="departamento">
	</select>
	<br><br>
	<label for="localidad">Localidades</label>
	<select name="localidad" id="localidad">
	</select>
	<script src="./selects.js"></script>
</body>
</html>
