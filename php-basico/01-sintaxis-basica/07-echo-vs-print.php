<?php
// Diferencia entre echo y print

$resultado_echo = echo "Usando echo\n"; // Esto causará un error, echo no retorna valor
$resultado_print = print "Usando print\n"; // print retorna 1

echo "\nEl valor retornado por print es: $resultado_print\n";
// El valor retornado por echo no se puede usar, produce error 