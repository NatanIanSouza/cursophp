<?php
// Conexão - (require_once) Serve para incluir um arquivo na página
require_once('db_connect.php');

// Criando a Sessão
session_start();

// Verificação (para impedir acesso via URL)
if(!isset($_SESSION['logado'])){
    header('Location: index.php');
}

// Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado); // OBS: Preciso transformar a variável $resultado em array, pois com o mysqli_query ele vira um objeto
mysqli_close($connect); // Serve para fechar a conexão com o banco. É uma boa prática para programação. Fazer isso sempre após abrir uma consulta no BD.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Restrita</title>
</head>
<body>
    <h1> Olá <?php echo $dados['nome']; ?></h1> <br> <br>
    <a href="logout.php"> Sair</a>
</body>
</html>