<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="./jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#toggle").click(function(){
				$("#menu").toggle();
			});
		});
	</script>
	<title>Efectos</title>
</head>
<body>
	<h4>Efecto toggle</h4>
	<p>
		Ya vimos que hacen show y hide, con toggle tenemos las 2 funciones en el mismo evento, para lo que vamos a simular un side-menu y boton para mostrar/ocultar el menu.
	</p>
	<aside style="display: inline-flex;">	
		<div style="background-color: lightgrey;width: 120px;height: 400px;" id="menu">
			<a href="">link 1</a><br>
			<a href="">link 2</a><br>
			<a href="">link 3</a>
		</div>
		<div style="background-color: greenyellow;width: 40px;height: 40px;cursor: pointer;" id="toggle"></div>
	</aside>
</body>
</html>