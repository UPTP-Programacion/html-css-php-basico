# Ejercicios · 04 Formularios HTML

## Ejercicio 1: Formulario de Contacto

Crea un archivo `contacto.html` con un formulario que incluya:

1. Campos: nombre, email, teléfono, asunto (select con opciones), mensaje (textarea)
2. Todos los campos deben tener `<label>` correctamente asociado
3. Nombre y email son `required`
4. El método debe ser `POST` y el action `"procesar-contacto.php"`
5. Incluye botón de enviar y botón de limpiar

---

## Ejercicio 2: Formulario de Encuesta

Crea un archivo `encuesta.html` con una encuesta de satisfacción:

1. **Fieldset 1 - Datos:** Nombre (text), Edad (number con min/max)
2. **Fieldset 2 - Opinión:** 
   - ¿Cómo calificarías el curso? (radio: Excelente, Bueno, Regular, Malo)
   - ¿Qué temas te gustaron más? (checkbox: HTML, CSS, PHP, Todos)
   - Comentarios (textarea)
3. **Fieldset 3 - Preferencias:**
   - Horario preferido (select)
   - Color de tema preferido (input color)
4. El formulario debe usar `method="POST"` y `action="guardar-encuesta.php"`

---

## Ejercicio 3: Formulario de Login y Registro

Crea **2 archivos**:

### `login.html`
- Campos: usuario (text), contraseña (password)
- Botón "Iniciar Sesión"
- Enlace: "¿No tienes cuenta? Regístrate" (enlaza a registro.html)

### `registro.html`
- Campos: nombre, email, contraseña, confirmar contraseña, fecha de nacimiento
- Aceptar términos (checkbox required)
- Botón "Crear Cuenta"
- Enlace: "¿Ya tienes cuenta? Inicia sesión" (enlaza a login.html)

---

## ✅ Criterios de evaluación

- [ ] Todos los campos tienen `name` (necesario para el servidor)
- [ ] Los `<label>` están asociados con `for` e `id`
- [ ] Se usan los `type` correctos (email, password, number, date)
- [ ] Los campos obligatorios tienen `required`
- [ ] Los radio buttons comparten el mismo `name`
- [ ] El formulario tiene `action` y `method` definidos
