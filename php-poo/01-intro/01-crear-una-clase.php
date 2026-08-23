<?php 
/**
 * Ejemplo básico de cómo crear una clase en PHP
 *
 * Una clase es un molde para crear objetos. Define las propiedades (atributos) y métodos (funciones) que tendrán los objetos creados a partir de ella.
 *
 * @link https://www.php.net/language.oop5
 */

// Convención: los nombres de clase usan CamelCase
// Ejemplo de comentario de documentación sobre la clase
/**
 * Clase que representa un gato
 */
class Gato {
    // Por ahora, la clase está vacía
}

// Verificar si una clase existe
if (class_exists("Gato")) {
    echo "La clase Gato existe.";
} else {
    echo "La clase Gato NO existe.";
}

// Diferencia entre clase y objeto:
// Clase: el plano o molde (Gato)
// Objeto: una instancia creada a partir de la clase (por ejemplo, $miGato = new Gato();)
