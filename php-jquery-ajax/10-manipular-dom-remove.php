<?php 
/**
 * Para eliminar elementos y contenido, existen 
 * principalmente dos métodos jQuery:
 * 
 * remove() - Elimina el elemento seleccionado (y sus elementos secundarios)
 * empty() - Elimina los elementos secundarios del elemento seleccionado.
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="./jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#btn1").click(function(){
				$("#content").empty();
			});
			$("#btn2").click(function(){
				$("#content").remove();
			});
		});
	</script>
	<title>Manipular el DOM</title>
</head>
<body>
	<h4>Ejemplos con remove()</h4>
	<button type="button" id="btn1">Vaciar div</button>
	<button type="button" id="btn2">Eliminar div</button>
	<br><br>
	<div style="background-color: yellow;width: 100px;height: 100px;border: solid 1px;" id="content">
		<a href="#"> link</a><br>
		<a href="#"> link</a><br>
		<a href="#"> link</a><br>
		el div
	</div>
</body>
</html>