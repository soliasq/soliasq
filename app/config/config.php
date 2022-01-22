<?php
	//configuraciones acceso  a base de datos

require 'enviroment.php';	

if(ENVIRONMENT == "development")
	{
		define('BASE_URL','127.0.0.1/proyectSoliasq');
		define('DB_HOST','localhost');
		define('DB_USUARIO','root');
		define('DB_PASS','');
		define('DB_NOMBRE','conf_soliasq');
		define('DB_CHARSET','SET NAMES utf8');
		define('NAME_CHARSET','utf8');
		define('DB_PORT','3306');
	}
	else
	{
		define("BASE_URL", "http://www.soliasq.260mb.net");
		define('DB_HOST','sql308.epizy.com');
		define('DB_USUARIO','epiz_30206174');
		define('DB_PASS','w5pgfk0m');
		define('DB_NOMBRE','epiz_30206174_conf_soliasq');
		define('DB_CHARSET','SET NAMES utf8');
		define('NAME_CHARSET','utf8');
		define('DB_PORT','3306');
		
	}	

//ruta de aplicaciones
//define(RUTA_APP,dirname(dirname(__FILE__)));

//url http://localhost/soliasq
//define(RUTA_URL,'http://localhost/soliasq');

//define(NOMBRE_SITIO,'_NOMBRE_SITIO');
//ruta URL localhost/soliasq

