<?php
require_once'config/config.php';
require_once'model/class.conexion.php';

if(!isset($_GET['c'])){
require_once 'controller/inicio.controlador.php';
$controlador = new InicioControlador();
call_user_func(array($controlador,"Inicio"));
}else{
    $controlador= $_GET['c'];

    require_once 'controller/$controlador.controlador.php';
    $controlador= ucwords($controlador)."Controlador";
    $controlador= new $controlador;
    $action=isset($_GET['a']) ? $_GET['a'] : "Inicio";
    call_user_func(array($controlador,$action));
}

   
?>



