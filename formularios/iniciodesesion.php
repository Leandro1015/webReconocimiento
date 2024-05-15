<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/estilo.css">
        <title>Formulario de inicio de sesión</title>
    </head>
    <body>
        <div class="contenedor">
            <h2>Iniciar Sesión</h2>
            <form action="../verificar.php" method="post">
                <label>Nombre del Alumno:</label><br/>
                <input type="text" name="nombre"><br/>

                <label>Contraseña:</label><br/>
                <input type="password" name="contrasenia"><br/><br/>

                <input type="submit" value="Enviar">
            </form>
            <!-- Botón o enlace para redirigir a formRegistro.html -->
            <a href="formRegistro.html">¿No tienes una cuenta? ¡Regístrate!</a>
            <?php 
                if (isset($_GET["mensaje"])) { 
                    echo "<p class='error-message'>{$_GET['mensaje']}</p>"; 
                } 
            ?>
        </div>
    </body>
</html>