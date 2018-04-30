
    <table border="1">
        <tr>
            <td><b>Id</b></td>
            <td><b>Nome</b></td>
            <td><b>Descricao</b></td>
        </tr>
        <h4><a href="?acao=inserir">Inserir Produtos</a></h4>
        <?php foreach ($produtos as $produto):?>
        <tr>
            <td><?= $produto->getId()?></td>
            <td><a href="?acao=show&id=<?=$produto->getId();?>"><?= $produto->getNome()?></a></td>
            <td><?= $produto->getDescricao()?></td>
            <td><a href="?acao=editar&id=<?=$produto->getId()?>">Editar</a> |  <a href="?acao=excluir&id=<?=$produto->getId()?>">Remover</a></td>
        </tr>
        <?php endforeach; ?>

    </table>

