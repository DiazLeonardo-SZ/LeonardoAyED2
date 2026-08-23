<?php 
/**
 * Comparación de instancias
 *
 * == compara si los objetos tienen los mismos atributos y valores (aunque sean instancias diferentes).
 * === compara si son exactamente la misma instancia (misma referencia en memoria).
 *
 * Diagrama:
 * $gato1 = new Gato();
 * $gato2 = new Gato();
 * $gato3 = $gato1;
 *
 * $gato1 == $gato2 // true si tienen mismos valores
 * $gato1 === $gato2 // false, son instancias diferentes
 * $gato1 === $gato3 // true, misma referencia
 */
class Gato{ public $bandera; }
class Perro{ public $bandera; }

$gato1 = new Gato();
$gato2 = new Gato();
$gato3 = $gato1;
$perro1 = new Perro();

echo "Comparamos elementos de la misma clase<br>";
echo "gato1 == gato2 =>". (($gato1==$gato2)?"Verdadero":"Falso") ."<br>";
echo "gato1 === gato2 =>". (($gato1===$gato2)?"Verdadero":"Falso") ."<br>";
echo "gato1 != gato2 =>". (($gato1!=$gato2)?"Verdadero":"Falso") ."<br>";
echo "gato1 !== gato2 =>". (($gato1!==$gato2)?"Verdadero":"Falso") ."<br>";

echo "<br>Comparamos elementos de la misma clase a la misma referencia<br>";
echo "gato1 == gato3 =>". (($gato1==$gato3)?"Verdadero":"Falso") ."<br>";
echo "gato1 === gato3 =>". (($gato1===$gato3)?"Verdadero":"Falso") ."<br>";
echo "gato1 != gato3 =>". (($gato1!=$gato3)?"Verdadero":"Falso") ."<br>";
echo "gato1 !== gato3 =>". (($gato1!==$gato3)?"Verdadero":"Falso") ."<br>";

echo "<br>Comparamos elementos de diferente clase<br>";
echo "gato1 == perro1 =>". (($gato1==$perro1)?"Verdadero":"Falso") ."<br>";
echo "gato1 === perro1 =>". (($gato1===$perro1)?"Verdadero":"Falso") ."<br>";
echo "gato1 != perro1 =>". (($gato1!=$perro1)?"Verdadero":"Falso") ."<br>";
echo "gato1 !== perro1 =>". (($gato1!==$perro1)?"Verdadero":"Falso") ."<br>";

// Usar == para comparar valores, === para comparar identidad (referencia)