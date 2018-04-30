<?php

require '../models/CategoriaCrud.php';
require '../models/ProdutoCrud.php';

//testando a CategoriaCrud
if (isset($_GET['acao'])){
    $action = $_GET['acao'];
}else{
    $action = 'index';
}
if ($action == 'index'){
    $crud = new ProdutoCrud();
    $produtos = $crud->getProdutos();
    include "../view/template/cabecalho.php";
    include "../view/Produtos/index.php";
    include "../view/template/rodape.php";
}

switch ($action){
    case 'inserir':
        if(!isset($_POST['gravar'])){
            $crudCat = new CategoriaCrud();
            $categorias = $crudCat->getCategorias();
            include "../view/template/cabecalho.php";
            include "../view/Produtos/inserir.php";
            include "../view/template/rodape.php";
        }else{
            $prod = new Produto(null, $_POST['nome'], $_POST['descricao'], $_POST['preco'], $_POST['foto'], $_POST['categoria']);
            $crudProd = new ProdutoCrud();
            $crudProd->insertProdutos($prod);
            header("Location: produtos.php");
        }
        break;

    case 'editar';


        if(!isset($_POST['gravar'])){ // vai para o form
            $id = $_GET['id'];
            $crud= new  ProdutoCrud();
            $produto = $crud->getProduto($id);
            include "../view/template/cabecalho.php";
            include "../view/Produtos/editar.php";
            include "../view/template/rodape.php";
        }else{ // já passou no form e fez submit
            $id = $_GET['id'];
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $prod = new Produto($id, $nome, $descricao);
            $crud = new ProdutoCrud();
            $crud->updateProduto($prod);
            header("Location: produtos.php"); // chama o controlador
        }
        break;

    case 'excluir';

        $id = $_GET['id'];
        $crud = new ProdutoCrud();
        $resultado = $crud->deleteProduto($id);
        header("Location: produtos.php");

        break;

    case 'show':

        $id = $_GET['id'];
        $crud = new ProdutoCrud();
        $produto = $crud->getProduto($id);
        include "../view/template/cabecalho.php";
        include "../view/Produtos/show.php";
        include "../view/template/rodape.php";

        break;
}
