<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducción a PHP - Ejemplo</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; max-width: 700px; margin: 40px auto; padding: 0 20px; background: #f9f9f9; color: #333; }
        h1 { color: #777bb4; }
        .caja { background: white; padding: 20px; border-radius: 8px; margin: 15px 0; border-left: 4px solid #777bb4; box-shadow: 0 1px 4px rgba(0,0,0,0.1); }
        .caja h3 { color: #777bb4; margin-bottom: 8px; }
        code { background: #f0f0f0; padding: 2px 6px; border-radius: 3px; font-size: 0.95em; }
    </style>
</head>
<body>

    <h1>🐘 Mi Primera Página PHP</h1>

    <!-- Ejemplo 1: echo básico -->
    <div class="caja">
        <h3>Echo básico</h3>
        <p><?php echo "¡Hola Mundo desde PHP!"; ?></p>
    </div>

    <!-- Ejemplo 2: Fecha y hora -->
    <div class="caja">
        <h3>Fecha y Hora del Servidor</h3>
        <?php
            // Configurar zona horaria de Venezuela
            date_default_timezone_set('America/Caracas');
        ?>
        <p>📅 Fecha: <strong><?php echo date("d/m/Y"); ?></strong></p>
        <p>🕐 Hora: <strong><?php echo date("H:i:s"); ?></strong></p>
        <p>📆 Día: <strong><?php echo date("l"); ?></strong></p>
    </div>

    <!-- Ejemplo 3: Variables -->
    <div class="caja">
        <h3>Variables</h3>
        <?php
            $nombre = "Estudiante UPTP";
            $edad = 20;
            $carrera = "Informática";
            $promedio = 8.5;
        ?>
        <p>👤 Nombre: <strong><?php echo $nombre; ?></strong></p>
        <p>🎂 Edad: <strong><?php echo $edad; ?> años</strong></p>
        <p>🎓 Carrera: <strong><?php echo $carrera; ?></strong></p>
        <p>📊 Promedio: <strong><?php echo $promedio; ?></strong></p>
    </div>

    <!-- Ejemplo 4: Concatenación -->
    <div class="caja">
        <h3>Concatenación</h3>
        <?php
            $universidad = "UPTP";
            $materia = "Programación";
            
            // Con punto (.)
            echo "<p>Estudio en " . $universidad . " la materia de " . $materia . ".</p>";
            
            // Con comillas dobles
            echo "<p>Soy estudiante de $universidad y me gusta $materia.</p>";
        ?>
    </div>

    <!-- Ejemplo 5: Tipo de datos -->
    <div class="caja">
        <h3>Tipos de Datos</h3>
        <?php
            $texto = "Hola";
            $numero = 42;
            $decimal = 3.14;
            $activo = true;
            
            echo "<p><code>\$texto</code> = \"$texto\" → Tipo: <strong>" . gettype($texto) . "</strong></p>";
            echo "<p><code>\$numero</code> = $numero → Tipo: <strong>" . gettype($numero) . "</strong></p>";
            echo "<p><code>\$decimal</code> = $decimal → Tipo: <strong>" . gettype($decimal) . "</strong></p>";
            echo "<p><code>\$activo</code> = true → Tipo: <strong>" . gettype($activo) . "</strong></p>";
        ?>
    </div>

    <!-- Ejemplo 6: Funciones de texto -->
    <div class="caja">
        <h3>Funciones Útiles</h3>
        <?php
            $frase = "aprendiendo php en la uptp";
            
            echo "<p>Original: <code>$frase</code></p>";
            echo "<p>Mayúsculas: <code>" . strtoupper($frase) . "</code></p>";
            echo "<p>Longitud: <code>" . strlen($frase) . " caracteres</code></p>";
            echo "<p>Número aleatorio (1-100): <code>" . rand(1, 100) . "</code></p>";
        ?>
    </div>

    <footer>
        <hr>
        <p><small>&copy; <?php echo date("Y"); ?> UPTP Programación</small></p>
    </footer>

</body>
</html>
