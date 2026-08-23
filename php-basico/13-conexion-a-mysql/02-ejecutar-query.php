<?php 
require_once '01-conexion-con-pdo.php';

// Ejemplo de consulta segura con PDO
// ¡Advertencia! Siempre usa consultas preparadas para evitar inyección SQL
$query = 'SELECT * FROM user';

$result = null;

try {
    $conexion = conectar();
    if (!$conexion) {
        throw new Exception("No se pudo establecer la conexión a la base de datos.");
    }
    $stmt = $conexion->prepare($query);
    if($stmt->execute()) {
        // Diferentes formas de obtener resultados:
        // $result = $stmt->rowCount(); // Número de filas
        // $result = $stmt->fetch(); // Primer fila (array asociativo por defecto)
        // $result = $stmt->fetch(PDO::FETCH_ASSOC); // Primer fila como array asociativo
        // $result = $stmt->fetch(PDO::FETCH_NUM); // Primer fila como array numérico
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC); // Todas las filas como array asociativo
        echo "<b>Consulta ejecutada correctamente.</b><br>";
    } else { 
        // Mostrar información de error de la consulta
        echo "<b>Error en la consulta:</b> ";
        print_r($stmt->errorInfo());
    }
    // Liberar recursos
    $stmt = null;
    $conexion = null;
} catch (Exception $e) {
    // Manejo de errores
    echo "<b>Excepción capturada:</b> ".htmlspecialchars($e->getMessage())."<br>";
}

// Mostrar resultados
if ($result !== null) {
    echo '<pre>'; print_r($result); echo '</pre>';
} else {
    echo "<b>No se obtuvieron resultados.</b><br>";
}