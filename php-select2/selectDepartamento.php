<?php 
require_once './conexion.php'; 

$query = ' 
SELECT departamentos.dpto_id AS "id"
	,departamentos.dpto_name AS "dpto"
FROM departamentos
WHERE departamentos.dpto_prov_id = '.$_POST['id'].'
';

$departamentos = consultar($query);

echo json_encode($departamentos);

exit();
