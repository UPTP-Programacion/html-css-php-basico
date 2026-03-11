# 08 · CSS Responsive

## 📖 ¿Qué es Responsive Design?

Es la técnica de diseñar páginas que se adapten a **cualquier tamaño de pantalla**: celulares, tablets y escritorio.

### La meta viewport (obligatoria)

Esta etiqueta debe estar en **todos** tus archivos HTML:

```html
<meta name="viewport" content="width=device-width, initial-scale=1.0">
```

Sin ella, las páginas no se adaptan correctamente en móviles.

## 📱 Media Queries

Las **media queries** permiten aplicar estilos según el tamaño de la pantalla:

```css
/* Estilos base (mobile first) */
.contenedor {
    padding: 10px;
}

/* Tablets (768px o más) */
@media (min-width: 768px) {
    .contenedor {
        padding: 20px;
    }
}

/* Escritorio (1024px o más) */
@media (min-width: 1024px) {
    .contenedor {
        padding: 40px;
        max-width: 1200px;
        margin: 0 auto;
    }
}
```

### Breakpoints comunes

| Dispositivo | Breakpoint |
|:---|:---|
| Móvil (base) | 0 - 767px |
| Tablet | 768px - 1023px |
| Escritorio | 1024px+ |
| Escritorio grande | 1200px+ |

## 📐 Unidades Relativas

Para diseño responsive, evita `px` fijos y usa unidades relativas:

```css
/* ❌ Ancho fijo (no responsive) */
.caja { width: 600px; }

/* ✅ Porcentaje (se adapta al padre) */
.caja { width: 80%; }

/* ✅ max-width (límite máximo) */
.caja { width: 100%; max-width: 800px; }

/* ✅ Unidades de viewport */
.hero { height: 100vh; width: 100vw; }
```

## 🖼️ Imágenes Responsive

```css
/* Imagen que se adapta al contenedor */
img {
    max-width: 100%;
    height: auto;
}
```

## 📱 Mobile First

La estrategia **Mobile First** consiste en diseñar primero para móviles y luego agregar estilos para pantallas más grandes:

```css
/* 1. Estilos base = móvil */
.grid {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.tarjeta {
    width: 100%;
}

/* 2. Tablet: 2 columnas */
@media (min-width: 768px) {
    .grid {
        flex-direction: row;
        flex-wrap: wrap;
    }
    .tarjeta {
        flex: 1 1 45%;
    }
}

/* 3. Escritorio: 3 columnas */
@media (min-width: 1024px) {
    .tarjeta {
        flex: 1 1 30%;
    }
}
```

## 🔤 Tipografía Responsive

```css
/* Tamaño de fuente adaptable */
html {
    font-size: 14px;
}

@media (min-width: 768px) {
    html { font-size: 16px; }
}

@media (min-width: 1024px) {
    html { font-size: 18px; }
}

/* Usando clamp() (moderno) */
h1 {
    font-size: clamp(1.5rem, 4vw, 3rem);
}
```

## 🍔 Menú Hamburguesa (concepto)

En móviles, los menús de navegación suelen ocultarse tras un ícono "hamburguesa":

```css
/* Ocultar menú en móvil */
.nav-links {
    display: none;
}

/* Mostrar menú en escritorio */
@media (min-width: 768px) {
    .nav-links {
        display: flex;
    }
}
```

## 🧪 Cómo Probar

1. **Chrome DevTools**: F12 → ícono de dispositivo (📱) → seleccionar dispositivo
2. **Redimensionar el navegador**: Arrastra el borde de la ventana
3. **Dispositivos reales**: Prueba en tu celular accediendo desde la red local

---

## 📁 Archivos de este tema

| Carpeta | Contenido |
|:---|:---|
| `ejemplos/` | Página completamente responsive |
| `ejercicios/` | Adaptar layouts a diferentes pantallas |

---

[⬅️ Anterior](../07-layout-y-flexbox/README.md) | [Inicio](../README.md) | [Siguiente ➡️](../09-introduccion-php/README.md)
