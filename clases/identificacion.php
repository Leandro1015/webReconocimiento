<?php
    include 'conexion.php';

    class Identificacion extends Conectar
    {   
        public function registrar($idAlumno, $nombre, $correo, $contrasenia, $webReconocimiento)
        {
            $sql = "INSERT INTO alumno (idAlumno, nombre, correo, contrasenia, webReconocimiento) 
                    VALUES ('$idAlumno', '$nombre', '$correo', '$contrasenia', '$webReconocimiento')";
            
            $exito = $this->conexion->query($sql);

            if ($exito) 
            {
                $this->conexion->close();
                return true; 
            } 
            else {
                return false; 
            }
        }
        public function iniciarSesion($nombre, $contrasenia)
        {
            // Consulta SQL para buscar el usuario por alumno y contraseña
            $sql = "SELECT * FROM alumno WHERE nombre='$nombre' AND contrasenia='$contrasenia'";
            $resultado = $this->conexion->query($sql);

            // Verificar si se encontró un usuario
            if ($resultado->num_rows == 1){
                $fila = $resultado->fetch_assoc();
                return $fila;
            } 
            else {
                return false;
            }
        }
    }
