<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="./jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			$("#toggle1").click(function(){
				$("#menu").fadeToggle();
			});
			$("#toggle2").click(function(){
				$("#menu").fadeToggle("slow");
			});
			$("#toggle3").click(function(){
				$("#menu").fadeToggle(2000);
			});
		});
	</script>
	<title>Efectos</title>
</head>
<body>
	<h4>Efecto Fade in/out</h4>
	<p>
		Con este efecto podemos hacer que mostrar/ocultar sea con un efecto de retardo que puede ser "slow" ó "fast", tambien poniendo milisegundos. Hay un efecto toggle que hace en conjunto lo que hace in y out se utiliza de la misma manera.
	</p>
	<aside style="display: inline-flex;">	
		<div style="background-color: lightgrey;width: 120px;height: 400px;" id="menu">
			<a href="">link 1</a><br>
			<a href="">link 2</a><br>
			<a href="">link 3</a>
		</div>
		<div style="background-color: greenyellow;width: 40px;height: 40px;cursor: pointer;" id="toggle1"></div>
		<div style="background-color: lightblue;width: 40px;height: 40px;cursor: pointer;" id="toggle2"></div>
		<div style="background-color: lightpink;width: 40px;height: 40px;cursor: pointer;" id="toggle3"></div>
	</aside>
</body>
</html>