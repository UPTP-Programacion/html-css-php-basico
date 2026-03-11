<?php
    // =============================================
    //  PROCESAMIENTO DEL FORMULARIO
    // =============================================
    $errores = [];
    $exito = false;
    $datos = [
        "nombre" => "",
        "email" => "",
        "carrera" => "",
        "semestre" => "",
        "turno" => "",
        "lenguajes" => [],
        "comentario" => ""
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Limpiar y validar NOMBRE
        $datos["nombre"] = htmlspecialchars(trim($_POST["nombre"] ?? ""));
        if (empty($datos["nombre"])) {
            $errores[] = "El nombre es obligatorio.";
        }

        // Limpiar y validar EMAIL
        $datos["email"] = filter_var(trim($_POST["email"] ?? ""), FILTER_SANITIZE_EMAIL);
        if (empty($datos["email"])) {
            $errores[] = "El email es obligatorio.";
        } elseif (!filter_var($datos["email"], FILTER_VALIDATE_EMAIL)) {
            $errores[] = "El formato del email no es válido.";
        }

        // Validar CARRERA
        $datos["carrera"] = htmlspecialchars($_POST["carrera"] ?? "");
        if (empty($datos["carrera"])) {
            $errores[] = "Debes seleccionar una carrera.";
        }

        // Validar SEMESTRE
        $datos["semestre"] = intval($_POST["semestre"] ?? 0);
        if ($datos["semestre"] < 1 || $datos["semestre"] > 12) {
            $errores[] = "El semestre debe estar entre 1 y 12.";
        }

        // Validar TURNO
        $datos["turno"] = htmlspecialchars($_POST["turno"] ?? "");
        if (empty($datos["turno"])) {
            $errores[] = "Debes seleccionar un turno.";
        }

        // LENGUAJES (opcional)
        $datos["lenguajes"] = $_POST["lenguajes"] ?? [];

        // COMENTARIO (opcional)
        $datos["comentario"] = htmlspecialchars(trim($_POST["comentario"] ?? ""));

        // Si no hay errores
        if (empty($errores)) {
            $exito = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Validación PHP</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', sans-serif; background: #f0f2f5; padding: 30px 20px; }
        
        .container { max-width: 650px; margin: 0 auto; }
        h1 { color: #4f5b93; text-align: center; margin-bottom: 25px; }

        form { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        
        fieldset { border: 1px solid #ddd; border-radius: 6px; padding: 20px; margin-bottom: 20px; }
        legend { color: #777bb4; font-weight: bold; padding: 0 10px; }

        label { display: block; margin-top: 12px; font-weight: 600; color: #555; }
        input[type="text"], input[type="email"], input[type="number"], select, textarea {
            width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc;
            border-radius: 6px; font-size: 1rem;
        }
        input:focus, select:focus, textarea:focus { border-color: #777bb4; outline: none; }

        .radio-group, .checkbox-group { margin-top: 8px; }
        .radio-group label, .checkbox-group label { display: inline; font-weight: normal; margin-right: 15px; }

        button { background: #777bb4; color: white; border: none; padding: 12px 30px;
            font-size: 1rem; border-radius: 6px; cursor: pointer; margin-top: 20px; width: 100%; }
        button:hover { background: #4f5b93; }

        .error { background: #f8d7da; color: #721c24; padding: 15px; border-radius: 6px;
            margin-bottom: 20px; border-left: 4px solid #dc3545; }
        .error li { margin-left: 20px; }

        .exito { background: #d4edda; color: #155724; padding: 20px; border-radius: 10px;
            margin-bottom: 20px; border-left: 4px solid #28a745; }
        .exito h2 { margin-bottom: 10px; }
        .exito table { width: 100%; margin-top: 10px; }
        .exito td { padding: 6px 10px; border-bottom: 1px solid #c3e6cb; }
        .exito td:first-child { font-weight: bold; width: 40%; }
    </style>
</head>
<body>

<div class="container">
    <h1>🐘 Registro con Validación PHP</h1>

    <!-- MOSTRAR ERRORES -->
    <?php if (!empty($errores)): ?>
        <div class="error">
            <strong>⚠️ Se encontraron errores:</strong>
            <ul>
                <?php foreach ($errores as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- MOSTRAR ÉXITO -->
    <?php if ($exito): ?>
        <div class="exito">
            <h2>✅ ¡Registro exitoso!</h2>
            <p>Datos recibidos correctamente:</p>
            <table>
                <tr><td>Nombre:</td><td><?php echo $datos["nombre"]; ?></td></tr>
                <tr><td>Email:</td><td><?php echo $datos["email"]; ?></td></tr>
                <tr><td>Carrera:</td><td><?php echo $datos["carrera"]; ?></td></tr>
                <tr><td>Semestre:</td><td><?php echo $datos["semestre"]; ?></td></tr>
                <tr><td>Turno:</td><td><?php echo $datos["turno"]; ?></td></tr>
                <tr><td>Lenguajes:</td><td><?php echo !empty($datos["lenguajes"]) ? implode(", ", $datos["lenguajes"]) : "Ninguno"; ?></td></tr>
                <tr><td>Comentario:</td><td><?php echo !empty($datos["comentario"]) ? nl2br($datos["comentario"]) : "—"; ?></td></tr>
            </table>
        </div>
    <?php endif; ?>

    <!-- FORMULARIO -->
    <form method="POST">
        <fieldset>
            <legend>Datos Personales</legend>

            <label for="nombre">Nombre completo: *</label>
            <input type="text" id="nombre" name="nombre" 
                   value="<?php echo $datos['nombre']; ?>" placeholder="Ej: María García">

            <label for="email">Correo electrónico: *</label>
            <input type="email" id="email" name="email" 
                   value="<?php echo $datos['email']; ?>" placeholder="correo@ejemplo.com">
        </fieldset>

        <fieldset>
            <legend>Datos Académicos</legend>

            <label for="carrera">Carrera: *</label>
            <select id="carrera" name="carrera">
                <option value="">-- Selecciona --</option>
                <option value="Informática" <?php echo ($datos['carrera'] == 'Informática') ? 'selected' : ''; ?>>Informática</option>
                <option value="Sistemas" <?php echo ($datos['carrera'] == 'Sistemas') ? 'selected' : ''; ?>>Sistemas</option>
                <option value="Electrónica" <?php echo ($datos['carrera'] == 'Electrónica') ? 'selected' : ''; ?>>Electrónica</option>
                <option value="Mecánica" <?php echo ($datos['carrera'] == 'Mecánica') ? 'selected' : ''; ?>>Mecánica</option>
            </select>

            <label for="semestre">Semestre (1-12): *</label>
            <input type="number" id="semestre" name="semestre" min="1" max="12" 
                   value="<?php echo $datos['semestre'] ?: ''; ?>">

            <label>Turno: *</label>
            <div class="radio-group">
                <input type="radio" name="turno" value="Mañana" <?php echo ($datos['turno'] == 'Mañana') ? 'checked' : ''; ?>>
                <label>Mañana</label>
                <input type="radio" name="turno" value="Tarde" <?php echo ($datos['turno'] == 'Tarde') ? 'checked' : ''; ?>>
                <label>Tarde</label>
                <input type="radio" name="turno" value="Noche" <?php echo ($datos['turno'] == 'Noche') ? 'checked' : ''; ?>>
                <label>Noche</label>
            </div>

            <label>Lenguajes que conoces:</label>
            <div class="checkbox-group">
                <?php
                    $opciones = ["HTML", "CSS", "JavaScript", "PHP", "Java", "Python"];
                    foreach ($opciones as $op):
                ?>
                    <input type="checkbox" name="lenguajes[]" value="<?php echo $op; ?>" 
                           <?php echo in_array($op, $datos['lenguajes']) ? 'checked' : ''; ?>>
                    <label><?php echo $op; ?></label>
                <?php endforeach; ?>
            </div>
        </fieldset>

        <fieldset>
            <legend>Adicional</legend>
            <label for="comentario">Comentarios:</label>
            <textarea id="comentario" name="comentario" rows="3" placeholder="Opcional..."><?php echo $datos['comentario']; ?></textarea>
        </fieldset>

        <button type="submit">📩 Enviar Registro</button>
    </form>
</div>

</body>
</html>
