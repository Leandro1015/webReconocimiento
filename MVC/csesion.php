<?php
    require_once 'identificacionV_2.php';

    class csesion {
        public $nombre_vista;

        public function comprobar() {

            if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
            isset($_POST['contrasenia']) && !empty($_POST['contrasenia'])) {

                $identificacion = new Identificacion();

                $nombre = $_POST['nombre'];
                $contrasenia = $_POST['contrasenia'];

                $resultado = $identificacion->iniciarSesion($nombre, $contrasenia);

                if ($resultado !== false) {
                    // Usuario y contraseña válidos, redirigir a la página de éxito
                    echo "ok";
                } else {
                    // Usuario o contraseña inválidos
                    
                     //$msj="Usuario o contraseña incorrectos";
                     //return $msj;
                     //$this->nombre_vista = 'forminiciosesion.php';
                    echo "Usuario o contraseña incorrectos";
                }
            }
        }

        public function mostrarFIS() {
            $this->nombre_vista = 'forminiciosesion.php';
        }
    }
?>



   