<table border="1">
    <tr>
        <td><b>Id</b></td>
        <td><b>Nome</b></td>
        <td><b>Descricao</b></td>
    </tr>
    <?php foreach ($produtos as $produto):?>
        <tr>
            <td><?= $produto->getId()?></td>
            <td><?= $produto->getNome()?></td>
            <td><?= $produto->getDescricao()?></td>
        </tr>
    <?php endforeach; ?>
</table>