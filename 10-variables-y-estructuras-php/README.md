# 10 · Variables y Estructuras de Control en PHP

## 📖 Variables

En PHP las variables empiezan con `$` y no necesitan declarar tipo:

```php
<?php
    $nombre = "Ana";        // String
    $edad = 20;             // Integer
    $promedio = 8.5;        // Float
    $aprobado = true;       // Boolean
?>
```

### Constantes

Valores que **no cambian**:

```php
<?php
    define("UNIVERSIDAD", "UPTP");
    echo UNIVERSIDAD;  // UPTP (sin $)
    
    // PHP 7+
    const IVA = 0.16;
?>
```

## 🔢 Operadores

### Aritméticos
```php
$a + $b    // Suma
$a - $b    // Resta
$a * $b    // Multiplicación
$a / $b    // División
$a % $b    // Módulo (residuo)
$a ** $b   // Potencia
```

### Comparación
```php
$a == $b    // Igual (valor)
$a === $b   // Idéntico (valor y tipo)
$a != $b    // Diferente
$a > $b     // Mayor que
$a < $b     // Menor que
$a >= $b    // Mayor o igual
$a <= $b    // Menor o igual
```

### Lógicos
```php
$a && $b    // AND (ambos verdaderos)
$a || $b    // OR (al menos uno verdadero)
!$a         // NOT (negación)
```

## 🔀 Estructuras Condicionales

### if / else if / else

```php
<?php
    $nota = 15;

    if ($nota >= 18) {
        echo "Excelente";
    } else if ($nota >= 15) {
        echo "Bueno";
    } else if ($nota >= 10) {
        echo "Aprobado";
    } else {
        echo "Reprobado";
    }
?>
```

### switch

```php
<?php
    $dia = date("l");

    switch ($dia) {
        case "Monday":
            echo "Lunes: Programación I";
            break;
        case "Tuesday":
            echo "Martes: Base de Datos";
            break;
        case "Wednesday":
            echo "Miércoles: Redes";
            break;
        default:
            echo "Día sin clases asignadas";
            break;
    }
?>
```

### Operador ternario

```php
<?php
    $edad = 20;
    $mensaje = ($edad >= 18) ? "Mayor de edad" : "Menor de edad";
    echo $mensaje;
?>
```

## 🔄 Bucles

### while

```php
<?php
    $i = 1;
    while ($i <= 5) {
        echo "<p>Iteración $i</p>";
        $i++;
    }
?>
```

### for

```php
<?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<li>Elemento $i</li>";
    }
?>
```

### foreach (para arrays)

```php
<?php
    $materias = ["HTML", "CSS", "PHP", "JavaScript"];
    
    foreach ($materias as $materia) {
        echo "<li>$materia</li>";
    }

    // Con índice
    foreach ($materias as $indice => $materia) {
        echo "<li>$indice: $materia</li>";
    }
?>
```

## 📚 Arrays

### Array indexado

```php
<?php
    $frutas = ["Mango", "Naranja", "Piña"];
    echo $frutas[0];  // Mango
    echo count($frutas);  // 3
    
    // Agregar elemento
    $frutas[] = "Guayaba";
    array_push($frutas, "Lechosa");
?>
```

### Array asociativo

```php
<?php
    $estudiante = [
        "nombre" => "Carlos",
        "edad" => 22,
        "carrera" => "Informática",
        "semestre" => 4
    ];

    echo $estudiante["nombre"];   // Carlos
    echo $estudiante["carrera"];  // Informática
?>
```

### Funciones útiles de arrays

```php
<?php
    $numeros = [5, 2, 8, 1, 9, 3];
    
    count($numeros);      // 6 (cantidad)
    sort($numeros);       // Ordenar ascendente
    rsort($numeros);      // Ordenar descendente
    in_array(8, $numeros); // true (existe?)
    array_sum($numeros);  // 28 (suma total)
?>
```

## 🔧 Funciones Propias

```php
<?php
    // Función simple
    function saludar($nombre) {
        return "¡Hola, $nombre!";
    }
    echo saludar("María");  // ¡Hola, María!

    // Función con valor por defecto
    function calcularIVA($precio, $tasa = 0.16) {
        return $precio * (1 + $tasa);
    }
    echo calcularIVA(100);       // 116
    echo calcularIVA(100, 0.12); // 112
?>
```

---

## 📁 Archivos de este tema

| Carpeta | Contenido |
|:---|:---|
| `ejemplos/` | Ejemplos de condicionales, bucles y arrays |
| `ejercicios/` | Resolver problemas con estructuras de control |

---

[⬅️ Anterior](../09-introduccion-php/README.md) | [Inicio](../README.md) | [Siguiente ➡️](../11-formularios-con-php/README.md)
