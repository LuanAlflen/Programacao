<?php
include "../template/cabecalho.php";
require "../../models/CategoriaCrud.php";

$crud = new CategoriaCrud();

$categorias = $crud->getCategorias();


?>
<!doctype html>
<html lang="pt-br">

<body>

    <table border="1">
        <tr>
            <td><b>Id</b></td>
            <td><b>Nome</b></td>
            <td><b>Descricao</b></td>
        </tr>
        <?php foreach ($categorias as $categoria):?>
        <tr>
            <td><?= $categoria->getId()?></td>
            <td><?= $categoria->getNome()?></td>
            <td><?= $categoria->getDescricao()?></td>
            <td><a href="editar.php?id=<?=$categoria->getId()?>">Editar</a> |  <a href="../../controlers/categorias.php?acao=excluir&id=<?=$categoria->getId()?>">Remover</a></td>
        </tr>
        <?php endforeach; ?>

    </table>

</body>
</html>
<?php include "../template/rodape.php"; ?>