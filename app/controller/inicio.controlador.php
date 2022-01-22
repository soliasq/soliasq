<?php 
class InicioControlador{
    private $modelo;
    public function __CONSTRUCT(){
        //$this->modelo=new Producto();
    }
    public function Inicio(){
        //$db=Conexion:: conectar();
        $db = new Conexion();
        
        require_once('view/index.php');
    }
}