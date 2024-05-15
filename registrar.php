<?php
    require './clases/identificacion.php';
    
    $idAlumno = $_POST['idAlumno'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasenia = $_POST['contrasenia'];
    $webReconocimiento = $_POST['webReconocimiento'];

    $identificacion = new Identificacion();
    $exito = $identificacion->registrar($idAlumno, $nombre, $correo, $contrasenia, $webReconocimiento);

    if ($exito) {
        echo "¡Registro exitoso!";
    } else {
        echo "Error al registrar. Por favor, inténtalo de nuevo.";
    }