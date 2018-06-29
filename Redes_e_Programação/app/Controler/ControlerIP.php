<?php


require "../Model/IPCrud.php";
if (isset($_GET['acao'])){
    $action = $_GET['acao'];
}else{
    $action = 'index';
}

    switch ($action){
        case 'index':

            include "../View/index.php";

            break;

        case 'resposta':

            $ip1 = $_POST['primeiroip'];
            $ip2 = $_POST['segundoip'];
            $ip3 = $_POST['terceiroip'];
            $ip4 = $_POST['quartoip'];
            $mascara = $_POST['mascara'];

            $ip = "$ip1".'.'."$ip2".'.'."$ip3".'.'."$ip4";
            $teste = new IP($ip,$mascara);
            $crud = new IPCrud();
            $numeroRedes = $crud->numerodeRedes($mascara);
            echo "IP: $ip/$mascara, Mascara: null,Numero de Redes: $numeroRedes";

            break;
    }
?>