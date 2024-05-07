<?php
    
    //Conecta con la base de datos
    include 'conexion.php';
    
    //Inserción masiva
    echo "Filas insertadas: "; 
    for($i=1;$i<=20;$i++) {
    $sql="INSERT INTO alumno VALUES ($i,'alumno$i','correo$i@gmail.com','1234','web$i.php');";
    echo $sql."<br/>";	 
    $resultado=$conexion->query($sql);

    } 

    $conexion->close();	