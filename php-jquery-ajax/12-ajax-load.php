<?php 
/**
 * Método load() de jQuery
 * 
 * El método load() carga datos de un servidor y coloca los datos
 * devueltos en el elemento seleccionado. 
 * 
 * Sintaxis: 
 * $(selector).load(URL,datos,callback);
 * 
 * Referencia de metodos de AJAX
 * 
 * @link https://www.w3schools.com/jquery/jquery_ref_ajax.asp
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
			$("#div1").load("lorem.txt");
			$("#div2").load("lorem.txt", function(responseTxt, statusTxt, xhr){
				if(statusTxt == "success") {
					alert("Se cargo el contenido correctamente");
					console.log(responseTxt);
					console.log(statusTxt);
					console.log(xhr);
				}
				if(statusTxt == "error") {
					alert("Error: " + xhr.status + ": " + xhr.statusText);
				}
			});
		});
	</script>
	<title>AJAX y JQuery</title>
</head>
<body>
	<h4>Metodo load()</h4>
	<p>El siguiente ejemplo carga el contenido del archivo "lorem.txt" en un elemento "div" específico.</p>
	<div id="div1"></div>
	<p>
		Tambien podemos utilizar un funcion callback, que se ejecutara luego de load() para realizar algo específico. Tenemos difirentes parametros que podemos utilizar.<br><br>
		- responseTxt: contiene el contenido resultante si la llamada se realiza correctamente. <br>
		- statusTxt: contiene el estado de la llamada <br>
		- xhr: contiene el objeto XMLHttpRequest (el objeto de AJAX)
	</p>
	<div id="div2"></div>
</body>
</html>