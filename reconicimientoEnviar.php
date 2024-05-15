<?php
    require './clases/reconocimientos.php';

    $idAlumnoEnvia = $_POST['idAlumnoEnvia'];
    $idAlumnoRecibe = $_POST['idAlumnoRecibe'];
    $momento = $_POST['momento'];
    $descripcion = $_POST['descripcion'];

    $reconocimientos = new Reconocimientos();

    // Llamar al método enviar
    $exito = $reconocimientos->enviar($idAlumnoEnvia, $idAlumnoRecibe, $momento, $descripcion);

    // Verificar el resultado
    if ($exito) {
        echo "¡Reconocimiento enviado con éxito!";
    } else {
        echo "Error al enviar el reconocimiento. Por favor, inténtalo de nuevo.";
    }
