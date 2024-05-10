<?php
    require 'conexion.php';

    class Identificacion extends Conexion
    {
        public function registrar($idAlumno, $nombre, $correo, $contrasenia, $webReconocimiento)
        {
            $sql = "INSERT INTO alumno (idAlumno, nombre, correo, contrasenia, webReconocimiento) VALUES ('$idAlumno', '$nombre', '$correo', '$contrasenia', '$webReconocimiento')";
            $exito = $this->conexion->query($sql);

            $this->conexion->close();

            return $exito;
        }

        public function iniciarSesion($correo, $contrasenia)
        {
            $sql = "SELECT * FROM alumno WHERE nombre='$usuario' AND contrasenia='$contrasenia'";
            $resultado = $this->conexion->query($sql);

            if ($resultado->num_rows > 0) {
                $fila = $resultado->fetch_assoc();
                if ($contrasena === $fila['contrasena']) {
                    return $fila;
                }
            }

            $this->conexion->close();

            return false;
        }
    }
?>
