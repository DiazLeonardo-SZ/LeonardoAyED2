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
 * tambien tenemos un metodo para establecer el valor de los atributos HTML
 * 
 * attr()
 * 
 * Estos ejemplos muestran como usar los metodos para establecer esa información
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
				$("#test1").text("Se agrego texto con text()");
			});
			$("#btn2").click(function(){
				$("#test2").html("<b>Se agrego texto</b> con html()");
			});
			$("#btn3").click(function(){
				$("#test3").val("Santa Fe");
			});
			$("#btn4").click(function(){
				$("#test4").attr({
					"href" : "01-sintaxis-selectores.php",
					"title" : "Sintaxis y selectores"
				});
			});
		});
	</script>
	<title>Manipular el DOM</title>
</head>
<body>
	<h4>Definir contenido (Set Content)</h4>
	<p>
		Veamos unos ejemplos utilizando los metodos <b>text(), html(), val() y attr()</b> para definir elementos HTML.
	</p>
	<p id="test1"></p>
	<p id="test2"></p>
	<input type="text" name="test3" id="test3" value="Buenos Aires">
	<a href="#" id="test4">link</a>
	<br><br>
	<button id="btn1">Set Text</button>
	<button id="btn2">Set HTML</button>
	<button id="btn3">Set Value</button>
	<button id="btn4">Set Atributo href</button>
</body>
</html>