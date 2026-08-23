# Fundamentos de la Programación Orientada a Objetos (POO) en PHP

Esta carpeta contiene ejemplos para profundizar en los conceptos fundamentales de la POO en PHP. Cada archivo aborda un tema esencial para dominar la herencia, encapsulamiento, métodos mágicos, estáticos, constantes, archivos externos, autoload y clases abstractas.

## Contenido

- **01-herencia.php**: Herencia de clases y sobreescritura de métodos.
- **02-encapsulamiento.php**: Modificadores de acceso y protección de datos.
- **03-crear-setters-y-getters.php**: Acceso controlado a propiedades privadas/protegidas.
- **04-metodos-magicos.php**: Uso de métodos mágicos `__get` y `__set`.
- **05-static.php**: Propiedades y métodos estáticos.
- **06-overriding.php**: Sobreescritura y ampliación de métodos en subclases.
- **07-self-parent.php**: Uso de `self` y `parent` para acceder a miembros estáticos y de la clase padre.
- **08-clonar.php**: Clonación de objetos y diferencia con copia de referencia.
- **09-contantes.php**: Definición y uso de constantes de clase.
- **10-archivos-externos.php**: Inclusión de archivos externos y diferencias entre include/require.
- **11-autoloads.php**: Autocarga de clases con `spl_autoload_register`.
- **12-clases-abstractas.php**: Clases abstractas y comparación con interfaces.
- **classes/**: Ejemplos de clases simples para pruebas de autoload.

---

## Material complementario

### Herencia
Permite reutilizar código y crear jerarquías de clases. La subclase puede agregar o modificar métodos y propiedades de la clase padre.

### Encapsulamiento
Controla el acceso a los datos internos de la clase usando `public`, `protected` y `private`. Se recomienda usar getters y setters para acceder a propiedades privadas/protegidas.

### Métodos mágicos
`__get` y `__set` permiten manejar propiedades no declaradas o inaccesibles, pero no reemplazan a los getters/setters tradicionales.

### Métodos y propiedades estáticas
Se accede a ellos sin crear instancias. Son útiles para valores o comportamientos compartidos por todas las instancias.

### Overriding
Permite que una subclase redefina un método de la clase padre. Se puede llamar al método original con `parent::`.

### self y parent
- `self::` accede a miembros estáticos de la misma clase.
- `parent::` accede a miembros de la clase padre desde una subclase.

### Clonación
`clone` crea una copia independiente del objeto. Cambios en el clon no afectan al original.

### Constantes de clase
Se definen con `const` y se usan para valores que no cambian. Se accede con `::`.

### Archivos externos y autoload
`include` y `require` permiten incluir archivos. `spl_autoload_register` automatiza la carga de clases.

### Clases abstractas
No pueden ser instanciadas. Se usan como base para otras clases y pueden tener métodos abstractos y normales.

---

## Ejercicios propuestos

1. **Herencia y sobreescritura**
   - Crea una clase `Animal` y una subclase `Perro` que sobrescriba un método de `Animal`.
2. **Encapsulamiento**
   - Modifica una clase para que todas sus propiedades sean privadas y crea los getters/setters necesarios.
3. **Métodos mágicos**
   - Implementa `__get` y `__set` para manejar propiedades dinámicas en una clase `Persona`.
4. **Propiedades estáticas**
   - Crea una propiedad estática que cuente cuántos objetos de una clase han sido creados.
5. **Clonación**
   - Clona un objeto y demuestra que modificar el clon no afecta al original.
6. **Constantes de clase**
   - Define una constante en una clase y úsala en un método.
7. **Autoload**
   - Organiza varias clases en archivos separados y usa autoload para cargarlas automáticamente.
8. **Clases abstractas**
   - Crea una clase abstracta `Figura` con un método abstracto `area()` y subclases que implementen ese método.

---

## Recursos adicionales
- [Manual oficial de PHP: POO](https://www.php.net/manual/es/language.oop5.php)
- [Guía de autoload en PHP](https://www.php.net/manual/es/language.oop5.autoload.php)
- [Diferencias entre clases abstractas e interfaces](https://www.php.net/manual/es/language.oop5.abstract.php)

---

¡Explora los archivos, modifica el código y experimenta! La mejor forma de aprender es practicando. 