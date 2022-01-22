<?php
require '../config/config.php'; #-- primero conexion
require '../controller/class.ip.php'; #-- primero conexion
require '../controller/class.so.php';
require '../controller/class.browser.php';
require '../model/class.conexion.php'; #-- primero conexion
require '../model/class.insertarCorreo.php'; #-- luego consultas
require '../controller/class.ismobile.php';
require '../controller/class.country.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require'../lib/vendor/autoload.php';
date_default_timezone_set ('America/La_Paz');
$mail = new PHPMailer(true);
//echo $_POST['longitud'].'soy valor longitud 1';
$mensaje  = null;
$errors[] = null;
//datos internos obtenidos por javascript o php
$dato = new Ip();
$_ip        = $dato->ipaddres();
$user_agent    = $_SERVER['HTTP_USER_AGENT'];
$dato = new Mobile();
$_dispositivo = $dato->isMobile();
//php_uname('n'); obtien nombre de dispositivo de php que se ejecuta

$dato       = new Navegador();
$_navegador = $dato->getBrowser($user_agent);

$dato = new So();
$_so        = $dato->getPlatform($user_agent);

$_estado    = "Pendiente";
$_fecha     = date('Y-m-d') . " " . date('G:i:s');


$dato = new Country();
$_pais_ip   =$dato->ipAddress();
$gi = geoip_open("../lib/geoip/GeoIPCity.dat",GEOIP_STANDARD);
$record     = geoip_record_by_addr($gi,$_pais_ip );
$_pais      =$record->country_name ;
$_ciudad    = $record->city;

geoip_close($gi); 
 

$_latitud   ="0";
$_longitud  ="0";
$_nombre    = $_POST['nombre'];
$_telefono  = $_POST['telefono'];
$_email    = $_POST['email'];
$_asunto    = $_POST['asunto'];
$_mensaje   = $_POST['mensaje'];


if (empty($_POST['nombre'])) {
    $errors[] = "Campo Nombres vacío<br>";
}if (empty($_POST['telefono'])) {
    $errors[] = "Campo teléfono vacío<br>";
}if (empty($_POST['email'])) {
    $errors[] = "Campo correo electronico vacío<br>";
}if (empty($_POST['asunto'])) {
    $errors[] = "Campo asunto vacío<br>";
}if (empty($_POST['mensaje'])) {
    $errors[] = "Campo mensaje vacío<br>";
}
if ($errors > 0) {
    foreach ($errors as $error) {
        echo $error;
    }
} else {
    $errors = '';

}

if (strlen($_nombre) > 0 && strlen($_telefono) > 0 && strlen($_email) > 0 && strlen($_asunto) > 0 && strlen($_mensaje)) {
    $consulta = new ConsultaAddCorreo();

     try {
                //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->CharSet = 'UTF-8';
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'infosoliasq@gmail.com';
                $mail->Password = 't@ti@nit@01';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                $mail->setFrom('infosoliasq@gmail.com', 'de soliasq');
                $mail->addAddress('soliasq@gmail.com', $_nombre );
                $mail->addAddress('infosoliasq@gmail.com',$_nombre ); 
                $mail->addAddress($_email,'de soliasq' ); 
                
                $mail->isHTML(true);                                 
                $mail->Subject = 'Informaciones';
                $mail->Body = " <img src='http://www.soliasq.260mb.net/assets/img/logosoliasq_.png' alt='logo soliasq' > <p></p><p></p><p></p> Hola muy buenas <b>Necesitas un diseño web, desarrollo de páginas web personales, corporativos, aplicaciones web y/o <br> aplicaciones para Android, necesitas un api o simplemente buscas un diseño para las redes sociales <br>Para mayor información Ud. Puede contactarse personalmente al <br> <b>Teléfono</b>  +59177077460 <br>
                o puede  enviar mensaje directamente via telegram y/o whastapp.<br> Gracias por contactar";
                $mail->AltBody = " ";

                $mail->send();
                
                //echo 'E-mail enviado com sucesso!<br>';
            } catch (Exception $e) {
                echo "Erro: E-mail no enviado  {$mail->ErrorInfo}";

            }

    $mensaje = $consulta->addCorreo($_nombre, $_email,  $_asunto, $_mensaje, $_telefono, $_fecha,$_ip, $_navegador, $_so, $_pais, $_dispositivo, $_latitud,$_longitud,$_estado);

    $mensaje = "su información se envió correctamente!!, Revise su bandeja de entrada ";
    echo " $mensaje ";

} else {
    $mensaje = " Por favor complete los campos ( * son necesarios )";
    echo $mensaje;
}
?>