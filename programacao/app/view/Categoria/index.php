
    <table border="1">
        <tr>
            <td><b>Id</b></td>
            <td><b>Nome</b></td>
            <td><b>Descricao</b></td>
        </tr>
        <?php foreach ($categorias as $categoria):?>
        <tr>
            <td><?= $categoria->getId()?></td>
            <td><a href="?acao=show&id=<?=$categoria->getId();?>"><?= $categoria->getNome()?></a></td>
            <td><?= $categoria->getDescricao()?></td>
            <td><a href="editar.php?id=<?=$categoria->getId()?>">Editar</a> |  <a href="../../controlers/categorias.php?acao=excluir&id=<?=$categoria->getId()?>">Remover</a></td>
        </tr>
        <?php endforeach; ?>

    </table>

