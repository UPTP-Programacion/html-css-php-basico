# 05 · Introducción a CSS

## 📖 ¿Qué es CSS?

**CSS** (Cascading Style Sheets) es el lenguaje que define la **presentación visual** de un documento HTML: colores, fuentes, espaciado, diseño, animaciones y más.

> HTML = **Estructura** | CSS = **Diseño**

## 🔗 Formas de Agregar CSS

### 1. CSS en línea (inline)

Se escribe directamente en la etiqueta con el atributo `style`:

```html
<p style="color: blue; font-size: 18px;">Texto azul</p>
```

⚠️ **No recomendado** para proyectos reales (difícil de mantener).

### 2. CSS interno (embedded)

Se escribe dentro de `<style>` en el `<head>`:

```html
<head>
    <style>
        p {
            color: blue;
            font-size: 18px;
        }
    </style>
</head>
```

✅ Útil para páginas individuales o pruebas rápidas.

### 3. CSS externo (recomendado)

Se escribe en un archivo `.css` separado y se enlaza:

```html
<!-- En el <head> del HTML -->
<link rel="stylesheet" href="estilos.css">
```

```css
/* Archivo: estilos.css */
p {
    color: blue;
    font-size: 18px;
}
```

✅ **Mejor práctica**: separa estructura (HTML) de diseño (CSS).

## ✍️ Sintaxis de CSS

```css
selector {
    propiedad: valor;
    propiedad: valor;
}
```

Ejemplo:
```css
h1 {
    color: #333333;
    font-size: 32px;
    text-align: center;
}
```

## 🎨 Propiedades Básicas

### Colores

```css
/* Por nombre */
color: red;

/* Hexadecimal */
color: #ff0000;
color: #f00;        /* Abreviado */

/* RGB */
color: rgb(255, 0, 0);

/* RGBA (con transparencia) */
color: rgba(255, 0, 0, 0.5);
```

### Texto

```css
color: #333;                    /* Color del texto */
font-size: 16px;                /* Tamaño */
font-family: Arial, sans-serif; /* Fuente */
font-weight: bold;              /* Grosor: normal, bold, 100-900 */
font-style: italic;             /* Estilo: normal, italic */
text-align: center;             /* Alineación: left, center, right, justify */
text-decoration: underline;     /* Decoración: none, underline, line-through */
text-transform: uppercase;      /* Transformar: uppercase, lowercase, capitalize */
line-height: 1.6;               /* Altura de línea */
letter-spacing: 2px;            /* Espacio entre letras */
```

### Fondos

```css
background-color: #f5f5f5;                 /* Color de fondo */
background-image: url('fondo.jpg');         /* Imagen de fondo */
background-size: cover;                     /* Tamaño: cover, contain */
background-repeat: no-repeat;              /* Repetir: repeat, no-repeat */
background-position: center;               /* Posición */
```

### Bordes

```css
border: 2px solid #333;          /* Atajo: ancho tipo color */
border-radius: 10px;             /* Esquinas redondeadas */
border-bottom: 1px dashed #ccc;  /* Solo borde inferior */
```

### Dimensiones

```css
width: 300px;           /* Ancho fijo */
width: 50%;             /* Ancho relativo */
max-width: 800px;       /* Ancho máximo */
height: 200px;          /* Alto */
```

## 📐 Unidades de Medida

| Unidad | Tipo | Ejemplo | Descripción |
|:---|:---|:---|:---|
| `px` | Absoluta | `16px` | Píxeles (fijo) |
| `%` | Relativa | `50%` | Porcentaje del padre |
| `em` | Relativa | `1.5em` | Relativo al font-size del padre |
| `rem` | Relativa | `1.5rem` | Relativo al font-size del `<html>` |
| `vw` | Relativa | `50vw` | 50% del ancho de la ventana |
| `vh` | Relativa | `100vh` | 100% del alto de la ventana |

## 💡 Comentarios en CSS

```css
/* Esto es un comentario */

/* 
   Comentario
   de múltiples líneas 
*/
```

---

## 📁 Archivos de este tema

| Carpeta | Contenido |
|:---|:---|
| `ejemplos/` | Página HTML con estilos CSS aplicados |
| `ejercicios/` | Estilizar páginas desde cero |

---

[⬅️ Anterior](../04-formularios-html/README.md) | [Inicio](../README.md) | [Siguiente ➡️](../06-selectores-y-box-model/README.md)
