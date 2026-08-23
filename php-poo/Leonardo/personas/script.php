<?php

require("Personas.php");

$persona = new Personas("andres");
echo $persona = getNombre();


$persona2 = new Personas();
$persona2 = setNombre("dario");

