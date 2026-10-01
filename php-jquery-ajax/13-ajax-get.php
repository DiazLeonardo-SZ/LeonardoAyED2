<?php 
/**
 * GET, método $.get()
 * 
 * $.get() solicita datos del servidor con una solicitud HTTP GET.
 * 
 * Sintaxís
 * 
 * $.get(URL,callback);
 * 
 * El parámetro de URL especifica la URL que desea solicitar. 
 * El parámetro callback, opcional, es el nombre de una función 
 * que se ejecutará si la solicitud tiene éxito.
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
			$("#btn").click(function(){
				$.get("script-get.php", function(response, status){
					console.log(response);
					console.log(status);
					if (status == "success") {
						datos = JSON.parse(response);
						var p = $("<p></p>").text(datos.nombre + " " + datos.apellido + ", " + datos.edad);
						$("body").append(p);
					}
				});
			});
		});
	</script>
	<title>AJAX y JQuery</title>
</head>
<body>
	<h4>Peticiones GET</h4>
	<p>
		Este ejemplo va a obtener los datos de un archivo en el servidor, El primer parámetro de $.get() es la URL que deseamos solicitar ("script-get.php").
		El segundo parámetro es una función callback. El primer parámetro de calback contiene el contenido de la página solicitada y el segundo parámetro contiene el estado de la solicitud.
	</p>
	<button type="button" id="btn">Ejecutar peticion GET</button>

</body>
</html>