<?php

	require '../app/models/Categoria.php';
	require '../app/models/CategoriaCrud.php';

//	$c1 = new Categoria();
//	$c1->setId(1);
//	$c1->setNome("Eletrônicos");
//	$c1->setDescricao("Periféricos em geral e radicais");
//
//
//	//com construct
//
//	$c2 = new Categoria(2,"Esportes","Equipamentos esportivos radicais");
//
//
//	//testando a CategoriaCrud
//$crud = new CategoriaCrud();
//$categoria = $crud->getCategorias();
//
//print_r($categoria);

    $nome = $_POST['nome'];
    $desc = $_POST['descricao'];

    //SUPONDO CHEGANDO DO FORMULARIO

    $crud =  "atomotivo";
    $res = "Acessorios para veiculos";

    $cat = new Categoria(null, $nome, $desc);

    $crud = new CategoriaCrud();
    $res = $crud->insertCategoria($cat);