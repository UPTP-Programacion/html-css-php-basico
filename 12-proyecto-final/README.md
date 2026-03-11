# 12 · Proyecto Final Integrador

## 🏁 Objetivo

Aplicar **todo lo aprendido** en un solo proyecto que integre HTML, CSS y PHP.

## 📋 Descripción del Proyecto

### Sitio Web de Gestión de Estudiantes

Crea un mini sitio web funcional con las siguientes páginas:

```
proyecto-final/
├── index.php              ← Página principal
├── registro.php           ← Formulario de registro
├── listado.php            ← Ver estudiantes registrados
├── assets/
│   └── estilos.css        ← Estilos del sitio
└── includes/
    ├── header.php         ← Encabezado reutilizable
    └── footer.php         ← Pie de página reutilizable
```

## 📄 Páginas Requeridas

### 1. `index.php` — Página Principal
- Hero/banner de bienvenida
- Descripción del sistema
- Navegación a las demás páginas
- Diseño responsive

### 2. `registro.php` — Formulario de Registro
- Campos: nombre, cédula, email, carrera (select), semestre (number), turno (radio), lenguajes que conoce (checkbox), comentarios (textarea)
- **Validación PHP** de todos los campos obligatorios
- Sanitización con `htmlspecialchars()` y `filter_var()`
- Mensajes de error y éxito
- Los valores se mantienen al haber errores

### 3. `listado.php` — Ver Estudiantes
- Muestra en una tabla HTML todos los estudiantes registrados
- Los datos se almacenan en un **array** de PHP (no necesita base de datos)
- Tabla estilizada con filas zebra (`:nth-child`)
- Muestra el total de registrados

### 4. `header.php` y `footer.php` — Componentes Reutilizables

Usa `include` para reutilizar el encabezado y pie de página:

```php
<!-- En cada página -->
<?php include 'includes/header.php'; ?>

<!-- Contenido de la página -->

<?php include 'includes/footer.php'; ?>
```

### 5. `estilos.css` — Hoja de Estilos
- Diseño **mobile first** con media queries
- Navbar responsive
- Flexbox para el layout
- Formulario estilizado
- Tabla con estilos zebra y hover
- Variables CSS para colores consistentes

## ✅ Criterios de Evaluación

### HTML (25%)
- [ ] Estructura semántica correcta (header, main, footer, nav, section)
- [ ] Formularios con labels, names y tipos correctos
- [ ] Tabla con thead y tbody
- [ ] Meta viewport presente

### CSS (25%)
- [ ] Archivo CSS externo
- [ ] Diseño responsive con al menos 2 breakpoints
- [ ] Uso de Flexbox para layout
- [ ] Selectores y box model aplicados correctamente
- [ ] Estilos visuales atractivos y consistentes

### PHP (40%)
- [ ] Variables y arrays utilizados correctamente
- [ ] Formulario procesado con `$_POST`
- [ ] Validación de campos obligatorios
- [ ] Sanitización de datos con `htmlspecialchars()`
- [ ] Uso de condicionales y bucles
- [ ] Funciones propias utilizadas
- [ ] Include/require para componentes reutilizables

### General (10%)
- [ ] Código limpio y comentado
- [ ] Organización de archivos coherente
- [ ] Sin errores de sintaxis
- [ ] Funciona correctamente en el navegador

## 💡 Consejos

1. **Empieza por el HTML** de cada página sin estilos
2. Luego agrega el **CSS** para darle forma
3. Después conecta el **PHP** para la lógica
4. Prueba cada funcionalidad por separado
5. Al final, integra todo y prueba el flujo completo

## 🎯 Entregables

- Carpeta del proyecto comprimida (.zip)
- Todas las páginas funcionando desde `http://localhost/`
- Código comentado

---

## 🌟 Puntos Extra (Opcionales)

- Agregar un **buscador** de estudiantes por nombre
- Estilos con **animaciones CSS** (transiciones, hover effects)
- Modo **oscuro/claro** con CSS
- Página de **estadísticas** (total por carrera, promedio de semestres)

---

<div align="center">

**¡Felicidades por completar el curso! 🎉**

Has aprendido los fundamentos de HTML, CSS y PHP. Estos conocimientos son la base para seguir avanzando en el desarrollo web.

</div>

---

[⬅️ Anterior](../11-formularios-con-php/README.md) | [Inicio](../README.md)
