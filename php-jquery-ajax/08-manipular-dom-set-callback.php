<?php 
/**
 * Tambien se pueden utilizar los metedos con una funcion callback,
 * tiene dos parámetros: el índice del elemento actual en la lista 
 * de elementos seleccionados y el valor original (antiguo). Luego 
 * devuelve la cadena que desea utilizar como nuevo valor de la función.
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
				$("#test1").text(function(i, originText){
					return "Viejo texto: " + originText + " Nuevo texto: Hola soy en nuevo texto de reeleno (index: " + i + ")"; 
				});
			});
			$("#btn2").click(function(){
				$("#test2").html(function(i, originText){
					return "Viejo html: " + originText + " Nuevo html: Hola soy el nuevo <b>html</b> de relleno (index: " + i + ")"; 
				});
			});
			$("#btn3").click(function(){
				$("#test3").attr("href", function(i, origValue){
					return origValue + "?jquery=construyendoURL"; 
				});
			}); 
		});
	</script>
	<title>Manipular el DOM</title>
</head>
<body>
	<h4>Definir contenido (Set Content) con funciones callback</h4>
	<p>
		Veamos unos ejemplos utilizando los metodos <b>text(), html() y attr()</b> con una funciona callback, tiene dos parámetros: el índice del elemento actual en la lista de elementos seleccionados y el valor original (antiguo). Luego devuelve la cadena que desea utilizar como nuevo valor de la función.
	</p>
	<p id="test1">Texto de prubea  <b>bold</b> en un element p.</p>
	<p id="test2">Segundo texto de prubea  <b>bold</b> en un element p.</p>

	<button id="btn1">Mostrar viejo/nuevo Text</button>
	<button id="btn2">Mostrar viejo/nuevo HTML</button>
	<hr>
	<p>
		Vamos a contruir una nueva url a partir de la vieja, verifica la actual url para poder asimilar el cambio.
	</p>
	<a href="08-manipular-dom-set-callback.php" id="test3">link</a>
	<button id="btn3">crear nuevo link a partir del viejo</button>	
</body>
</html>
<?php 
if (isset($_GET['jquery'])) {
	echo $_GET['jquery'];
}