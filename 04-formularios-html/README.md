# 04 · Formularios HTML

## 📖 ¿Qué es un Formulario?

Los formularios permiten al usuario **enviar datos** al servidor. Son la base de la interacción en la web: login, registro, búsqueda, contacto, etc.

```html
<form action="procesar.php" method="POST">
    <!-- Campos del formulario aquí -->
    <button type="submit">Enviar</button>
</form>
```

### Atributos de `<form>`

| Atributo | Función | Valores comunes |
|:---|:---|:---|
| `action` | URL donde se envían los datos | `"procesar.php"`, `"login.php"` |
| `method` | Método HTTP | `"GET"` (URL) o `"POST"` (oculto) |

### Diferencia entre GET y POST

| GET | POST |
|:---|:---|
| Los datos van en la URL | Los datos van ocultos |
| Se ve en la barra de dirección | No se ve en la URL |
| Ideal para búsquedas | Ideal para datos sensibles |
| Límite de caracteres | Sin límite práctico |

## 📝 Campos de Entrada (input)

### Texto y contraseña

```html
<label for="nombre">Nombre:</label>
<input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre" required>

<label for="pass">Contraseña:</label>
<input type="password" id="pass" name="password" required>
```

### Tipos de input

```html
<input type="text">          <!-- Texto libre -->
<input type="password">      <!-- Contraseña (oculta) -->
<input type="email">         <!-- Email (valida formato) -->
<input type="number">        <!-- Solo números -->
<input type="tel">           <!-- Teléfono -->
<input type="date">          <!-- Selector de fecha -->
<input type="color">         <!-- Selector de color -->
<input type="range">         <!-- Deslizador -->
<input type="file">          <!-- Subir archivo -->
<input type="hidden">        <!-- Campo oculto -->
```

### Atributos comunes de input

| Atributo | Función |
|:---|:---|
| `name` | Nombre del campo (lo recibe el servidor) |
| `id` | Identificador único (para `<label>`) |
| `placeholder` | Texto de ayuda dentro del campo |
| `required` | Campo obligatorio |
| `value` | Valor predeterminado |
| `maxlength` | Máximo de caracteres |
| `min` / `max` | Valor mínimo y máximo (para números) |
| `disabled` | Campo deshabilitado |
| `readonly` | Solo lectura |

## 📋 Otros Elementos de Formulario

### Área de texto

```html
<label for="mensaje">Mensaje:</label>
<textarea id="mensaje" name="mensaje" rows="5" cols="40" placeholder="Escribe tu mensaje..."></textarea>
```

### Menú desplegable (select)

```html
<label for="carrera">Carrera:</label>
<select id="carrera" name="carrera">
    <option value="">-- Selecciona --</option>
    <option value="informatica">Informática</option>
    <option value="sistemas">Sistemas</option>
    <option value="electronica">Electrónica</option>
</select>
```

### Botones de radio (una opción)

```html
<p>Turno:</p>
<input type="radio" id="manana" name="turno" value="manana">
<label for="manana">Mañana</label>

<input type="radio" id="tarde" name="turno" value="tarde">
<label for="tarde">Tarde</label>

<input type="radio" id="noche" name="turno" value="noche">
<label for="noche">Noche</label>
```

### Casillas de verificación (múltiples opciones)

```html
<p>Lenguajes que conoces:</p>
<input type="checkbox" id="html" name="lenguajes[]" value="html">
<label for="html">HTML</label>

<input type="checkbox" id="css" name="lenguajes[]" value="css">
<label for="css">CSS</label>

<input type="checkbox" id="php" name="lenguajes[]" value="php">
<label for="php">PHP</label>
```

### Agrupar campos con fieldset

```html
<fieldset>
    <legend>Datos Personales</legend>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
</fieldset>
```

## ⚠️ Importancia del atributo `name`

El atributo `name` es **fundamental**: es la clave con la que el servidor recibe los datos. Sin `name`, el campo no se envía.

```html
<!-- ✅ El servidor recibirá: usuario=valor -->
<input type="text" name="usuario">

<!-- ❌ Este campo NO se envía al servidor -->
<input type="text" id="campo-sin-name">
```

## ✨ Buenas Prácticas

1. Siempre usa `<label>` asociado a cada campo con `for` e `id`
2. Usa `required` en campos obligatorios
3. Usa el `type` correcto (email, number, date...) para validación automática
4. Agrupa campos relacionados con `<fieldset>` y `<legend>`
5. Usa `placeholder` como guía, no como reemplazo de `<label>`

---

## 📁 Archivos de este tema

| Carpeta | Contenido |
|:---|:---|
| `ejemplos/` | Formulario de registro completo |
| `ejercicios/` | Crear formularios para distintos casos |

---

[⬅️ Anterior](../03-enlaces-e-imagenes/README.md) | [Inicio](../README.md) | [Siguiente ➡️](../05-introduccion-css/README.md)
