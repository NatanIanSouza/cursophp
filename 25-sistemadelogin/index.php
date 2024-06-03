<?php
// Conexão - (require_once) Serve para incluir um arquivo na página
require_once('db_connect.php');

// Criando a Sessão
session_start();

// Botão enviar
if(isset($_POST['btn-entrar'])){
    $erros = array();

    // mysqli_escape_string -- Função do próprio MYSQL para filtrar os dados para utilizar na consulta SQL. 1º Variável de conexão. 2º A nossa variável do formulário.
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($login) || empty($senha)){
        $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
    } else {
        // Precisamos verificar se o login digitado existe na base de dados
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql); // mysqli_query traz o resultado da consulta, estamos armazenando isso em $resultado. 1º Conexão com o banco. 2º O comando SQL a ser executado 

        if(mysqli_num_rows($resultado) > 0){ // Verifica se o número de linhas que existe na variável $resultado é maior que 0, se sim, existe registro.
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) == 1){ // Se for igual a 1 é porque trouxe o resultado correto
                $dados = mysqli_fetch_array($resultado); // Converte o $resultado em um array e atribui à varoável dados.
                mysqli_close($connect); // Serve para fechar a conexão com o banco. É uma boa prática para programação. Fazer isso sempre após abrir uma consulta no BD.
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: home.php'); // Função para redirecionar para uma página
            } else {
                $erros[] = "<li> Usuário e senha não conferem </li>";
            }

        } else {
            $erros[] = "<li> Usuário inexistente </li>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php 
    if(!empty($erros)){
        foreach($erros as $erro){
            echo $erro;
        }
    }
    ?>
    <hr>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        Login: <input type="text" name="login"> <br>
        Senha: <input type="password" name="senha"> <br>
        <button type="submit" name="btn-entrar"> Entrar </button>
    </form>
</body>
</html>