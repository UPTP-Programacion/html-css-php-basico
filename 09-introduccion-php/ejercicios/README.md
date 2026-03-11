# Ejercicios · 09 Introducción a PHP

> ⚠️ **Recuerda:** Los archivos PHP deben tener extensión `.php` y ejecutarse desde `http://localhost/` con XAMPP activo.

## Ejercicio 1: Tarjeta Dinámica

Crea un archivo `tarjeta.php` que:

1. Declare variables con tu información: nombre, edad, carrera, semestre, email
2. Genere una tarjeta HTML usando esas variables con `echo`
3. Muestre la fecha actual al final
4. Agrega estilos CSS para que se vea presentable

### Resultado esperado
Una tarjeta bonita donde toda la información viene de variables PHP.

---

## Ejercicio 2: Calculadora Básica

Crea un archivo `calculadora.php` que:

1. Declare dos variables numéricas: `$a = 15` y `$b = 4`
2. Muestre el resultado de las 5 operaciones básicas:
   - Suma (`+`), Resta (`-`), Multiplicación (`*`), División (`/`), Módulo (`%`)
3. Presenta los resultados en una tabla HTML generada con PHP

### Pista
```php
<?php
    $a = 15;
    $b = 4;
    echo "<tr><td>Suma</td><td>$a + $b = " . ($a + $b) . "</td></tr>";
?>
```

---

## Ejercicio 3: Generador de Perfil

Crea un archivo `perfil.php` que:

1. Declare variables para un perfil de usuario ficticio
2. Use `strtoupper()` para mostrar el nombre en mayúsculas
3. Use `strlen()` para mostrar cuántos caracteres tiene el nombre
4. Muestre la fecha y hora actuales (zona horaria de Venezuela)
5. Genere un número aleatorio como "número de estudiante"
6. Todo debe mostrarse en una página HTML con estilos

---

## ✅ Criterios de evaluación

- [ ] El archivo tiene extensión `.php`
- [ ] Las variables se declaran correctamente con `$`
- [ ] Se usa `echo` para generar HTML dinámico
- [ ] Los tipos de datos son correctos (string, int, float)
- [ ] La página funciona al abrirla desde `http://localhost/`
