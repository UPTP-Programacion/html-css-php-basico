# Ejercicios · 06 Selectores y Box Model

## Ejercicio 1: Tarjetas con Box Model

Crea una página `tarjetas.html` con 3 tarjetas de perfil que demuestren el box model:

1. Cada tarjeta debe tener: padding interno, borde visible, margen entre tarjetas
2. Usa clases para estilizar (no IDs ni inline)
3. Cada tarjeta contiene: nombre (h2), descripción (p), y un botón estilizado
4. El botón debe cambiar de color al pasar el mouse (`:hover`)
5. Usa `box-sizing: border-box` en todos los elementos

---

## Ejercicio 2: Tabla Zebra con Selectores

Crea una página `tabla-zebra.html` con:

1. Una tabla con al menos 8 filas de datos
2. Usa `:nth-child(even)` y `:nth-child(odd)` para alternar colores de fila
3. El encabezado (`<thead>`) debe tener un color de fondo diferente
4. Al pasar el mouse sobre una fila, debe resaltarse (`:hover`)
5. La primera columna debe estar en **negrita** usando selectores CSS (no `<strong>`)

---

## Ejercicio 3: Especificidad en Acción

Crea una página `especificidad.html` que demuestre la cascada:

1. Crea un párrafo con un `id`, una `class` y un estilo `inline`
2. En el CSS, escribe reglas conflictivas para ese párrafo:
   - Selector de etiqueta: `color: blue`
   - Selector de clase: `color: green`
   - Selector de ID: `color: red`
3. Agrega un comentario en el CSS explicando por qué gana el estilo que gana
4. Repite con otro elemento pero usando `!important` para ver su efecto

---

## ✅ Criterios de evaluación

- [ ] Se usa `box-sizing: border-box`
- [ ] Se distingue padding, border y margin correctamente
- [ ] Los selectores de clase se usan más que los IDs
- [ ] Las pseudo-clases (:hover, :nth-child) funcionan
- [ ] Se entiende y demuestra la especificidad
