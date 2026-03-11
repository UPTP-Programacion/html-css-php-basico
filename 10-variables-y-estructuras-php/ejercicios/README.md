# Ejercicios · 10 Variables y Estructuras de Control

## Ejercicio 1: Calculadora de Notas

Crea `notas.php` que:

1. Declare un array con 5 notas de un estudiante
2. Calcule: promedio, nota más alta, nota más baja
3. Determine si está aprobado (promedio >= 10)
4. Muestre todo en una página estilizada con HTML y CSS
5. Use una función propia `calcularPromedio($notas)` que retorne el promedio

---

## Ejercicio 2: Generador de Tabla de Multiplicar

Crea `tablas.php` que:

1. Declare una variable `$numero` (ej: 8)
2. Use un bucle `for` para generar la tabla de multiplicar del 1 al 12
3. Presente los resultados en una tabla HTML estilizada
4. Los resultados mayores a 50 deben mostrarse en **color rojo** (usa condicional)

### Extra (opcional)
Genera las tablas del 1 al 10 usando un `for` dentro de otro `for`.

---

## Ejercicio 3: Lista de Estudiantes

Crea `estudiantes.php` que:

1. Declare un array asociativo con 6 estudiantes (nombre, edad, nota, carrera)
2. Use `foreach` para recorrer el array y generar una tabla HTML
3. Use condicionales para:
   - Mostrar "Aprobado" (verde) o "Reprobado" (rojo) según la nota
   - Marcar en negrita al estudiante con la nota más alta
4. Al final, muestre estadísticas: total de estudiantes, promedio general, aprobados vs reprobados

---

## Ejercicio 4: Funciones

Crea `funciones.php` con las siguientes funciones:

1. `esPar($numero)` → retorna `true` si el número es par
2. `calcularDescuento($precio, $porcentaje)` → retorna el precio con descuento
3. `saludarPorHora()` → retorna "Buenos días", "Buenas tardes" o "Buenas noches" según la hora
4. Crea una página que demuestre el uso de las 3 funciones

---

## ✅ Criterios de evaluación

- [ ] Los condicionales (if/else/switch) se usan correctamente
- [ ] Los bucles (for, foreach, while) generan el contenido esperado
- [ ] Los arrays se declaran y recorren correctamente
- [ ] Se crean y usan funciones propias con `return`
- [ ] La salida está en HTML bien formateado con estilos
