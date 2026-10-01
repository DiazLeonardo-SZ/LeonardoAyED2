<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="./jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			$("#toggle").click(function(){
				$("#menu").slideToggle();
			});
		});
	</script>
	<title>Efectos</title>
</head>
<body>
	<h4>Efecto Slide</h4>
	<p>
		Al igual que hide/show y Fade, Slide tambien tiene un metodo toggle(), y cuenta con slideDown() y slideUp()
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