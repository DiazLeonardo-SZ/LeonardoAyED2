# Introducción a la Programación Orientada a Objetos (POO) en PHP

Esta carpeta contiene ejemplos básicos para aprender los conceptos fundamentales de la Programación Orientada a Objetos (POO) en PHP. Cada archivo aborda un tema esencial para comenzar a trabajar con clases y objetos.

## Contenido

- **01-crear-una-clase.php**: Cómo definir una clase en PHP.
- **02-crear-metodos.php**: Cómo agregar métodos (funciones) a una clase.
- **03-instaciar-una-clase.php**: Cómo crear objetos (instancias) a partir de una clase.
- **04-crear-propiedades.php**: Cómo definir y usar propiedades (atributos) en una clase.
- **05-contructor.php**: Cómo usar el constructor para inicializar objetos.

---

## Material complementario

### ¿Qué es la POO?
La Programación Orientada a Objetos es un paradigma que organiza el código en torno a "objetos", que son instancias de "clases". Permite modelar entidades del mundo real y sus comportamientos de forma más natural y reutilizable.

### Conceptos clave
- **Clase**: Es el plano o molde que define las propiedades y métodos comunes a todos los objetos de ese tipo.
- **Objeto**: Es una instancia concreta de una clase. Cada objeto puede tener valores propios para sus propiedades.
- **Propiedad**: Variable que pertenece a una clase/objeto.
- **Método**: Función que pertenece a una clase/objeto.
- **Constructor**: Método especial que se ejecuta al crear un objeto, útil para inicializar propiedades.
- **Palabra clave `this`**: Hace referencia al objeto actual dentro de la clase.

### Buenas prácticas
- Usa `public`, `private` o `protected` para definir la visibilidad de propiedades y métodos.
- Nombra las clases usando CamelCase (por ejemplo, `GatoGrande`).
- Los métodos y propiedades suelen escribirse en minúsculas y con guiones bajos (`maullar`, `color_pelo`).
- Comenta tu código para explicar el propósito de cada clase y método.

---

## Ejercicios propuestos

1. **Crea tu propia clase**
   - Define una clase llamada `Perro` con al menos dos propiedades y dos métodos.
   - Crea una instancia de `Perro` y muestra el resultado de llamar a sus métodos.

2. **Agrega un método nuevo**
   - En la clase `Gato`, agrega un método que diga "El gato duerme".
   - Llama a este método desde una instancia.

3. **Inicialización con el constructor**
   - Modifica la clase `Gato` para que el constructor reciba un tercer parámetro: la edad del gato.
   - Muestra la edad de cada gato creado.

4. **Propiedades por defecto**
   - ¿Qué sucede si no asignas un valor a una propiedad? Haz pruebas y observa el resultado.

5. **Verifica la clase de un objeto**
   - Usa la función `is_a()` para comprobar si un objeto es instancia de una clase determinada.

---

## Recursos adicionales
- [Manual oficial de PHP: POO](https://www.php.net/manual/es/language.oop5.php)
- [Tutorial en español sobre POO en PHP](https://www.php.net/manual/es/language.oop5.basic.php)

---

¡Explora los archivos, modifica el código y experimenta! La mejor forma de aprender es practicando. 