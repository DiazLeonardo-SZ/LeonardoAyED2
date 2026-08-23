<?php
/*
Resumen de formularios y validación en PHP
*/

echo "<h3>Atributos HTML comunes en formularios</h3>";
echo '<pre>action="script.php"      // Destino del formulario
method="post"           // Método de envío (post o get)
enctype="multipart/form-data" // Para subir archivos
name="campo"            // Nombre del campo (clave en $_POST o $_FILES)
required                 // Campo obligatorio
pattern="regex"         // Expresión regular para validar
minlength, maxlength     // Longitud mínima y máxima
min, max                 // Valor mínimo y máximo (números)
multiple                 // Permite seleccionar varios archivos o valores
accept=".pdf,.png"      // Tipos de archivo permitidos
</pre>';

echo "<h3>Funciones PHP útiles para formularios</h3>";
echo '<pre>$_POST, $_GET, $_FILES    // Acceso a los datos enviados
isset(), empty(), trim() // Comprobar y limpiar datos
htmlspecialchars()       // Evitar XSS al mostrar datos
filter_var()             // Validar emails, números, etc.
preg_match()             // Validar con expresiones regulares
move_uploaded_file()     // Guardar archivos subidos
</pre>';

echo "<h3>Ejemplo de validación en PHP</h3>";
echo '<pre>if (isset($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    // Email válido
}
if (preg_match("/^[A-Za-z ]+$/", $_POST["nombre"])) {
    // Nombre válido
}
</pre>'; 