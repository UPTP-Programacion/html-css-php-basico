# 07 · Layout y Flexbox

## 📖 ¿Qué es Flexbox?

**Flexbox** (Flexible Box Layout) es un sistema de CSS para crear layouts flexibles y alinear elementos de forma eficiente. Es la forma moderna de organizar elementos en fila o columna.

## 🚀 Conceptos Clave

### Contenedor Flex (padre)

Se activa con `display: flex` en el elemento padre:

```css
.contenedor {
    display: flex;
}
```

```html
<div class="contenedor">
    <div class="item">1</div>
    <div class="item">2</div>
    <div class="item">3</div>
</div>
```

### Ejes

Flexbox trabaja con **2 ejes**:

```
flex-direction: row (por defecto)

Eje principal →  →  →  →  →  →
┌──────┐ ┌──────┐ ┌──────┐
│  1   │ │  2   │ │  3   │
└──────┘ └──────┘ └──────┘
                              Eje cruzado ↓

flex-direction: column

Eje principal ↓
┌──────┐
│  1   │
└──────┘
┌──────┐
│  2   │
└──────┘
┌──────┐
│  3   │
└──────┘
         Eje cruzado →
```

## 📐 Propiedades del Contenedor (padre)

### flex-direction

```css
flex-direction: row;            /* Horizontal → (por defecto) */
flex-direction: row-reverse;    /* Horizontal ← */
flex-direction: column;         /* Vertical ↓ */
flex-direction: column-reverse; /* Vertical ↑ */
```

### justify-content (eje principal)

```css
justify-content: flex-start;    /* Inicio (por defecto) */
justify-content: flex-end;      /* Final */
justify-content: center;        /* Centro */
justify-content: space-between; /* Espacio entre items */
justify-content: space-around;  /* Espacio alrededor */
justify-content: space-evenly;  /* Espacio uniforme */
```

### align-items (eje cruzado)

```css
align-items: stretch;     /* Estirar (por defecto) */
align-items: flex-start;  /* Arriba */
align-items: flex-end;    /* Abajo */
align-items: center;      /* Centro vertical */
align-items: baseline;    /* Línea base del texto */
```

### flex-wrap

```css
flex-wrap: nowrap;   /* Todo en una línea (por defecto) */
flex-wrap: wrap;     /* Saltar de línea si no cabe */
```

### gap (espacio entre items)

```css
gap: 20px;           /* Espacio uniforme */
gap: 10px 20px;      /* Fila  Columna */
```

## 📐 Propiedades de los Items (hijos)

### flex-grow (crecer)

```css
.item { flex-grow: 1; }   /* Todos crecen igual */
.item-grande { flex-grow: 2; } /* Este crece el doble */
```

### flex-shrink (encoger)

```css
.item { flex-shrink: 1; }     /* Se encoge si falta espacio */
.item { flex-shrink: 0; }     /* NO se encoge */
```

### flex-basis (tamaño base)

```css
.item { flex-basis: 200px; }  /* Tamaño inicial */
```

### Atajo: flex

```css
.item { flex: 1; }            /* flex-grow: 1, shrink: 1, basis: 0 */
.item { flex: 0 0 300px; }    /* No crece, no encoge, 300px fijo */
```

### align-self (alineación individual)

```css
.item-especial {
    align-self: center;  /* Solo este item se centra */
}
```

## 🎯 Patrones Comunes

### Centrar un elemento (horizontal y vertical)

```css
.contenedor {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
```

### Barra de navegación

```css
nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
}
```

### Grid de tarjetas

```css
.grid {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.tarjeta {
    flex: 1 1 300px; /* Mínimo 300px, crece si hay espacio */
}
```

### Footer al fondo

```css
body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

main { flex: 1; }  /* Main crece y empuja el footer abajo */
```

---

## 📁 Archivos de este tema

| Carpeta | Contenido |
|:---|:---|
| `ejemplos/` | Layout completo con navbar, contenido y footer usando Flexbox |
| `ejercicios/` | Crear layouts con Flexbox |

---

[⬅️ Anterior](../06-selectores-y-box-model/README.md) | [Inicio](../README.md) | [Siguiente ➡️](../08-css-responsive/README.md)
