<?php 
class Navegador{
	public function getBrowser($user_agent){
		if (strpos($user_agent, 'Maxthon') !== false) {
		    return "Maxthon";
		} elseif (strpos($user_agent, 'SeaMonkey') !== false) {
		    return "SeaMonkey";
		} elseif (strpos($user_agent, 'Vivaldi') !== false) {
		    return "Vivaldi";
		} elseif (strpos($user_agent, 'Arora') !== false) {
		    return "Arora";
		} elseif (strpos($user_agent, 'Avant Browser') !== false) {
		    return "Avant Browser";
		} elseif (strpos($user_agent, 'Beamrise') !== false) {
		    return "Beamrise";
		} elseif (strpos($user_agent, 'Epiphany') !== false) {
		    return 'Epiphany';
		} elseif (strpos($user_agent, 'Chromium') !== false) {
		    return 'Chromium';
		} elseif (strpos($user_agent, 'Iceweasel') !== false) {
		    return 'Iceweasel';
		} elseif (strpos($user_agent, 'Galeon') !== false) {
		    return 'Galeon';
		} elseif (strpos($user_agent, 'Edge') !== false) {
		    return 'Microsoft Edge';
		} elseif (strpos($user_agent, 'Trident') !== false) //IE 11
		{
		    return 'Internet Explorer';
		} elseif (strpos($user_agent, 'MSIE') !== false) {
		    return 'Internet Explorer';
		} elseif (strpos($user_agent, 'Opera Mini') !== false) {
		    return "Opera Mini";
		} elseif (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR') !== false) {
		    return "Opera";
		} elseif (strpos($user_agent, 'Firefox') !== false) {
		    return 'Mozilla Firefox';
		} elseif (strpos($user_agent, 'Chrome') !== false) {
		    return 'Google Chrome';
		} elseif (strpos($user_agent, 'Safari') !== false) {
		    return "Safari";
		} elseif (strpos($user_agent, 'iTunes') !== false) {
		    return 'iTunes';
		} elseif (strpos($user_agent, 'Konqueror') !== false) {
		    return 'Konqueror';
		} elseif (strpos($user_agent, 'Dillo') !== false) {
		    return 'Dillo';
		} elseif (strpos($user_agent, 'Netscape') !== false) {
		    return 'Netscape';
		} elseif (strpos($user_agent, 'Midori') !== false) {
		    return 'Midori';
		} elseif (strpos($user_agent, 'ELinks') !== false) {
		    return 'ELinks';
		} elseif (strpos($user_agent, 'Links') !== false) {
		    return 'Links';
		} elseif (strpos($user_agent, 'Lynx') !== false) {
		    return 'Lynx';
		} elseif (strpos($user_agent, 'w3m') !== false) {
		    return 'w3m';
		} else {
		    return 'No hemos podido detectar su navegador';
		}

 	}
}

//$user_agent    = $_SERVER['HTTP_USER_AGENT'];
//$dato = new Navegador();
//var_dump($dato->getBrowser($user_agent) );
?>