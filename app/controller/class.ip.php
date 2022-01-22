<?php 
class Ip{
	private $ipaddres;
	public function ipaddres(){
		if(!empty($_SERVER['HTTP_CLIENT_IP'])){
			$this->ipaddres=$_SERVER['HTTP_CLIENT_IP'];
		//se usa proxy	
		}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
			$this->ipaddres=$_SERVER['HTTP_X_FORWARDED_FOR'];

		}else {

			$this->ipaddres=$_SERVER['REMOTE_ADDR'];
		}
		return $this->ipaddres;

	}
}
//echo date('G:a');
//$dato = new Ip();
//var_dump($dato->ipaddres() );
?>