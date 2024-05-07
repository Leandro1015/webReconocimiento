<?php
    include 'conexion.php';
    $conectarInstancia = new Conectar();
    $conexion = $conectarInstancia -> conexion;
   
    // Obtener los datos del formulario
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];

    // Consultar la base de datos para verificar el usuario y la contraseña
    $sql = "SELECT * FROM alumno WHERE nombre='$usuario' AND contrasenia='$contrasenia'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        // Usuario y contraseña válidos, redirigir a la página de contraseña correcta
        header("Location: ./views/exito.html");
    } 
    else {
        // Usuario o contraseña inválidos, mostrar un mensaje de error en el formulario
        $mensaje = "Usuario y/o contraseña incorrectos";
        header("Location: ./views/iniciodesesion.php?mensaje=$mensaje");
    }
