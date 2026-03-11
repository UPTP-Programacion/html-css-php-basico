# Ejercicios · 03 Enlaces e Imágenes

## Ejercicio 1: Sitio Multi-Página

Crea **3 archivos HTML** que se enlacen entre sí:

1. `index.html` — Página principal con título y enlaces a las otras dos páginas
2. `galeria.html` — Página con al menos 4 imágenes (puedes usar placeholder)
3. `contacto.html` — Página con tu información de contacto (usa `mailto:` y `tel:`)

Cada página debe tener un menú de navegación `<nav>` con enlaces a las otras dos páginas.

### Estructura de archivos
```
ejercicio1/
├── index.html
├── galeria.html
└── contacto.html
```

---

## Ejercicio 2: Galería con Enlaces

Crea un archivo `galeria-enlaces.html` que contenga:

1. Un título `<h1>`: "Tecnologías Web"
2. Una tabla con **3 columnas**: Imagen, Nombre, Enlace
3. Cada fila tiene:
   - Una imagen representativa (usa placeholders o busca logos)
   - El nombre de la tecnología
   - Un enlace externo a su documentación (`target="_blank"`)
4. Incluye al menos: HTML, CSS, PHP, JavaScript

### Pista
```html
<tr>
    <td><img src="https://via.placeholder.com/60" alt="Logo HTML"></td>
    <td>HTML5</td>
    <td><a href="https://developer.mozilla.org/es/docs/Web/HTML" target="_blank">Documentación ↗</a></td>
</tr>
```

---

## Ejercicio 3: Página con Anclas

Crea un archivo `anclas.html` de tipo "artículo largo" que contenga:

1. Un índice al inicio con enlaces tipo ancla (`#seccion`)
2. Al menos **4 secciones** con contenido (cada una con su `id`)
3. Al final de cada sección, un enlace "⬆️ Volver al inicio" que lleve al índice
4. Incluye imágenes en al menos 2 secciones

---

## ✅ Criterios de evaluación

- [ ] Los enlaces funcionan correctamente (internos y externos)
- [ ] Las imágenes tienen atributo `alt` descriptivo
- [ ] Los enlaces externos usan `target="_blank"`
- [ ] Las rutas relativas son correctas entre archivos
- [ ] Las anclas llevan a la sección correcta
