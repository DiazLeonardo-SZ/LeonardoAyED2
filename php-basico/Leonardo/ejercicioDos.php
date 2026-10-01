<?php

/*
Escribí una función guardarNota($texto) que agregue (sin borrar lo que ya había)
una línea con $texto a un archivo llamado notas.txt.
*/




$nota = "Martin Demichelis excelente DT";

function guardarNota($texto){
    $direc = "data/notas.txt";

    $file = fopen($direc, "a");
    fwrite($file, $texto."\n");
    fclose($file);
    
}

guardarNota($nota);