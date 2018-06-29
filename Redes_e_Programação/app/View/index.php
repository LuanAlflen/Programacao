<!doctype html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        .ip{
            width: 1.5%;
        }
        h4{
            margin-bottom: 0%;
        }
    </style>

</head>
<body>

    <form method="post" action="?acao=resposta">
        <h4>IP</h4>
        <input class="ip" type="text" name="primeiroip" placeholder="###">.
        <input class="ip" type="text" name="segundoip" placeholder="###">.
        <input class="ip" type="text" name="terceiroip" placeholder="###">.
        <input class="ip" type="text" name="quartoip" placeholder="###"> /
        <input class="ip" type="text" name="mascara" placeholder="##">
        <input type="submit">
    </form>

</body>
</html>