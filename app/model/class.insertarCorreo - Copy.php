<?php 
class Correo{

    private $pdo;

    private $corr_id;
    private $corr_nombre ;
    private $corr_email;
    private $corr_asunto ;
    private $corr_mensaje ;
    private $corr_fecha ;
    private $corr_ip ;
    private $corr_navegador ;
    private $corr_so ;
    private $corr_pais ;
    public function __CONSTRUCT(){
        $this->$pdo = new Conexion();
        $pdo->conectar() ;
    }
    public function getcorr_id)():?int{
        return $this->$corr_id;
    }
    public function setcoor_id( int $id){
        $this->corr_id=$id;
    }
    public function getcorr_nombre)():?string{
        return $this->$corr_nombre;
    }
    public function setcoor_nombre( string $nombre){
        $this->corr_nombre=$nombre;
    }


}

?>
