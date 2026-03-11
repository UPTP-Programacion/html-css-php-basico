# 06 · Selectores y Box Model

## 📖 Selectores CSS

Los selectores determinan **a qué elementos** se aplican los estilos.

### Selectores básicos

```css
/* Selector de etiqueta */
p { color: blue; }

/* Selector de clase (.) - reutilizable */
.destacado { background: yellow; }

/* Selector de ID (#) - único */
#titulo-principal { font-size: 2rem; }

/* Selector universal (*) */
* { margin: 0; padding: 0; }
```

### Aplicación en HTML

```html
<h1 id="titulo-principal">Título único</h1>
<p class="destacado">Párrafo con clase</p>
<p class="destacado">Otro párrafo con la misma clase</p>
<p>Párrafo sin clase</p>
```

### Selectores combinados

```css
/* Descendiente (dentro de) */
nav a { color: white; }

/* Hijo directo (>) */
ul > li { list-style: square; }

/* Múltiples selectores (,) */
h1, h2, h3 { font-family: Georgia; }

/* Clase + etiqueta */
p.destacado { font-weight: bold; }
```

### Pseudo-clases (estados)

```css
/* Al pasar el mouse */
a:hover { color: red; }

/* Al hacer clic */
button:active { background: darkblue; }

/* Cuando un input tiene foco */
input:focus { border-color: blue; outline: none; }

/* Primer y último hijo */
li:first-child { font-weight: bold; }
li:last-child { color: gray; }

/* Hijo par/impar */
tr:nth-child(even) { background: #f2f2f2; }
tr:nth-child(odd) { background: white; }
```

## ⚖️ Especificidad

Cuando hay conflicto entre estilos, CSS usa la **especificidad** para decidir cuál aplicar:

| Nivel | Selector | Peso |
|:---|:---|:---|
| 1 (más bajo) | Etiqueta (`p`, `h1`) | 0-0-1 |
| 2 | Clase (`.clase`) | 0-1-0 |
| 3 | ID (`#id`) | 1-0-0 |
| 4 (más alto) | Inline (`style=""`) | 1-0-0-0 |

```css
p { color: blue; }              /* 0-0-1 */
.texto { color: green; }        /* 0-1-0  → GANA sobre etiqueta */
#parrafo { color: red; }        /* 1-0-0  → GANA sobre clase */
```

> 💡 **Regla general**: Evita usar `!important` y prefiere clases sobre IDs para mayor flexibilidad.

## 📦 El Box Model (Modelo de Caja)

Todo elemento HTML es una **caja rectangular** compuesta por 4 capas:

```
┌──────────────────────────────────────┐
│              MARGIN                  │ ← Espacio exterior (transparente)
│  ┌────────────────────────────────┐  │
│  │           BORDER               │  │ ← Borde visible
│  │  ┌──────────────────────────┐  │  │
│  │  │        PADDING           │  │  │ ← Espacio interior
│  │  │  ┌──────────────────┐   │  │  │
│  │  │  │    CONTENT       │   │  │  │ ← El contenido (texto, imagen)
│  │  │  └──────────────────┘   │  │  │
│  │  └──────────────────────────┘  │  │
│  └────────────────────────────────┘  │
└──────────────────────────────────────┘
```

### Propiedades del Box Model

```css
.caja {
    /* CONTENIDO */
    width: 300px;
    height: 200px;

    /* PADDING (espacio interior) */
    padding: 20px;              /* Todos los lados */
    padding: 10px 20px;         /* Arriba/abajo  Izq/der */
    padding: 10px 20px 15px 5px; /* Arriba Der Abajo Izq */

    /* BORDER */
    border: 2px solid #333;

    /* MARGIN (espacio exterior) */
    margin: 20px;               /* Todos los lados */
    margin: 0 auto;             /* Centrar horizontalmente */
}
```

### box-sizing: border-box

Por defecto, `width` solo define el **contenido**. Con `border-box`, incluye padding y border:

```css
/* RECOMENDADO: aplicar a todos los elementos */
* {
    box-sizing: border-box;
}
```

Ejemplo comparativo:
```css
/* SIN border-box: ancho total = 300 + 40 + 4 = 344px */
.caja-sin {
    width: 300px;
    padding: 20px;
    border: 2px solid black;
}

/* CON border-box: ancho total = 300px (todo incluido) */
.caja-con {
    box-sizing: border-box;
    width: 300px;
    padding: 20px;
    border: 2px solid black;
}
```

### Display

La propiedad `display` controla cómo se comporta un elemento:

```css
display: block;        /* Ocupa todo el ancho (div, p, h1) */
display: inline;       /* Solo ocupa lo necesario (span, a, strong) */
display: inline-block; /* En línea pero acepta width/height */
display: none;         /* Oculta el elemento completamente */
```

---

## 📁 Archivos de este tema

| Carpeta | Contenido |
|:---|:---|
| `ejemplos/` | Demostración visual del Box Model y selectores |
| `ejercicios/` | Práctica con selectores y espaciado |

---

[⬅️ Anterior](../05-introduccion-css/README.md) | [Inicio](../README.md) | [Siguiente ➡️](../07-layout-y-flexbox/README.md)
