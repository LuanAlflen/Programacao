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


<form action="?acao=inserir" method="post">
    <br><input value="" type="file" name="foto" placeholder="Foto">
    <br><br><input value="" type="text" name="nome" placeholder="Nome">
    <br><br><input value="" type="text" name="preco" placeholder="Preço">
    <br><br><textarea rows="4" cols="50" name="descricao" id="descricao"></textarea>
    <div class="form-group">
        <label for="Categoria">Categoria</label>
        <select name="categoria" class="form-control" id="Categoria">
            <?php foreach ($categorias as $categoria):?>
                <option><?= $categoria->getId()?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <br><input type="submit" name="gravar" value="Salvar" >
</form>

</body>
</html>
