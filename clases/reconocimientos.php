<?php
    include 'conexion.php';

    class Reconocimientos extends Conectar
    {   
        public function enviar($idAlumnoEnvia, $idAlumnoRecibe, $momento, $descripcion)
        {

            $sql = "INSERT INTO reconocimientos (idAlumEnvia, idAlumRecibe, momento, descripcion) 
                    VALUES ('$idAlumnoEnvia', '$idAlumnoRecibe', '$momento', '$descripcion')";       
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

        public function mostrar($idAlumno)
        {
            
        }
    }
