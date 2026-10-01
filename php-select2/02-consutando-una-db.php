<?php
/**
 * Este ejemplo consulta una Base de Datos llamada argentina
 * que tiene datos de las provincias, municipios y localidades, 
 * y solo instanciamos el select2
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
			$('#select2').select2();
		});
	</script>
	<title>Select2</title>
</head>
<body>	
	<h4>Ejemplo utilizando Select2, con datos que llegan desde una base de datos</h4>
	<label for="select2">Provincias</label>
	<select name="select2" id="select2">
		<option>-</option>
		<?php options(); ?>
	</select>
</body>
</html>
<?php 
function conectar() {
	
	$link = new PDO("mysql:host=".$_ENV["SQL_SERVER"]."; dbname=argentina", "root", $_ENV["MYSQL_ROOT_PASSWORD"]);
	$link->exec("set names utf8");
	return $link;

}

function options() {
	
	$query = ' 
	SELECT provincias.prov_id AS "id"
		,provincias.prov_name AS "provincia"
	FROM provincias
	';

	$result;

	$stmt = conectar()->prepare($query);

	if($stmt->execute()) {
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	} else { 
		print_r($stmt -> errorInfo());
	}

	$stmt = null;
	
	for ($i=0; $i < count($result); $i++) { 
		echo '<option value="'.$result[$i]['id'].'">'.$result[$i]['provincia'].'</option>';
	}
	
}