<?php 
/**
 * Para manipular el DOM tenemos 3 metodos disponibles, que son los
 * que más vamos a utilizar siempre que trabajemos con jquery
 * 
 * text() - Establece o devuelve el contenido de texto de los elementos 
 * 		seleccionados.
 * html() - Establece o devuelve el contenido de los elementos 
 * 		seleccionados (incluido el marcado HTML)
 * val() - Establece o devuelve el valor de los campos del formulario.
 * 
 * tambien tenemos un metodo para obtener el valor de los atributos HTML
 * 
 * attr()
 * 
 * Estos ejemplos muestran como usar los metodos para obtener esa información
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
			console.log($("#texto").text());
			console.log($("#texto").html());			
			console.log($("#text").val());
			console.log($(".boton").attr("href"));
		});
	</script>
	<title>Manipular el DOM</title>
</head>
<body>
	<h4>Obtener contenido (Get Content)</h4>
	<div id="texto">
	<p>
		Veamos unos ejemplos utilizando los metodos <b>text(), html(), val() y attr()</b> para obtener informacion de elementos HTML. Revisar la consola del navegador para ver los resultados
	</p>
	</div>
	<input type="text" name="text" id="text" value="texto de prueba">
	<a href="06-manipular-dom-get.php" class="boton">link</a>
</body>
</html>