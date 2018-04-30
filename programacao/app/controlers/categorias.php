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
    $crud = new CategoriaCrud();
    $categorias = $crud->getCategorias();
    include "../view/template/cabecalho.php";
    include "../view/Categoria/index.php";
    include "../view/template/rodape.php";
}

switch ($action){
    case 'show':

        $id = $_GET['id'];
        $crud = new ProdutoCrud();
        $produtos = $crud->getProdCat($id);
        include "../view/template/cabecalho.php";
        include "../view/Categoria/show.php";
        include "../view/template/rodape.php";

        break;


    case 'inserir';

        if(!isset($_POST['gravar'])){
            include "../view/template/cabecalho.php";
            include "../view/Categoria/inserir.php";
            include "../view/template/rodape.php";
        }else{
            $cat = new Categoria(null, $_POST['nome'], $_POST['descricao']);
            $crud = new CategoriaCrud();
            $crud->insertCategoria($cat);
            header("Location: categorias.php");
        }
        break;

        case 'editar';


        if(!isset($_POST['gravar'])){ // vai para o form
            $id = $_GET['id'];
            $crud= new CategoriaCrud();
            $categoria = $crud->getCategoria($id);
            include "../view/template/cabecalho.php";
            include "../view/Categoria/editar.php";
            include "../view/template/rodape.php";
        }else{ // já passou no form e fez submit
            $id = $_GET['id'];
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $cat = new Categoria($id, $nome, $descricao);
            $crud = new CategoriaCrud();
            $crud->updateCategoria($cat);
            header("Location: categorias.php"); // chama o controlador
        }
        break;

    case 'excluir';

        $test = new CategoriaCrud();
        $resultado = $test->deleteCategoria($_GET['id']);
        header("Location: categorias.php");

        break;
}

?>

