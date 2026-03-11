# Ejercicios · 08 CSS Responsive

## Ejercicio 1: Tarjetas Adaptables

Crea `tarjetas-responsive.html` con:

1. **6 tarjetas** de servicios/productos
2. En **móvil**: 1 tarjeta por fila (columna)
3. En **tablet** (768px+): 2 tarjetas por fila
4. En **escritorio** (1024px+): 3 tarjetas por fila
5. Las imágenes deben ser responsive (`max-width: 100%`)
6. Usa la estrategia **Mobile First**

---

## Ejercicio 2: Página de Portafolio Responsive

Crea un mini-sitio de portafolio con:

1. **Navbar** que se muestre en fila en escritorio y apilada en móvil
2. **Hero** con texto que use `clamp()` para tamaño responsive
3. **Sección de proyectos** con grid adaptable
4. **Footer** que se vea bien en todos los tamaños
5. Prueba en Chrome DevTools con al menos 3 tamaños diferentes

---

## Ejercicio 3: Rediseña tu Formulario

Toma el formulario del tema 04 y hazlo responsive:

1. En **móvil**: campos al 100% del ancho, apilados verticalmente
2. En **tablet**: campos de nombre y email en la misma fila (50% cada uno)
3. En **escritorio**: contenedor centrado con max-width de 700px
4. El botón debe ser ancho completo en móvil y auto en escritorio

---

## ✅ Criterios de evaluación

- [ ] Se usa `<meta viewport>` en todos los archivos
- [ ] Se aplica estrategia Mobile First (estilos base = móvil)
- [ ] Se usan al menos 2 breakpoints con `@media`
- [ ] Las imágenes son responsive
- [ ] La página se ve bien en móvil, tablet y escritorio
