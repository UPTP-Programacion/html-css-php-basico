# 01 · Introducción a HTML

## 📖 ¿Qué es HTML?

**HTML** (HyperText Markup Language) es el lenguaje de marcado estándar para crear páginas web. No es un lenguaje de programación, sino un lenguaje que define la **estructura** y el **contenido** de una página web mediante etiquetas.

## 🧱 Conceptos Fundamentales

### Etiquetas (Tags)

Las etiquetas son los bloques de construcción de HTML. La mayoría tienen una etiqueta de apertura y una de cierre:

```html
<etiqueta>Contenido aquí</etiqueta>
```

Algunas etiquetas son **autocerradas** (no necesitan cierre):

```html
<br>
<img src="foto.jpg" alt="descripción">
<hr>
```

### Atributos

Las etiquetas pueden tener **atributos** que proporcionan información adicional:

```html
<etiqueta atributo="valor">Contenido</etiqueta>
```

Ejemplo:
```html
<a href="https://google.com" target="_blank">Ir a Google</a>
```

## 📄 Estructura Básica de un Documento HTML

Todo archivo HTML tiene la siguiente estructura mínima:

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Primera Página</title>
</head>
<body>
    <!-- Aquí va el contenido visible -->
    <h1>¡Hola Mundo!</h1>
    <p>Esta es mi primera página web.</p>
</body>
</html>
```

### Explicación de cada parte

| Etiqueta | Función |
|:---|:---|
| `<!DOCTYPE html>` | Indica al navegador que es un documento HTML5 |
| `<html lang="es">` | Elemento raíz, define el idioma |
| `<head>` | Metadatos (no visibles en la página) |
| `<meta charset="UTF-8">` | Codificación de caracteres (soporta ñ, tildes) |
| `<title>` | Título que aparece en la pestaña del navegador |
| `<body>` | Todo el contenido visible de la página |

## 🔑 Etiquetas Esenciales

### Encabezados

HTML tiene 6 niveles de encabezados:

```html
<h1>Encabezado principal</h1>
<h2>Sub-encabezado</h2>
<h3>Encabezado nivel 3</h3>
<h4>Encabezado nivel 4</h4>
<h5>Encabezado nivel 5</h5>
<h6>Encabezado nivel 6</h6>
```

### Párrafos y saltos

```html
<p>Este es un párrafo de texto.</p>
<p>Este es otro párrafo separado.</p>
<br> <!-- Salto de línea -->
<hr> <!-- Línea horizontal separadora -->
```

### Comentarios

```html
<!-- Esto es un comentario y NO se muestra en la página -->
```

## 📁 Archivos de este tema

| Carpeta | Contenido |
|:---|:---|
| `ejemplos/` | Página HTML básica funcional |
| `ejercicios/` | Crear tu primera página desde cero |

---

[⬅️ Inicio](../README.md) | [Siguiente: Estructura y Texto ➡️](../02-estructura-y-texto/README.md)
