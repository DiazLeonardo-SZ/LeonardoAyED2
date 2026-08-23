<?php
// Variable declarada pero no inicializada
echo "Sin inicializar: ";
$var;
var_dump($var);
echo "<br>";

// Variable con valor NULL
echo "Con NULL: ";
$var = NULL;
var_dump($var);
echo "<br>";

// Variable eliminada con unset
echo "Tras unset: ";
unset($var);
var_dump($var);
echo "<br>";

