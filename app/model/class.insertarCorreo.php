<?php
# cargar tabla users
# guardar con class.consultas.php
# registrar con funcion addUsers
# funcion cargadUsers
//require '../model/class.conexion.php'; #-- primero conexion
class ConsultaAddCorreo
{

//----------------------------//function add producto-----------------------------
  
    public function addCorreo($ar_nombre, $ar_email,  $ar_asunto, $ar_mensaje,$ar_telefono,$ar_fecha,$ar_ip, $ar_navegador,$ar_so,$ar_pais,$ar_dispositivo, $ar_latitud,$ar_longitud,$ar_estado)
    {
       $modelo   = new Conexion();
        $conexion = $modelo->conectar();

        $sql      = "insert into tbCorreo( nombre, email, asunto, mensaje, telefono,fecha, ip, navegador, so, pais, dispositivo,latitud,longitud,estado) values (:nombre, :email, :asunto, :mensaje, :telefono, :fecha, :ip, :navegador, :so, :pais, :dispositivo, :latitud,:longitud, :estado)";
        $stament = $conexion->prepare($sql);
        $stament->bindParam(':nombre', $ar_nombre);
        $stament->bindParam(':email', $ar_email);
        $stament->bindParam(':asunto', $ar_asunto);
        $stament->bindParam(':mensaje', $ar_mensaje);
        $stament->bindParam(':telefono', $ar_telefono);
        $stament->bindParam(':fecha', $ar_fecha);
        $stament->bindParam(':ip', $ar_ip);

        $stament->bindParam(':navegador', $ar_navegador);
        $stament->bindParam(':so', $ar_so);
        $stament->bindParam(':pais', $ar_pais);
        $stament->bindParam(':dispositivo', $ar_dispositivo);
        $stament->bindParam(':latitud', $ar_latitud);     
        $stament->bindParam(':longitud', $ar_longitud);              
        $stament->bindParam(':estado', $ar_estado);
       
      

        if (!$stament) {
            return "Error al crear registro";
        } else {
            $stament->execute();
            //$comando->execute();
            return "Registro creado con exito";
        }

    }

}
       