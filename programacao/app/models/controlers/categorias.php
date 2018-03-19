<?php
if(isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

if($acao=='index'){
    $crud= new CategoriaCrud();
    $categorias = $crud->getCategorias();

    include '../views/listaCategorias.php';
}