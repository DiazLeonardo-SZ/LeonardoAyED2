<?php 
require_once './conexion.php'; 

$query = ' 
SELECT provincias.prov_id AS "id"
,provincias.prov_name AS "provincia"
FROM provincias
';

$provincias = consultar($query);

echo json_encode($provincias);

exit();
