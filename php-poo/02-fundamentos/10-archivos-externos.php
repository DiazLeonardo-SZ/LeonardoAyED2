<?php 
/**
 * Archivos externos
 * 
 * La práctica más común, es almacenar en un archivo externo
 * a cada una de las clases.
 * Las podemos llamar con los comandos include, include_once,
 * require, require_once.
 */

// Ejemplo correcto
require_once '../02-fundamentos/07-self-parent.php';

$cucho = new Gato("Cucho", "rosa");
$benito = new OtroGato("Benito","azul");

echo $cucho->nombre." maulla asi: ".$cucho->maullar()."<br>";
echo $benito->nombre." maulla asi: ".$benito->maullar()."<br>";

// Ejemplo de error (descomentar para probar):
// include 'archivo_inexistente.php'; // Warning
// require 'archivo_inexistente.php'; // Error fatal