# 02 · Estructura y Texto

## 📖 Etiquetas Semánticas

HTML5 introdujo etiquetas **semánticas** que dan significado a la estructura de la página. En lugar de usar `<div>` para todo, usamos etiquetas que describen su contenido:

```html
<header>   <!-- Encabezado de la página o sección -->
<nav>      <!-- Menú de navegación -->
<main>     <!-- Contenido principal -->
<section>  <!-- Sección temática -->
<article>  <!-- Contenido independiente -->
<aside>    <!-- Contenido secundario (barra lateral) -->
<footer>   <!-- Pie de página -->
```

### Ejemplo de estructura semántica

```html
<body>
    <header>
        <h1>Mi Blog</h1>
        <nav>
            <a href="#inicio">Inicio</a>
            <a href="#about">Acerca de</a>
        </nav>
    </header>

    <main>
        <article>
            <h2>Mi primer artículo</h2>
            <p>Contenido del artículo...</p>
        </article>
    </main>

    <footer>
        <p>&copy; 2025 Mi Blog</p>
    </footer>
</body>
```

## 📝 Etiquetas de Texto

### Formato de texto

```html
<strong>Texto en negrita (importancia)</strong>
<em>Texto en cursiva (énfasis)</em>
<mark>Texto resaltado</mark>
<small>Texto pequeño</small>
<del>Texto tachado</del>
<sub>Subíndice</sub> → H<sub>2</sub>O
<sup>Superíndice</sup> → x<sup>2</sup>
```

### Citas y código

```html
<blockquote>
    "La programación es el arte de decirle a otro ser humano 
    lo que quieres que la computadora haga." — Donald Knuth
</blockquote>

<code>console.log("Hola")</code>  <!-- Código en línea -->

<pre>                              <!-- Bloque de código preformateado -->
<code>
function saludar() {
    return "Hola Mundo";
}
</code>
</pre>
```

## 📋 Listas

### Lista desordenada (viñetas)

```html
<ul>
    <li>HTML</li>
    <li>CSS</li>
    <li>PHP</li>
</ul>
```

### Lista ordenada (numerada)

```html
<ol>
    <li>Abrir el editor</li>
    <li>Escribir el código</li>
    <li>Guardar el archivo</li>
    <li>Abrir en el navegador</li>
</ol>
```

### Lista de definiciones

```html
<dl>
    <dt>HTML</dt>
    <dd>Lenguaje de marcado para estructura web</dd>
    
    <dt>CSS</dt>
    <dd>Hojas de estilo para diseño visual</dd>
</dl>
```

## 📊 Tablas

```html
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Carrera</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Ana</td>
            <td>20</td>
            <td>Informática</td>
        </tr>
        <tr>
            <td>Carlos</td>
            <td>22</td>
            <td>Sistemas</td>
        </tr>
    </tbody>
</table>
```

### Partes de una tabla

| Etiqueta | Función |
|:---|:---|
| `<table>` | Contenedor de la tabla |
| `<thead>` | Encabezado de la tabla |
| `<tbody>` | Cuerpo de la tabla |
| `<tr>` | Fila (table row) |
| `<th>` | Celda de encabezado |
| `<td>` | Celda de datos |

## 🧩 Div y Span

```html
<!-- div: contenedor de bloque (ocupa todo el ancho) -->
<div>
    <h2>Sección agrupada</h2>
    <p>Contenido dentro de un div</p>
</div>

<!-- span: contenedor en línea (dentro del texto) -->
<p>El precio es <span style="color: red;">$50.00</span> con descuento.</p>
```

---

## 📁 Archivos de este tema

| Carpeta | Contenido |
|:---|:---|
| `ejemplos/` | Página con estructura semántica, listas y tablas |
| `ejercicios/` | Crear una página con estructura completa |

---

[⬅️ Anterior](../01-introduccion-html/README.md) | [Inicio](../README.md) | [Siguiente ➡️](../03-enlaces-e-imagenes/README.md)
