<?php

class getSERVERs
{
    #null
    public static function geySERVRRs(){
        foreach ($_SERVER as $key=>$v){
            echo '==SERVERs';
            echo $key.'='.$v;
        }
    }
}

?>