<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário simples GET</title>
</head>
<body>
    <!-- No método GET os dados são enviados para o php através de parâmetros de URL, dessa forma, ficam visíveis para todos-->
    <form method="GET" action="dados.php">
        Nome: <input type="text" name="nome"> <br>
        E-mail <input type="text" name="email"> <br>
        <button type="submit"> Enviar </button>
    </form>

    <a href="dados.php?idade=25&sobrenome=Masson"> Enviar Dados </a>
</body>
</html>