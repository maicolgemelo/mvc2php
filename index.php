<?php 
    require_once 'conexion/Conexion.php';
    require_once 'controller/Tbltipodocumento_controller.php';

    $controller = new Tbltipodocumento_controller();
    if(!empty($_REQUEST['accion'])){
        $metodo = $_REQUEST['accion'];

        if(method_exists($controller, $metodo)){
        $controller->$metodo();

        }else{
        $controller->index();

        }
    }else{
        $controller->index();

    }

   


?>