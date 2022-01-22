<?php 

class Mobile{

    public function isMobile() {
   
        $var=preg_match("/(android|webos|avantgo|iphone|ipad|ipod|blackberry|iemobile|bolt|boost|cricket|docomo|fone|hiptop|mini|opera mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
   
        if ($var) {
            return "Movil/Tables";
        } else {
            return "Desktop/Laptop";
        }
    }
}

 ?>
