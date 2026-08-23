<?php 
/**
 * Uso de try-catch-finally en PHP.
 * El bloque finally se ejecuta siempre, ocurra o no una excepción.
 * ¡Advertencia! Usa finally para liberar recursos o realizar tareas de cierre.
 * @link https://www.php.net/manual/es/language.exceptions.php
 */

function dividir($a, $b) {
    if ($b == 0) {
        throw new Exception("No se puede dividir por cero");
    }
    return $a / $b;
}

try {
    $resultado = dividir(10, 0);
    echo "Resultado: $resultado<br>";
} catch (Exception $e) {
    echo "<b>Error:</b> ".$e->getMessage()."<br>";
} finally {
    echo "<i>Este mensaje se muestra siempre (finally).</i><br>";
}

// ¡Advertencia! El bloque finally es útil para cerrar archivos, conexiones, etc. 