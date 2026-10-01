<?php 
/**
 * Sintaxis basica y selectores, jquery se debe scribir entre <script> ó
 * en un archivo .js que debemos incluir luego para que funcione, para
 * esto es requerido que los elementos html tengan la propiedad id="".
 * Todas las instrucciones que hagamos con jquery deben ir dentro de
 * 
 * $(document).ready(function(){
 * 	 $(selector).action()  
 * }); 
 * 
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
 			$("#btn-1").click(function(){
 				$("#primero").hide();
 			});
 			$("#btn-2").click(function(){
 				$("#segundo").hide();
 			});
 			$("#btn-3").click(function(){
 				$("p").hide();
 			});
 			$("#btn-4").click(function(){
 				$("p").show();
 			});
 			$("#btn-5").click(function(){
 				$(".rojo").hide();
 			});
 			$("#btn-6").click(function(){
 				$(".rojo").show();
 			});
 		});
	</script>
	<title>Sintaxis y Selectores</title>
	<style type="text/css">
		.rojo {
			color: red;
		}
	</style>
</head>
<body>
	<p id="primero" class="rojo">
		Primer parrafo
	</p>
	<p id="segundo">
		Segundo parrafo
	</p>
	<button id="btn-1">Esconder parrafo 1</button>
	<button id="btn-2">Esconder parrafo 2</button>
	<button id="btn-3">Esconder todos los 2 parrafos</button>
	<button id="btn-4">Mostrar todo nuevamente</button>
	<button id="btn-5">Quitar rojo</button>
	<button id="btn-6">Mostrar rojo</button>
</body>
</html>