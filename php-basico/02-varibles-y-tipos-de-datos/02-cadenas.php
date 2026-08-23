<?php
# Cadenas de texto (strings)

$materia = "Algoritmos 2";
$curso = '2do';
$dia = "Viernes";

# Heredoc: permite definir strings multilínea y evalúa variables
# Útil para textos largos o plantillas
$str = <<<MAIL
Materia: $materia <br>
Curso: $curso <br>
Día: $dia <br>
<br>
MAIL;

# Nowdoc: similar a Heredoc, pero NO evalúa variables
# Útil para mostrar código o texto literal
$str2 = <<<'EOD'
Materia: $materia <br>
Curso: $curso <br>
Día: $dia <br>
<br>
EOD;

print $str;
echo $str2;

# Concatenar cadenas
$salida = "Materia: ".$materia."<br>";
$salida .= "Curso: ".$curso."<br>";
$salida .= "Día: ".$dia;
print $salida."\n";

# Funciones básicas de string
$texto = "Hola Mundo";
echo "<br>Longitud: ".strlen($texto); // Cuenta caracteres

echo "<br>Mayúsculas: ".strtoupper($texto); // Convierte a mayúsculas

echo "<br>Minúsculas: ".strtolower($texto); // Convierte a minúsculas

echo "<br>Reemplazo: ".str_replace("Mundo", "PHP", $texto); // Reemplaza texto

