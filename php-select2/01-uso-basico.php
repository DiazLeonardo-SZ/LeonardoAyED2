<?php
/**
 * Select2 es una libreria JS para personalizar los elementos HTML
 * <select> como principal caracteristica es un buscador para cuando
 * el elemento tiene mucho contenido y seria imposible verlos todos.
 * Se deben incluir sus archivos para que funcione, para estos ejemplo
 * vamos a incluir tambien JQuery
 * 
 * @link https://select2.org/
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./_files/select2.min.css">
	<script src="./_files/jquery.min.js"></script>
	<script src="./_files/select2.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#normal").load("./_files/provincias.json", function(responseTxt, statusTxt, xhr){
				if(statusTxt == "success") {
					var json = JSON.parse(responseTxt);
					var html = "<option>-</option>";
					$.each(json.provincias, function(index, value){
						html+= '<option value="'+value.id_provincia+'">'+value.provincia+"</option>";						
					});
					$("#normal").html(html);
				}
				if(statusTxt == "error") {
					alert("Error: " + xhr.status + ": " + xhr.statusText);
				}
			});

			$('#select2').select2();
		});
	</script>
	<title>Select2</title>
</head>
<body>
	<h4>Ejemplo de un select normal con muchos datos</h4>
	<label for="normal">Provincias</label>
	<select name="normal" id="normal">
	</select>
	<hr>
	<h4>Ejemplo utilizando Select2</h4>
	<label for="select2">Provincias</label>
	<select name="select2" id="select2">
		<option>-</option>
		<?php options(); ?>
	</select>
</body>
</html>
<?php 
function options() {
	
	$provs = json_decode(file_get_contents('./_files/provincias.json'));

	for ($i=0; $i < count($provs->provincias); $i++) { 
		echo '<option value="'.$provs->provincias[$i]->id_provincia.'">'.$provs->provincias[$i]->provincia.'</option>';
	}

}