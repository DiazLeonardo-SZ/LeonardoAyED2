# Otros temas avanzados de POO en PHP

Esta carpeta contiene ejemplos de temas avanzados y complementarios de la Programación Orientada a Objetos en PHP. Aquí encontrarás conceptos útiles para proyectos reales y para profundizar en el lenguaje.

## Contenido

- **05-interfaces.php**: Definición y uso de interfaces, diferencia con clases abstractas.
- **06-iteracion-de-clases.php**: Iteración de objetos y la interfaz Iterator.
- **07-final-class.php**: Clases y métodos finales para evitar herencia o sobreescritura.
- **08-comparacion-de-instancias.php**: Comparación de objetos con `==` y `===`.
- **09-clases-anonimas.php**: Clases anónimas para objetos "desechables".
- **10-herencia-multiple.php**: Traits para simular herencia múltiple y resolver conflictos.
- **11-metodo-toSting.php**: Método mágico `__toString` para convertir objetos a string.
- **12-reflection-class.php**: Uso de ReflectionClass para inspección de clases en tiempo de ejecución.

---

## Material complementario

### Interfaces
Permiten definir un contrato que las clases deben cumplir. Una clase puede implementar varias interfaces. Diferencia clave: las interfaces no tienen implementación, las clases abstractas sí.

### Iteración de objetos
Puedes iterar propiedades públicas con `foreach`. Para personalizar la iteración, implementa la interfaz `Iterator`.

### Clases y métodos finales
`final` evita que una clase sea heredada o que un método sea sobrescrito. Útil para proteger lógica crítica.

### Comparación de instancias
- `==` compara valores de atributos.
- `===` compara si son la misma instancia (referencia).

### Clases anónimas
Útiles para objetos temporales, callbacks o pruebas rápidas. Se pueden pasar argumentos al constructor.

### Traits (herencia múltiple)
Permiten compartir métodos entre clases sin herencia múltiple real. Si hay conflicto de métodos, se resuelve con `insteadof` y `as`.

### Método mágico __toString
Permite definir cómo se convierte un objeto a string. Útil para depuración o mostrar información relevante.

### ReflectionClass
Permite inspeccionar clases en tiempo de ejecución: obtener métodos, propiedades, herencia, etc. Muy útil en frameworks y herramientas de análisis.

---

## Ejercicios propuestos

1. **Interfaces**
   - Crea una interfaz `iVolador` y una clase `Pajaro` que la implemente.
2. **Iterator**
   - Implementa la interfaz `Iterator` en una clase para iterar sobre un array de datos.
3. **Final**
   - Crea una clase final y muestra el error al intentar heredarla.
4. **Comparación**
   - Crea dos objetos con los mismos valores y compara con `==` y `===`.
5. **Clase anónima**
   - Crea una clase anónima que implemente una interfaz.
6. **Traits**
   - Crea dos traits con métodos del mismo nombre y resuelve el conflicto en una clase.
7. **__toString**
   - Implementa `__toString` en una clase y muestra su uso con `echo`.
8. **ReflectionClass**
   - Usa ReflectionClass para listar todos los métodos de una clase.

---

## Recursos adicionales
- [Manual oficial de PHP: Interfaces](https://www.php.net/manual/es/language.oop5.interfaces.php)
- [Manual oficial de PHP: Traits](https://www.php.net/manual/es/language.oop5.traits.php)
- [Manual oficial de PHP: Reflection](https://www.php.net/manual/es/book.reflection.php)

---

¡Explora los archivos, modifica el código y experimenta! La mejor forma de aprender es practicando. 