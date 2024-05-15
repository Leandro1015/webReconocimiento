<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listado de Reconocimientos</title>
    </head>
    <body>
        <h2>Listado de Reconocimientos</h2>
         <?php
         /*
            require '../conexion.php';
            $conectarInstancia = new Conectar();
            $conexion = $conectarInstancia -> conexion;

            // Consulta para obtener los reconocimientos
            $sql = "SELECT * FROM reconocimientos";
            $resultado = $conexion->query($sql);

            if ($resultado->num_rows > 0) {
                // Mostrar los reconocimientos en una tabla
                echo "<table border='1'>
                        <tr>
                            <th>ID</th>
                            <th>Categoría</th>
                            <th>Momento</th>
                            <th>Descripción</th>
                            <th>ID Alumno Envía</th>
                            <th>ID Alumno Recibe</th>
                        </tr>";
                while($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila["idReconocimiento"] . "</td>";
                    echo "<td>" . $fila["categoria"] . "</td>";
                    echo "<td>" . $fila["momento"] . "</td>";
                    echo "<td>" . $fila["descripcion"] . "</td>";
                    echo "<td>" . $fila["idAlumEnvia"] . "</td>";
                    echo "<td>" . $fila["idAlumRecibe"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "No se encontraron reconocimientos.";
            }*/
        ?>
    </body>
</html>
