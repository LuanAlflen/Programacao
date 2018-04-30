<?php

?>
<!doctype html>
<html lang="pt-br">
<body>

<img src="../../assets/<?= $produto->getFoto() ?>" height="300" width="300">
  <h2><?= $produto->getNome() ?></h2>
  <h4>Descrição: <?= $produto->getDescricao() ?></h4>
  <h4>Preço: <?= $produto->getPreco() ?></h4>


</body>
</html>