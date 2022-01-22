<?php 
include'../lib/geoip/geoipcity.inc';

class Country{

	public  function ipAddress(){
        if (!empty($_SERVER['HTTP_CLIENT_IP'])){ //check ip from share internet
            $ip="181.188.141.220";//$_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){ // proxy pass ip
            $ip="181.188.141.220";//$_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip= "181.188.141.220";//$_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

 
} 

   
    /*$gi = geoip_open("GeoIPCity.dat",GEOIP_STANDARD);
    $record = geoip_record_by_addr($gi,ipAddress());
    print $record->country_code . " " . $record->country_code . " " . $record->country_name . "\n". $record->city . "\n". "\n". $record->continent_code. "\n";
    geoip_close($gi);*/
?>