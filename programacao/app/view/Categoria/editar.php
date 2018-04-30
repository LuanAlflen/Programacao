<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="?acao=editar&id=<?= $categoria->getId(); ?>" method="post">
    <br>        <input value="<?= $categoria->getNome()?>" type="text" name="nome" placeholder="Nome">
    <br><br>    <textarea rows="4" cols="50" name="descricao" id="descricao"><?= $categoria->getDescricao()?></textarea>
    <br>        <input type="submit" value="Salvar" name="gravar">
</form>

</body>
</html>

