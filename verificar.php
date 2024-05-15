<?php
    require './clases/identificacion.php';

    $identificacion = new Identificacion();

    $nombre = $_POST['nombre'];
    $contrasenia = $_POST['contrasenia'];

    $resultado = $identificacion->iniciarSesion($nombre, $contrasenia);

    if ($resultado !== false) {
        // Usuario y contraseña válidos, redirigir a la página de éxito
        header("Location: ./formularios/exito.html");
    } else {
        // Usuario o contraseña inválidos, redirigir a la página de inicio de sesión con un mensaje de error
        $mensaje = "Usuario y/o contraseña incorrectos";
        header("Location: ./formularios/iniciodesesion.php?mensaje=$mensaje");
    }