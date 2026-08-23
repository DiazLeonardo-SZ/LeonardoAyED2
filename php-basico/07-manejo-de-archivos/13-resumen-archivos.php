<?php
/*
Resumen de manejo de archivos en PHP
*/

echo "<h3>Crear y borrar archivos</h3>";
echo '<pre>touch("archivo.txt"); // Crear archivo vacío
unlink("archivo.txt"); // Borrar archivo</pre>';

echo "<h3>Permisos y propiedades</h3>";
echo '<pre>chmod("archivo.txt", 0777); // Cambiar permisos
chown("archivo.txt", "usuario"); // Cambiar propietario
chgrp("archivo.txt", "grupo"); // Cambiar grupo</pre>';

echo "<h3>Escribir y leer archivos</h3>";
echo '<pre>$f = fopen("archivo.txt", "w"); // Escribir (sobrescribe)
fwrite($f, "texto\n");
fclose($f);

$f = fopen("archivo.txt", "r"); // Leer
while (!feof($f)) {
    echo fgets($f);
}
fclose($f);
</pre>';

echo "<h3>Agregar, copiar y renombrar</h3>";
echo '<pre>$f = fopen("archivo.txt", "a"); // Agregar al final
fwrite($f, "más texto\n");
fclose($f);

copy("archivo.txt", "copia.txt"); // Copiar
rename("copia.txt", "nuevo.txt"); // Renombrar</pre>';

echo "<h3>Leer archivos completos y CSV</h3>";
echo '<pre>$contenido = file_get_contents("archivo.txt");

$f = fopen("archivo.csv", "r");
while ($linea = fgetcsv($f)) {
    print_r($linea);
}
fclose($f);
</pre>'; 