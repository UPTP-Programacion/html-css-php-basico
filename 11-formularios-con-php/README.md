# 11 · Formularios con PHP

## 📖 ¿Cómo Funciona?

Cuando un usuario envía un formulario HTML, PHP recibe los datos en el servidor y puede procesarlos.

```
[Usuario llena formulario] → [Envía] → [PHP recibe datos] → [Procesa y responde]
```

## 📨 Recibir Datos: $_GET y $_POST

### Método GET

Los datos viajan en la **URL**:

```html
<!-- formulario.html -->
<form action="procesar.php" method="GET">
    <input type="text" name="busqueda">
    <button type="submit">Buscar</button>
</form>
```

```php
// procesar.php
<?php
    $busqueda = $_GET["busqueda"];
    echo "Buscaste: $busqueda";
?>
```

URL resultante: `procesar.php?busqueda=php+tutorial`

### Método POST

Los datos viajan **ocultos** (más seguro):

```html
<!-- formulario.html -->
<form action="procesar.php" method="POST">
    <input type="text" name="usuario">
    <input type="password" name="clave">
    <button type="submit">Iniciar Sesión</button>
</form>
```

```php
// procesar.php
<?php
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];
    echo "Bienvenido, $usuario";
?>
```

### ¿Cuándo usar cada uno?

| GET | POST |
|:---|:---|
| Búsquedas | Login / Registro |
| Filtros | Envío de formularios |
| Se puede compartir la URL | Datos sensibles |
| Límite ~2000 caracteres | Sin límite práctico |

## 🛡️ Validación de Datos

**Nunca confíes en los datos del usuario.** Siempre valida y limpia:

### Verificar que el dato existe

```php
<?php
    // Verificar si el formulario fue enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Verificar que el campo no esté vacío
        if (!empty($_POST["nombre"])) {
            $nombre = $_POST["nombre"];
            echo "Hola, $nombre";
        } else {
            echo "El nombre es obligatorio.";
        }
    }
?>
```

### Limpiar datos (sanitizar)

```php
<?php
    // Eliminar espacios, etiquetas HTML y caracteres especiales
    $nombre = htmlspecialchars(trim($_POST["nombre"]));
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    
    // Validar formato de email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email válido: $email";
    } else {
        echo "Email no válido.";
    }
?>
```

### Funciones de limpieza

| Función | Uso |
|:---|:---|
| `trim()` | Elimina espacios al inicio y final |
| `htmlspecialchars()` | Convierte caracteres HTML (evita inyección) |
| `strip_tags()` | Elimina etiquetas HTML |
| `filter_var()` | Filtra y valida (email, URL, números) |

## 🔄 Formulario y Procesamiento en el Mismo Archivo

Es común que el formulario y su procesamiento estén en el **mismo archivo PHP**:

```php
<?php
    $mensaje = "";
    $nombre = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars(trim($_POST["nombre"]));
        
        if (empty($nombre)) {
            $mensaje = "❌ Por favor ingresa tu nombre.";
        } else {
            $mensaje = "✅ ¡Hola, $nombre! Datos recibidos correctamente.";
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario</title>
</head>
<body>
    <?php if ($mensaje): ?>
        <p><?php echo $mensaje; ?></p>
    <?php endif; ?>

    <form method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $nombre; ?>">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
```

### Mantener valores en el formulario

Cuando hay un error, es buena práctica **mantener los valores** que el usuario ya escribió:

```html
<input type="text" name="nombre" value="<?php echo isset($nombre) ? $nombre : ''; ?>">
```

## 📝 Procesar Diferentes Tipos de Input

### Checkbox (múltiples valores)

```php
<?php
    if (isset($_POST["lenguajes"])) {
        $lenguajes = $_POST["lenguajes"]; // Es un array
        foreach ($lenguajes as $lang) {
            echo "<li>" . htmlspecialchars($lang) . "</li>";
        }
    }
?>
```

### Radio buttons

```php
<?php
    if (isset($_POST["turno"])) {
        $turno = $_POST["turno"]; // Un solo valor
        echo "Turno seleccionado: $turno";
    }
?>
```

### Select

```php
<?php
    $carrera = $_POST["carrera"];
    echo "Carrera: $carrera";
?>
```

### Textarea

```php
<?php
    $comentario = htmlspecialchars(trim($_POST["comentario"]));
    // nl2br convierte saltos de línea en <br>
    echo nl2br($comentario);
?>
```

## ⚠️ Seguridad Básica

1. **Siempre** usa `htmlspecialchars()` al mostrar datos del usuario
2. **Nunca** confíes en los datos sin validar
3. Usa `POST` para datos sensibles
4. Verifica que el formulario fue realmente enviado con `$_SERVER["REQUEST_METHOD"]`

---

## 📁 Archivos de este tema

| Carpeta | Contenido |
|:---|:---|
| `ejemplos/` | Formulario completo con validación PHP |
| `ejercicios/` | Crear sistemas de formularios con procesamiento |

---

[⬅️ Anterior](../10-variables-y-estructuras-php/README.md) | [Inicio](../README.md) | [Siguiente ➡️](../12-proyecto-final/README.md)
