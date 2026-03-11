# Ejercicios · 07 Layout y Flexbox

## Ejercicio 1: Barra de Navegación

Crea una página `navbar.html` con:

1. Un `<nav>` con `display: flex`
2. A la izquierda: un logo (texto o imagen)
3. A la derecha: 4 enlaces de navegación en fila
4. Los enlaces deben cambiar de estilo al pasar el mouse
5. La navbar debe tener un color de fondo oscuro con texto claro

**Propiedad clave:** `justify-content: space-between`

---

## Ejercicio 2: Galería de Tarjetas

Crea una página `galeria.html` con:

1. Al menos **6 tarjetas** dentro de un contenedor flex
2. Las tarjetas deben saltar de línea si no caben (`flex-wrap: wrap`)
3. Cada tarjeta tiene un ancho mínimo de 250px (`flex: 1 1 250px`)
4. Espacio entre tarjetas con `gap`
5. Cada tarjeta contiene: imagen (placeholder), título y descripción
6. Efecto hover en las tarjetas (sombra o escala)

---

## Ejercicio 3: Layout Completo

Crea una página `layout.html` con la siguiente estructura usando SOLO Flexbox:

```
┌─────────────────────────────┐
│         NAVBAR              │
├─────────────────────────────┤
│         HERO / BANNER       │
├───────────┬─────────────────┤
│  SIDEBAR  │    CONTENIDO    │
│  (25%)    │    PRINCIPAL    │
│           │    (75%)        │
├───────────┴─────────────────┤
│         FOOTER              │
└─────────────────────────────┘
```

1. El body debe usar `flex-direction: column` y `min-height: 100vh`
2. La sección central (sidebar + contenido) usa `display: flex` en fila
3. El footer debe quedar siempre al fondo
4. Agrega contenido real en cada sección

---

## ✅ Criterios de evaluación

- [ ] Se usa `display: flex` correctamente
- [ ] Se entiende justify-content y align-items
- [ ] Se usa flex-wrap para contenido adaptable
- [ ] El footer queda al fondo con `flex: 1` en main
- [ ] Los layouts son funcionales y visualmente organizados
