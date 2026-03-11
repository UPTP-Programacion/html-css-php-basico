<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables y Estructuras - Ejemplo PHP</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; max-width: 750px; margin: 40px auto; padding: 0 20px; background: #f5f5f5; }
        h1 { color: #777bb4; text-align: center; }
        .seccion { background: white; padding: 20px; border-radius: 8px; margin: 20px 0; box-shadow: 0 1px 4px rgba(0,0,0,0.1); }
        .seccion h2 { color: #4f5b93; border-bottom: 2px solid #777bb4; padding-bottom: 5px; }
        table { width: 100%; border-collapse: collapse; margin: 10px 0; }
        th { background: #777bb4; color: white; padding: 10px; text-align: left; }
        td { padding: 8px 10px; border-bottom: 1px solid #eee; }
        tr:nth-child(even) { background: #f9f9f9; }
        .aprobado { color: green; font-weight: bold; }
        .reprobado { color: red; font-weight: bold; }
    </style>
</head>
<body>

    <h1>🔄 Variables y Estructuras de Control</h1>

    <!-- CONDICIONALES -->
    <div class="seccion">
        <h2>🔀 Condicionales - Calificaciones</h2>
        <?php
            $estudiantes = [
                ["nombre" => "Ana", "nota" => 18],
                ["nombre" => "Carlos", "nota" => 14],
                ["nombre" => "María", "nota" => 9],
                ["nombre" => "Pedro", "nota" => 20],
                ["nombre" => "Laura", "nota" => 11],
            ];
        ?>
        <table>
            <thead>
                <tr>
                    <th>Estudiante</th>
                    <th>Nota</th>
                    <th>Estado</th>
                    <th>Calificación</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudiantes as $est): ?>
                <tr>
                    <td><?php echo $est["nombre"]; ?></td>
                    <td><?php echo $est["nota"]; ?>/20</td>
                    <td>
                        <?php if ($est["nota"] >= 10): ?>
                            <span class="aprobado">✅ Aprobado</span>
                        <?php else: ?>
                            <span class="reprobado">❌ Reprobado</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php
                            if ($est["nota"] >= 18) echo "Excelente";
                            elseif ($est["nota"] >= 15) echo "Bueno";
                            elseif ($est["nota"] >= 10) echo "Suficiente";
                            else echo "Insuficiente";
                        ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- BUCLE FOR -->
    <div class="seccion">
        <h2>🔢 Bucle for - Tabla de Multiplicar</h2>
        <?php $numero = 7; ?>
        <p>Tabla del <strong><?php echo $numero; ?></strong>:</p>
        <table>
            <?php for ($i = 1; $i <= 10; $i++): ?>
            <tr>
                <td><?php echo "$numero × $i"; ?></td>
                <td><strong><?php echo $numero * $i; ?></strong></td>
            </tr>
            <?php endfor; ?>
        </table>
    </div>

    <!-- ARRAYS -->
    <div class="seccion">
        <h2>📚 Arrays y foreach</h2>
        <?php
            $tecnologias = [
                ["nombre" => "HTML5", "tipo" => "Marcado", "nivel" => "Básico"],
                ["nombre" => "CSS3", "tipo" => "Estilos", "nivel" => "Básico"],
                ["nombre" => "PHP", "tipo" => "Backend", "nivel" => "Intermedio"],
                ["nombre" => "JavaScript", "tipo" => "Frontend", "nivel" => "Intermedio"],
                ["nombre" => "MySQL", "tipo" => "Base de datos", "nivel" => "Intermedio"],
            ];
        ?>
        <p>Total de tecnologías: <strong><?php echo count($tecnologias); ?></strong></p>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tecnología</th>
                    <th>Tipo</th>
                    <th>Nivel</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tecnologias as $indice => $tech): ?>
                <tr>
                    <td><?php echo $indice + 1; ?></td>
                    <td><strong><?php echo $tech["nombre"]; ?></strong></td>
                    <td><?php echo $tech["tipo"]; ?></td>
                    <td><?php echo $tech["nivel"]; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- FUNCIONES -->
    <div class="seccion">
        <h2>🔧 Funciones</h2>
        <?php
            function calcularPromedio($notas) {
                return array_sum($notas) / count($notas);
            }

            function estadoEstudiante($promedio) {
                if ($promedio >= 10) return "Aprobado ✅";
                return "Reprobado ❌";
            }

            $notas = [15, 18, 12, 20, 16];
            $promedio = calcularPromedio($notas);
        ?>
        <p>Notas: <?php echo implode(", ", $notas); ?></p>
        <p>Promedio: <strong><?php echo number_format($promedio, 2); ?></strong></p>
        <p>Estado: <strong><?php echo estadoEstudiante($promedio); ?></strong></p>
    </div>

    <footer style="text-align: center; padding: 20px; color: #999;">
        <p>&copy; <?php echo date("Y"); ?> UPTP Programación</p>
    </footer>

</body>
</html>
