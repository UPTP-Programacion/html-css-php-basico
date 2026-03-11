# 09 · Introducción a PHP

## 📖 ¿Qué es PHP?

**PHP** (PHP: Hypertext Preprocessor) es un lenguaje de programación del lado del **servidor**. Se ejecuta en el servidor web y genera HTML que se envía al navegador.

```
[Navegador] → solicita página → [Servidor con PHP] → procesa código → [HTML de respuesta]
```

### ¿Para qué sirve?

- Procesar formularios
- Acceder a bases de datos
- Gestionar sesiones y autenticación
- Generar contenido dinámico

## ⚙️ Requisitos

Para ejecutar PHP necesitas un **servidor local**:

| Herramienta | Incluye |
|:---|:---|
| **XAMPP** | Apache + PHP + MySQL (recomendado) |
| **WAMP** | Para Windows |
| **MAMP** | Para Mac |

Los archivos PHP deben colocarse en la carpeta `htdocs/` (XAMPP) y accederse desde `http://localhost/`.

## ✍️ Sintaxis Básica

Todo código PHP va dentro de las etiquetas `<?php ?>`:

```php
<?php
    echo "¡Hola Mundo!";
?>
```

### PHP dentro de HTML

```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi primera página PHP</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <p>Hoy es: <?php echo date("d/m/Y"); ?></p>
    <p>Son las: <?php echo date("H:i:s"); ?></p>
</body>
</html>
```

## 📤 Mostrar Información

### echo y print

```php
<?php
    echo "Hola con echo";          // Más usado
    echo "<h2>Puedo generar HTML</h2>";
    
    print "Hola con print";        // Similar pero más lento
?>
```

### Concatenar texto

```php
<?php
    $nombre = "María";
    
    // Con punto (.)
    echo "Hola " . $nombre . ", bienvenida.";
    
    // Con comillas dobles (interpola variables)
    echo "Hola $nombre, bienvenida.";
    
    // Con comillas simples (NO interpola)
    echo 'Hola $nombre';  // Muestra: Hola $nombre
?>
```

## 💬 Comentarios

```php
<?php
    // Comentario de una línea

    # También es comentario de una línea

    /* 
       Comentario
       de múltiples líneas
    */
?>
```

## 📊 Tipos de Datos

```php
<?php
    $texto = "Hola";           // String (cadena)
    $entero = 25;              // Integer (entero)
    $decimal = 3.14;           // Float (decimal)
    $activo = true;            // Boolean (verdadero/falso)
    $nulo = null;              // Null (sin valor)
?>
```

### Verificar tipo de dato

```php
<?php
    $edad = 20;
    echo gettype($edad);      // Muestra: integer
    var_dump($edad);           // Muestra: int(20)
?>
```

## 🔧 Funciones Útiles Básicas

```php
<?php
    // Longitud de un string
    echo strlen("Hola mundo");     // 10

    // Convertir a mayúsculas/minúsculas
    echo strtoupper("hola");       // HOLA
    echo strtolower("HOLA");       // hola

    // Fecha actual
    echo date("d/m/Y");            // 15/03/2025
    echo date("H:i:s");            // 14:30:00

    // Número aleatorio
    echo rand(1, 100);             // Número entre 1 y 100
?>
```

## ⚠️ Errores Comunes

| Error | Causa | Solución |
|:---|:---|:---|
| Página en blanco | Error de sintaxis PHP | Revisar logs de Apache |
| Se muestra el código PHP | Archivo no es `.php` o servidor apagado | Renombrar y verificar XAMPP |
| Missing semicolon | Falta `;` al final de la línea | Agregar `;` |
| Undefined variable | Variable no declarada | Verificar el nombre |

---

## 📁 Archivos de este tema

| Carpeta | Contenido |
|:---|:---|
| `ejemplos/` | Página PHP con salida básica |
| `ejercicios/` | Crear tu primera página dinámica |

---

[⬅️ Anterior](../08-css-responsive/README.md) | [Inicio](../README.md) | [Siguiente ➡️](../10-variables-y-estructuras-php/README.md)
