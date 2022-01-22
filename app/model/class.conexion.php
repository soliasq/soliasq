<?php
//activar esto para hacer correr desde aqui
//require_once('../config/config.php');
class Conexion{
	private $server ; 
	private $use;
	private $pass ;
	private $db ;
	private $charset ;
	private $port ;
	
	
	private $dbh ;
	private $error;
	private $stmt;
	public function __construct() {
      

		$this->server=	DB_HOST;
		$this->use=		DB_USUARIO;
		$this->pass=	DB_PASS;
		$this->db=		DB_NOMBRE;
		$this->port=	DB_PORT;
		$this->charset=	DB_CHARSET;
	}


	public function conectar(){

		$dns = "mysql:host=".$this->server.";dbname=".$this->db;
		try {
				$conn = new PDO($dns,"root","");
				//$conn = new PDO("mysql:host=localhost:3306;dbname=prueba","root","");
				$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$conn-> query($this->charset);
				return $conn;
			}
			catch(Exception $e)
			{
				return "Connection failled: " . $e->getMessage();
			}
			finally{
				//vaciar memoria
				$this->conn = null;
			}
	}

}
//$dato = new Conexion();
//var_dump($dato->conectar() );
?>