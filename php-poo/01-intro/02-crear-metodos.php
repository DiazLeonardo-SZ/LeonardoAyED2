<?php
/*
Los métodos son funciones que pertenecen a una clase. Permiten definir el comportamiento de los objetos.
*/
class Gato {
    // Por convención moderna, se recomienda especificar la visibilidad (public, private, protected)
    public function maullar() {
        echo "El gato dice miau miau"."<br>";
    }
    public function ronronear() {
        echo "El gato ronronea"."<br>";
    }
}

// Crear una instancia de la clase Gato
$gato = new Gato();
$gato->maullar(); // Llamar a un método
$gato->ronronear();

// Obtener los métodos de una clase
echo "<hr>Lista de métodos de la clase Gato:<br>";
$metodos = get_class_methods("Gato");
foreach ($metodos as $metodo) {
    echo $metodo."<br>";
}

// Verificar si existe un método
echo "<hr>";
if (method_exists("Gato", "maullar")) {
    echo "Los gatos pueden maullar"."<br>";
} else {
    echo "Los gatos NO pueden maullar"."<br>";
}

// Ejercicio: Agrega un método nuevo a la clase Gato que diga "El gato duerme".
