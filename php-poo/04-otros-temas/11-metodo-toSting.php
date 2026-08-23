<?php 
/**
 * Método mágico __toString()
 *
 * Permite definir cómo se convierte un objeto a cadena (string).
 * Si no se implementa y se intenta imprimir el objeto, se produce un error.
 * Útil para depuración o para mostrar información relevante del objeto.
 */
class Gato {

  private $nombre;
  private $pelo;

  public function __construct($nombre, $color) {

    $this->nombre = $nombre;
    $this->pelo = $color;
  }

  public function __toString() {

    return "Mi nombre es ".$this->nombre." y el color de mi pelo es ".$this->pelo.".<br>";
  }
}

$benito = new Gato("Benito","azul");

echo $benito;

// Implementa __toString cuando quieras mostrar información legible del objeto.