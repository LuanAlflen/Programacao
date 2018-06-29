<?php

    require "IP.php";

class IPCrud
{


    public function numerodeRedes($mascara){
        $bits = 32 - $mascara;
        $resultado = pow(2,$bits);
        return $resultado;
    }

    public function mascara(){

    }


}