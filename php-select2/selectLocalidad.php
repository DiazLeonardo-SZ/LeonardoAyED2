<?php 
require_once './conexion.php'; 

$query = ' 
SELECT localidades.local_id AS "id"
	,localidades.local_name AS "localidad"
FROM localidades
WHERE localidades.local_dpto_id = '.$_POST['id'].'
';

$localidades = consultar($query);

echo json_encode($localidades);

exit();
