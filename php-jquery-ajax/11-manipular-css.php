<?php 
/**
 * Manipular CSS
 * 
 * jQuery tiene varios métodos para la manipulación de CSS.
 * 
 * addClass(): agrega una o más clases a los elementos seleccionados
 * removeClass(): elimina una o más clases de los elementos seleccionados.
 * toggleClass() - Alterna entre agregar/eliminar clases de los elementos seleccionados
 * css() - Establece o devuelve el atributo de estilo
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="./jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./style.css">
	<script>
		$(document).ready(function(){
			$("#oscuro").click(function(){
				$("body").removeClass("modo-claro");
				$("body").addClass("modo-oscuro");
			});
			$("#claro").click(function(){
				$("body").removeClass("modo-oscuro");
				$("body").addClass("modo-claro");
			});
			$("#toggle").click(function(){
				$("h4, p").toggleClass(" rojo");			
			});
			$("#formato1").click(function(){
				$("#lorem").css({
					"color": "white",
					"background-color": "grey",
					"font-family": "monospace",
					"font-size": "15px"
					});				
			});
			$("#formato2").click(function(){
				$("#lorem").css("color", "yellow");				
			});
		});
	</script>
	<title>Manipular Clases CSS</title>
</head>
<body>
	<h3>Ejemplos de addClass() y removeClass()</h3>
	<p>Texto de prueba</p>
	<button type="button" id="oscuro">Modo oscuro</button>
	<button type="button" id="claro">Modo claro</button>
	<br>
	<h4 class="verde">Ejemplo de toggleClass()</h4>
	<button type="button" id="toggle">Aplicar Rojo</button>
	<br>
	<h4>Ejemplo de css()</h4>
	<button type="button" id="formato1">Formato texto 1</button>
	<button type="button" id="formato2">Formato texto 2</button>
	<p id="lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

</body>
</html>