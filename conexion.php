<?php
// Incluye el archivo de configuración de la base de datos
include './config/configdb.php';

class Conectar {
    public $conexion;

    public function __construct() {
        // Intenta establecer la conexión a la base de datos
        $this->conexion = new mysqli(HOST, USER, PSW, BDD);

        // Establece la codificación de caracteres a utf8
        $this->conexion->set_charset("utf8");

        // Configurar el controlador mysqli para informar errores de manera más estricta
        $controlador = new mysqli_driver();
        $controlador->report_mode = MYSQLI_REPORT_OFF;
    }
}