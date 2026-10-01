<?php 
/**
 * Agregar contenido HTML
 * 
 * Veremos 4 métodos jQuery que se utilizan para agregar contenido nuevo:
 * 
 * append() - Inserta contenido al final de los elementos seleccionados
 * prepend() - Inserta contenido al principio de los elementos seleccionados
 * after() - Inserta contenido después de los elementos seleccionados
 * before() - Inserta contenido antes de los elementos seleccionados
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
				$("#p1").prepend(" <b>Texto en negrita agregado al principio. </b>");
			});
			$("#btn2").click(function(){
				$("#p1").append("<a href='#''> Link agregado al final</a>");
			});
			$("#btn3").click(function(){
				var a = "<a href='#'>Link Creado como elemento html</a>"; 
				var p = $("<p></p>").text("parrafo creado con JQuery");
				var h4 = document.createElement("h4");
				h4.innerHTML = "Titulo creado con DOM";
				$("body").append(a,p,h4);
			});
			$("#btn4").click(function(){
				$("#centro").before("Texto antes del cuadro amarillo");
			});
			$("#btn5").click(function(){				
				$("#centro").after("Texto despues del cuadro amarillo");
			});
		});
	</script>
	<title>Manipular el DOM</title>
</head>
<body>
	<h4>Ejemplos con append() y prepend()</h4>
	<p id="p1">
		Esto seria el texto del medio.
	</p>
	<button type="button" id="btn1">Append texto</button>
	<button type="button" id="btn2">Prepend texto</button>
	<br>
	<br>
	<button type="button" id="btn3">Crear elementos HTML al final</button>	
	<hr>
	<h4>Ejemplos con after() y before()</h4>
	<button type="button" id="btn4">Before(antes) del div</button>
	<button type="button" id="btn5">After(despues) del div</button>
	<br><br>
	<div style="background-color: yellow;width: 40px;height: 40px;" id="centro"></div>
</body>
</html>