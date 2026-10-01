<?php 
/**
 * ¿Que son los Eventos?
 * Con evento nos referimos a cuando algo sucede en nuestra página
 * como podria ser "click" en un boton, "pasar el maouse por...", 
 * presiona una tecla, y otros mas.
 * 
 * Más ejemplos para leer:
 * @link https://www.w3schools.com/jquery/jquery_events.asp
 * 
 * Documentación oficial
 * @link https://api.jquery.com/
 * 
 * Sintaxis:
 * 
 * $(selector).evento(function(){
 *   // codigo
 * });
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="./jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			// mouse events
			$("#mouse1").click(function(){
				$("#mouse2").show();
			});					
			$("#mouse2").hover(function(){
				$("#mouse3").show();
			}, function(){
				$("#mouse3").hide();
			});
			// forms events
			$("input").focus(function(){
				$(this).css("background-color", "grey");
			});
			$("input").blur(function(){
				$(this).css("background-color", "white");
			});
			// metodo on()
			$("#p-on").on("click" ,function(){
				$(this).css("display", "none");
			});
			$("#h-on").on("mouseenter" ,function(){
				$("#p-on").show();
			});
			// usar vario eventos con on()
			$("#d-on").on({
				mouseenter: function(){
					$(this).css("background-color", "lightgray");
				},
				mouseleave: function(){
					$(this).css("background-color", "lightblue");
				},
				click: function(){
					$(this).css("background-color", "yellow");
				}
			});
		});
	</script>
	<title>Eventos</title>
</head>
<body>
	<h4>Eventos Mouse</h4>
	<p>
		En el ejemplo anterior de selectores ya utilizamos el evento click, sobre un boton, pero podemos aplicarlo a otros elemntos HTML, por ejemplo un div. Aquí aplicamos eventos de mouse como click, hover (combina mouseenter y mouseleave).
	</p>
	<div style="background-color: red;width: 40px;height: 40px;cursor: pointer;" id="mouse1"></div>
	<div style="background-color: yellow;width: 40px;height: 40px;display: none;" id="mouse2"></div>
	<div style="background-color: green;width: 40px;height: 40px;display: none;" id="mouse3"></div>
	<h4>Eventos Form</h4>
	<p>
		Podemos manejar los elementos del formulario, como por ejemplo cando interactuo con un input, este ejemplo muestra como se cambia de color el fondo.
	</p>
	<input type="text" name="nombre" id="nombre">
	<input type="text" name="apellido" id="apellido">
	<h4 id="h-on">El Metodo on()</h4>
	<p id="p-on">
		Con este metodo podemos especificar uno o más eventos HTML, para probarlo podemos hacer click sobre este texto para que desaparezca y luego pasar el mouse por el titulo para que vuelva a aparecer.
	</p>
	<div style="background-color: red;width: 40px;height: 40px;cursor: pointer;" id="d-on"></div>
</body>
</html>