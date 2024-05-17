<?php
    if (isset($_GET["c"]) && isset($_GET["m"])) {
        $nombre_controlador = $_GET["c"];
        $nombre_metodo = $_GET["m"];
        
        require_once $nombre_controlador . '.php';
        
        $objetoContr = new $nombre_controlador();
        $objetoContr->{$nombre_metodo}();
    } 
    else {

    }




    
    // require_once $nombre_controlador.'.php';
    // Similar a: require_once $_GET["c"].'php';
    // Si el controlador es csesion, sería simalar a: require_once 'csesion.php';
   
    // $objetoContr=new $nombre_controlador();   
    // Similar a: $objetoContr= new $_GET["c"]();
    // Si el controlador es csesion, sería simalar a: $objeto_sesion = new csesion();
    // $objetoContr=new csesion();

    // $objetoContr->{$nombre_metodo}(); //cuando el nombre del metodo es una variable se mete en llaves.
    // Similar a: $objetoContr->$_GET["m"]();
  
    // include $objeto_sesion->nombre_vista; //esto genera el codigo: ......;
?>