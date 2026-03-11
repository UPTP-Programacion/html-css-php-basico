# Ejercicios · 11 Formularios con PHP

## Ejercicio 1: Formulario de Contacto con Validación

Crea `contacto.php` (formulario y procesamiento en el mismo archivo):

1. Campos: nombre, email, asunto (select), mensaje (textarea)
2. Valida que nombre, email y mensaje no estén vacíos
3. Valida que el email tenga formato correcto con `filter_var()`
4. Si hay errores, muéstralos y mantén los valores en los campos
5. Si todo es correcto, muestra un mensaje de éxito con los datos recibidos
6. Usa `htmlspecialchars()` en toda salida

---

## Ejercicio 2: Calculadora Web

Crea `calculadora.php` con:

1. Un formulario con: número 1 (input number), operación (select: +, -, ×, ÷), número 2 (input number)
2. Al enviar, PHP procesa la operación y muestra el resultado
3. Valida que ambos números estén presentes
4. Maneja el caso de **división entre cero**
5. Mantén los valores seleccionados después de enviar
6. Usa `method="POST"`

---

## Ejercicio 3: Sistema de Login Simulado

Crea 2 archivos:

### `login.php`
1. Formulario con usuario y contraseña
2. Valida contra datos "hardcodeados" en PHP:
   ```php
   $usuarios = [
       ["usuario" => "admin", "clave" => "1234"],
       ["usuario" => "estudiante", "clave" => "uptp2025"]
   ];
   ```
3. Si coincide: muestra "Bienvenido, [usuario]"
4. Si no coincide: muestra error y mantiene el nombre de usuario
5. Usa `POST` para la contraseña

### Extra (opcional)
Agrega un contador de intentos fallidos usando una variable `hidden` en el formulario.

---

## Ejercicio 4: Encuesta con Resultados

Crea `encuesta.php` con:

1. Un formulario de encuesta con radio buttons, checkboxes y un textarea
2. Al enviar, muestra un **resumen** de todas las respuestas
3. Genera una "puntuación" basada en las respuestas (usa condicionales)
4. Muestra las respuestas en una tabla estilizada

---

## ✅ Criterios de evaluación

- [ ] Se usa `$_POST` o `$_GET` correctamente
- [ ] Se verifica `$_SERVER["REQUEST_METHOD"]` antes de procesar
- [ ] Se valida que los campos obligatorios no estén vacíos
- [ ] Se usa `htmlspecialchars()` al mostrar datos del usuario
- [ ] Los valores se mantienen en el formulario después de un error
- [ ] Se usa `filter_var()` para validar emails
