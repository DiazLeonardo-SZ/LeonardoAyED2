<?php 
/**
 * POST, método $.post()
 * 
 * $.post() solicita datos del servidor mediante una solicitud HTTP POST.
 * 
 * Sintaxis:
 * 
 * $.post(URL,data,callback);
 * 
 * El parámetro de URL especifica la URL que desea solicitar.
 * El parámetro de datos, opcional, datos para enviar junto con la solicitud.
 * El parámetro de callback, opcional, es una función que se ejecutará si 
 * la solicitud tiene éxito.
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
				$.post("script-post.php", 
					{						
						id: 9,
						rol_id: 3
					},
					function(response, status){
						console.log(response);
						console.log(status);
						if (status == "success") {							
							var p = $("<p></p>").text(response);
							$("body").append(p);
						}
					}// cierra la funcion callback
				);// cierra la peticion POST
			});
		});
	</script>
	<title>AJAX y JQuery</title>
</head>
<body>
	<h4>Peticiones POST</h4>
	<p>
		En la peticion post lo que pasemos como "data" seran los indices de array $_POST, ya con eso vamos a poder trabajarlo desde el script que lo reciva, y devolver el resultado.
	</p>
	<button type="button" id="btn">Ejecutar peticion POST</button>

</body>
</html>