# Ejercicios · 02 Estructura y Texto

## Ejercicio 1: Página de Receta de Cocina

Crea un archivo `receta.html` con la siguiente estructura:

1. Usa etiquetas semánticas (`<header>`, `<main>`, `<footer>`)
2. En el `<header>`: título de la receta en `<h1>` y una breve descripción en `<p>`
3. En el `<main>`:
   - Una **lista ordenada** `<ol>` con los pasos de preparación
   - Una **lista desordenada** `<ul>` con los ingredientes
   - Usa `<strong>` para resaltar ingredientes importantes
   - Usa `<em>` para tiempos de cocción
4. En el `<footer>`: tu nombre y la fecha

### Pista
```html
<main>
    <section>
        <h2>Ingredientes</h2>
        <ul>
            <li><strong>2 tazas</strong> de harina</li>
            <!-- más ingredientes -->
        </ul>
    </section>
</main>
```

---

## Ejercicio 2: Tabla de Horario de Clases

Crea un archivo `horario.html` que contenga:

1. Una tabla con tu horario de clases semanal
2. La tabla debe tener:
   - `<thead>` con los días de la semana
   - `<tbody>` con las materias por hora
   - Al menos **5 filas** (horas) y **5 columnas** (lunes a viernes)
3. Agrega un `<caption>` con "Horario del Semestre Actual"

### Pista
```html
<table border="1" cellpadding="8">
    <caption>Horario del Semestre Actual</caption>
    <thead>
        <tr>
            <th>Hora</th>
            <th>Lunes</th>
            <th>Martes</th>
            <!-- ... -->
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>7:00 - 8:30</td>
            <td>Programación I</td>
            <!-- ... -->
        </tr>
    </tbody>
</table>
```

---

## Ejercicio 3: Blog Personal

Crea un archivo `blog.html` con estructura semántica completa:

1. `<header>` con título del blog y `<nav>` con enlaces internos
2. Al menos **2 artículos** usando `<article>`, cada uno con `<h2>`, párrafos y una lista
3. Un `<aside>` con datos curiosos o enlaces de interés
4. Un `<footer>` con información de copyright
5. Usa `<blockquote>` para incluir al menos una cita
6. Usa `<mark>` para resaltar algo importante

---

## ✅ Criterios de evaluación

- [ ] Se usan etiquetas semánticas correctamente
- [ ] Las listas están bien formadas (`<ul>/<ol>` con `<li>`)
- [ ] Las tablas tienen `<thead>` y `<tbody>`
- [ ] Se usan etiquetas de formato de texto apropiadas
- [ ] La página se ve organizada y legible en el navegador
