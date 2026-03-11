# 03 · Enlaces e Imágenes

## 📖 Enlaces (Hipervínculos)

La etiqueta `<a>` (anchor) permite crear enlaces a otras páginas, archivos o secciones.

### Sintaxis básica

```html
<a href="destino">Texto del enlace</a>
```

### Tipos de enlaces

#### Enlace externo (otra página web)
```html
<a href="https://www.google.com">Ir a Google</a>

<!-- Abrir en nueva pestaña -->
<a href="https://www.google.com" target="_blank">Ir a Google ↗</a>
```

#### Enlace interno (otra página del proyecto)
```html
<a href="contacto.html">Ir a Contacto</a>
<a href="paginas/about.html">Acerca de</a>
```

#### Enlace a sección (ancla)
```html
<!-- Crear el ancla -->
<h2 id="servicios">Nuestros Servicios</h2>

<!-- Enlazar al ancla -->
<a href="#servicios">Ver servicios</a>
```

#### Enlace de correo y teléfono
```html
<a href="mailto:info@uptp.edu.ve">Enviar correo</a>
<a href="tel:+580000000000">Llamar</a>
```

### Atributos importantes de `<a>`

| Atributo | Función | Ejemplo |
|:---|:---|:---|
| `href` | URL de destino | `href="pagina.html"` |
| `target` | Dónde abrir el enlace | `target="_blank"` (nueva pestaña) |
| `title` | Tooltip al pasar el mouse | `title="Visitar Google"` |

## 🖼️ Imágenes

La etiqueta `<img>` inserta imágenes. Es **autocerrada** (no tiene cierre).

### Sintaxis básica

```html
<img src="ruta/imagen.jpg" alt="Descripción de la imagen">
```

### Atributos de `<img>`

| Atributo | Función | Ejemplo |
|:---|:---|:---|
| `src` | Ruta de la imagen (obligatorio) | `src="foto.jpg"` |
| `alt` | Texto alternativo (obligatorio) | `alt="Logo de la empresa"` |
| `width` | Ancho en píxeles | `width="300"` |
| `height` | Alto en píxeles | `height="200"` |
| `title` | Tooltip al pasar el mouse | `title="Mi foto"` |

### Rutas de imágenes

```html
<!-- Misma carpeta -->
<img src="foto.jpg" alt="Foto">

<!-- Subcarpeta -->
<img src="imagenes/foto.jpg" alt="Foto">

<!-- Carpeta anterior -->
<img src="../foto.jpg" alt="Foto">

<!-- URL externa -->
<img src="https://ejemplo.com/imagen.png" alt="Imagen externa">
```

### Imagen como enlace

```html
<a href="https://www.uptp.edu.ve">
    <img src="logo-uptp.png" alt="Logo UPTP" width="150">
</a>
```

## 🎨 Formatos de imagen recomendados

| Formato | Uso ideal |
|:---|:---|
| `.jpg` / `.jpeg` | Fotografías, imágenes con muchos colores |
| `.png` | Logos, imágenes con transparencia |
| `.gif` | Animaciones simples |
| `.svg` | Íconos y gráficos vectoriales |
| `.webp` | Formato moderno, menor peso |

## 🔗 Rutas Relativas vs Absolutas

```
proyecto/
├── index.html
├── imagenes/
│   └── logo.png
└── paginas/
    └── contacto.html
```

Desde `index.html`:
```html
<img src="imagenes/logo.png" alt="Logo">           <!-- Relativa -->
<a href="paginas/contacto.html">Contacto</a>        <!-- Relativa -->
```

Desde `paginas/contacto.html`:
```html
<img src="../imagenes/logo.png" alt="Logo">          <!-- Subir un nivel -->
<a href="../index.html">Volver al inicio</a>         <!-- Subir un nivel -->
```

---

## 📁 Archivos de este tema

| Carpeta | Contenido |
|:---|:---|
| `ejemplos/` | Página con enlaces e imágenes funcionales |
| `ejercicios/` | Crear una galería y una página con navegación |

---

[⬅️ Anterior](../02-estructura-y-texto/README.md) | [Inicio](../README.md) | [Siguiente ➡️](../04-formularios-html/README.md)
